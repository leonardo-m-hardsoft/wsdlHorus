<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoVinculadoSimplesType StructType
 * @subpackage Structs
 */
class ProdutoVinculadoSimplesType extends AbstractStructBase
{
    /**
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 1
     * - totalDigits: 30
     * - documentation: Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de
     * Registro interno no Hórus WS. | Código de registro no Hórus WS.
     * @var int
     */
    public $coRegistro;
    /**
     * The coRegistroOrigem
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no
     * sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado.
     * @var string
     */
    public $coRegistroOrigem;
    /**
     * Constructor method for ProdutoVinculadoSimplesType
     * @uses ProdutoVinculadoSimplesType::setCoRegistro()
     * @uses ProdutoVinculadoSimplesType::setCoRegistroOrigem()
     * @param int $coRegistro
     * @param string $coRegistroOrigem
     */
    public function __construct($coRegistro = null, $coRegistroOrigem = null)
    {
        $this
            ->setCoRegistro($coRegistro)
            ->setCoRegistroOrigem($coRegistroOrigem);
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
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
     * Get coRegistroOrigem value
     * @return string|null
     */
    public function getCoRegistroOrigem()
    {
        return $this->coRegistroOrigem;
    }
    /**
     * Set coRegistroOrigem value
     * @param string $coRegistroOrigem
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
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
        $this->coRegistroOrigem = $coRegistroOrigem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
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
