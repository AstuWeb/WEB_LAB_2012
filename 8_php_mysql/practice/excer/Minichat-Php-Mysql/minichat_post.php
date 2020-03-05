<?php
  session_start();
  if(isset($_POST['nom'])&&(isset($_POST['messages'])))
  {
  	 $_SESSION['nom'] = htmlspecialchars($_POST['nom']) ; 
  	 try {
	         $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
 	     }  catch (Exception $e) {
				                 die('Erreur : ' . $e->getMessage());
			                     }
	 if(isset($bdd))		
    	 {                   
             $req = $bdd->prepare('INSERT INTO test(nom,msg,dat) VALUES(:nom,:msg,:dat)');
             $req->execute(array(
            'nom' =>  htmlspecialchars($_POST['nom']),
            'msg' =>  htmlspecialchars($_POST['messages']),
            'dat' => date("Y-m-d H:i:s")
        	));
             header('Location: minichat.php');
         }  
  }
   else
      {
	       echo "Une Erreure dans le transfert des donner" ; 
      }
?>