<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoSaidaType StructType
 * @subpackage Structs
 */
class ProdutoSaidaType extends ProdutoType
{
    /**
     * The tpSaida
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Tipo de saída do produto no estoque. | Tipo de saída do produto no estoque.
     * @var string
     */
    public $tpSaida;
    /**
     * The nuCNPJFabricante
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: \d{14}
     * - documentation: Número do CNPJ do fabricante . | Número do CNPJ do fabricante . | Número do CNPJ do fabricante .
     * @var string
     */
    public $nuCNPJFabricante;
    /**
     * The noFabricanteInternacional
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento.
     * @var string
     */
    public $noFabricanteInternacional;
    /**
     * Constructor method for ProdutoSaidaType
     * @uses ProdutoSaidaType::setTpSaida()
     * @uses ProdutoSaidaType::setNuCNPJFabricante()
     * @uses ProdutoSaidaType::setNoFabricanteInternacional()
     * @param string $tpSaida
     * @param string $nuCNPJFabricante
     * @param string $noFabricanteInternacional
     */
    public function __construct($tpSaida = null, $nuCNPJFabricante = null, $noFabricanteInternacional = null)
    {
        $this
            ->setTpSaida($tpSaida)
            ->setNuCNPJFabricante($nuCNPJFabricante)
            ->setNoFabricanteInternacional($noFabricanteInternacional);
    }
    /**
     * Get tpSaida value
     * @return string
     */
    public function getTpSaida()
    {
        return $this->tpSaida;
    }
    /**
     * Set tpSaida value
     * @param string $tpSaida
     * @return \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
     */
    public function setTpSaida($tpSaida = null)
    {
        // validation for constraint: string
        if (!is_null($tpSaida) && !is_string($tpSaida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tpSaida, true), gettype($tpSaida)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($tpSaida) && strlen($tpSaida) > 100) || (is_array($tpSaida) && count($tpSaida) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($tpSaida, true), is_scalar($tpSaida) ? strlen($tpSaida) : count($tpSaida)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($tpSaida) && strlen($tpSaida) < 1) || (is_array($tpSaida) && count($tpSaida) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($tpSaida, true), is_scalar($tpSaida) ? strlen($tpSaida) : count($tpSaida)), __LINE__);
        }
        $this->tpSaida = $tpSaida;
        return $this;
    }
    /**
     * Get nuCNPJFabricante value
     * @return string|null
     */
    public function getNuCNPJFabricante()
    {
        return $this->nuCNPJFabricante;
    }
    /**
     * Set nuCNPJFabricante value
     * @param string $nuCNPJFabricante
     * @return \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
     */
    public function setNuCNPJFabricante($nuCNPJFabricante = null)
    {
        // validation for constraint: string
        if (!is_null($nuCNPJFabricante) && !is_string($nuCNPJFabricante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuCNPJFabricante, true), gettype($nuCNPJFabricante)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nuCNPJFabricante) && !preg_match('/\\d{14}/', $nuCNPJFabricante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{14}"', var_export($nuCNPJFabricante, true)), __LINE__);
        }
        $this->nuCNPJFabricante = $nuCNPJFabricante;
        return $this;
    }
    /**
     * Get noFabricanteInternacional value
     * @return string|null
     */
    public function getNoFabricanteInternacional()
    {
        return $this->noFabricanteInternacional;
    }
    /**
     * Set noFabricanteInternacional value
     * @param string $noFabricanteInternacional
     * @return \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
     */
    public function setNoFabricanteInternacional($noFabricanteInternacional = null)
    {
        // validation for constraint: string
        if (!is_null($noFabricanteInternacional) && !is_string($noFabricanteInternacional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFabricanteInternacional, true), gettype($noFabricanteInternacional)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($noFabricanteInternacional) && strlen($noFabricanteInternacional) > 200) || (is_array($noFabricanteInternacional) && count($noFabricanteInternacional) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 200 element(s) or a scalar of 200 character(s) at most', var_export($noFabricanteInternacional, true), is_scalar($noFabricanteInternacional) ? strlen($noFabricanteInternacional) : count($noFabricanteInternacional)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($noFabricanteInternacional) && strlen($noFabricanteInternacional) < 1) || (is_array($noFabricanteInternacional) && count($noFabricanteInternacional) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($noFabricanteInternacional, true), is_scalar($noFabricanteInternacional) ? strlen($noFabricanteInternacional) : count($noFabricanteInternacional)), __LINE__);
        }
        $this->noFabricanteInternacional = $noFabricanteInternacional;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
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
