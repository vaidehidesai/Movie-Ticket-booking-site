<?php 

if ($dbc = mysqli_connect('localhost','root', '','movie_ticket'))
	{
	print '<p>Successfully connected to MySQL!</p>';
	} 
else 
{
	print '<p>Not Connected</p>';
}

function SignIn() { 
session_start(); //starting the session for user profile page
 if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text { 
 	{
 		
 		 $selsql="SELECT UserNameID FROM users where userName = '$_POST[user]' AND pass = '$_POST[pass]'";
	$result = mysqli_query($dbc, $selsql);  
	$res=mysqli_fetch_assoc($result) ;

	
    
 		 if(!empty($res['userName']) AND !empty($res['pass'])) 
 		 	{
 		 	 $_SESSION['userName'] = $res['pass'];
 		 	  echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
 		 	}
 		 	 else 
 		 	 	{ 
 		 	 		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; }
 		 	 	 }
 		 	 	  }
 		 	 	  if(isset($_POST['submit'])) {
 		 	 	   SignIn();
 		 	 	    }
 ?>



