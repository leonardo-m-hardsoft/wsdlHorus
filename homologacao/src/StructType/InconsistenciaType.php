<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InconsistenciaType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Representa as inconsistências enviadas ao serviço do hórus.
 * @subpackage Structs
 */
class InconsistenciaType extends AbstractStructBase
{
    /**
     * The mensagem
     * Meta informations extracted from the WSDL
     * - documentation: Mensagem de erro no serviço do hórus.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $mensagem;
    /**
     * The idOrigem
     * Meta informations extracted from the WSDL
     * - documentation: Código de origem.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $idOrigem;
    /**
     * The coIBGE
     * Meta informations extracted from the WSDL
     * - documentation: Código do IBGE.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $coIBGE;
    /**
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - documentation: Código do registro.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $coRegistro;
    /**
     * The coRegistroOrigem
     * Meta informations extracted from the WSDL
     * - documentation: Código do registro origem.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $coRegistroOrigem;
    /**
     * The codigo
     * Meta informations extracted from the WSDL
     * - documentation: Código de erro no serviço do hórus.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $codigo;
    /**
     * The campo
     * Meta informations extracted from the WSDL
     * - base: string
     * - maxLength: 30
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Campo inconsistente enviado ao serviço do hórus.
     * @var string
     */
    public $campo;
    /**
     * The valor
     * Meta informations extracted from the WSDL
     * - base: string
     * - maxLength: 200
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Valor inconsistente enviado ao serviço do hórus.
     * @var string
     */
    public $valor;
    /**
     * Constructor method for InconsistenciaType
     * @uses InconsistenciaType::setMensagem()
     * @uses InconsistenciaType::setIdOrigem()
     * @uses InconsistenciaType::setCoIBGE()
     * @uses InconsistenciaType::setCoRegistro()
     * @uses InconsistenciaType::setCoRegistroOrigem()
     * @uses InconsistenciaType::setCodigo()
     * @uses InconsistenciaType::setCampo()
     * @uses InconsistenciaType::setValor()
     * @param string $mensagem
     * @param string $idOrigem
     * @param string $coIBGE
     * @param string $coRegistro
     * @param string $coRegistroOrigem
     * @param string $codigo
     * @param string $campo
     * @param string $valor
     */
    public function __construct($mensagem = null, $idOrigem = null, $coIBGE = null, $coRegistro = null, $coRegistroOrigem = null, $codigo = null, $campo = null, $valor = null)
    {
        $this
            ->setMensagem($mensagem)
            ->setIdOrigem($idOrigem)
            ->setCoIBGE($coIBGE)
            ->setCoRegistro($coRegistro)
            ->setCoRegistroOrigem($coRegistroOrigem)
            ->setCodigo($codigo)
            ->setCampo($campo)
            ->setValor($valor);
    }
    /**
     * Get mensagem value
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    /**
     * Set mensagem value
     * @param string $mensagem
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setMensagem($mensagem = null)
    {
        // validation for constraint: string
        if (!is_null($mensagem) && !is_string($mensagem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensagem, true), gettype($mensagem)), __LINE__);
        }
        $this->mensagem = $mensagem;
        return $this;
    }
    /**
     * Get idOrigem value
     * @return string|null
     */
    public function getIdOrigem()
    {
        return $this->idOrigem;
    }
    /**
     * Set idOrigem value
     * @param string $idOrigem
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setIdOrigem($idOrigem = null)
    {
        // validation for constraint: string
        if (!is_null($idOrigem) && !is_string($idOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOrigem, true), gettype($idOrigem)), __LINE__);
        }
        $this->idOrigem = $idOrigem;
        return $this;
    }
    /**
     * Get coIBGE value
     * @return string|null
     */
    public function getCoIBGE()
    {
        return $this->coIBGE;
    }
    /**
     * Set coIBGE value
     * @param string $coIBGE
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setCoIBGE($coIBGE = null)
    {
        // validation for constraint: string
        if (!is_null($coIBGE) && !is_string($coIBGE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coIBGE, true), gettype($coIBGE)), __LINE__);
        }
        $this->coIBGE = $coIBGE;
        return $this;
    }
    /**
     * Get coRegistro value
     * @return string|null
     */
    public function getCoRegistro()
    {
        return $this->coRegistro;
    }
    /**
     * Set coRegistro value
     * @param string $coRegistro
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setCoRegistro($coRegistro = null)
    {
        // validation for constraint: string
        if (!is_null($coRegistro) && !is_string($coRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coRegistro, true), gettype($coRegistro)), __LINE__);
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
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setCoRegistroOrigem($coRegistroOrigem = null)
    {
        // validation for constraint: string
        if (!is_null($coRegistroOrigem) && !is_string($coRegistroOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coRegistroOrigem, true), gettype($coRegistroOrigem)), __LINE__);
        }
        $this->coRegistroOrigem = $coRegistroOrigem;
        return $this;
    }
    /**
     * Get codigo value
     * @return string|null
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @uses \HorusWSDL\Homologacao\EnumType\CodigoInconsistenciaType::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\CodigoInconsistenciaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $codigo
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\CodigoInconsistenciaType::valueIsValid($codigo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\CodigoInconsistenciaType', is_array($codigo) ? implode(', ', $codigo) : var_export($codigo, true), implode(', ', \HorusWSDL\Homologacao\EnumType\CodigoInconsistenciaType::getValidValues())), __LINE__);
        }
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Get campo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCampo()
    {
        return isset($this->campo) ? $this->campo : null;
    }
    /**
     * Set campo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $campo
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setCampo($campo = null)
    {
        // validation for constraint: string
        if (!is_null($campo) && !is_string($campo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campo, true), gettype($campo)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($campo) && strlen($campo) > 30) || (is_array($campo) && count($campo) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 30 element(s) or a scalar of 30 character(s) at most', var_export($campo, true), is_scalar($campo) ? strlen($campo) : count($campo)), __LINE__);
        }
        if (is_null($campo) || (is_array($campo) && empty($campo))) {
            unset($this->campo);
        } else {
            $this->campo = $campo;
        }
        return $this;
    }
    /**
     * Get valor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValor()
    {
        return isset($this->valor) ? $this->valor : null;
    }
    /**
     * Set valor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $valor
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function setValor($valor = null)
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($valor) && strlen($valor) > 200) || (is_array($valor) && count($valor) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 200 element(s) or a scalar of 200 character(s) at most', var_export($valor, true), is_scalar($valor) ? strlen($valor) : count($valor)), __LINE__);
        }
        if (is_null($valor) || (is_array($valor) && empty($valor))) {
            unset($this->valor);
        } else {
            $this->valor = $valor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
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
