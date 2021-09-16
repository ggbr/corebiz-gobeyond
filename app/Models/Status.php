<?php

namespace App\Models;


class Status 
{
    // 0 -  inativo
    // 1 -  ativo
    // 2 -  pendente pagamento
    // 3 -  formado
    // 4 -  expulso
    // 5 -  desativado
    // 6 -  ninja

    public const STATUS_INATIVO = 0;
    public const STATUS_ATIVO = 1;
    public const STATUS_PENDENTE_PAGAMENTO = 2;
    public const STATUS_FORMADO = 3;
    public const STATUS_EXPULSO = 4;
    public const STATUS_DESATIVADO = 5;
    public const STATUS_NINJA = 6;


    public static function statusInativo(){
        return 0;
    }

    public static function statusAtivo(){
        return 1;
    }
}
