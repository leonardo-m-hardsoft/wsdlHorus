<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaAvaliacaoType StructType
 * @subpackage Structs
 */
class RespostaAvaliacaoType extends AbstractStructBase
{
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Dados da avaliacao.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
     */
    public $avaliacao;
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - documentation: Dados do protocolo de registro.
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaAvaliacaoType
     * @uses RespostaAvaliacaoType::setAvaliacao()
     * @uses RespostaAvaliacaoType::setProtocolo()
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null, \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo = null)
    {
        $this
            ->setAvaliacao($avaliacao)
            ->setProtocolo($protocolo);
    }
    /**
     * Get avaliacao value
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoType
     */
    public function setAvaliacao(\HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Get protocolo value
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|null
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoType
     */
    public function setProtocolo(\HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo = null)
    {
        $this->protocolo = $protocolo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoType
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
