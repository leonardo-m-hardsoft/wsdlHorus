<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvaliacaoVinculadaSimplesType StructType
 * @subpackage Structs
 */
class AvaliacaoVinculadaSimplesType extends AbstractStructBase
{
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
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - nillable: true
     * - totalDigits: 30
     * - documentation: Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de
     * Registro interno no Hórus WS. | Código de registro no Hórus WS.
     * @var int
     */
    public $coRegistro;
    /**
     * Constructor method for AvaliacaoVinculadaSimplesType
     * @uses AvaliacaoVinculadaSimplesType::setCoRegistroOrigem()
     * @uses AvaliacaoVinculadaSimplesType::setCoRegistro()
     * @param string $coRegistroOrigem
     * @param int $coRegistro
     */
    public function __construct($coRegistroOrigem = null, $coRegistro = null)
    {
        $this
            ->setCoRegistroOrigem($coRegistroOrigem)
            ->setCoRegistro($coRegistro);
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
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
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
     * Get coRegistro value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCoRegistro()
    {
        return isset($this->coRegistro) ? $this->coRegistro : null;
    }
    /**
     * Set coRegistro value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $coRegistro
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
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
        if (is_null($coRegistro) || (is_array($coRegistro) && empty($coRegistro))) {
            unset($this->coRegistro);
        } else {
            $this->coRegistro = $coRegistro;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
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
