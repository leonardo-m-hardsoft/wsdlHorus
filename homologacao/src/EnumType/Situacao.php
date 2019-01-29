<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for situacao EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Situação do registro. S - Indica que o registro está válido e foi processado pelo Hórus. N - Indica que o registro está inconsistente e deve ser reenviado novamente.
 * @subpackage Enumerations
 */
class Situacao
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_N
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_S,
            self::VALUE_N,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
