<?php

namespace HorusWSDL\Homologacao\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Informar ServiceType
 * @subpackage Services
 */
class Informar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named informarPosicaoEstoque
     * Meta informations extracted from the WSDL
     * - documentation: Informa a posição de estoque do produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueType $informarPosicaoEstoque
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoType|bool
     */
    public function informarPosicaoEstoque(\HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueType $informarPosicaoEstoque)
    {
        try {
            $this->setResult($this->getSoapClient()->informarPosicaoEstoque($informarPosicaoEstoque));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarEntradaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a entrada de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoType $informarEntradaMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoType|bool
     */
    public function informarEntradaMedicamento(\HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoType $informarEntradaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarEntradaMedicamento($informarEntradaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarSaidaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a saída de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType $informarSaidaMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoType|bool
     */
    public function informarSaidaMedicamento(\HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType $informarSaidaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarSaidaMedicamento($informarSaidaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarDispensacaoMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a dispensação de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType $informarDispensacaoMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoType|bool
     */
    public function informarDispensacaoMedicamento(\HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType $informarDispensacaoMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarDispensacaoMedicamento($informarDispensacaoMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarAvaliacaoDeferida
     * Meta informations extracted from the WSDL
     * - documentation: Registra uma avaliação deferida de um dado estabelecimento e usuário do SUS.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarAvaliacaoType $informarAvaliacaoDeferida
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoType|bool
     */
    public function informarAvaliacaoDeferida(\HorusWSDL\Homologacao\StructType\InformarAvaliacaoType $informarAvaliacaoDeferida)
    {
        try {
            $this->setResult($this->getSoapClient()->informarAvaliacaoDeferida($informarAvaliacaoDeferida));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarPosicaoEstoqueEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa a posição de estoque de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueEmLoteType $informarPosicaoEstoqueEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|bool
     */
    public function informarPosicaoEstoqueEmLote(\HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueEmLoteType $informarPosicaoEstoqueEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarPosicaoEstoqueEmLote($informarPosicaoEstoqueEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarEntradaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as entradas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoEmLoteType $informarEntradaMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|bool
     */
    public function informarEntradaMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoEmLoteType $informarEntradaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarEntradaMedicamentoEmLote($informarEntradaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarSaidaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as saídas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoEmLoteType $informarSaidaMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|bool
     */
    public function informarSaidaMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoEmLoteType $informarSaidaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarSaidaMedicamentoEmLote($informarSaidaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * informarDispensacaoMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as dispensações de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoEmLoteType $informarDispensacaoMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|bool
     */
    public function informarDispensacaoMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoEmLoteType $informarDispensacaoMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarDispensacaoMedicamentoEmLote($informarDispensacaoMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarAvaliacaoDeferidaEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Registra as avaliações deferidas em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType $informarAvaliacaoDeferidaEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|bool
     */
    public function informarAvaliacaoDeferidaEmLote(\HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType $informarAvaliacaoDeferidaEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarAvaliacaoDeferidaEmLote($informarAvaliacaoDeferidaEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloType|\HorusWSDL\Homologacao\StructType\RespostaAvaliacaoType|\HorusWSDL\Homologacao\StructType\RespostaProdutoType
     */
    public function getResult()
    {
        return parent::getResult();
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
