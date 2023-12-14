<?php
class CustomException extends Exception
{
    public function __construct(string $message, string $code)
    {
        parent::__construct($message);
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
?>