<!DOCTYPE html>
<html>

<?php include('header.php');
      include('banner-form.php');
?>

	    <div class="container w-50">
	    	<h1 class="st-1">Do que precisa?</h1>
	    	<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="style-label">Descrição do produto</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escreva o que seu bebê precisa..">
			  </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Marca</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bebês são sensíveis! Há alguma marca de preferência?">
          <!-- <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém..</small> -->
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Quantidade</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fale com a gente a quantidade esperada para podermos ajudar">
        </div>
			  			  
			  <button type="submit" class="btn style-btn">Guardar item!</button>
			</form>
	    </div>  

      <!-- <hr/><hr/> -->


<?php include('footer.php'); ?>

</html>
