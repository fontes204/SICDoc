<?php
    class Model extends Database{
        #code
        function __construct()
        {
            $this->conn = new Database();
        }

        public function retornaFields($dados=array())
        {
            $limites=array("[","]");
            $k=json_encode($dados);
            $campos=str_replace($limites,"",$k);
            $campos=str_replace("\"",'',$campos);
            return '('.$campos.')';
        }
        public function retornaFieldSel($dados=array())
        {
            $limites=array("[","]");
            $k=json_encode($dados);
            $campos=str_replace($limites,"",$k);
            $campos=str_replace("\"",'',$campos);
            return ''.$campos.'';
        }

        public function returnPlaceholder($dados=array())
        {
            $tam=explode(",",self::retornaFields($dados));
            $k="(";
            for ($i=0;$i<count($tam);$i++)
            {
                if ($i==count($tam)-1)
                    $k=$k."?)";
                else
                    $k=$k."?,";
            }
            return $k;
        }

//    public function insert($tabela,$campos=array(),$k=array())
//    {
//        $stmt=self::conn()->prepare("INSERT INTO ".$tabela." ".self::retornaFields($campos)." VALUES " .self::returnPlaceholder($campos));
//        if($stmt->execute($k))
//            return true;
//        else
//            return false;
//
//    }
    public function insert($k=array())
    {
        try {
            $stmt = self::conn()->prepare("INSERT INTO " . $k[0] . " " . self::retornaFields($k[1]) . " VALUES " . self::returnPlaceholder($k[2]));
            if ($stmt->execute($k[2]))
                return true;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function insertFilha()
    {

    }

    public function listarTodos($tabela)
    {
        try {
            $stmt = self::conn()->prepare("SELECT * FROM ".$tabela);
            if ($stmt->execute())
                return $stmt;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function ultimoElemento($tabela)
    {
        try{
            $stmt = self::conn()->prepare("SELECT _id FROM ".$tabela." ORDER BY _id DESC LIMIT 1");
            if ($stmt->execute())
                return $stmt->fetch();
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function listarPorId($tabela,$id)
    {
        try {
            $stmt = self::conn()->prepare("SELECT * FROM " . $tabela . " WHERE _id=?");
            if ($stmt->execute(array($id)))
                return $stmt;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function listarPorNome($tabela,$nome)
    {
        try {
            $stmt = self::conn()->prepare("SELECT * FROM " . $tabela . " WHERE _nome=?");
            if ($stmt->execute(array($nome)))
                return $stmt;
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function buscaExaustiva($campo=array(),$tabela,$condicao,$valor=array())
    {
        try {
            $stmt = self::conn()->prepare("SELECT ".self::retornaFieldSel($campo)." FROM ".$tabela." WHERE ".$condicao);
            if($stmt->execute($valor))
                return $stmt;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function editar($tabela,$campos=array(),$cond,$valores=array())
    {
        //update usuario set nome=?,
        //update utilizador set _nome=?, _telefone=?, _id_funcao=? where _id=?
        try {
            $stmt = self::conn()->prepare("UPDATE ".$tabela." SET ".self::retornaFieldSel($campos)." WHERE ".self::retornaFieldSel($cond));
            if($stmt->execute($valores))
                return true;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function apagar($tabela,$id)
    {
        try {
            $stmt = self::conn()->prepare("DELETE FROM ".$tabela." WHERE _id=?");
            if($stmt->execute(array($id)))
                return true;
        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
    