<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrescritorType StructType
 * @subpackage Structs
 */
class PrescritorType extends AbstractStructBase
{
    /**
     * The coCNES
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: \d{7}
     * @var string
     */
    public $coCNES;
    /**
     * The nuCRM
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - totalDigits: 8
     * - documentation: Número do registro no CRM do prescritor.
     * @var int
     */
    public $nuCRM;
    /**
     * The ufCRM
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 2
     * - minOccurs: 0
     * - documentation: UF do CRM do prescritor.
     * @var string
     */
    public $ufCRM;
    /**
     * Constructor method for PrescritorType
     * @uses PrescritorType::setCoCNES()
     * @uses PrescritorType::setNuCRM()
     * @uses PrescritorType::setUfCRM()
     * @param string $coCNES
     * @param int $nuCRM
     * @param string $ufCRM
     */
    public function __construct($coCNES = null, $nuCRM = null, $ufCRM = null)
    {
        $this
            ->setCoCNES($coCNES)
            ->setNuCRM($nuCRM)
            ->setUfCRM($ufCRM);
    }
    /**
     * Get coCNES value
     * @return string|null
     */
    public function getCoCNES()
    {
        return $this->coCNES;
    }
    /**
     * Set coCNES value
     * @param string $coCNES
     * @return \HorusWSDL\Homologacao\StructType\PrescritorType
     */
    public function setCoCNES($coCNES = null)
    {
        // validation for constraint: string
        if (!is_null($coCNES) && !is_string($coCNES)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coCNES, true), gettype($coCNES)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($coCNES) && !preg_match('/\\d{7}/', $coCNES)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{7}"', var_export($coCNES, true)), __LINE__);
        }
        $this->coCNES = $coCNES;
        return $this;
    }
    /**
     * Get nuCRM value
     * @return int|null
     */
    public function getNuCRM()
    {
        return $this->nuCRM;
    }
    /**
     * Set nuCRM value
     * @param int $nuCRM
     * @return \HorusWSDL\Homologacao\StructType\PrescritorType
     */
    public function setNuCRM($nuCRM = null)
    {
        // validation for constraint: int
        if (!is_null($nuCRM) && !is_numeric($nuCRM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($nuCRM, true), gettype($nuCRM)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($nuCRM) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $nuCRM)) !== 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 8 digits, "%d" given', var_export($nuCRM, true), strlen(substr($nuCRM, strpos($nuCRM, '.')))), __LINE__);
        }
        $this->nuCRM = $nuCRM;
        return $this;
    }
    /**
     * Get ufCRM value
     * @return string|null
     */
    public function getUfCRM()
    {
        return $this->ufCRM;
    }
    /**
     * Set ufCRM value
     * @param string $ufCRM
     * @return \HorusWSDL\Homologacao\StructType\PrescritorType
     */
    public function setUfCRM($ufCRM = null)
    {
        // validation for constraint: string
        if (!is_null($ufCRM) && !is_string($ufCRM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ufCRM, true), gettype($ufCRM)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($ufCRM) && strlen($ufCRM) > 2) || (is_array($ufCRM) && count($ufCRM) > 2)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 2 element(s) or a scalar of 2 character(s) at most', var_export($ufCRM, true), is_scalar($ufCRM) ? strlen($ufCRM) : count($ufCRM)), __LINE__);
        }
        $this->ufCRM = $ufCRM;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\PrescritorType
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
