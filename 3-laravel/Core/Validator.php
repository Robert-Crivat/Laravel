<?php
class Validator
{
    public function isStringEmpty($value)
    {
        return empty(trim($value));
    }
}