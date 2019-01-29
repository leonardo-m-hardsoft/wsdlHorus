<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtocoloExclusaoType StructType
 * @subpackage Structs
 */
class ProtocoloExclusaoType extends ProtocoloType
{
    /**
     * The nuProtocoloExclusao
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 36
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Número do protocolo excluído
     * @var string
     */
    public $nuProtocoloExclusao;
    /**
     * Constructor method for ProtocoloExclusaoType
     * @uses ProtocoloExclusaoType::setNuProtocoloExclusao()
     * @param string $nuProtocoloExclusao
     */
    public function __construct($nuProtocoloExclusao = null)
    {
        $this
            ->setNuProtocoloExclusao($nuProtocoloExclusao);
    }
    /**
     * Get nuProtocoloExclusao value
     * @return string
     */
    public function getNuProtocoloExclusao()
    {
        return $this->nuProtocoloExclusao;
    }
    /**
     * Set nuProtocoloExclusao value
     * @param string $nuProtocoloExclusao
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloExclusaoType
     */
    public function setNuProtocoloExclusao($nuProtocoloExclusao = null)
    {
        // validation for constraint: string
        if (!is_null($nuProtocoloExclusao) && !is_string($nuProtocoloExclusao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuProtocoloExclusao, true), gettype($nuProtocoloExclusao)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuProtocoloExclusao) && strlen($nuProtocoloExclusao) > 36) || (is_array($nuProtocoloExclusao) && count($nuProtocoloExclusao) > 36)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 36 element(s) or a scalar of 36 character(s) at most', var_export($nuProtocoloExclusao, true), is_scalar($nuProtocoloExclusao) ? strlen($nuProtocoloExclusao) : count($nuProtocoloExclusao)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($nuProtocoloExclusao) && strlen($nuProtocoloExclusao) < 1) || (is_array($nuProtocoloExclusao) && count($nuProtocoloExclusao) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($nuProtocoloExclusao, true), is_scalar($nuProtocoloExclusao) ? strlen($nuProtocoloExclusao) : count($nuProtocoloExclusao)), __LINE__);
        }
        $this->nuProtocoloExclusao = $nuProtocoloExclusao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloExclusaoType
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
