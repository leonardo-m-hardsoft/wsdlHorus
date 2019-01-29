<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SistemaExceptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Representa as falhas de sistema no serviço do hórus.
 * @subpackage Structs
 */
class SistemaExceptionType extends AbstractStructBase
{
    /**
     * The codigo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $codigo;
    /**
     * The mensagem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $mensagem;
    /**
     * The originatingError
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $originatingError;
    /**
     * The trace
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $trace;
    /**
     * Constructor method for SistemaExceptionType
     * @uses SistemaExceptionType::setCodigo()
     * @uses SistemaExceptionType::setMensagem()
     * @uses SistemaExceptionType::setOriginatingError()
     * @uses SistemaExceptionType::setTrace()
     * @param string $codigo
     * @param string $mensagem
     * @param string $originatingError
     * @param string[] $trace
     */
    public function __construct($codigo = null, $mensagem = null, $originatingError = null, array $trace = array())
    {
        $this
            ->setCodigo($codigo)
            ->setMensagem($mensagem)
            ->setOriginatingError($originatingError)
            ->setTrace($trace);
    }
    /**
     * Get codigo value
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @uses \HorusWSDL\Homologacao\EnumType\SystemErrorCodeType::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\SystemErrorCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $codigo
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\SystemErrorCodeType::valueIsValid($codigo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\SystemErrorCodeType', is_array($codigo) ? implode(', ', $codigo) : var_export($codigo, true), implode(', ', \HorusWSDL\Homologacao\EnumType\SystemErrorCodeType::getValidValues())), __LINE__);
        }
        $this->codigo = $codigo;
        return $this;
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
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
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
     * Get originatingError value
     * @return string
     */
    public function getOriginatingError()
    {
        return $this->originatingError;
    }
    /**
     * Set originatingError value
     * @param string $originatingError
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
     */
    public function setOriginatingError($originatingError = null)
    {
        // validation for constraint: string
        if (!is_null($originatingError) && !is_string($originatingError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originatingError, true), gettype($originatingError)), __LINE__);
        }
        $this->originatingError = $originatingError;
        return $this;
    }
    /**
     * Get trace value
     * @return string[]|null
     */
    public function getTrace()
    {
        return $this->trace;
    }
    /**
     * This method is responsible for validating the values passed to the setTrace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraceForArrayContraintsFromSetTrace(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sistemaExceptionTypeTraceItem) {
            // validation for constraint: itemType
            if (!is_string($sistemaExceptionTypeTraceItem)) {
                $invalidValues[] = is_object($sistemaExceptionTypeTraceItem) ? get_class($sistemaExceptionTypeTraceItem) : var_export($sistemaExceptionTypeTraceItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The trace property can only contain items of string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set trace value
     * @throws \InvalidArgumentException
     * @param string[] $trace
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
     */
    public function setTrace(array $trace = array())
    {
        // validation for constraint: array
        if ('' !== ($traceArrayErrorMessage = self::validateTraceForArrayContraintsFromSetTrace($trace))) {
            throw new \InvalidArgumentException($traceArrayErrorMessage, __LINE__);
        }
        $this->trace = $trace;
        return $this;
    }
    /**
     * Add item to trace value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
     */
    public function addToTrace($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The trace property can only contain items of string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->trace[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\SistemaExceptionType
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
