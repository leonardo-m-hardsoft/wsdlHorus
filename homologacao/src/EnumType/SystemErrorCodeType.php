<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for SystemErrorCodeType EnumType
 * @subpackage Enumerations
 */
class SystemErrorCodeType
{
    /**
     * Constant for value 'E003'
     * @return string 'E003'
     */
    const VALUE_E_003 = 'E003';
    /**
     * Constant for value 'E021'
     * @return string 'E021'
     */
    const VALUE_E_021 = 'E021';
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
     * @uses self::VALUE_E_003
     * @uses self::VALUE_E_021
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_003,
            self::VALUE_E_021,
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
