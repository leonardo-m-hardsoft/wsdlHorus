<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaProdutoDispensacaoType StructType
 * @subpackage Structs
 */
class RespostaProdutoDispensacaoType extends AbstractStructBase
{
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
     */
    public $produto;
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaProdutoDispensacaoType
     * @uses RespostaProdutoDispensacaoType::setProduto()
     * @uses RespostaProdutoDispensacaoType::setProtocolo()
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null, \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo = null)
    {
        $this
            ->setProduto($produto)
            ->setProtocolo($protocolo);
    }
    /**
     * Get produto value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoDispensacaoType
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null)
    {
        $this->produto = $produto;
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
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoDispensacaoType
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
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoDispensacaoType
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
