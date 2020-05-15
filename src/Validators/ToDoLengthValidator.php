<?php


namespace App\Validators;


use App\Interfaces\ValidatorInterface;

class ToDoLengthValidator implements ValidatorInterface
{
    static public function validateToDoLength($entry) {
        return ((strlen($entry) <= 255) && (strlen($entry) > 0)) ? true : false;
    }
}
