<?php

namespace HorusWSDL\Homologacao;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'InconsistenciaType' => '\\HorusWSDL\\Homologacao\\StructType\\InconsistenciaType',
            'SistemaExceptionType' => '\\HorusWSDL\\Homologacao\\StructType\\SistemaExceptionType',
            'ProdutoVinculadoSimplesType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoVinculadoSimplesType',
            'ProdutoVinculadoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoVinculadoType',
            'ProdutoVinculadoSaidaType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoVinculadoSaidaType',
            'ProdutoVinculadoEntradaType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoVinculadoEntradaType',
            'ProdutoVinculadoDispensacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoVinculadoDispensacaoType',
            'ProdutoDispensacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoDispensacaoType',
            'ProdutoSaidaType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoSaidaType',
            'ProdutoEntradaType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoEntradaType',
            'ProdutoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoType',
            'ProdutoNovoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProdutoNovoType',
            'PacienteType' => '\\HorusWSDL\\Homologacao\\StructType\\PacienteType',
            'PrescritorType' => '\\HorusWSDL\\Homologacao\\StructType\\PrescritorType',
            'ProtocoloExclusaoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProtocoloExclusaoType',
            'ProtocoloRetificadoType' => '\\HorusWSDL\\Homologacao\\StructType\\ProtocoloRetificadoType',
            'ProtocoloType' => '\\HorusWSDL\\Homologacao\\StructType\\ProtocoloType',
            'IdentificacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\IdentificacaoType',
            'IdentificacaoProtocoloType' => '\\HorusWSDL\\Homologacao\\StructType\\IdentificacaoProtocoloType',
            'EstabelecimentoType' => '\\HorusWSDL\\Homologacao\\StructType\\EstabelecimentoType',
            'EstabelecimentoCNESCNPJType' => '\\HorusWSDL\\Homologacao\\StructType\\EstabelecimentoCNESCNPJType',
            'EstabelecimentoNovoType' => '\\HorusWSDL\\Homologacao\\StructType\\EstabelecimentoNovoType',
            'AvaliacaoProtocoloType' => '\\HorusWSDL\\Homologacao\\StructType\\AvaliacaoProtocoloType',
            'AvaliacaoVinculadaSimplesType' => '\\HorusWSDL\\Homologacao\\StructType\\AvaliacaoVinculadaSimplesType',
            'AvaliacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\AvaliacaoType',
            'InformarPosicaoEstoqueEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarPosicaoEstoqueEmLoteType',
            'registro' => '\\HorusWSDL\\Homologacao\\StructType\\Registro',
            'RetificarPosicaoEstoqueEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarPosicaoEstoqueEmLoteType',
            'InformarEntradaMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarEntradaMedicamentoEmLoteType',
            'RetificarEntradaMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarEntradaMedicamentoEmLoteType',
            'InformarSaidaMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarSaidaMedicamentoEmLoteType',
            'RetificarSaidaMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarSaidaMedicamentoEmLoteType',
            'InformarDispensacaoMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarDispensacaoMedicamentoEmLoteType',
            'RetificarDispensacaoMedicamentoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarDispensacaoMedicamentoEmLoteType',
            'InformarAvaliacaoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarAvaliacaoEmLoteType',
            'avaliacoes' => '\\HorusWSDL\\Homologacao\\StructType\\Avaliacoes',
            'RetificarAvaliacaoEmLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarAvaliacaoEmLoteType',
            'RespostaProcessamentoLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProcessamentoLoteType',
            'RespostaReprocessamentoLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaReprocessamentoLoteType',
            'InconsistenciaProcessamentoLoteType' => '\\HorusWSDL\\Homologacao\\StructType\\InconsistenciaProcessamentoLoteType',
            'inconsistencias' => '\\HorusWSDL\\Homologacao\\StructType\\Inconsistencias',
            'InformarPosicaoEstoqueType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarPosicaoEstoqueType',
            'RetificarPosicaoEstoqueType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarPosicaoEstoqueType',
            'InformarEntradaMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarEntradaMedicamentoType',
            'RetificarEntradaMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarEntradaMedicamentoType',
            'InformarSaidaMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarSaidaMedicamentoType',
            'RetificarSaidaMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarSaidaMedicamentoType',
            'InformarDispensacaoMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarDispensacaoMedicamentoType',
            'RetificarDispensacaoMedicamentoType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarDispensacaoMedicamentoType',
            'ExclusaoRegistroType' => '\\HorusWSDL\\Homologacao\\StructType\\ExclusaoRegistroType',
            'RespostaExclusaoRegistroType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaExclusaoRegistroType',
            'RespostaProdutoRetificadoType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProdutoRetificadoType',
            'RespostaProdutoType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProdutoType',
            'RespostaProdutoEntradaType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProdutoEntradaType',
            'RespostaProdutoSaidaType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProdutoSaidaType',
            'RespostaProdutoDispensacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaProdutoDispensacaoType',
            'InformarAvaliacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\InformarAvaliacaoType',
            'RetificarAvaliacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\RetificarAvaliacaoType',
            'RespostaAvaliacaoType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaAvaliacaoType',
            'RespostaAvaliacaoRetificadaType' => '\\HorusWSDL\\Homologacao\\StructType\\RespostaAvaliacaoRetificadaType',
        );
    }
}
