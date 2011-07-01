<?php
namespace dccweb\Core\Exceptions;

class DefaultMessageException extends \Exception {
    protected $_message;

    public function __construct($message = null, $code = 0, Exception $previous = null) {
        // if they haven't set a message & there is a default defined, use it
        if (is_null($message) && !empty($this->_message)) {
            $message = $this->_message;
        }

        parent::__construct($message, $code, $previous);
    }
}