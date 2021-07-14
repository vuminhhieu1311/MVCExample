<?php

abstract class Form
{
    protected $errorMessages;

    protected function __construct()
    {
    }

    public function getErrorMessages(): array
    {
        return (array) $this->errorMessages;
    }

    abstract protected function validate();

    public function isValid(): bool
    {
        $this->validate();
        return count($this->errorMessages) === 0;
    }

    protected function addErrorMessage(string $field, string $message)
    {
        if (!isset($this->errorMessages[$field])) {
            $this->errorMessages[$field] = [$message];
            return;
        }

        if (!in_array($message, $this->errorMessages[$field])) {
            array_push($this->errorMessages[$field], $message);
        }
    }
}
