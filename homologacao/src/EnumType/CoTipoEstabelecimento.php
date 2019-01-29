<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for coTipoEstabelecimento EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Código de identificação do tipo de estabelecimento. | Código de identificação do tipo de estabelecimento.
 * @subpackage Enumerations
 */
class CoTipoEstabelecimento
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_R
     * @uses self::VALUE_F
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_R,
            self::VALUE_F,
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
