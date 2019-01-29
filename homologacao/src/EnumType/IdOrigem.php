<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for idOrigem EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Informa quem enviou se foi ESTADO - 'E' e MUNICIPIO - 'M'.
 * @subpackage Enumerations
 */
class IdOrigem
{
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
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
     * @uses self::VALUE_M
     * @uses self::VALUE_E
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_E,
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
