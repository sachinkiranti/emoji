<?php

namespace SachinKiranti\Emoji;

use SachinKiranti\Emoji\Exceptions\EmojiMethodNotFound;
use SachinKiranti\Emoji\Services\EmojiService;

/**
 * Class Emoji.
 */
class Emoji
{
    /**
     * EmojiService.
     *
     * @var
     */
    protected $emoji;

    /**
     * Emoji constructor.
     *
     * @param EmojiService $emoji
     */
    public function __construct(
        EmojiService $emoji
    ) {
        $this->emoji = $emoji;
    }

    /**
     * [__call description].
     *
     * @param [type] $method     [description]
     * @param [type] $parameters [description]
     *
     * @return [type] [description]
     */
    public function __call($method, $parameters)
    {
        if (!method_exists($this->emoji, $method)) {
            throw new EmojiMethodNotFound($method);
        }

        return call_user_func_array([$this->emoji, $method], $parameters);
    }
}
