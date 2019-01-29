<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://horusws.treinamento.saude.gov.br/horus-ws-service/HorusWSService/HorusWS?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://horusws.treinamento.saude.gov.br/horus-ws-service/HorusWSService/HorusWS?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \HorusWSDL\Homologacao\ClassMap::get(),
);
/**
 * Samples for Informar ServiceType
 */
$informar = new \HorusWSDL\Homologacao\ServiceType\Informar($options);
/**
 * Sample call for informarPosicaoEstoque operation/method
 */
if ($informar->informarPosicaoEstoque(new \HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarEntradaMedicamento operation/method
 */
if ($informar->informarEntradaMedicamento(new \HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarSaidaMedicamento operation/method
 */
if ($informar->informarSaidaMedicamento(new \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarDispensacaoMedicamento operation/method
 */
if ($informar->informarDispensacaoMedicamento(new \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarAvaliacaoDeferida operation/method
 */
if ($informar->informarAvaliacaoDeferida(new \HorusWSDL\Homologacao\StructType\InformarAvaliacaoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarPosicaoEstoqueEmLote operation/method
 */
if ($informar->informarPosicaoEstoqueEmLote(new \HorusWSDL\Homologacao\StructType\InformarPosicaoEstoqueEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarEntradaMedicamentoEmLote operation/method
 */
if ($informar->informarEntradaMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\InformarEntradaMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarSaidaMedicamentoEmLote operation/method
 */
if ($informar->informarSaidaMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\InformarSaidaMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarDispensacaoMedicamentoEmLote operation/method
 */
if ($informar->informarDispensacaoMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\InformarDispensacaoMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarAvaliacaoDeferidaEmLote operation/method
 */
if ($informar->informarAvaliacaoDeferidaEmLote(new \HorusWSDL\Homologacao\StructType\InformarAvaliacaoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Samples for Retificar ServiceType
 */
$retificar = new \HorusWSDL\Homologacao\ServiceType\Retificar($options);
/**
 * Sample call for retificarPosicaoEstoque operation/method
 */
if ($retificar->retificarPosicaoEstoque(new \HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarEntradaMedicamento operation/method
 */
if ($retificar->retificarEntradaMedicamento(new \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarSaidaMedicamento operation/method
 */
if ($retificar->retificarSaidaMedicamento(new \HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarDispensacaoMedicamento operation/method
 */
if ($retificar->retificarDispensacaoMedicamento(new \HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarAvaliacaoDeferida operation/method
 */
if ($retificar->retificarAvaliacaoDeferida(new \HorusWSDL\Homologacao\StructType\RetificarAvaliacaoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarPosicaoEstoqueEmLote operation/method
 */
if ($retificar->retificarPosicaoEstoqueEmLote(new \HorusWSDL\Homologacao\StructType\RetificarPosicaoEstoqueEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarEntradaMedicamentoEmLote operation/method
 */
if ($retificar->retificarEntradaMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\RetificarEntradaMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarSaidaMedicamentoEmLote operation/method
 */
if ($retificar->retificarSaidaMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\RetificarSaidaMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarDispensacaoMedicamentoEmLote operation/method
 */
if ($retificar->retificarDispensacaoMedicamentoEmLote(new \HorusWSDL\Homologacao\StructType\RetificarDispensacaoMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarAvaliacaoDeferidaEmLote operation/method
 */
if ($retificar->retificarAvaliacaoDeferidaEmLote(new \HorusWSDL\Homologacao\StructType\RetificarAvaliacaoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Samples for Excluir ServiceType
 */
$excluir = new \HorusWSDL\Homologacao\ServiceType\Excluir($options);
/**
 * Sample call for excluirRegistros operation/method
 */
if ($excluir->excluirRegistros(new \HorusWSDL\Homologacao\StructType\ExclusaoRegistroType()) !== false) {
    print_r($excluir->getResult());
} else {
    print_r($excluir->getLastError());
}
/**
 * Samples for Consultar ServiceType
 */
$consultar = new \HorusWSDL\Homologacao\ServiceType\Consultar($options);
/**
 * Sample call for consultarResultadoProcessamento operation/method
 */
if ($consultar->consultarResultadoProcessamento(new \HorusWSDL\Homologacao\StructType\ProtocoloType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarInconsistencias operation/method
 */
if ($consultar->consultarInconsistencias(new \HorusWSDL\Homologacao\StructType\ProtocoloType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarReprocessamento operation/method
 */
if ($consultar->consultarReprocessamento(new \HorusWSDL\Homologacao\StructType\IdentificacaoType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
