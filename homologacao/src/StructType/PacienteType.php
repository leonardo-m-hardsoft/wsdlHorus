<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PacienteType StructType
 * @subpackage Structs
 */
class PacienteType extends AbstractStructBase
{
    /**
     * The nuCNS
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 1
     * - pattern: \d{15}
     * - documentation: Número do Cartão Nacional de Saúde (CNS) do usuário SUS.
     * @var string
     */
    public $nuCNS;
    /**
     * The peso
     * Meta informations extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - minOccurs: 0
     * - totalDigits: 5
     * - documentation: Peso do usuário SUS em gramas.
     * @var float
     */
    public $peso;
    /**
     * The altura
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - totalDigits: 3
     * - documentation: Altura do usuário SUS em centímetros.
     * @var int
     */
    public $altura;
    /**
     * The cid_10
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 5
     * - minLength: 3
     * - minOccurs: 0
     * - documentation: Classificação Estatística Internacional de Doenças e Problemas Relacionados à Saúde.
     * @var string
     */
    public $cid_10;
    /**
     * Constructor method for PacienteType
     * @uses PacienteType::setNuCNS()
     * @uses PacienteType::setPeso()
     * @uses PacienteType::setAltura()
     * @uses PacienteType::setCid_10()
     * @param string $nuCNS
     * @param float $peso
     * @param int $altura
     * @param string $cid_10
     */
    public function __construct($nuCNS = null, $peso = null, $altura = null, $cid_10 = null)
    {
        $this
            ->setNuCNS($nuCNS)
            ->setPeso($peso)
            ->setAltura($altura)
            ->setCid_10($cid_10);
    }
    /**
     * Get nuCNS value
     * @return string
     */
    public function getNuCNS()
    {
        return $this->nuCNS;
    }
    /**
     * Set nuCNS value
     * @param string $nuCNS
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public function setNuCNS($nuCNS = null)
    {
        // validation for constraint: string
        if (!is_null($nuCNS) && !is_string($nuCNS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuCNS, true), gettype($nuCNS)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nuCNS) && !preg_match('/\\d{15}/', $nuCNS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{15}"', var_export($nuCNS, true)), __LINE__);
        }
        $this->nuCNS = $nuCNS;
        return $this;
    }
    /**
     * Get peso value
     * @return float|null
     */
    public function getPeso()
    {
        return $this->peso;
    }
    /**
     * Set peso value
     * @param float $peso
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public function setPeso($peso = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($peso) && strlen(substr($peso, strpos($peso, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($peso, true), strlen(substr($peso, strpos($peso, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($peso) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $peso)) !== 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 5 digits, "%d" given', var_export($peso, true), strlen(substr($peso, strpos($peso, '.')))), __LINE__);
        }
        $this->peso = $peso;
        return $this;
    }
    /**
     * Get altura value
     * @return int|null
     */
    public function getAltura()
    {
        return $this->altura;
    }
    /**
     * Set altura value
     * @param int $altura
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public function setAltura($altura = null)
    {
        // validation for constraint: int
        if (!is_null($altura) && !is_numeric($altura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($altura, true), gettype($altura)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($altura) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $altura)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 digits, "%d" given', var_export($altura, true), strlen(substr($altura, strpos($altura, '.')))), __LINE__);
        }
        $this->altura = $altura;
        return $this;
    }
    /**
     * Get cid value
     * @return cid
     */
    public function getCid_10()
    {
        return $this->{'cid-10'};
    }
    /**
     * Set cid value
     * @param cid $cid
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public function setCid_10($cid_10 = null)
    {
        // validation for constraint: string
        if (!is_null($cid_10) && !is_string($cid_10)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cid_10, true), gettype($cid_10)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($cid_10) && strlen($cid_10) > 5) || (is_array($cid_10) && count($cid_10) > 5)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 5 element(s) or a scalar of 5 character(s) at most', var_export($cid_10, true), is_scalar($cid_10) ? strlen($cid_10) : count($cid_10)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($cid_10) && strlen($cid_10) < 3) || (is_array($cid_10) && count($cid_10) < 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 3 element(s) or a scalar of 3 character(s) at least', var_export($cid_10, true), is_scalar($cid_10) ? strlen($cid_10) : count($cid_10)), __LINE__);
        }
        $this->cid_10 = $this->{'cid-10'} = $cid_10;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
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
