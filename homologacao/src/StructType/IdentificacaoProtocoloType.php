<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentificacaoProtocoloType StructType
 * @subpackage Structs
 */
class IdentificacaoProtocoloType extends IdentificacaoType
{
    /**
     * The nuProtocoloEntrada
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 36
     * - minOccurs: 1
     * - documentation: Número de protocolo gerado no momento do recebimento da informação. | Número de protocolo gerado no momento do recebimento da informação.
     * @var string
     */
    public $nuProtocoloEntrada;
    /**
     * Constructor method for IdentificacaoProtocoloType
     * @uses IdentificacaoProtocoloType::setNuProtocoloEntrada()
     * @param string $nuProtocoloEntrada
     */
    public function __construct($nuProtocoloEntrada = null)
    {
        $this
            ->setNuProtocoloEntrada($nuProtocoloEntrada);
    }
    /**
     * Get nuProtocoloEntrada value
     * @return string
     */
    public function getNuProtocoloEntrada()
    {
        return $this->nuProtocoloEntrada;
    }
    /**
     * Set nuProtocoloEntrada value
     * @param string $nuProtocoloEntrada
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType
     */
    public function setNuProtocoloEntrada($nuProtocoloEntrada = null)
    {
        // validation for constraint: string
        if (!is_null($nuProtocoloEntrada) && !is_string($nuProtocoloEntrada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuProtocoloEntrada, true), gettype($nuProtocoloEntrada)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuProtocoloEntrada) && strlen($nuProtocoloEntrada) > 36) || (is_array($nuProtocoloEntrada) && count($nuProtocoloEntrada) > 36)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 36 element(s) or a scalar of 36 character(s) at most', var_export($nuProtocoloEntrada, true), is_scalar($nuProtocoloEntrada) ? strlen($nuProtocoloEntrada) : count($nuProtocoloEntrada)), __LINE__);
        }
        $this->nuProtocoloEntrada = $nuProtocoloEntrada;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
