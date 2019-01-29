<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstabelecimentoType StructType
 * @subpackage Structs
 */
class EstabelecimentoType extends AbstractStructBase
{
    /**
     * The coCNES
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 7
     * - minLength: 7
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $coCNES;
    /**
     * The coTipoEstabelecimento
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $coTipoEstabelecimento;
    /**
     * Constructor method for EstabelecimentoType
     * @uses EstabelecimentoType::setCoCNES()
     * @uses EstabelecimentoType::setCoTipoEstabelecimento()
     * @param string $coCNES
     * @param string $coTipoEstabelecimento
     */
    public function __construct($coCNES = null, $coTipoEstabelecimento = null)
    {
        $this
            ->setCoCNES($coCNES)
            ->setCoTipoEstabelecimento($coTipoEstabelecimento);
    }
    /**
     * Get coCNES value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCoCNES()
    {
        return isset($this->coCNES) ? $this->coCNES : null;
    }
    /**
     * Set coCNES value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $coCNES
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoType
     */
    public function setCoCNES($coCNES = null)
    {
        // validation for constraint: string
        if (!is_null($coCNES) && !is_string($coCNES)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coCNES, true), gettype($coCNES)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($coCNES) && strlen($coCNES) > 7) || (is_array($coCNES) && count($coCNES) > 7)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 7 element(s) or a scalar of 7 character(s) at most', var_export($coCNES, true), is_scalar($coCNES) ? strlen($coCNES) : count($coCNES)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($coCNES) && strlen($coCNES) < 7) || (is_array($coCNES) && count($coCNES) < 7)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 7 element(s) or a scalar of 7 character(s) at least', var_export($coCNES, true), is_scalar($coCNES) ? strlen($coCNES) : count($coCNES)), __LINE__);
        }
        if (is_null($coCNES) || (is_array($coCNES) && empty($coCNES))) {
            unset($this->coCNES);
        } else {
            $this->coCNES = $coCNES;
        }
        return $this;
    }
    /**
     * Get coTipoEstabelecimento value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCoTipoEstabelecimento()
    {
        return isset($this->coTipoEstabelecimento) ? $this->coTipoEstabelecimento : null;
    }
    /**
     * Set coTipoEstabelecimento value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \HorusWSDL\Homologacao\EnumType\CoTipoEstabelecimento::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\CoTipoEstabelecimento::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coTipoEstabelecimento
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoType
     */
    public function setCoTipoEstabelecimento($coTipoEstabelecimento = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\CoTipoEstabelecimento::valueIsValid($coTipoEstabelecimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\CoTipoEstabelecimento', is_array($coTipoEstabelecimento) ? implode(', ', $coTipoEstabelecimento) : var_export($coTipoEstabelecimento, true), implode(', ', \HorusWSDL\Homologacao\EnumType\CoTipoEstabelecimento::getValidValues())), __LINE__);
        }
        if (is_null($coTipoEstabelecimento) || (is_array($coTipoEstabelecimento) && empty($coTipoEstabelecimento))) {
            unset($this->coTipoEstabelecimento);
        } else {
            $this->coTipoEstabelecimento = $coTipoEstabelecimento;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoType
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
