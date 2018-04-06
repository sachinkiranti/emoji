<?php

namespace SachinKiranti\Emoji\Exceptions;

use Exception;

class EmojiException extends Exception
{

    /**
     * [__construct description]
     * @param string $message [description]
     */
    public function __construct( $message = "" ) {
        parent::__construct( $message );
    }

}