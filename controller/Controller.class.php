<?php

class Controller
{
    public $indexupload = false;

    /**
     *
     */
    function upload(){
        if(isset($_REQUEST['upload'])){
        $erro = false;
        $nome = $_FILES['imagem']['name'];
        $tmp_nome = $_FILES['imagem']['tmp_name'];
        $tipo = $_FILES['imagem']['type'];
        $tamanho = $_FILES['imagem']['size'];
        $tam_maximo = 2000000;//tamanha em bytes
        $diretorio = "../imagem/";

        if($nome == ""){
            $erro = false;
            echo 'Escolha uma imagem a ser enviada!';
        }elseif(preg_match("/[][><}{)(:;,!?*%&#@]/", $nome)){
            $erro = true;
            echo 'O nome da imagem contem caracteres especiais!';
        }elseif($tamanho > $tam_maximo){
            $erro = true;
            echo 'Tamanho da imagem não permitido!';
        }elseif(!preg_match("/[gif|jpeg|jpg]/i",$tipo)){
            $erro = true;
            echo 'Extensão de imagem não permitida!';
        }elseif(!preg_match("/image/",$tipo)){
            $erro = true;
            echo 'Selecione um <u>Arquivo de imagem</u> a ser enviado!';
        }elseif(file_exists("$diretorio"."$nome")){
            $erro = true;
            echo 'Já existe um arquivo com esse nome, por favor renomeie-o!';
        }

        if(!$erro){
           move_uploaded_file($tmp_nome ,$diretorio.$nome);
           $img = new Imagens();
           if($img->addImagem($nome,$tipo,$tamanho)){
                $this->indexupload = true;
               header("Location: ../views/upload.php");
           }
        }
    }
    }
}