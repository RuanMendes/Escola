<?php 

session_start();

function mostrarAlerta(){
	if(isset($_SESSION[$tipo])){
		?>
<p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
			unset($_SESSION[$tipo]);
}
}
