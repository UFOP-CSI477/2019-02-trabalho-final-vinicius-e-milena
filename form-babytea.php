<!DOCTYPE html>
<html>

<?php include('header.php');
      include('banner-form.php');
?>

	    <div class="container w-50">
	    	<h1 class="st-1">Organizar chá de bebê</h1>
	    	<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="style-label">Convidado</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="É um prazer ter você em meu chá de bebê">
			  </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">E-mail</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o e-mail para informarmos você de todas as novidades">
          <!-- <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém..</small> -->
        </div>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opções de itens
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="">Alguma ação</a>
            <a class="dropdown-item" href="">Outra ação</a>
            <a class="dropdown-item" href="">Alguma coisa aqui</a>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="style-label">Telefone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Whatts App de preferência">
        </div>
			  			  
			  <button type="submit" class="btn style-btn">Convidar pessoa!</button>
			</form>
	    </div>  

      <!-- <hr/><hr/> -->

      <div class="container w-50">
        <h1 class="text-left st-1">Lista de Convidados</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
              <th scope="col">Nickname</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
              <th scope="col">Nickname</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
 


<?php include('footer.php'); ?>

</html>
