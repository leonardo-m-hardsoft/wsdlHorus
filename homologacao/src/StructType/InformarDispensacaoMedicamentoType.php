<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarDispensacaoMedicamentoType StructType
 * @subpackage Structs
 */
class InformarDispensacaoMedicamentoType extends AbstractStructBase
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
     * - documentation: Informa os dados do estabelecimento que registra a dispensação.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao medicamento.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType
     */
    public $produto;
    /**
     * The paciente
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao paciente.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public $paciente;
    /**
     * The prescritor
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao prescritor.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\PrescritorType
     */
    public $prescritor;
    /**
     * Constructor method for InformarDispensacaoMedicamentoType
     * @uses InformarDispensacaoMedicamentoType::setIdentificacao()
     * @uses InformarDispensacaoMedicamentoType::setEstabelecimento()
     * @uses InformarDispensacaoMedicamentoType::setProduto()
     * @uses InformarDispensacaoMedicamentoType::setPaciente()
     * @uses InformarDispensacaoMedicamentoType::setPrescritor()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento
     * @param \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType $produto
     * @param \HorusWSDL\Homologacao\StructType\PacienteType $paciente
     * @param \HorusWSDL\Homologacao\StructType\PrescritorType $prescritor
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null, \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento = null, \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType $produto = null, \HorusWSDL\Homologacao\StructType\PacienteType $paciente = null, \HorusWSDL\Homologacao\StructType\PrescritorType $prescritor = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto)
            ->setPaciente($paciente)
            ->setPrescritor($prescritor);
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
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
     */
    public function setIdentificacao(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get estabelecimento value
     * @return \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType
     */
    public function getEstabelecimento()
    {
        return $this->estabelecimento;
    }
    /**
     * Set estabelecimento value
     * @param \HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
     */
    public function setEstabelecimento(\HorusWSDL\Homologacao\StructType\EstabelecimentoCNESCNPJType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType $produto
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoDispensacaoType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get paciente value
     * @return \HorusWSDL\Homologacao\StructType\PacienteType
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    /**
     * Set paciente value
     * @param \HorusWSDL\Homologacao\StructType\PacienteType $paciente
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
     */
    public function setPaciente(\HorusWSDL\Homologacao\StructType\PacienteType $paciente = null)
    {
        $this->paciente = $paciente;
        return $this;
    }
    /**
     * Get prescritor value
     * @return \HorusWSDL\Homologacao\StructType\PrescritorType|null
     */
    public function getPrescritor()
    {
        return $this->prescritor;
    }
    /**
     * Set prescritor value
     * @param \HorusWSDL\Homologacao\StructType\PrescritorType $prescritor
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
     */
    public function setPrescritor(\HorusWSDL\Homologacao\StructType\PrescritorType $prescritor = null)
    {
        $this->prescritor = $prescritor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType
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
