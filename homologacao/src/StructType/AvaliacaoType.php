<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvaliacaoType StructType
 * @subpackage Structs
 */
class AvaliacaoType extends AbstractStructBase
{
    /**
     * The qtLMEavaliadaC1
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 1
     * - nillable: false
     * - totalDigits: 12
     * - documentation: Quantidade avaliada da primeira competência do LME.
     * @var int
     */
    public $qtLMEavaliadaC1;
    /**
     * The coProcedimento
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Código do Procedimento da Tabela de Procedimentos, Medicamentos, Órteses, Próteses e Materiais Especiais do Sistema Único de Saúde.
     * @var string
     */
    public $coProcedimento;
    /**
     * The dtAvaliacao
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 1
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4}
     * - documentation: Data da avaliação. Padrão: DD-MM-AAAA
     * @var string
     */
    public $dtAvaliacao;
    /**
     * The avAdequacao
     * Meta informations extracted from the WSDL
     * - documentation: Avaliação de Adequação.
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $avAdequacao;
    /**
     * The coCNES
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 1
     * - totalDigits: 7
     * - documentation: Código do CNES do profissional solicitante. | Código CNES: Código do Cadastro Nacional de Estabelecimentos de Saúde do estabelecimento. | Código CNES: Código do Cadastro Nacional de Estabelecimentos de Saúde do
     * estabelecimento. | Código CNES: Código do Cadastro Nacional de Estabelecimentos de Saúde do estabelecimento. | Código CNES: Código do Cadastro Nacional de Estabelecimentos de Saúde ref. ao produto.
     * @var int
     */
    public $coCNES;
    /**
     * The coCNS
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 1
     * - totalDigits: 15
     * - documentation: Número do Cartão Nacional de Saúde (CNS) do usuário SUS.
     * @var int
     */
    public $coCNS;
    /**
     * The coRegistroOrigem
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no
     * sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado.
     * @var string
     */
    public $coRegistroOrigem;
    /**
     * The qtLMEavaliadaC2
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - totalDigits: 12
     * - documentation: Quantidade avaliada da segunda competência do LME.
     * @var int
     */
    public $qtLMEavaliadaC2;
    /**
     * The qtLMEavaliadaC3
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - totalDigits: 12
     * - documentation: Quantidade avaliada da terceira competência do LME.
     * @var int
     */
    public $qtLMEavaliadaC3;
    /**
     * Constructor method for AvaliacaoType
     * @uses AvaliacaoType::setQtLMEavaliadaC1()
     * @uses AvaliacaoType::setCoProcedimento()
     * @uses AvaliacaoType::setDtAvaliacao()
     * @uses AvaliacaoType::setAvAdequacao()
     * @uses AvaliacaoType::setCoCNES()
     * @uses AvaliacaoType::setCoCNS()
     * @uses AvaliacaoType::setCoRegistroOrigem()
     * @uses AvaliacaoType::setQtLMEavaliadaC2()
     * @uses AvaliacaoType::setQtLMEavaliadaC3()
     * @param int $qtLMEavaliadaC1
     * @param string $coProcedimento
     * @param string $dtAvaliacao
     * @param string $avAdequacao
     * @param int $coCNES
     * @param int $coCNS
     * @param string $coRegistroOrigem
     * @param int $qtLMEavaliadaC2
     * @param int $qtLMEavaliadaC3
     */
    public function __construct($qtLMEavaliadaC1 = null, $coProcedimento = null, $dtAvaliacao = null, $avAdequacao = null, $coCNES = null, $coCNS = null, $coRegistroOrigem = null, $qtLMEavaliadaC2 = null, $qtLMEavaliadaC3 = null)
    {
        $this
            ->setQtLMEavaliadaC1($qtLMEavaliadaC1)
            ->setCoProcedimento($coProcedimento)
            ->setDtAvaliacao($dtAvaliacao)
            ->setAvAdequacao($avAdequacao)
            ->setCoCNES($coCNES)
            ->setCoCNS($coCNS)
            ->setCoRegistroOrigem($coRegistroOrigem)
            ->setQtLMEavaliadaC2($qtLMEavaliadaC2)
            ->setQtLMEavaliadaC3($qtLMEavaliadaC3);
    }
    /**
     * Get qtLMEavaliadaC1 value
     * @return int
     */
    public function getQtLMEavaliadaC1()
    {
        return $this->qtLMEavaliadaC1;
    }
    /**
     * Set qtLMEavaliadaC1 value
     * @param int $qtLMEavaliadaC1
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setQtLMEavaliadaC1($qtLMEavaliadaC1 = null)
    {
        // validation for constraint: int
        if (!is_null($qtLMEavaliadaC1) && !is_numeric($qtLMEavaliadaC1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($qtLMEavaliadaC1, true), gettype($qtLMEavaliadaC1)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($qtLMEavaliadaC1) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $qtLMEavaliadaC1)) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 12 digits, "%d" given', var_export($qtLMEavaliadaC1, true), strlen(substr($qtLMEavaliadaC1, strpos($qtLMEavaliadaC1, '.')))), __LINE__);
        }
        $this->qtLMEavaliadaC1 = $qtLMEavaliadaC1;
        return $this;
    }
    /**
     * Get coProcedimento value
     * @return string
     */
    public function getCoProcedimento()
    {
        return $this->coProcedimento;
    }
    /**
     * Set coProcedimento value
     * @param string $coProcedimento
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setCoProcedimento($coProcedimento = null)
    {
        // validation for constraint: string
        if (!is_null($coProcedimento) && !is_string($coProcedimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coProcedimento, true), gettype($coProcedimento)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($coProcedimento) && strlen($coProcedimento) > 10) || (is_array($coProcedimento) && count($coProcedimento) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 10 element(s) or a scalar of 10 character(s) at most', var_export($coProcedimento, true), is_scalar($coProcedimento) ? strlen($coProcedimento) : count($coProcedimento)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($coProcedimento) && strlen($coProcedimento) < 1) || (is_array($coProcedimento) && count($coProcedimento) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($coProcedimento, true), is_scalar($coProcedimento) ? strlen($coProcedimento) : count($coProcedimento)), __LINE__);
        }
        $this->coProcedimento = $coProcedimento;
        return $this;
    }
    /**
     * Get dtAvaliacao value
     * @return string
     */
    public function getDtAvaliacao()
    {
        return $this->dtAvaliacao;
    }
    /**
     * Set dtAvaliacao value
     * @param string $dtAvaliacao
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setDtAvaliacao($dtAvaliacao = null)
    {
        // validation for constraint: string
        if (!is_null($dtAvaliacao) && !is_string($dtAvaliacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtAvaliacao, true), gettype($dtAvaliacao)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtAvaliacao) && !preg_match('/[0-3][0-9]-[01][0-9]-[0-9]{4}/', $dtAvaliacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[0-3][0-9]-[01][0-9]-[0-9]{4}"', var_export($dtAvaliacao, true)), __LINE__);
        }
        $this->dtAvaliacao = $dtAvaliacao;
        return $this;
    }
    /**
     * Get avAdequacao value
     * @return string
     */
    public function getAvAdequacao()
    {
        return $this->avAdequacao;
    }
    /**
     * Set avAdequacao value
     * @uses \HorusWSDL\Homologacao\EnumType\SimNaoEnumType::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\SimNaoEnumType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $avAdequacao
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setAvAdequacao($avAdequacao = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\SimNaoEnumType::valueIsValid($avAdequacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\SimNaoEnumType', is_array($avAdequacao) ? implode(', ', $avAdequacao) : var_export($avAdequacao, true), implode(', ', \HorusWSDL\Homologacao\EnumType\SimNaoEnumType::getValidValues())), __LINE__);
        }
        $this->avAdequacao = $avAdequacao;
        return $this;
    }
    /**
     * Get coCNES value
     * @return int
     */
    public function getCoCNES()
    {
        return $this->coCNES;
    }
    /**
     * Set coCNES value
     * @param int $coCNES
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setCoCNES($coCNES = null)
    {
        // validation for constraint: int
        if (!is_null($coCNES) && !is_numeric($coCNES)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coCNES, true), gettype($coCNES)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($coCNES) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $coCNES)) !== 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 7 digits, "%d" given', var_export($coCNES, true), strlen(substr($coCNES, strpos($coCNES, '.')))), __LINE__);
        }
        $this->coCNES = $coCNES;
        return $this;
    }
    /**
     * Get coCNS value
     * @return int
     */
    public function getCoCNS()
    {
        return $this->coCNS;
    }
    /**
     * Set coCNS value
     * @param int $coCNS
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setCoCNS($coCNS = null)
    {
        // validation for constraint: int
        if (!is_null($coCNS) && !is_numeric($coCNS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coCNS, true), gettype($coCNS)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($coCNS) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $coCNS)) !== 15) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 15 digits, "%d" given', var_export($coCNS, true), strlen(substr($coCNS, strpos($coCNS, '.')))), __LINE__);
        }
        $this->coCNS = $coCNS;
        return $this;
    }
    /**
     * Get coRegistroOrigem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCoRegistroOrigem()
    {
        return isset($this->coRegistroOrigem) ? $this->coRegistroOrigem : null;
    }
    /**
     * Set coRegistroOrigem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $coRegistroOrigem
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setCoRegistroOrigem($coRegistroOrigem = null)
    {
        // validation for constraint: string
        if (!is_null($coRegistroOrigem) && !is_string($coRegistroOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coRegistroOrigem, true), gettype($coRegistroOrigem)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($coRegistroOrigem) && strlen($coRegistroOrigem) > 100) || (is_array($coRegistroOrigem) && count($coRegistroOrigem) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($coRegistroOrigem, true), is_scalar($coRegistroOrigem) ? strlen($coRegistroOrigem) : count($coRegistroOrigem)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($coRegistroOrigem) && strlen($coRegistroOrigem) < 1) || (is_array($coRegistroOrigem) && count($coRegistroOrigem) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($coRegistroOrigem, true), is_scalar($coRegistroOrigem) ? strlen($coRegistroOrigem) : count($coRegistroOrigem)), __LINE__);
        }
        if (is_null($coRegistroOrigem) || (is_array($coRegistroOrigem) && empty($coRegistroOrigem))) {
            unset($this->coRegistroOrigem);
        } else {
            $this->coRegistroOrigem = $coRegistroOrigem;
        }
        return $this;
    }
    /**
     * Get qtLMEavaliadaC2 value
     * @return int|null
     */
    public function getQtLMEavaliadaC2()
    {
        return $this->qtLMEavaliadaC2;
    }
    /**
     * Set qtLMEavaliadaC2 value
     * @param int $qtLMEavaliadaC2
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setQtLMEavaliadaC2($qtLMEavaliadaC2 = null)
    {
        // validation for constraint: int
        if (!is_null($qtLMEavaliadaC2) && !is_numeric($qtLMEavaliadaC2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($qtLMEavaliadaC2, true), gettype($qtLMEavaliadaC2)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($qtLMEavaliadaC2) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $qtLMEavaliadaC2)) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 12 digits, "%d" given', var_export($qtLMEavaliadaC2, true), strlen(substr($qtLMEavaliadaC2, strpos($qtLMEavaliadaC2, '.')))), __LINE__);
        }
        $this->qtLMEavaliadaC2 = $qtLMEavaliadaC2;
        return $this;
    }
    /**
     * Get qtLMEavaliadaC3 value
     * @return int|null
     */
    public function getQtLMEavaliadaC3()
    {
        return $this->qtLMEavaliadaC3;
    }
    /**
     * Set qtLMEavaliadaC3 value
     * @param int $qtLMEavaliadaC3
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
     */
    public function setQtLMEavaliadaC3($qtLMEavaliadaC3 = null)
    {
        // validation for constraint: int
        if (!is_null($qtLMEavaliadaC3) && !is_numeric($qtLMEavaliadaC3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($qtLMEavaliadaC3, true), gettype($qtLMEavaliadaC3)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($qtLMEavaliadaC3) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $qtLMEavaliadaC3)) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 12 digits, "%d" given', var_export($qtLMEavaliadaC3, true), strlen(substr($qtLMEavaliadaC3, strpos($qtLMEavaliadaC3, '.')))), __LINE__);
        }
        $this->qtLMEavaliadaC3 = $qtLMEavaliadaC3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType
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
