<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaAvaliacaoRetificadaType StructType
 * @subpackage Structs
 */
class RespostaAvaliacaoRetificadaType extends AbstractStructBase
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
     * @var \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaAvaliacaoRetificadaType
     * @uses RespostaAvaliacaoRetificadaType::setAvaliacao()
     * @uses RespostaAvaliacaoRetificadaType::setProtocolo()
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType $protocolo
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null, \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType $protocolo = null)
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
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoRetificadaType
     */
    public function setAvaliacao(\HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Get protocolo value
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|null
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType $protocolo
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoRetificadaType
     */
    public function setProtocolo(\HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType $protocolo = null)
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
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoRetificadaType
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
