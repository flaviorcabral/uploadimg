<?php
    require_once 'config.php';
    $c = new Controller();
    $c->upload();
?>
<html>
<title>SCRIPT PARA UPLOAD DE IMAGENS</title>
<body>
    <div><span>SCRIPT PARA UPLOAD DE IMAGENS</span></div>
    <div>
        <?php if($c->indexupload):?>
        <?php echo "<p> Imagem persistida com sucesso!</p>" ?>
        <?php endif; ?>
    </div>
    <br><br><br>
    <form method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="imagem" id="fileToUpload">
        <input type="hidden" name="upload" value="processar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>