<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoVinculadoType StructType
 * @subpackage Structs
 */
class ProdutoVinculadoType extends ProdutoType
{
    /**
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 1
     * - nillable: true
     * - totalDigits: 30
     * - documentation: Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de
     * Registro interno no Hórus WS. | Código de registro no Hórus WS.
     * @var int
     */
    public $coRegistro;
    /**
     * Constructor method for ProdutoVinculadoType
     * @uses ProdutoVinculadoType::setCoRegistro()
     * @param int $coRegistro
     */
    public function __construct($coRegistro = null)
    {
        $this
            ->setCoRegistro($coRegistro);
    }
    /**
     * Get coRegistro value
     * @return int
     */
    public function getCoRegistro()
    {
        return $this->coRegistro;
    }
    /**
     * Set coRegistro value
     * @param int $coRegistro
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoType
     */
    public function setCoRegistro($coRegistro = null)
    {
        // validation for constraint: int
        if (!is_null($coRegistro) && !is_numeric($coRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coRegistro, true), gettype($coRegistro)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($coRegistro) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $coRegistro)) !== 30) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 30 digits, "%d" given', var_export($coRegistro, true), strlen(substr($coRegistro, strpos($coRegistro, '.')))), __LINE__);
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoType
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
