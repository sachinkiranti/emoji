<?php

namespace SachinKiranti\Emoji\Exceptions;

use Exception;

class EmojiNotFoundException extends Exception
{

    /**
     * [__construct description]
     * @param string $message [description]
     */
    public function __construct( $emoji ) {
        parent::__construct( "{$emoji} not found. Can get more emojies by adding more emojies in config file." );
    }

}