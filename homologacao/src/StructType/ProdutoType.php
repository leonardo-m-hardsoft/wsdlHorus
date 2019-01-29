<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdutoType StructType
 * @subpackage Structs
 */
class ProdutoType extends AbstractStructBase
{
    /**
     * The nuProduto
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 21
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
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
     * - minOccurs: 1
     * - documentation: Lote: Identificador do lote do medicamento. | Lote: Identificador do lote do medicamento.
     * @var string
     */
    public $nuLote;
    /**
     * The dtValidade
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4}
     * - documentation: Data de Validade: Identificador da data de validade do medicamento. Padrão: DD-MM-AAAA | Data de Validade: Identificador da data de validade do medicamento. Padrão: DD-MM-AAAA
     * @var string
     */
    public $dtValidade;
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
     * The dtRegistro
     * Meta informations extracted from the WSDL
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-3][0-9]-[01][0-9]-[0-9]{4}
     * - documentation: Data de entrada, saída, dispensação ou de estoque do produto conforme operação. Padrão: DD-MM-AAAA | Data de entrada, saída, dispensação ou de estoque do produto conforme operação. Padrão: DD-MM-AAAA
     * @var string
     */
    public $dtRegistro;
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
     * Constructor method for ProdutoType
     * @uses ProdutoType::setNuProduto()
     * @uses ProdutoType::setNuLote()
     * @uses ProdutoType::setDtValidade()
     * @uses ProdutoType::setQtProduto()
     * @uses ProdutoType::setDtRegistro()
     * @uses ProdutoType::setCoRegistroOrigem()
     * @uses ProdutoType::setSgProgramaSaude()
     * @uses ProdutoType::setCoIUM()
     * @param string $nuProduto
     * @param string $nuLote
     * @param string $dtValidade
     * @param int $qtProduto
     * @param string $dtRegistro
     * @param string $coRegistroOrigem
     * @param string $sgProgramaSaude
     * @param string $coIUM
     */
    public function __construct($nuProduto = null, $nuLote = null, $dtValidade = null, $qtProduto = null, $dtRegistro = null, $coRegistroOrigem = null, $sgProgramaSaude = null, $coIUM = null)
    {
        $this
            ->setNuProduto($nuProduto)
            ->setNuLote($nuLote)
            ->setDtValidade($dtValidade)
            ->setQtProduto($qtProduto)
            ->setDtRegistro($dtRegistro)
            ->setCoRegistroOrigem($coRegistroOrigem)
            ->setSgProgramaSaude($sgProgramaSaude)
            ->setCoIUM($coIUM);
    }
    /**
     * Get nuProduto value
     * @return string
     */
    public function getNuProduto()
    {
        return $this->nuProduto;
    }
    /**
     * Set nuProduto value
     * @param string $nuProduto
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return string
     */
    public function getNuLote()
    {
        return $this->nuLote;
    }
    /**
     * Set nuLote value
     * @param string $nuLote
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return string
     */
    public function getDtValidade()
    {
        return $this->dtValidade;
    }
    /**
     * Set dtValidade value
     * @param string $dtValidade
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * Get dtRegistro value
     * @return string
     */
    public function getDtRegistro()
    {
        return $this->dtRegistro;
    }
    /**
     * Set dtRegistro value
     * @param string $dtRegistro
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \HorusWSDL\Homologacao\StructType\ProdutoType
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
