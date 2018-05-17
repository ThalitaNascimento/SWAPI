
<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Demo Star Wars</title>
	<link rel = "icon" type = "image" href = "img/icon.PNG"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
	<link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">


  <!-- Particle -->
  <link rel="stylesheet" media="screen" href="particle/styleparticle.css">


</head>
<body id="particles-js">

  <!--Conexão-->
   <?php
  $json = file_get_contents("https://swapi.co/api/people/?format=json");
$json_data = json_decode($json, true);
  ?>



   <table class="stack">

<div id="titulos">
  <h1>TESTE APISYS <br> REQUISIÇÃO DE DADOS</h1>  
</div>
    <tr>
      <th width="150">NOME</th>
      <th width="150">PESO</th>
      <th width="150">CABELOS</th>
      <th width="150">OLHOS</th>
      <th width="150">GÊNERO</th>
    </tr>

<!--Requisição-->

<?php for ($i = 0; $i < 10; $i++) {  ?>
   
      <tr>
        <td><?php echo $json_data['results'][$i]['name']; ?></td>
        <td><?php echo $json_data['results'][$i]['mass']; ?></td>
        <td><?php echo $json_data['results'][$i]['hair_color']; ?></td>
        <td><?php echo $json_data['results'][$i]['eye_color']; ?></td>
        <td><?php echo $json_data['results'][$i]['gender']; ?></td>
      </tr>
    
  <?php }  ?>



  </table>
<!--Conexão-->
 <?php
  $json = file_get_contents("https://swapi.co/api/people/?format=json");
$json_data = json_decode($json, true);
  ?>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
<script>
  $(document).foundation();
</script>



<!-- particles.js container -->
<div ></div>

<!-- scripts -->
<script src="particle/particles.js"></script>
<script src="particle/app.js"></script>

</body>
</html>
