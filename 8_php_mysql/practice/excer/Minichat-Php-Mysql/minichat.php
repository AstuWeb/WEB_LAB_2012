<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Minichat</title>
</head>
<body>
<form method="post" action="minichat_post.php">
  <p>
  <?php 
    if(isset($_SESSION['nom']))
      {
                 echo '<p <label>Votre nom </label><input type="text" name="nom" value='.$_SESSION['nom'].'> </p>' ; 
       
      }
       else {
  ?>	
            <p>
             <label>Votre nom </label><input type="text" name="nom">
            </p>
             <?php 
            }
             ?>     
              
 
  <p>
  <label>messages  </label><input type="text" name="messages">
  </p>
  <input type="submit" name="Valider">
</form>
<?php
      $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
      if(isset($bdd))
      {
         $req=$bdd->query('SELECT * FROM test ORDER BY id DESC LIMIT 0, 10');
         while ($donne = $req->fetch()) 
           	 {
                  echo '<p> ['.$donne['dat'].'] '.'<Strong>' .htmlspecialchars($donne['nom']).'</Strong> : '.
                  htmlspecialchars($donne['msg']).'</p>' ; 
    	     }
      }

?>
</body>
</html>