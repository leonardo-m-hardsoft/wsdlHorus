<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoNovoType StructType
 * @subpackage Structs
 */
class ProdutoNovoType extends AbstractStructBase
{
    /**
     * The qtProduto
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - maxInclusive: 999999999999
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 1
     * - documentation: Quantidade do produto. Quantidade de entrada, saída, dispensação ou em estoque por unidade de apresentação conforme operação. | Quantidade do produto. Quantidade de entrada, saída, dispensação ou em estoque por unidade de
     * apresentação conforme operação.
     * @var int
     */
    public $qtProduto;
    /**
     * The coRegistroOrigem
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no
     * sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado. | Código de Registro a que os campos abaixo pertencem no sistema do usuário logado.
     * @var string
     */
    public $coRegistroOrigem;
    /**
     * The nuProduto
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 21
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Código do Medicamento: Código do produto cadastrado na base de dados do Hórus. | Código do Medicamento: Código do produto cadastrado na base de dados do Hórus.
     * @var string
     */
    public $nuProduto;
    /**
     * The nuLote
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Lote: Identificador do lote do medicamento. | Lote: Identificador do lote do medicamento.
     * @var string
     */
    public $nuLote;
    /**
     * The dtValidade
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4}
     * - documentation: Data de Validade: Identificador da data de validade do medicamento. Padrão: DD-MM-AAAA | Data de Validade: Identificador da data de validade do medicamento. Padrão: DD-MM-AAAA
     * @var string
     */
    public $dtValidade;
    /**
     * The dtRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4}
     * - documentation: Data de entrada, saída, dispensação ou de estoque do produto conforme operação. Padrão: DD-MM-AAAA | Data de entrada, saída, dispensação ou de estoque do produto conforme operação. Padrão: DD-MM-AAAA
     * @var string
     */
    public $dtRegistro;
    /**
     * The sgProgramaSaude
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 15
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Programa de saúde vinculado ao produto. | Programa de saúde vinculado ao produto.
     * @var string
     */
    public $sgProgramaSaude;
    /**
     * The coIUM
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Identificador Único de Medicamento do produto. | Identificador Único de Medicamento do produto.
     * @var string
     */
    public $coIUM;
    /**
     * The nuCNPJFabricante
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \d{14}
     * - documentation: Número do CNPJ do fabricante . | Número do CNPJ do fabricante . | Número do CNPJ do fabricante .
     * @var string
     */
    public $nuCNPJFabricante;
    /**
     * The noFabricanteInternacional
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 200
     * - minOccurs: 0
     * - documentation: Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento. | Nome do fabricante internacional do medicamento.
     * @var string
     */
    public $noFabricanteInternacional;
    /**
     * The tpSaida
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Tipo de saída do produto no estoque. | Tipo de saída do produto no estoque.
     * @var string
     */
    public $tpSaida;
    /**
     * The nuNotaFiscal
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minOccurs: 0
     * - documentation: Número documento fiscal ou simples remessa. | Número documento fiscal ou simples remessa.
     * @var string
     */
    public $nuNotaFiscal;
    /**
     * The nuValorUnitario
     * Meta informations extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 10
     * - minOccurs: 0
     * - totalDigits: 18
     * - documentation: Valor monetário unitário do produto adquirido. | Valor monetário unitário do produto adquirido.
     * @var float
     */
    public $nuValorUnitario;
    /**
     * The nuCNPJDistribuidor
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \d{14}
     * - documentation: Número do CNPJ do distribuidor. | Número do CNPJ do distribuidor.
     * @var string
     */
    public $nuCNPJDistribuidor;
    /**
     * The tpEntradaEstoque
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 0
     * - documentation: Tipo de entrada do produto no estoque. | Tipo de entrada do produto no estoque.
     * @var string
     */
    public $tpEntradaEstoque;
    /**
     * The dtCompetencia
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: [01][0-9]-[0-9]{4}
     * - documentation: Data de competência da dispensação. Padrão: MM-AAAA | Data de competência da dispensação. Padrão: MM-AAAA
     * @var string
     */
    public $dtCompetencia;
    /**
     * The coRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:integer
     * - minOccurs: 0
     * - totalDigits: 30
     * - documentation: Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de Registro interno no Hórus WS. | Código de
     * Registro interno no Hórus WS. | Código de registro no Hórus WS.
     * @var int
     */
    public $coRegistro;
    /**
     * Constructor method for ProdutoNovoType
     * @uses ProdutoNovoType::setQtProduto()
     * @uses ProdutoNovoType::setCoRegistroOrigem()
     * @uses ProdutoNovoType::setNuProduto()
     * @uses ProdutoNovoType::setNuLote()
     * @uses ProdutoNovoType::setDtValidade()
     * @uses ProdutoNovoType::setDtRegistro()
     * @uses ProdutoNovoType::setSgProgramaSaude()
     * @uses ProdutoNovoType::setCoIUM()
     * @uses ProdutoNovoType::setNuCNPJFabricante()
     * @uses ProdutoNovoType::setNoFabricanteInternacional()
     * @uses ProdutoNovoType::setTpSaida()
     * @uses ProdutoNovoType::setNuNotaFiscal()
     * @uses ProdutoNovoType::setNuValorUnitario()
     * @uses ProdutoNovoType::setNuCNPJDistribuidor()
     * @uses ProdutoNovoType::setTpEntradaEstoque()
     * @uses ProdutoNovoType::setDtCompetencia()
     * @uses ProdutoNovoType::setCoRegistro()
     * @param int $qtProduto
     * @param string $coRegistroOrigem
     * @param string $nuProduto
     * @param string $nuLote
     * @param string $dtValidade
     * @param string $dtRegistro
     * @param string $sgProgramaSaude
     * @param string $coIUM
     * @param string $nuCNPJFabricante
     * @param string $noFabricanteInternacional
     * @param string $tpSaida
     * @param string $nuNotaFiscal
     * @param float $nuValorUnitario
     * @param string $nuCNPJDistribuidor
     * @param string $tpEntradaEstoque
     * @param string $dtCompetencia
     * @param int $coRegistro
     */
    public function __construct($qtProduto = null, $coRegistroOrigem = null, $nuProduto = null, $nuLote = null, $dtValidade = null, $dtRegistro = null, $sgProgramaSaude = null, $coIUM = null, $nuCNPJFabricante = null, $noFabricanteInternacional = null, $tpSaida = null, $nuNotaFiscal = null, $nuValorUnitario = null, $nuCNPJDistribuidor = null, $tpEntradaEstoque = null, $dtCompetencia = null, $coRegistro = null)
    {
        $this
            ->setQtProduto($qtProduto)
            ->setCoRegistroOrigem($coRegistroOrigem)
            ->setNuProduto($nuProduto)
            ->setNuLote($nuLote)
            ->setDtValidade($dtValidade)
            ->setDtRegistro($dtRegistro)
            ->setSgProgramaSaude($sgProgramaSaude)
            ->setCoIUM($coIUM)
            ->setNuCNPJFabricante($nuCNPJFabricante)
            ->setNoFabricanteInternacional($noFabricanteInternacional)
            ->setTpSaida($tpSaida)
            ->setNuNotaFiscal($nuNotaFiscal)
            ->setNuValorUnitario($nuValorUnitario)
            ->setNuCNPJDistribuidor($nuCNPJDistribuidor)
            ->setTpEntradaEstoque($tpEntradaEstoque)
            ->setDtCompetencia($dtCompetencia)
            ->setCoRegistro($coRegistro);
    }
    /**
     * Get qtProduto value
     * @return int
     */
    public function getQtProduto()
    {
        return $this->qtProduto;
    }
    /**
     * Set qtProduto value
     * @param int $qtProduto
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setQtProduto($qtProduto = null)
    {
        // validation for constraint: int
        if (!is_null($qtProduto) && !is_numeric($qtProduto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($qtProduto, true), gettype($qtProduto)), __LINE__);
        }
        // validation for constraint: maxInclusive
        if ($qtProduto > 999999999999) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be inferior or equal to 999999999999, %s given', var_export($qtProduto, true), $qtProduto), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($qtProduto < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be superior or equal to 0, %s given', var_export($qtProduto, true), $qtProduto), __LINE__);
        }
        $this->qtProduto = $qtProduto;
        return $this;
    }
    /**
     * Get coRegistroOrigem value
     * @return string|null
     */
    public function getCoRegistroOrigem()
    {
        return $this->coRegistroOrigem;
    }
    /**
     * Set coRegistroOrigem value
     * @param string $coRegistroOrigem
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setCoRegistroOrigem($coRegistroOrigem = null)
    {
        // validation for constraint: string
        if (!is_null($coRegistroOrigem) && !is_string($coRegistroOrigem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coRegistroOrigem, true), gettype($coRegistroOrigem)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($coRegistroOrigem) && strlen($coRegistroOrigem) > 100) || (is_array($coRegistroOrigem) && count($coRegistroOrigem) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($coRegistroOrigem, true), is_scalar($coRegistroOrigem) ? strlen($coRegistroOrigem) : count($coRegistroOrigem)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($coRegistroOrigem) && strlen($coRegistroOrigem) < 1) || (is_array($coRegistroOrigem) && count($coRegistroOrigem) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($coRegistroOrigem, true), is_scalar($coRegistroOrigem) ? strlen($coRegistroOrigem) : count($coRegistroOrigem)), __LINE__);
        }
        $this->coRegistroOrigem = $coRegistroOrigem;
        return $this;
    }
    /**
     * Get nuProduto value
     * @return string|null
     */
    public function getNuProduto()
    {
        return $this->nuProduto;
    }
    /**
     * Set nuProduto value
     * @param string $nuProduto
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuProduto($nuProduto = null)
    {
        // validation for constraint: string
        if (!is_null($nuProduto) && !is_string($nuProduto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuProduto, true), gettype($nuProduto)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuProduto) && strlen($nuProduto) > 21) || (is_array($nuProduto) && count($nuProduto) > 21)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 21 element(s) or a scalar of 21 character(s) at most', var_export($nuProduto, true), is_scalar($nuProduto) ? strlen($nuProduto) : count($nuProduto)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($nuProduto) && strlen($nuProduto) < 1) || (is_array($nuProduto) && count($nuProduto) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($nuProduto, true), is_scalar($nuProduto) ? strlen($nuProduto) : count($nuProduto)), __LINE__);
        }
        $this->nuProduto = $nuProduto;
        return $this;
    }
    /**
     * Get nuLote value
     * @return string|null
     */
    public function getNuLote()
    {
        return $this->nuLote;
    }
    /**
     * Set nuLote value
     * @param string $nuLote
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuLote($nuLote = null)
    {
        // validation for constraint: string
        if (!is_null($nuLote) && !is_string($nuLote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuLote, true), gettype($nuLote)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuLote) && strlen($nuLote) > 30) || (is_array($nuLote) && count($nuLote) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 30 element(s) or a scalar of 30 character(s) at most', var_export($nuLote, true), is_scalar($nuLote) ? strlen($nuLote) : count($nuLote)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($nuLote) && strlen($nuLote) < 1) || (is_array($nuLote) && count($nuLote) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($nuLote, true), is_scalar($nuLote) ? strlen($nuLote) : count($nuLote)), __LINE__);
        }
        $this->nuLote = $nuLote;
        return $this;
    }
    /**
     * Get dtValidade value
     * @return string|null
     */
    public function getDtValidade()
    {
        return $this->dtValidade;
    }
    /**
     * Set dtValidade value
     * @param string $dtValidade
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setDtValidade($dtValidade = null)
    {
        // validation for constraint: string
        if (!is_null($dtValidade) && !is_string($dtValidade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtValidade, true), gettype($dtValidade)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtValidade) && !preg_match('/[0-3][0-9]-[01][0-9]-[0-9]{4}/', $dtValidade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[0-3][0-9]-[01][0-9]-[0-9]{4}"', var_export($dtValidade, true)), __LINE__);
        }
        $this->dtValidade = $dtValidade;
        return $this;
    }
    /**
     * Get dtRegistro value
     * @return string|null
     */
    public function getDtRegistro()
    {
        return $this->dtRegistro;
    }
    /**
     * Set dtRegistro value
     * @param string $dtRegistro
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setDtRegistro($dtRegistro = null)
    {
        // validation for constraint: string
        if (!is_null($dtRegistro) && !is_string($dtRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtRegistro, true), gettype($dtRegistro)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtRegistro) && !preg_match('/[0-3][0-9]-[01][0-9]-[0-9]{4}/', $dtRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[0-3][0-9]-[01][0-9]-[0-9]{4}"', var_export($dtRegistro, true)), __LINE__);
        }
        $this->dtRegistro = $dtRegistro;
        return $this;
    }
    /**
     * Get sgProgramaSaude value
     * @return string|null
     */
    public function getSgProgramaSaude()
    {
        return $this->sgProgramaSaude;
    }
    /**
     * Set sgProgramaSaude value
     * @param string $sgProgramaSaude
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setSgProgramaSaude($sgProgramaSaude = null)
    {
        // validation for constraint: string
        if (!is_null($sgProgramaSaude) && !is_string($sgProgramaSaude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sgProgramaSaude, true), gettype($sgProgramaSaude)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($sgProgramaSaude) && strlen($sgProgramaSaude) > 15) || (is_array($sgProgramaSaude) && count($sgProgramaSaude) > 15)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 15 element(s) or a scalar of 15 character(s) at most', var_export($sgProgramaSaude, true), is_scalar($sgProgramaSaude) ? strlen($sgProgramaSaude) : count($sgProgramaSaude)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sgProgramaSaude) && strlen($sgProgramaSaude) < 1) || (is_array($sgProgramaSaude) && count($sgProgramaSaude) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($sgProgramaSaude, true), is_scalar($sgProgramaSaude) ? strlen($sgProgramaSaude) : count($sgProgramaSaude)), __LINE__);
        }
        $this->sgProgramaSaude = $sgProgramaSaude;
        return $this;
    }
    /**
     * Get coIUM value
     * @return string|null
     */
    public function getCoIUM()
    {
        return $this->coIUM;
    }
    /**
     * Set coIUM value
     * @param string $coIUM
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setCoIUM($coIUM = null)
    {
        // validation for constraint: string
        if (!is_null($coIUM) && !is_string($coIUM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coIUM, true), gettype($coIUM)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($coIUM) && strlen($coIUM) > 20) || (is_array($coIUM) && count($coIUM) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 20 element(s) or a scalar of 20 character(s) at most', var_export($coIUM, true), is_scalar($coIUM) ? strlen($coIUM) : count($coIUM)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($coIUM) && strlen($coIUM) < 1) || (is_array($coIUM) && count($coIUM) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($coIUM, true), is_scalar($coIUM) ? strlen($coIUM) : count($coIUM)), __LINE__);
        }
        $this->coIUM = $coIUM;
        return $this;
    }
    /**
     * Get nuCNPJFabricante value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNuCNPJFabricante()
    {
        return isset($this->nuCNPJFabricante) ? $this->nuCNPJFabricante : null;
    }
    /**
     * Set nuCNPJFabricante value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nuCNPJFabricante
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuCNPJFabricante($nuCNPJFabricante = null)
    {
        // validation for constraint: string
        if (!is_null($nuCNPJFabricante) && !is_string($nuCNPJFabricante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuCNPJFabricante, true), gettype($nuCNPJFabricante)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nuCNPJFabricante) && !preg_match('/\\d{14}/', $nuCNPJFabricante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{14}"', var_export($nuCNPJFabricante, true)), __LINE__);
        }
        if (is_null($nuCNPJFabricante) || (is_array($nuCNPJFabricante) && empty($nuCNPJFabricante))) {
            unset($this->nuCNPJFabricante);
        } else {
            $this->nuCNPJFabricante = $nuCNPJFabricante;
        }
        return $this;
    }
    /**
     * Get noFabricanteInternacional value
     * @return string|null
     */
    public function getNoFabricanteInternacional()
    {
        return $this->noFabricanteInternacional;
    }
    /**
     * Set noFabricanteInternacional value
     * @param string $noFabricanteInternacional
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNoFabricanteInternacional($noFabricanteInternacional = null)
    {
        // validation for constraint: string
        if (!is_null($noFabricanteInternacional) && !is_string($noFabricanteInternacional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFabricanteInternacional, true), gettype($noFabricanteInternacional)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($noFabricanteInternacional) && strlen($noFabricanteInternacional) > 200) || (is_array($noFabricanteInternacional) && count($noFabricanteInternacional) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 200 element(s) or a scalar of 200 character(s) at most', var_export($noFabricanteInternacional, true), is_scalar($noFabricanteInternacional) ? strlen($noFabricanteInternacional) : count($noFabricanteInternacional)), __LINE__);
        }
        $this->noFabricanteInternacional = $noFabricanteInternacional;
        return $this;
    }
    /**
     * Get tpSaida value
     * @return string|null
     */
    public function getTpSaida()
    {
        return $this->tpSaida;
    }
    /**
     * Set tpSaida value
     * @param string $tpSaida
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setTpSaida($tpSaida = null)
    {
        // validation for constraint: string
        if (!is_null($tpSaida) && !is_string($tpSaida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tpSaida, true), gettype($tpSaida)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($tpSaida) && strlen($tpSaida) > 100) || (is_array($tpSaida) && count($tpSaida) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($tpSaida, true), is_scalar($tpSaida) ? strlen($tpSaida) : count($tpSaida)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($tpSaida) && strlen($tpSaida) < 1) || (is_array($tpSaida) && count($tpSaida) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($tpSaida, true), is_scalar($tpSaida) ? strlen($tpSaida) : count($tpSaida)), __LINE__);
        }
        $this->tpSaida = $tpSaida;
        return $this;
    }
    /**
     * Get nuNotaFiscal value
     * @return string|null
     */
    public function getNuNotaFiscal()
    {
        return $this->nuNotaFiscal;
    }
    /**
     * Set nuNotaFiscal value
     * @param string $nuNotaFiscal
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuNotaFiscal($nuNotaFiscal = null)
    {
        // validation for constraint: string
        if (!is_null($nuNotaFiscal) && !is_string($nuNotaFiscal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuNotaFiscal, true), gettype($nuNotaFiscal)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($nuNotaFiscal) && strlen($nuNotaFiscal) > 100) || (is_array($nuNotaFiscal) && count($nuNotaFiscal) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 100 element(s) or a scalar of 100 character(s) at most', var_export($nuNotaFiscal, true), is_scalar($nuNotaFiscal) ? strlen($nuNotaFiscal) : count($nuNotaFiscal)), __LINE__);
        }
        $this->nuNotaFiscal = $nuNotaFiscal;
        return $this;
    }
    /**
     * Get nuValorUnitario value
     * @return float|null
     */
    public function getNuValorUnitario()
    {
        return $this->nuValorUnitario;
    }
    /**
     * Set nuValorUnitario value
     * @param float $nuValorUnitario
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuValorUnitario($nuValorUnitario = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($nuValorUnitario) && strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.') + 1)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 10 fraction digits, %d given', var_export($nuValorUnitario, true), strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($nuValorUnitario) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $nuValorUnitario)) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 18 digits, "%d" given', var_export($nuValorUnitario, true), strlen(substr($nuValorUnitario, strpos($nuValorUnitario, '.')))), __LINE__);
        }
        $this->nuValorUnitario = $nuValorUnitario;
        return $this;
    }
    /**
     * Get nuCNPJDistribuidor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNuCNPJDistribuidor()
    {
        return isset($this->nuCNPJDistribuidor) ? $this->nuCNPJDistribuidor : null;
    }
    /**
     * Set nuCNPJDistribuidor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nuCNPJDistribuidor
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setNuCNPJDistribuidor($nuCNPJDistribuidor = null)
    {
        // validation for constraint: string
        if (!is_null($nuCNPJDistribuidor) && !is_string($nuCNPJDistribuidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nuCNPJDistribuidor, true), gettype($nuCNPJDistribuidor)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($nuCNPJDistribuidor) && !preg_match('/\\d{14}/', $nuCNPJDistribuidor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "\d{14}"', var_export($nuCNPJDistribuidor, true)), __LINE__);
        }
        if (is_null($nuCNPJDistribuidor) || (is_array($nuCNPJDistribuidor) && empty($nuCNPJDistribuidor))) {
            unset($this->nuCNPJDistribuidor);
        } else {
            $this->nuCNPJDistribuidor = $nuCNPJDistribuidor;
        }
        return $this;
    }
    /**
     * Get tpEntradaEstoque value
     * @return string|null
     */
    public function getTpEntradaEstoque()
    {
        return $this->tpEntradaEstoque;
    }
    /**
     * Set tpEntradaEstoque value
     * @param string $tpEntradaEstoque
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setTpEntradaEstoque($tpEntradaEstoque = null)
    {
        // validation for constraint: string
        if (!is_null($tpEntradaEstoque) && !is_string($tpEntradaEstoque)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tpEntradaEstoque, true), gettype($tpEntradaEstoque)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($tpEntradaEstoque) && strlen($tpEntradaEstoque) > 30) || (is_array($tpEntradaEstoque) && count($tpEntradaEstoque) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 30 element(s) or a scalar of 30 character(s) at most', var_export($tpEntradaEstoque, true), is_scalar($tpEntradaEstoque) ? strlen($tpEntradaEstoque) : count($tpEntradaEstoque)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($tpEntradaEstoque) && strlen($tpEntradaEstoque) < 1) || (is_array($tpEntradaEstoque) && count($tpEntradaEstoque) < 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length for %s, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', var_export($tpEntradaEstoque, true), is_scalar($tpEntradaEstoque) ? strlen($tpEntradaEstoque) : count($tpEntradaEstoque)), __LINE__);
        }
        $this->tpEntradaEstoque = $tpEntradaEstoque;
        return $this;
    }
    /**
     * Get dtCompetencia value
     * @return string|null
     */
    public function getDtCompetencia()
    {
        return $this->dtCompetencia;
    }
    /**
     * Set dtCompetencia value
     * @param string $dtCompetencia
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setDtCompetencia($dtCompetencia = null)
    {
        // validation for constraint: string
        if (!is_null($dtCompetencia) && !is_string($dtCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtCompetencia, true), gettype($dtCompetencia)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($dtCompetencia) && !preg_match('/[01][0-9]-[0-9]{4}/', $dtCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a scalar value that matches "[01][0-9]-[0-9]{4}"', var_export($dtCompetencia, true)), __LINE__);
        }
        $this->dtCompetencia = $dtCompetencia;
        return $this;
    }
    /**
     * Get coRegistro value
     * @return int|null
     */
    public function getCoRegistro()
    {
        return $this->coRegistro;
    }
    /**
     * Set coRegistro value
     * @param int $coRegistro
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
     */
    public function setCoRegistro($coRegistro = null)
    {
        // validation for constraint: int
        if (!is_null($coRegistro) && !is_numeric($coRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a numeric value, %s given', var_export($coRegistro, true), gettype($coRegistro)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($coRegistro) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $coRegistro)) !== 30) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 30 digits, "%d" given', var_export($coRegistro, true), strlen(substr($coRegistro, strpos($coRegistro, '.')))), __LINE__);
        }
        $this->coRegistro = $coRegistro;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoNovoType
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
