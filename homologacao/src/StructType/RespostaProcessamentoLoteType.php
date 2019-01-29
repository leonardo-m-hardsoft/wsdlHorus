<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaProcessamentoLoteType StructType
 * @subpackage Structs
 */
class RespostaProcessamentoLoteType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * @var \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public $identificacao;
    /**
     * The situacaoProcessamento
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $situacaoProcessamento;
    /**
     * The registro
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \HorusWSDL\Homologacao\StructType\Registro[]
     */
    public $registro;
    /**
     * Constructor method for RespostaProcessamentoLoteType
     * @uses RespostaProcessamentoLoteType::setIdentificacao()
     * @uses RespostaProcessamentoLoteType::setSituacaoProcessamento()
     * @uses RespostaProcessamentoLoteType::setRegistro()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @param string $situacaoProcessamento
     * @param \HorusWSDL\Homologacao\StructType\Registro[] $registro
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null, $situacaoProcessamento = null, array $registro = array())
    {
        $this
            ->setIdentificacao($identificacao)
            ->setSituacaoProcessamento($situacaoProcessamento)
            ->setRegistro($registro);
    }
    /**
     * Get identificacao value
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoType|null
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }
    /**
     * Set identificacao value
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get situacaoProcessamento value
     * @return string|null
     */
    public function getSituacaoProcessamento()
    {
        return $this->situacaoProcessamento;
    }
    /**
     * Set situacaoProcessamento value
     * @uses \HorusWSDL\Homologacao\EnumType\SituacaoProcessamento::valueIsValid()
     * @uses \HorusWSDL\Homologacao\EnumType\SituacaoProcessamento::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $situacaoProcessamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType
     */
    public function setSituacaoProcessamento($situacaoProcessamento = null)
    {
        // validation for constraint: enumeration
        if (!\HorusWSDL\Homologacao\EnumType\SituacaoProcessamento::valueIsValid($situacaoProcessamento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \HorusWSDL\Homologacao\EnumType\SituacaoProcessamento', is_array($situacaoProcessamento) ? implode(', ', $situacaoProcessamento) : var_export($situacaoProcessamento, true), implode(', ', \HorusWSDL\Homologacao\EnumType\SituacaoProcessamento::getValidValues())), __LINE__);
        }
        $this->situacaoProcessamento = $situacaoProcessamento;
        return $this;
    }
    /**
     * Get registro value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \HorusWSDL\Homologacao\StructType\Registro[]|null
     */
    public function getRegistro()
    {
        return isset($this->registro) ? $this->registro : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroForArrayContraintsFromSetRegistro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respostaProcessamentoLoteTypeRegistroItem) {
            // validation for constraint: itemType
            if (!$respostaProcessamentoLoteTypeRegistroItem instanceof \HorusWSDL\Homologacao\StructType\Registro) {
                $invalidValues[] = is_object($respostaProcessamentoLoteTypeRegistroItem) ? get_class($respostaProcessamentoLoteTypeRegistroItem) : var_export($respostaProcessamentoLoteTypeRegistroItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The registro property can only contain items of \HorusWSDL\Homologacao\StructType\Registro, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set registro value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\Registro[] $registro
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType
     */
    public function setRegistro(array $registro = array())
    {
        // validation for constraint: array
        if ('' !== ($registroArrayErrorMessage = self::validateRegistroForArrayContraintsFromSetRegistro($registro))) {
            throw new \InvalidArgumentException($registroArrayErrorMessage, __LINE__);
        }
        if (is_null($registro) || (is_array($registro) && empty($registro))) {
            unset($this->registro);
        } else {
            $this->registro = $registro;
        }
        return $this;
    }
    /**
     * Add item to registro value
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\Registro $item
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType
     */
    public function addToRegistro(\HorusWSDL\Homologacao\StructType\Registro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \HorusWSDL\Homologacao\StructType\Registro) {
            throw new \InvalidArgumentException(sprintf('The registro property can only contain items of \HorusWSDL\Homologacao\StructType\Registro, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->registro[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType
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
