<?php
namespace app\core;

abstract class Model
{
    public const RULE_REQUIRED = "required";
    public const RULE_EMAIL = "email";
    public const RULE_MIN = "min";
    public const RULE_MAX = "max";
    public const RULE_MATCH = "match";

    public function loadData($data)
    {
        /**
         * Dynamically assigning the values of the data array to the properties of the current object. 
         * The properties of the object are defined in the child class that inherits them.
         */
        foreach ($data as $key => $value):
            if (property_exists($this, $key)):
                $this->{$key} = $value;
            endif;
        endforeach;
    }

    abstract public function rules(): array;
    public array $errors = [];
    public function validate()
    {
        foreach ($this->rules() as $attribute => $rules):
            $value = $this->{$attribute};
            foreach ($rules as $rule):
                $ruleName = $rule;
                if (!is_string($ruleName)):
                    $ruleName = $rule[0];
                endif;

                if ($ruleName === self::RULE_REQUIRED && !$value):
                    $this->addError($attribute, self::RULE_REQUIRED);
                endif;

            endforeach;
        endforeach;

        return empty($this->errors);

    }

    public function addError(string $attribute, string $rule): void
    {
        $message = $this->errorMessages()[$rule] ?? '';
        $this->errors[$attribute][] = $message;
    }

    public function errorMessages(): array
    {
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'This field must be a valid eamil address',
            self::RULE_MIN => 'Min length of this field must be {min}',
            self::RULE_MAX => 'Max length of this field must be {max}',
            self::RULE_MATCH => 'This field must be the same as {match}',
        ];
    }
}