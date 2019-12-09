<!DOCTYPE html>
<html>

<?php include('header.php');
      include('banner-form.php');
?>

	    <div class="container w-50">
	    	<h1 class="st-1">Iniciar uma Gestação: ""Há 6 meses mãe""</h1>
	    	<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="style-label">Nome do bebê</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome do bebê">
			  </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Mês de Gestação</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Em qual mês de gestação você se encontra?">
          <!-- <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém..</small> -->
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Sexo</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Qual sexo?">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Restrição Alimentar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alguma restrição alimentar?">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Cuidados</label>
          <!-- <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anote cuidados que a criança necessita"> -->
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Anote cuidados que a criança necessita"></textarea>
        </div>
			  			  
			  <button type="submit" class="btn style-btn">Partiu aos desafios da gravidez!</button>
			</form>
	    </div>    


<?php include('footer.php'); ?>

</html>
