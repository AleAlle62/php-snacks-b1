<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
?>

<!-- logica -->
<?php
	$mail = isset($_GET['mail']) ? $_GET['mail'] :'';
	$name = isset($_GET['name']) ? $_GET['name'] :'';
	$age = isset($_GET['age']) ? $_GET['age'] :'';
	$message = isset($_GET['message']) ? $_GET['message'] :'';
	$message_name = isset($_GET['message_name']) ? $_GET['message_name'] :'';
	$message_age = isset($_GET['message_age']) ? $_GET['message_age'] :'';
	$last_message = isset($_GET['last_message']) ? $_GET['last_message'] :'';


    // logica della @ e del punto 
	if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];
		$chiocciola = strpos($mail, '@');
		if ($chiocciola && strpos($mail, '.', $chiocciola)) {
			$message = '- mail: Accesso riuscito';
		} else {
			$message = '- mail: Accesso negato';
		}
    };
    //logica del nome piu lungo di 3 caratteri
    if (isset($_GET['name'])) {
		$name = $_GET['name'];
		if (strlen($name) > 3) {
			$message_name = '- name: Accesso riuscito';
		} else {
			$message_name = '- name: Accesso negato';
		}
    };
    //logica che eta sia un numero
    if (isset($_GET['age'])) {
		$age = $_GET['age'];
		if (is_numeric($age)) {
			$message_age = '- age: Accesso riuscito';
		} else {
			$message_age = '- age: Accesso negato';
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
        <h3><?= $last_message ?></h3>
	</form>
</body>
</html>