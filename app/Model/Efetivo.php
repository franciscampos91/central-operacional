<?php

class Efetivo
{

    public static function listarEfetivo(){
    
        $con = connection::getConn();

        $sql = "SELECT  * FROM ceop_efetivo";
        $stmt = $con->prepare($sql);
        $stmt->execute();
            
        return $stmt->fetchAll(); 
    }

}