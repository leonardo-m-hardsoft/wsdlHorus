<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtocoloType StructType
 * @subpackage Structs
 */
class ProtocoloType extends AbstractStructBase
{
    /**
     * The nuProtocoloEntrada
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 36
     * - minLength: 1
     * - minOccurs: 1
     * - documentation: Número de protocolo gerado no momento do recebimento da informação. | Número de protocolo gerado no momento do recebimento da informação.
     * @var string
     */
    public $nuProtocoloEntrada;
    /**
     * The dtRecebimento
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4} [0-2][0-9]:[0-5][0-9]:[0-6][0-9]
     * - documentation: Data e hora em que o sistema recebeu a informação pelo WS. Padrao DD-MM-YYYY HH:mm:ss
     * @var string
     */
    public $dtRecebimento;
    /**
     * Constructor method for ProtocoloType
     * @uses ProtocoloType::setNuProtocoloEntrada()
     * @uses ProtocoloType::setDtRecebimento()
     * @param string $nuProtocoloEntrada
     * @param string $dtRecebimento
     */
    public function __construct($nuProtocoloEntrada = null, $dtRecebimento = null)
    {
        $this
            ->setNuProtocoloEntrada($nuProtocoloEntrada)
            ->setDtRecebimento($dtRecebimento);
    }
    /**
     * Get nuProtocoloEntrada value
     * @return string
     */
    public function getNuProtocoloEntrada()
    {
        return $this->nuProtocoloEntrada;
    }
    /**
     * Set nuProtocoloEntrada value
     * @param string $nuProtocoloEntrada
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public function setNuProtocoloEntrada($nuProtocoloEntrada = null)
    {
        // validation for constraint: string
        if (!is_null($nuProtocoloEntrada) && !is_string($nuProtocoloEntrada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuProtocoloEntrada, true), gettype($nuProtocoloEntrada)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuProtocoloEntrada) && strlen($nuProtocoloEntrada) > 36) || (is_array($nuProtocoloEntrada) && count($nuProtocoloEntrada) > 36)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 36 element(s) or a scalar of 36 character(s) at most', var_export($nuProtocoloEntrada, true), is_scalar($nuProtocoloEntrada) ? strlen($nuProtocoloEntrada) : count($nuProtocoloEntrada)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($nuProtocoloEntrada) && strlen($nuProtocoloEntrada) < 1) || (is_array($nuProtocoloEntrada) && count($nuProtocoloEntrada) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($nuProtocoloEntrada, true), is_scalar($nuProtocoloEntrada) ? strlen($nuProtocoloEntrada) : count($nuProtocoloEntrada)), __LINE__);
        }
        $this->nuProtocoloEntrada = $nuProtocoloEntrada;
        return $this;
    }
    /**
     * Get dtRecebimento value
     * @return string
     */
    public function getDtRecebimento()
    {
        return $this->dtRecebimento;
    }
    /**
     * Set dtRecebimento value
     * @param string $dtRecebimento
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public function setDtRecebimento($dtRecebimento = null)
    {
        // validation for constraint: string
        if (!is_null($dtRecebimento) && !is_string($dtRecebimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtRecebimento, true), gettype($dtRecebimento)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtRecebimento) && !preg_match('/[0-3][0-9]-[01][0-9]-[0-9]{4} [0-2][0-9]:[0-5][0-9]:[0-6][0-9]/', $dtRecebimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[0-3][0-9]-[01][0-9]-[0-9]{4} [0-2][0-9]:[0-5][0-9]:[0-6][0-9]"', var_export($dtRecebimento, true)), __LINE__);
        }
        $this->dtRecebimento = $dtRecebimento;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType
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
