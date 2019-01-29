<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentificacaoType StructType
 * @subpackage Structs
 */
class IdentificacaoType extends AbstractStructBase
{
    /**
     * The idOrigem
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $idOrigem;
    /**
     * The coIBGE
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - maxInclusive: 5400000
     * - minInclusive: 11
     * - minOccurs: 1
     * - documentation: O código do IBGE da UF ou município.
     * @var int
     */
    public $coIBGE;
    /**
     * Constructor method for IdentificacaoType
     * @uses IdentificacaoType::setIdOrigem()
     * @uses IdentificacaoType::setCoIBGE()
     * @param string $idOrigem
     * @param int $coIBGE
     */
    public function __construct($idOrigem = null, $coIBGE = null)
    {
        $this
            ->setIdOrigem($idOrigem)
            ->setCoIBGE($coIBGE);
    }
    /**
     * Get idOrigem value
     * @return string
     */
    public function getIdOrigem()
    {
        return $this->idOrigem;
    }
    /**
     * Set idOrigem value
     * @uses \HorusWSDL\Homologacao\EnumType\IdOrigem::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\IdOrigem::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $idOrigem
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public function setIdOrigem($idOrigem = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\IdOrigem::valueIsValid($idOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\IdOrigem', is_array($idOrigem) ? implode(', ', $idOrigem) : var_export($idOrigem, true), implode(', ', \HorusWSDL\Homologacao\EnumType\IdOrigem::getValidValues())), __LINE__);
        }
        $this->idOrigem = $idOrigem;
        return $this;
    }
    /**
     * Get coIBGE value
     * @return int
     */
    public function getCoIBGE()
    {
        return $this->coIBGE;
    }
    /**
     * Set coIBGE value
     * @param int $coIBGE
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public function setCoIBGE($coIBGE = null)
    {
        // validation for constraint: int
        if (!is_null($coIBGE) && !is_numeric($coIBGE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coIBGE, true), gettype($coIBGE)), __LINE__);
        }
        // validation for constraint: maxInclusive
        if ($coIBGE > 5400000) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be inferior or equal to 5400000, %s given', var_export($coIBGE, true), $coIBGE), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($coIBGE < 11) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be superior or equal to 11, %s given', var_export($coIBGE, true), $coIBGE), __LINE__);
        }
        $this->coIBGE = $coIBGE;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoType
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
