<!DOCTYPE html>
<html>

<?php include('header.php');
      include('banner-form.php');
?>

	    <div class="container w-50">
	    	<h1 class="st-1">Chá de Bebê</h1>
	    	<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="style-label">Nome do chá de bebê</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome do bebê">
			  </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Local</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Em qual mês de gestação você se encontra?">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Horário</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Qual sexo?">
        </div>

        


			  <button type="submit" class="btn style-btn">Criar chá de bebê!</button>
			</form>
	    </div>    


<?php include('footer.php'); ?>

</html>
