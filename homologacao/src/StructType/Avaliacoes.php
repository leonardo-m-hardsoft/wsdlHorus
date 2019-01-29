<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for avaliacoes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Informa os dados relativos as avaliações deferidas. | Informa as avaliações que devem ser retificadas.
 * @subpackage Structs
 */
class Avaliacoes extends AbstractStructBase
{
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\AvaliacaoType[]
     */
    public $avaliacao;
    /**
     * Constructor method for avaliacoes
     * @uses Avaliacoes::setAvaliacao()
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoType[] $avaliacao
     */
    public function __construct(array $avaliacao = array())
    {
        $this
            ->setAvaliacao($avaliacao);
    }
    /**
     * Get avaliacao value
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoType[]
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * This method is responsible for validating the values passed to the setAvaliacao method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvaliacao method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvaliacaoForArrayContraintsFromSetAvaliacao(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $avaliacoesAvaliacaoItem) {
            // validation for constraint: itemType
            if (!$avaliacoesAvaliacaoItem instanceof \HorusWSDL\Homologacao\StructType\AvaliacaoType) {
                $invalidValues[] = is_object($avaliacoesAvaliacaoItem) ? get_class($avaliacoesAvaliacaoItem) : var_export($avaliacoesAvaliacaoItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The avaliacao property can only contain items of \HorusWSDL\Homologacao\StructType\AvaliacaoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set avaliacao value
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoType[] $avaliacao
     * @return \HorusWSDL\Homologacao\StructType\Avaliacoes
     */
    public function setAvaliacao(array $avaliacao = array())
    {
        // validation for constraint: array
        if ('' !== ($avaliacaoArrayErrorMessage = self::validateAvaliacaoForArrayContraintsFromSetAvaliacao($avaliacao))) {
            throw new \InvalidArgumentException($avaliacaoArrayErrorMessage, __LINE__);
        }
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Add item to avaliacao value
     * @throws \InvalidArgumentException
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoType $item
     * @return \HorusWSDL\Homologacao\StructType\Avaliacoes
     */
    public function addToAvaliacao(\HorusWSDL\Homologacao\StructType\AvaliacaoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \HorusWSDL\Homologacao\StructType\AvaliacaoType) {
            throw new \InvalidArgumentException(sprintf('The avaliacao property can only contain items of \HorusWSDL\Homologacao\StructType\AvaliacaoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->avaliacao[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\Avaliacoes
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
