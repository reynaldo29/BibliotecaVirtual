<?php
  include_once 'db.php';


  if(isset($_POST['save'])){
    $titulo=$MySql->real_escape_string($_POST['titulo']);
    $autor=$MySql->real_escape_string($_POST['autor']);
    $año=$MySql->real_escape_string($_POST['año']);
    $url=$MySql->real_escape_string($_POST['url']);
    $esp=$MySql->real_escape_string($_POST['esp']);
    $editorial=$MySql->real_escape_string($_POST['editorial']);

    $SQL=$MySql->query("INSERT INTO DATA(titulo,autor,año,url,esp,editorial)
    VALUES('$titulo','$autor','$año','$url','$esp','$editorial')");
    if(!$SQL){
      echo $MySql->error;
    }
  }

if(isset($_GET['del'])){
  $SQL=$MySql->query("DELETE FROM data WHERE id=".$_GET['del']);
  header("Location:index.php");
}

if(isset($_GET['edit'])){
  $SQL=$MySql->query("SELECT *FROM data WHERE id=".$_GET['edit']);
  $getfila=$SQL->fetch_array();

}
if(isset($_POST['update'])){
  $SQL=$MySql->query("UPDATE data SET titulo='".$_POST['titulo']."',autor='".$_POST['autor']."'
  ,año='".$_POST['año']."',url='".$_POST['url']."',esp='".$_POST['esp']."'
  ,editorial='".$_POST['editorial']."' WHERE id=".$_GET['edit']);
  header("Location: index.php");
}

 ?>
