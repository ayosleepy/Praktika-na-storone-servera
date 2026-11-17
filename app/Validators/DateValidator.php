<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class DateValidator extends AbstractValidator
{
    protected string $message = 'Поле :field содержит некорректную дату или дату из будущего';

    public function rule(): bool
    {
        if (empty($this->value)) {
            return true;
        }
        
        $date = \DateTime::createFromFormat('Y-m-d', $this->value);
        if (!$date) {
            return false;
        }
        
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $date->setTime(0, 0, 0);

        return $date <= $today;
    }
}