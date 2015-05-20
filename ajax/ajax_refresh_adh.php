<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=gestassoft', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM adherents WHERE nom_adh LIKE (:keyword) OR prenom_adh LIKE (:keyword) ORDER BY nom_adh, prenom_adh ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();

foreach ($list as $rs) {
	// put in bold the written text
	$nom_adh = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nom_adh']);
	$prenom_adh = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['prenom_adh']);
	$id = $rs['id_adh'];

	// add new option
    echo '<li onclick="set_item_pass(\''.str_replace("'", "\'", $rs['prenom_adh']." ".$rs['nom_adh']." ".$rs['id_adh']).'\')"><img src="./img/adh/'.$id.'.jpg">'.$prenom_adh.' '.$nom_adh.'</li>';
}
?>