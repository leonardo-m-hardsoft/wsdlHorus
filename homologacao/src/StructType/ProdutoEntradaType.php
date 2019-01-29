<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoEntradaType StructType
 * @subpackage Structs
 */
class ProdutoEntradaType extends ProdutoType
{
    /**
     * The nuNotaFiscal
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minOccurs: 1
     * - documentation: Número documento fiscal ou simples remessa. | Número documento fiscal ou simples remessa.
     * @var string
     */
    public $nuNotaFiscal;
    /**
     * The nuValorUnitario
     * Meta informations extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 10
     * - minOccurs: 1
     * - totalDigits: 18
     * - documentation: Valor monetário unitário do produto adquirido. | Valor monetário unitário do produto adquirido.
     * @var float
     */
    public $nuValorUnitario;
    /**
     * The nuCNPJDistribuidor
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 1
     * - pattern: \d{14}
     * - documentation: Número do CNPJ do distribuidor. | Número do CNPJ do distribuidor.
     * @var string
     */
    public $nuCNPJDistribuidor;
    /**
     * The tpEntradaEstoque
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Tipo de entrada do produto no estoque. | Tipo de entrada do produto no estoque.
     * @var string
     */
    public $tpEntradaEstoque;
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
     * - minOccurs: 0
     * - documentation: Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento.
     * @var string
     */
    public $noFabricanteInternacional;
    /**
     * Constructor method for ProdutoEntradaType
     * @uses ProdutoEntradaType::setNuNotaFiscal()
     * @uses ProdutoEntradaType::setNuValorUnitario()
     * @uses ProdutoEntradaType::setNuCNPJDistribuidor()
     * @uses ProdutoEntradaType::setTpEntradaEstoque()
     * @uses ProdutoEntradaType::setNuCNPJFabricante()
     * @uses ProdutoEntradaType::setNoFabricanteInternacional()
     * @param string $nuNotaFiscal
     * @param float $nuValorUnitario
     * @param string $nuCNPJDistribuidor
     * @param string $tpEntradaEstoque
     * @param string $nuCNPJFabricante
     * @param string $noFabricanteInternacional
     */
    public function __construct($nuNotaFiscal = null, $nuValorUnitario = null, $nuCNPJDistribuidor = null, $tpEntradaEstoque = null, $nuCNPJFabricante = null, $noFabricanteInternacional = null)
    {
        $this
            ->setNuNotaFiscal($nuNotaFiscal)
            ->setNuValorUnitario($nuValorUnitario)
            ->setNuCNPJDistribuidor($nuCNPJDistribuidor)
            ->setTpEntradaEstoque($tpEntradaEstoque)
            ->setNuCNPJFabricante($nuCNPJFabricante)
            ->setNoFabricanteInternacional($noFabricanteInternacional);
    }
    /**
     * Get nuNotaFiscal value
     * @return string
     */
    public function getNuNotaFiscal()
    {
        return $this->nuNotaFiscal;
    }
    /**
     * Set nuNotaFiscal value
     * @param string $nuNotaFiscal
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
     */
    public function setNuNotaFiscal($nuNotaFiscal = null)
    {
        // validation for constraint: string
        if (!is_null($nuNotaFiscal) && !is_string($nuNotaFiscal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuNotaFiscal, true), gettype($nuNotaFiscal)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuNotaFiscal) && strlen($nuNotaFiscal) > 100) || (is_array($nuNotaFiscal) && count($nuNotaFiscal) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($nuNotaFiscal, true), is_scalar($nuNotaFiscal) ? strlen($nuNotaFiscal) : count($nuNotaFiscal)), __LINE__);
        }
        $this->nuNotaFiscal = $nuNotaFiscal;
        return $this;
    }
    /**
     * Get nuValorUnitario value
     * @return float
     */
    public function getNuValorUnitario()
    {
        return $this->nuValorUnitario;
    }
    /**
     * Set nuValorUnitario value
     * @param float $nuValorUnitario
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
     */
    public function setNuValorUnitario($nuValorUnitario = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($nuValorUnitario) && strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.') + 1)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 10 fraction digits, %d given', var_export($nuValorUnitario, true), strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($nuValorUnitario) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $nuValorUnitario)) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 18 digits, "%d" given', var_export($nuValorUnitario, true), strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.')))), __LINE__);
        }
        $this->nuValorUnitario = $nuValorUnitario;
        return $this;
    }
    /**
     * Get nuCNPJDistribuidor value
     * @return string
     */
    public function getNuCNPJDistribuidor()
    {
        return $this->nuCNPJDistribuidor;
    }
    /**
     * Set nuCNPJDistribuidor value
     * @param string $nuCNPJDistribuidor
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
     */
    public function setNuCNPJDistribuidor($nuCNPJDistribuidor = null)
    {
        // validation for constraint: string
        if (!is_null($nuCNPJDistribuidor) && !is_string($nuCNPJDistribuidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuCNPJDistribuidor, true), gettype($nuCNPJDistribuidor)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nuCNPJDistribuidor) && !preg_match('/\\d{14}/', $nuCNPJDistribuidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{14}"', var_export($nuCNPJDistribuidor, true)), __LINE__);
        }
        $this->nuCNPJDistribuidor = $nuCNPJDistribuidor;
        return $this;
    }
    /**
     * Get tpEntradaEstoque value
     * @return string
     */
    public function getTpEntradaEstoque()
    {
        return $this->tpEntradaEstoque;
    }
    /**
     * Set tpEntradaEstoque value
     * @param string $tpEntradaEstoque
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
     */
    public function setTpEntradaEstoque($tpEntradaEstoque = null)
    {
        // validation for constraint: string
        if (!is_null($tpEntradaEstoque) && !is_string($tpEntradaEstoque)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tpEntradaEstoque, true), gettype($tpEntradaEstoque)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($tpEntradaEstoque) && strlen($tpEntradaEstoque) > 30) || (is_array($tpEntradaEstoque) && count($tpEntradaEstoque) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 30 element(s) or a scalar of 30 character(s) at most', var_export($tpEntradaEstoque, true), is_scalar($tpEntradaEstoque) ? strlen($tpEntradaEstoque) : count($tpEntradaEstoque)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($tpEntradaEstoque) && strlen($tpEntradaEstoque) < 1) || (is_array($tpEntradaEstoque) && count($tpEntradaEstoque) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($tpEntradaEstoque, true), is_scalar($tpEntradaEstoque) ? strlen($tpEntradaEstoque) : count($tpEntradaEstoque)), __LINE__);
        }
        $this->tpEntradaEstoque = $tpEntradaEstoque;
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
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
        $this->noFabricanteInternacional = $noFabricanteInternacional;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoEntradaType
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
