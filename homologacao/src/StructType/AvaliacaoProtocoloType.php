<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvaliacaoProtocoloType StructType
 * @subpackage Structs
 */
class AvaliacaoProtocoloType extends AvaliacaoType
{
    /**
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $coRegistro;
    /**
     * Constructor method for AvaliacaoProtocoloType
     * @uses AvaliacaoProtocoloType::setCoRegistro()
     * @param int $coRegistro
     */
    public function __construct($coRegistro = null)
    {
        $this
            ->setCoRegistro($coRegistro);
    }
    /**
     * Get coRegistro value
     * @return int|null
     */
    public function getCoRegistro()
    {
        return $this->coRegistro;
    }
    /**
     * Set coRegistro value
     * @param int $coRegistro
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoProtocoloType
     */
    public function setCoRegistro($coRegistro = null)
    {
        // validation for constraint: int
        if (!is_null($coRegistro) && !is_numeric($coRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coRegistro, true), gettype($coRegistro)), __LINE__);
        }
        $this->coRegistro = $coRegistro;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoProtocoloType
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
