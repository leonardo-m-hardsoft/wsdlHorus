<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExclusaoRegistroType StructType
 * @subpackage Structs
 */
class ExclusaoRegistroType extends AbstractStructBase
{
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao protocolo para exclusão.
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public $protocolo;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao produto que será excluído.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
     */
    public $produto;
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos a avaliação que será excluída.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
     */
    public $avaliacao;
    /**
     * Constructor method for ExclusaoRegistroType
     * @uses ExclusaoRegistroType::setProtocolo()
     * @uses ExclusaoRegistroType::setProduto()
     * @uses ExclusaoRegistroType::setAvaliacao()
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $avaliacao
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo = null, \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null, \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $avaliacao = null)
    {
        $this
            ->setProtocolo($protocolo)
            ->setProduto($produto)
            ->setAvaliacao($avaliacao);
    }
    /**
     * Get protocolo value
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     * @return \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType
     */
    public function setProtocolo(\HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo = null)
    {
        $this->protocolo = $protocolo;
        return $this;
    }
    /**
     * Get produto value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType|null
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto
     * @return \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType|null
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $avaliacao
     * @return \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType
     */
    public function setAvaliacao(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType
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
