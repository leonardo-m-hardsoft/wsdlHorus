<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarSaidaMedicamentoType StructType
 * @subpackage Structs
 */
class InformarSaidaMedicamentoType extends AbstractStructBase
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
     * - documentation: Informa os dados relativos ao medicamento de saída.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
     */
    public $produto;
    /**
     * The estabelecimento_destino
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento de destino.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType
     */
    public $estabelecimento_destino;
    /**
     * Constructor method for InformarSaidaMedicamentoType
     * @uses InformarSaidaMedicamentoType::setIdentificacao()
     * @uses InformarSaidaMedicamentoType::setEstabelecimento()
     * @uses InformarSaidaMedicamentoType::setProduto()
     * @uses InformarSaidaMedicamentoType::setEstabelecimento_destino()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento
     * @param \HorusWSDL\Homologacao\StructType\ProdutoSaidaType $produto
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null, \HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento = null, \HorusWSDL\Homologacao\StructType\ProdutoSaidaType $produto = null, \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto)
            ->setEstabelecimento_destino($estabelecimento_destino);
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
     * @return \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null)
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
     * @return \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType
     */
    public function setEstabelecimento(\HorusWSDL\Homologacao\StructType\EstabelecimentoType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoSaidaType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoSaidaType $produto
     * @return \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoSaidaType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get estabelecimento_destino value
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType
     */
    public function getEstabelecimento_destino()
    {
        return $this->{'estabelecimento-destino'};
    }
    /**
     * Set estabelecimento_destino value
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     * @return \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType
     */
    public function setEstabelecimento_destino(\HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null)
    {
        $this->estabelecimento_destino = $this->{'estabelecimento-destino'} = $estabelecimento_destino;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType
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
