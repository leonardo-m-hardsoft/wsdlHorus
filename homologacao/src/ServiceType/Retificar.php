<?php

namespace HorusWSDL\Homologacao\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retificar ServiceType
 * @subpackage Services
 */
class Retificar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named retificarPosicaoEstoque
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a posição de estoque do produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueType $retificarPosicaoEstoque
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarPosicaoEstoque(\HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueType $retificarPosicaoEstoque)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarPosicaoEstoque($retificarPosicaoEstoque));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarEntradaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica entrada de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType $retificarEntradaMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarEntradaMedicamento(\HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType $retificarEntradaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarEntradaMedicamento($retificarEntradaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarSaidaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a saída de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoType $retificarSaidaMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarSaidaMedicamento(\HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoType $retificarSaidaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarSaidaMedicamento($retificarSaidaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarDispensacaoMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a dispensação de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoType $retificarDispensacaoMedicamento
     * @return \HorusWSDL\Homologacao\StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarDispensacaoMedicamento(\HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoType $retificarDispensacaoMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarDispensacaoMedicamento($retificarDispensacaoMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarAvaliacaoDeferida
     * Meta informations extracted from the WSDL
     * - documentation: Retifica uma avaliação deferida de um dado estabelecimento e usuário do SUS.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarAvaliacaoType $retificarAvaliacaoDeferida
     * @return \HorusWSDL\Homologacao\StructType\RespostaAvaliacaoRetificadaType|bool
     */
    public function retificarAvaliacaoDeferida(\HorusWSDL\Homologacao\StructType\RetificarAvaliacaoType $retificarAvaliacaoDeferida)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarAvaliacaoDeferida($retificarAvaliacaoDeferida));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarPosicaoEstoqueEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as informações de posição de estoque em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueEmLoteType $retificarPosicaoEstoqueEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|bool
     */
    public function retificarPosicaoEstoqueEmLote(\HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueEmLoteType $retificarPosicaoEstoqueEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarPosicaoEstoqueEmLote($retificarPosicaoEstoqueEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarEntradaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as entradas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoEmLoteType $retificarEntradaMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|bool
     */
    public function retificarEntradaMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoEmLoteType $retificarEntradaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarEntradaMedicamentoEmLote($retificarEntradaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarSaidaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as saídas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoEmLoteType $retificarSaidaMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|bool
     */
    public function retificarSaidaMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoEmLoteType $retificarSaidaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarSaidaMedicamentoEmLote($retificarSaidaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * retificarDispensacaoMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as dispensações de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoEmLoteType $retificarDispensacaoMedicamentoEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|bool
     */
    public function retificarDispensacaoMedicamentoEmLote(\HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoEmLoteType $retificarDispensacaoMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarDispensacaoMedicamentoEmLote($retificarDispensacaoMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarAvaliacaoDeferidaEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as avaliações deferidas em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\RetificarAvaliacaoEmLoteType $retificarAvaliacaoDeferidaEmLote
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|bool
     */
    public function retificarAvaliacaoDeferidaEmLote(\HorusWSDL\Homologacao\StructType\RetificarAvaliacaoEmLoteType $retificarAvaliacaoDeferidaEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarAvaliacaoDeferidaEmLote($retificarAvaliacaoDeferidaEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \HorusWSDL\Homologacao\StructType\ProtocoloRetificadoType|\HorusWSDL\Homologacao\StructType\RespostaAvaliacaoRetificadaType|\HorusWSDL\Homologacao\StructType\RespostaProdutoRetificadoType
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
