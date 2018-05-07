<?php

namespace SachinKiranti\Emoji\Test;

use PHPUnit\Framework\TestCase;
use SachinKiranti\Emoji\Emoji;
use SachinKiranti\Emoji\Exceptions\EmojiMethodNotFound;
use SachinKiranti\Emoji\Exceptions\EmojiNotFoundException;
use SachinKiranti\Emoji\Services\EmojiService as Service;

class EmojiTest extends TestCase
{
    protected $emoji;

    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new Service();
        $this->emoji = new Emoji($this->service);
    }

    /** @test */
    public function it_can_return_a_emoji_when_given_a_name()
    {
        $this->assertSame('😃', $this->emoji->get('smiley'));
    }

    /** @test */
    public function it_will_throw_an_exception_when_emoji_not_found()
    {
        $this->expectException(EmojiNotFoundException::class);
        $this->emoji->get('foo');
    }

    /** @test */
    public function it_will_throw_an_exception_when_method_not_found()
    {
        $this->expectException(EmojiMethodNotFound::class);
        $this->emoji->foo();
    }

    /**
     * emoji.php config file.
     *
     * @return array
     */
    private function emojiCollection()
    {
        $emojis = require __DIR__.'/../config/emoji.php';

        return $emojis;
    }
}
