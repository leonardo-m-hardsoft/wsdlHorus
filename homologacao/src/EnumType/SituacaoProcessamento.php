<?php

namespace HorusWSDL\Homologacao\EnumType;

/**
 * This class stands for situacaoProcessamento EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Situação do registro. AGUARDANDO - Indica que as informações do lote estão aguardando o final do processamento.FINALIZADO - Indica que as informações do lote já foram processadas.AGUARDANDO_REPROCESSAMENTO - Indica que
 * ocorreu um erro ao processar e que as informações do lote estão aguardando o final do reprocessamento.
 * @subpackage Enumerations
 */
class SituacaoProcessamento
{
    /**
     * Constant for value 'AGUARDANDO'
     * @return string 'AGUARDANDO'
     */
    const VALUE_AGUARDANDO = 'AGUARDANDO';
    /**
     * Constant for value 'FINALIZADO'
     * @return string 'FINALIZADO'
     */
    const VALUE_FINALIZADO = 'FINALIZADO';
    /**
     * Constant for value 'AGUARDANDO_REPROCESSAMENTO'
     * @return string 'AGUARDANDO_REPROCESSAMENTO'
     */
    const VALUE_AGUARDANDO_REPROCESSAMENTO = 'AGUARDANDO_REPROCESSAMENTO';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AGUARDANDO
     * @uses self::VALUE_FINALIZADO
     * @uses self::VALUE_AGUARDANDO_REPROCESSAMENTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AGUARDANDO,
            self::VALUE_FINALIZADO,
            self::VALUE_AGUARDANDO_REPROCESSAMENTO,
        );
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
