<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Criação de diretórios e upload de arquivos </title>
</head>
<body>
	<h2> Sistema de Upload de Arquivos </h2>
<form enctype="multipart/form-data" method="post" action="cadastro.php">
	<p>Nome da pasta:
		<input type="text" name="diretorio">
	</p>
	
	<p> <input name="userfile" type="file" /></p>
	<p> <button type="submit"> Enviar Arquivo </button> </p>
</form>
    <li> <a href="galery.php">
    	Ver galeria
    </a>
</li>

<form method="post" action="index.php">
    <p> Excluir arquivo:
        <select name="excluir" id="exc">
            <?php
            $ext = scandir("../provaPW");
            array_shift($ext);
            array_shift($ext);
            
            foreach ($ext as $key) {
                if (strpos($key, ".") ) {
                    
                }else{
                    echo "<option value=\"$key\"> $key </option>";
                }
            }
            $Maradona = $_POST['excluir'];
            if (is_dir($Maradona)) {
                $Pelé = scandir($Maradona);
                array_shift($Pelé);
                array_shift($Pelé);
                foreach ($Pelé as $Cruiff) {
                    unlink("$Maradona/$Cruiff");
                }
                rmdir($Maradona);
            }
            ?>
        </select>

        <p> <button type="submit"> Excluir pasta </button> </p>

</body>
<!-- DUPLA: WILLY E ISMAEL -->
</html>