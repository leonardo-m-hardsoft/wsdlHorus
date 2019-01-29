<?php

namespace HorusWSDL\Homologacao\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Excluir ServiceType
 * @subpackage Services
 */
class Excluir extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named excluirRegistros
     * Meta informations extracted from the WSDL
     * - documentation: Exclui o(s) registro(s) enviados a partir do número de protocolo original e a data do recebimento. É possível remover individualmente registros informando também o código do registro no Hórus.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType $excluirRegistro
     * @return \HorusWSDL\Homologacao\StructType\RespostaExclusaoRegistroType|bool
     */
    public function excluirRegistros(\HorusWSDL\Homologacao\StructType\ExclusaoRegistroType $excluirRegistro)
    {
        try {
            $this->setResult($this->getSoapClient()->excluirRegistros($excluirRegistro));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \HorusWSDL\Homologacao\StructType\RespostaExclusaoRegistroType
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
