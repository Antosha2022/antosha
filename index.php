<?php
$title="Україна понад усе!";
require "blocks/header.php";
?>
<div class="container mt-4">	  
 <body >
 <h4>Тарас Шевченко</h4>
	<div class="row">
	  <div  class="col-5">
	          <img width=150px height=200px style="border:2px solid; border-color:#ffff33; border-radius:10px; outline: 2px solid; outline-color:#0080ff" src="taras.jpg" onClick = "window.location.reload(true);"/> 	
	 </div>
	 <div class="col-7"> 
 		<h5 class="d-flex flex-column align-items-center">Кобзарь</h5>
			<div class="d-flex flex-column align-items-center p-3 px-md-3 mb-3 bg-white border-bottom shadow-sm" style="border-radius:10px">		
			<?php require "blocks/random_cobzar.php";?>
			</div>
	</div>
	</body>

	</div>
<br><hr><br><i>На цій сторінці реалізован випадковий вибір рядків Кобзаря з бази даних через SQL-запит. Щоб побачити інші рядки - треба просто натиснути на портрет, або оновити сторінку.</i><hr>

		<?php
		require "blocks/footer.php";
		?>

