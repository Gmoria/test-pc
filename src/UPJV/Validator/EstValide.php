<?php

namespace UPJV\Validator;

class _EstValide implements ValidatorInterface
{
    public function _build(array $param): object
    {
        return $this;
    }

    public function _check($input): bool
    {
        return true;
    }
}
