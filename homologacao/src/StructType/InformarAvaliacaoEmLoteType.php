<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarAvaliacaoEmLoteType StructType
 * @subpackage Structs
 */
class InformarAvaliacaoEmLoteType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public $identificacao;
    /**
     * The avaliacoes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\Avaliacoes
     */
    public $avaliacoes;
    /**
     * Constructor method for InformarAvaliacaoEmLoteType
     * @uses InformarAvaliacaoEmLoteType::setIdentificacao()
     * @uses InformarAvaliacaoEmLoteType::setAvaliacoes()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @param \HorusWSDL\Homologacao\StructType\Avaliacoes $avaliacoes
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null, \HorusWSDL\Homologacao\StructType\Avaliacoes $avaliacoes = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setAvaliacoes($avaliacoes);
    }
    /**
     * Get identificacao value
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }
    /**
     * Set identificacao value
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @return \HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get avaliacoes value
     * @return \HorusWSDL\Homologacao\StructType\Avaliacoes
     */
    public function getAvaliacoes()
    {
        return $this->avaliacoes;
    }
    /**
     * Set avaliacoes value
     * @param \HorusWSDL\Homologacao\StructType\Avaliacoes $avaliacoes
     * @return \HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType
     */
    public function setAvaliacoes(\HorusWSDL\Homologacao\StructType\Avaliacoes $avaliacoes = null)
    {
        $this->avaliacoes = $avaliacoes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType
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
