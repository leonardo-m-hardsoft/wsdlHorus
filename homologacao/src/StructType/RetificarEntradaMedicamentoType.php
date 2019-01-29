<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarEntradaMedicamentoType StructType
 * @subpackage Structs
 */
class RetificarEntradaMedicamentoType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType
     */
    public $identificacao;
    /**
     * The estabelecimento
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento que registrou a saída.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\EstabelecimentoType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao registro de entrada de medicamento a ser retificado.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType
     */
    public $produto;
    /**
     * Constructor method for RetificarEntradaMedicamentoType
     * @uses RetificarEntradaMedicamentoType::setIdentificacao()
     * @uses RetificarEntradaMedicamentoType::setEstabelecimento()
     * @uses RetificarEntradaMedicamentoType::setProduto()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType $identificacao
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType $produto
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType $identificacao = null, \HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento = null, \HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType $produto = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto);
    }
    /**
     * Get identificacao value
     * @return \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }
    /**
     * Set identificacao value
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType $identificacao
     * @return \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoProtocoloType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get estabelecimento value
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoType
     */
    public function getEstabelecimento()
    {
        return $this->estabelecimento;
    }
    /**
     * Set estabelecimento value
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento
     * @return \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType
     */
    public function setEstabelecimento(\HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType $produto
     * @return \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoEntradaType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType
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
