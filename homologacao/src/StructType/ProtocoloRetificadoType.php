<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtocoloRetificadoType StructType
 * @subpackage Structs
 */
class ProtocoloRetificadoType extends ProtocoloType
{
    /**
     * The nuProtocoloRetificado
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 36
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Número do protocolo retificado
     * @var string
     */
    public $nuProtocoloRetificado;
    /**
     * Constructor method for ProtocoloRetificadoType
     * @uses ProtocoloRetificadoType::setNuProtocoloRetificado()
     * @param string $nuProtocoloRetificado
     */
    public function __construct($nuProtocoloRetificado = null)
    {
        $this
            ->setNuProtocoloRetificado($nuProtocoloRetificado);
    }
    /**
     * Get nuProtocoloRetificado value
     * @return string
     */
    public function getNuProtocoloRetificado()
    {
        return $this->nuProtocoloRetificado;
    }
    /**
     * Set nuProtocoloRetificado value
     * @param string $nuProtocoloRetificado
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType
     */
    public function setNuProtocoloRetificado($nuProtocoloRetificado = null)
    {
        // validation for constraint: string
        if (!is_null($nuProtocoloRetificado) && !is_string($nuProtocoloRetificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuProtocoloRetificado, true), gettype($nuProtocoloRetificado)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuProtocoloRetificado) && strlen($nuProtocoloRetificado) > 36) || (is_array($nuProtocoloRetificado) && count($nuProtocoloRetificado) > 36)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 36 element(s) or a scalar of 36 character(s) at most', var_export($nuProtocoloRetificado, true), is_scalar($nuProtocoloRetificado) ? strlen($nuProtocoloRetificado) : count($nuProtocoloRetificado)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($nuProtocoloRetificado) && strlen($nuProtocoloRetificado) < 1) || (is_array($nuProtocoloRetificado) && count($nuProtocoloRetificado) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($nuProtocoloRetificado, true), is_scalar($nuProtocoloRetificado) ? strlen($nuProtocoloRetificado) : count($nuProtocoloRetificado)), __LINE__);
        }
        $this->nuProtocoloRetificado = $nuProtocoloRetificado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType
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
