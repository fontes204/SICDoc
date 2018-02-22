<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 15:53
 */
class fileUploadDao extends Model
{
   private $target_dir = "C:/xampp/htdocs/SICDoc/public/images/";
   private $caminho = "public/images/";
   private $target_file;
   private $tmp_name;
   private $uploadOk = 1;
   private $imageFileType;
   private $msg = '';
   private $rtn = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function carregarDoc($caminho,$nome,$tmp_name)
    {
        $this->target_dir .= $caminho .'/';
        $this->caminho .= $caminho .'/';
        $this->target_file = $this->target_dir . $nome;
        $this->imageFileType = strtolower(pathinfo($this->target_file,PATHINFO_EXTENSION));
        $this->tmp_name = $tmp_name;

        $this->fileFormat();
        if($this->uploadOk == 1) {

            $this->ficheiroExiste();

            if ($this->uploadOk == 1) {
                $rtn = $this->moverFileAndUpload();
                if ($rtn == true){
                    $this->rtn = array('rtn'=>$this->uploadOk,'nome'=>$nome,'caminho'=>$this->caminho);
                    return $this->rtn;
                }else {
                    $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
                    return $this->rtn;
                }
            } else{
                $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
                return $this->rtn;
            }
        } else{
            $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
            return $this->rtn;
        }
    }

    public function guardarDocumento(fileUpload $fileUpload, $tmp_name)
    {
        $this->target_dir .= $fileUpload->getCaminho() .'/';
        $this->caminho .= $fileUpload->getCaminho() .'/';
        $this->target_file = $this->target_dir . $fileUpload->getNome();
        $this->imageFileType = strtolower(pathinfo($this->target_file,PATHINFO_EXTENSION));
        $this->tmp_name = $tmp_name;

        $this->fileFormat();
        if($this->uploadOk == 1) {

            $this->ficheiroExiste();

            if ($this->uploadOk == 1) {
                $rtn = $this->moverFileAndUpload();
                if ($rtn == true){
                    $this->rtn = array('rtn'=>$this->uploadOk,'nome'=>$fileUpload->getNome(),'caminho'=>$this->caminho);
                    return $this->rtn;
                }else {
                    $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
                    return $this->rtn;
                }
            } else{
                $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
                return $this->rtn;
            }
        } else{
            $this->rtn = array('rtn'=>$this->uploadOk,'msg'=>$this->msg);
            return $this->rtn;
        }
    }

    public function alterar($tabela,$campos,$cond,$valores)
    {
        return $this->editar($tabela,$campos,$cond,$valores);
    }

    // Check if image file is a actual image or fake image
    public function isImagem()
    {
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
                $this->uploadOk = 1;
            } else {
                $this->msg .= "File is not an image.<br />";
                $this->uploadOk = 0;
            }
        }
    }

// Check if file already exists
    public function ficheiroExiste()
    {
        if (file_exists($this->target_file)) {
            $this->msg .= "Já existe um ficheiro com esse nome.<br /> Altera o nome e tenta novamente.<br />";
            $this->uploadOk = 0;
        }
    }

// Check file size
    public function isFileSize()
    {
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $this->msg .= "Sorry, your file is too large.<br />";
            $this->uploadOk = 0;
        }
    }

// Allow certain file formats
    public function fileFormat()
    {
        if($this->imageFileType != "jpg" && $this->imageFileType != "png" && $this->imageFileType != "jpeg"
            && $this->imageFileType != "pdf" ) {
            $this->msg .= "Só é permitido ficheiros JPG, JPEG, PNG & PDF.<br />";
            $this->uploadOk = 0;
        }
    }

// Check if $uploadOk is set to 0 by an error
    public function verificarErro()
    {
        if ($this->uploadOk == 0) {
            $this->msg .= "Sorry, your file was not uploaded.<br />";
        }
    }

// if everything is ok, try to upload file
    public function moverFileAndUpload()
    {
        if (move_uploaded_file($this->tmp_name, $this->target_file)) {
            return true;
        } else {
            $this->msg .= "Houve um erro ao fazer o upload do ficheiro.<br />";
        }
    }
}
