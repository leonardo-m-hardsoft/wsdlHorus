<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoDispensacaoType StructType
 * @subpackage Structs
 */
class ProdutoDispensacaoType extends ProdutoType
{
    /**
     * The dtCompetencia
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: [01][0-9]-[0-9]{4}
     * - documentation: Data de competência da dispensação. Padrão: MM-AAAA | Data de competência da dispensação. Padrão: MM-AAAA
     * @var string
     */
    public $dtCompetencia;
    /**
     * Constructor method for ProdutoDispensacaoType
     * @uses ProdutoDispensacaoType::setDtCompetencia()
     * @param string $dtCompetencia
     */
    public function __construct($dtCompetencia = null)
    {
        $this
            ->setDtCompetencia($dtCompetencia);
    }
    /**
     * Get dtCompetencia value
     * @return string|null
     */
    public function getDtCompetencia()
    {
        return $this->dtCompetencia;
    }
    /**
     * Set dtCompetencia value
     * @param string $dtCompetencia
     * @return \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType
     */
    public function setDtCompetencia($dtCompetencia = null)
    {
        // validation for constraint: string
        if (!is_null($dtCompetencia) && !is_string($dtCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtCompetencia, true), gettype($dtCompetencia)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtCompetencia) && !preg_match('/[01][0-9]-[0-9]{4}/', $dtCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[01][0-9]-[0-9]{4}"', var_export($dtCompetencia, true)), __LINE__);
        }
        $this->dtCompetencia = $dtCompetencia;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType
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
