<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaReprocessamentoLoteType StructType
 * @subpackage Structs
 */
class RespostaReprocessamentoLoteType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * @var \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public $identificacao;
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - documentation: Os dados do protocolo que está reprocessando.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \HorusWSDL\Homologacao\StructType\ProtocoloType[]
     */
    public $protocolo;
    /**
     * Constructor method for RespostaReprocessamentoLoteType
     * @uses RespostaReprocessamentoLoteType::setIdentificacao()
     * @uses RespostaReprocessamentoLoteType::setProtocolo()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType[] $protocolo
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null, array $protocolo = array())
    {
        $this
            ->setIdentificacao($identificacao)
            ->setProtocolo($protocolo);
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
     * @return \HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get protocolo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType[]|null
     */
    public function getProtocolo()
    {
        return isset($this->protocolo) ? $this->protocolo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProtocolo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProtocolo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProtocoloForArrayContraintsFromSetProtocolo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respostaReprocessamentoLoteTypeProtocoloItem) {
            // validation for constraint: itemType
            if (!$respostaReprocessamentoLoteTypeProtocoloItem instanceof \HorusWSDL\Homologacao\StructType\ProtocoloType) {
                $invalidValues[] = is_object($respostaReprocessamentoLoteTypeProtocoloItem) ? get_class($respostaReprocessamentoLoteTypeProtocoloItem) : var_export($respostaReprocessamentoLoteTypeProtocoloItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The protocolo property can only contain items of \HorusWSDL\Homologacao\StructType\ProtocoloType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set protocolo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType[] $protocolo
     * @return \HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType
     */
    public function setProtocolo(array $protocolo = array())
    {
        // validation for constraint: array
        if ('' !== ($protocoloArrayErrorMessage = self::validateProtocoloForArrayContraintsFromSetProtocolo($protocolo))) {
            throw new \InvalidArgumentException($protocoloArrayErrorMessage, __LINE__);
        }
        if (is_null($protocolo) || (is_array($protocolo) && empty($protocolo))) {
            unset($this->protocolo);
        } else {
            $this->protocolo = $protocolo;
        }
        return $this;
    }
    /**
     * Add item to protocolo value
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $item
     * @return \HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType
     */
    public function addToProtocolo(\HorusWSDL\Homologacao\StructType\ProtocoloType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \HorusWSDL\Homologacao\StructType\ProtocoloType) {
            throw new \InvalidArgumentException(sprintf('The protocolo property can only contain items of \HorusWSDL\Homologacao\StructType\ProtocoloType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->protocolo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType
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
