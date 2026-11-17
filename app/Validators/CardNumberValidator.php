<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class CardNumberValidator extends AbstractValidator
{
    protected string $message = 'Поле :field должно содержать от 8 до 10 цифр';

    public function rule(): bool
    {
        return (bool)preg_match('/^\d{8,10}$/', $this->value);
    }
}