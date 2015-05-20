<?php			
   include 'inc/configure.inc.php';

   //Récupération des données.
   
   $log = htmlspecialchars($_POST['login']);
   $mdp = htmlspecialchars($_POST['mdp']); 
   
   if ($_POST['mdp'] != '')
   {
      $requete = "SELECT * FROM user WHERE log='$log' AND mdp='$mdp'";
   }
   
   $verif = mysql_query($requete);
   $tab = mysql_fetch_array($verif);
   
   if($tab['mdp']!= '')
   {
      $req = "SELECT * FROM user WHERE log='$log'";
      $res = mysql_query($req);
      $sql = mysql_fetch_array($res);
      $_SESSION['id'] = intval($sql['id_user']);
      $_SESSION['nom'] = $sql['nom_user'];
      $_SESSION['prenom'] = $sql['prenom_user'];
      //$_SESSION['type'] = $sql['type_connect'];
      header("Location:index.php");
   }
   else
   {
      header("Location:login.php");
   }
?>