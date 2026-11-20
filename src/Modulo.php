<?php
declare(strict_types=1);

/** Monta parâmetros; não realiza chamadas de rede. */
function prepararConsulta(array $args): array
{
    if (($args[0] ?? '')!=='bin') throw new InvalidArgumentException('Use bin PREFIXO_BIN.');
    $bin=trim($args[1] ?? '');
    if (!preg_match('/^[0-9]{6,8}$/D',$bin)) throw new InvalidArgumentException('Informe somente prefixo BIN de seis a oito dígitos, nunca cartão completo.');
    return ['bin',['bin'=>$bin]];
}
