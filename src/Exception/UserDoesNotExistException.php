<?php

namespace App\Exception;

class UserDoesNotExistException extends \Exception
{
    protected $message = 'El usuario no existe.';
}
