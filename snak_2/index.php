<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
?>

<!-- logica -->
<?php
    // logica della @ e del punto 
	if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];
		$chiocciola = strpos($mail, '@');
		if ($chiocciola && strpos($mail, '.', $chiocciola)) {
			$message = '- Mail inserita correttamente';
		} else {
			$message = '- Mail inserita non valida';
		}
    };
    //logica del nome piu lungo di 3 caratteri
    if (isset($_GET['name'])) {
		$name = $_GET['name'];
		if (strlen($name) > 3) {
			$message_name = '- nome inserito correttamente';
		} else {
			$message_name = '- nome troppo corto';
		}
    };
    //logica che eta sia un numero
    if (isset($_GET['age'])) {
		$age = $_GET['age'];
		if (is_numeric($age)) {
			$message_age = '- eta corretta';
		} else {
			$message_age = '- inserisci dei numeri';
		}
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>snak 2</title>
</head>
<body>
	<form action="" method="get">
		<label for="mail">Email:</label>
		<input type="text" name="mail" id="mail" value="<?= $mail ?>">
        <!-- nome -->
        <label for="name">Name:</label>
		<input type="text" name="name" id="name" value="<?= $name ?>">
        <!-- eta -->
        <label for="ege">Age:</label>
		<input type="text" name="age" id="age" value="<?= $age ?>">
        <!-- bottone invio  -->
		<button>invio</button>
        <!-- messaggio del test passato o no  -->
        <h3><?= $message ?></h3>
        <h3><?= $message_name ?></h3>
        <h3><?= $message_age ?></h3>
	</form>
</body>
</html>