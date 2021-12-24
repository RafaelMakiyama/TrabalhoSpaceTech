<?php

namespace App\Services;

class GenerateStandardPassword {

    public function __invoke($name, $registration)
    {
        $name = explode(' ', trim($name));
        $registration = substr($registration, 0, 3);
        return $name[0].$registration;
    }

}