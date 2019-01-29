<?php

namespace HorusWSDL\Homologacao\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consultar ServiceType
 * @subpackage Services
 */
class Consultar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named consultarResultadoProcessamento
     * Meta informations extracted from the WSDL
     * - documentation: Consulta o resultado do processamento relativo às informações enviadas em lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     * @return \HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType|bool
     */
    public function consultarResultadoProcessamento(\HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo)
    {
        try {
            $this->setResult($this->getSoapClient()->consultarResultadoProcessamento($protocolo));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named consultarInconsistencias
     * Meta informations extracted from the WSDL
     * - documentation: Consulta as inconsistências geradas relativas às informações enviadas em lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaProcessamentoLoteType|bool
     */
    public function consultarInconsistencias(\HorusWSDL\Homologacao\StructType\ProtocoloType $protocolo)
    {
        try {
            $this->setResult($this->getSoapClient()->consultarInconsistencias($protocolo));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named consultarReprocessamento
     * Meta informations extracted from the WSDL
     * - documentation: Consulta os protocolos em reprocessamento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao
     * @return \HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType|bool
     */
    public function consultarReprocessamento(\HorusWSDL\Homologacao\StructType\IdentificacaoType $identificacao)
    {
        try {
            $this->setResult($this->getSoapClient()->consultarReprocessamento($identificacao));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \HorusWSDL\Homologacao\StructType\InconsistenciaProcessamentoLoteType|\HorusWSDL\Homologacao\StructType\RespostaProcessamentoLoteType|\HorusWSDL\Homologacao\StructType\RespostaReprocessamentoLoteType
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
