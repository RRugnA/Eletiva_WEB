<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content>
		<meta name="author" content>
		<link rel="icon" href="../../../../favicon.ico">
		<title>AGIS Sistema Acadêmico</title>
		<!-- Principal CSS do Bootstrap -->
		<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Estilos customizados para este template -->
		<link href="album.css" rel="stylesheet">
	</head>	
    <?php
		include('templates/header.php');
	?>

    <div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row ">
                <div class="col-12 py-5 text-center">
                    <p class="titulo"><h1>AGIS - Sistema Acadêmico</h1></p>
                </div>
            </div>
        </div>
    </div>

	<main role="main">

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
		  
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="aluno.png" data-holder-rendered="true">
                <div class="card-body">
					<p class="card-text">
						<h3><a href= "contato.php">Cadastrar Aluno</a></h3>
					</p>
                </div>
              </div>
            </div>
			
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="nota.png" data-holder-rendered="true">
                <div class="card-body">
					<p class="card-text">
						<h3><a href= "buscar.php">Procurar Aluno</a></h3>
					</p>
                </div>
              </div>
            </div>
			
			<div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="presença.png" data-holder-rendered="true">
                <div class="card-body">
					<p class="card-text">
						<h3><a href= "contato.php">Cadastrar Presença</a></h3>
					</p>
                </div>
              </div>
            </div>
			
          </div>
        </div>
      </div>
	  
    </main>
    
    <?php
		include('templates/footer.php');
	?>

</html>