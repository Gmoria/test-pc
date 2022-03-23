<?php

namespace UPJV\Validator;

/**
 * Class EstValide implémente les méthode build & check
 */
class EstValide implements ValidatorInterface
{
/**
     * Regarde si le mot est une chaine de caractère
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        return $this;
    }
/**
     * Test la longueur de la chaine de caractères
     *
     * @param $input
     *
     * @return true
     */
    public function check($input): bool
    {
        return true;
    }
}
