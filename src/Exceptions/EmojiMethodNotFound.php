<?php

namespace SachinKiranti\Emoji\Exceptions;

use Exception;

class EmojiMethodNotFound extends Exception
{
    /**
     * [__construct description].
     *
     * @param string $method [description]
     */
    public function __construct($method = '')
    {
        parent::__construct("{$method} method does not exist.");
    }
}
