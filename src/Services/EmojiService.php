<?php

namespace SachinKiranti\Emoji\Services;

use SachinKiranti\Emoji\Exceptions\EmojiException;
use SachinKiranti\Emoji\Exceptions\EmojiNotFoundException;

/**
 * class EmojiService.
 */
class EmojiService
{
    /**
     * $emoji.
     *
     * @var
     */
    protected $emoji;

    /**
     * Get emoji collections.
     *
     * @return array
     */
    protected function emojiCollection() : array
    {
        $config = app('config');

        return $config->get('emoji');

        // For testing
        // $config = require( "./config/emoji.php");

        // return $config;
    }

    /**
     * Getting all available emoji.
     *
     * @return array
     */
    public function all() : array
    {
        return $this->emojiCollection();
    }

    /**
     * Determine if a given emoji exists.
     *
     * @param string|array $emoji
     *
     * @return bool
     */
    public function has($emoji) : bool
    {
        $emojis = is_array($emoji) ? $emoji : func_get_args();

        foreach ($emojis as $emoji) {
            if (!isset($this->all()[$emoji])) {
                return false;
            }
        }

        return true;
    }

    /**
     * [get description].
     *
     * @param [type] $emoji [description]
     *
     * @return [type] [description]
     */
    public function get($emoji = null)
    {
        if (is_null($emoji)) {
            throw new EmojiException('emoji parameter is required.');
        }

        if (is_array($emoji)) {
            return $this->emojiArr($emoji);
        }

        return $this->getEmoji($emoji);
    }

    /**
     * [emojiArr description].
     *
     * @param [type] $arr [description]
     *
     * @return [type] [description]
     */
    public function emojiArr($arr)
    {
        $group = [];

        $emojis = is_array($arr) ? $arr : func_get_args();

        foreach ($emojis as $emoji) {
            $group[$emoji] = $this->getEmoji($emoji);
        }

        return $group;
    }

    /**
     * [getEmoji description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    public function getEmoji($key)
    {
        return $this->exists($key)->emojiCollection()[$key];
    }

    /**
     * If exist return $emoji . false throw exception.
     *
     * @param [type] $emoji [description]
     *
     * @return [type] [description]
     */
    protected function exists($emoji)
    {
        if (!array_key_exists($emoji, $this->emojiCollection())) {
            throw new EmojiNotFoundException($emoji);
        }

        $this->emoji = $emoji;

        return $this;
    }
}
