<?php

  extract($_POST);

	if (!is_dir($diretorio)) {
  mkdir($diretorio);
	}

  $nomeTemp = $_FILES["userfile"]['tmp_name']; 
  $nomeFile = $_FILES["userfile"]['name'];

  $parInfo = pathinfo("$nomeFile");

  $ext = $parInfo['extension'];

  $abc = scandir($diretorio);

if((sizeof($abc)-2) == 0) {
  if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){
  	move_uploaded_file($nomeTemp,$diretorio."/".$nomeFile."1".".$ext");
  	echo "<br>"."Upload Realizado";
 }
  }else if ((sizeof($abc)-2) == 1) {
    if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){
    move_uploaded_file($nomeTemp,$diretorio."/".$nomeFile."2".".$ext");
    echo "<br>"."Upload Realizado";
}
}else if ((sizeof($abc)-2) == 2) {
    if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){
    move_uploaded_file($nomeTemp,$diretorio."/".$nomeFile."3".".$ext");
    echo "<br>"."Upload Realizado";
}
}else{
  	echo "<br>"."Atingiu o Máximo de 3 Arquivos";
  }
if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){
  echo "<br>"."Arquivo Compativel";
}else{
  echo  "<br>"."Arquivo Não Compativel";
}
//DUPLA: WILLY E ISMAEL
  ?>