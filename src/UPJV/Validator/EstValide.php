<?php

namespace UPJV\Validator;

class __EstValide implements ValidatorInterface
{
    public function __build(array $param): object
    {
        return $this;
    }

    public function __check($input): bool
    {
        return true;
    }
}
