<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for idIdentificacao EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Define se o dado a ser informado é CNPJ ou CNES do estabelecimento. | Define se o dado a ser informado é CNPJ ou CNES do estabelecimento.
 * @subpackage Enumerations
 */
class IdIdentificacao
{
    /**
     * Constant for value 'CNES'
     * @return string 'CNES'
     */
    const VALUE_CNES = 'CNES';
    /**
     * Constant for value 'CNPJ'
     * @return string 'CNPJ'
     */
    const VALUE_CNPJ = 'CNPJ';
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
     * @uses self::VALUE_CNES
     * @uses self::VALUE_CNPJ
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CNES,
            self::VALUE_CNPJ,
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
