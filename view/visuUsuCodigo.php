<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do usuario</label>
    <div class="input-group">
      <div class="input-group-text">Código</div>
      <input type="text" name="codigoUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Código do usuario">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Fone</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php
$codigousu = isset ($_POST["codigoUsu"])? $_POST["codigoUsu"]:"" ;

if($codigousu){

$dado1 = visuUsuarioCodigo($conn,$codigousu);

if($dado1): 
  ?>
      <tr>
        <th scope="row"><?=$dado1["idusu"] ?></th>
        <td><?=$dado1["nomeusu"] ?></td>
        <td><?=$dado1["emailusu"] ?></td>
        <td><?=$dado1["foneusu"] ?></td>
        <td>
        <form action="../view/alterarForm.php" method="post">
          <input type="hidden" value="<?=$dado1["idusu"] ?>" name="codigousu">
          <button type="submit" class="bnt btn-primary">Alterar</button>
        </form>

        </td>
      <?php
      endif;
}
?>
