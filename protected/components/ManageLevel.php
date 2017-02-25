<?php
class ManageLevel
{
    const ADMIN = 1;
    const COMUN = 2;

    private $niveisUsuario;

    public static function getLevel($nivelUsuario)
    {
        $niveisUsuario['ADMIN'] = 1;
        $niveisUsuario['COMUN'] = 2;
        return isset($niveisUsuario[$nivelUsuario]) ? $niveisUsuario[$nivelUsuario] : null;
    }

}
