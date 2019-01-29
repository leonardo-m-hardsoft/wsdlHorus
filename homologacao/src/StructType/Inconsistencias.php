<?php

namespace HorusWSDL\Homologacao\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for inconsistencias StructType
 * Meta informations extracted from the WSDL
 * - documentation: Informa os dados relativos as inconsistências encontradas.
 * @subpackage Structs
 */
class Inconsistencias extends AbstractStructBase
{
    /**
     * The inconsistencia
     * Meta informations extracted from the WSDL
     * - documentation: Os dados relativos a inconsistência.
     * - minOccurs: 1
     * @var \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public $inconsistencia;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Os dados do produto processado.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType
     */
    public $produto;
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Os dados da avaliação processada.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType
     */
    public $avaliacao;
    /**
     * Constructor method for inconsistencias
     * @uses Inconsistencias::setInconsistencia()
     * @uses Inconsistencias::setProduto()
     * @uses Inconsistencias::setAvaliacao()
     * @param \HorusWSDL\Homologacao\StructType\InconsistenciaType $inconsistencia
     * @param \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao
     */
    public function __construct(\HorusWSDL\Homologacao\StructType\InconsistenciaType $inconsistencia = null, \HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null, \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
    {
        $this
            ->setInconsistencia($inconsistencia)
            ->setProduto($produto)
            ->setAvaliacao($avaliacao);
    }
    /**
     * Get inconsistencia value
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaType
     */
    public function getInconsistencia()
    {
        return $this->inconsistencia;
    }
    /**
     * Set inconsistencia value
     * @param \HorusWSDL\Homologacao\StructType\InconsistenciaType $inconsistencia
     * @return \HorusWSDL\Homologacao\StructType\Inconsistencias
     */
    public function setInconsistencia(\HorusWSDL\Homologacao\StructType\InconsistenciaType $inconsistencia = null)
    {
        $this->inconsistencia = $inconsistencia;
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
     * @return \HorusWSDL\Homologacao\StructType\Inconsistencias
     */
    public function setProduto(\HorusWSDL\Homologacao\StructType\ProdutoVinculadoSimplesType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType|null
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @return \HorusWSDL\Homologacao\StructType\Inconsistencias
     */
    public function setAvaliacao(\HorusWSDL\Homologacao\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
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
     * @return \HorusWSDL\Homologacao\StructType\Inconsistencias
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
