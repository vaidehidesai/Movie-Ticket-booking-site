<!DOCTYPE html>
<html lang="en">
<head>
	
 <style>
 .wrapper{
      display:grid;
    
      grid-template-columns:repeat(9, 0.5fr);
      grid-gap:1em;
   
      grid-auto-rows: minmax(5px, auto);
	 
    }


    .wrapper > div{

      padding:0.5em;
    }
	.imageBox {
  position: relative;
  float: left;
}

.imageBox .hoverImg {
  position: absolute;
  left: 0;
  top: 0;
  display: none;
}
#btn{
	 background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 10px;
}
#btn:hover{
background-color: rgb(10,0,0);
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.imageBox:hover .hoverImg {
  display: block;
}

}
  </style>
</head>
<body>


<?php 


if ($dbc = mysqli_connect('localhost','root', '','movie_ticket'))
	{
	print '<p>Successfully connected to MySQL!</p>';
	} 
else 
{
	print '<p>Not Connected</p>';
}
?>

<?php 


if(isset($_GET['var']))
{ 
$a=$_GET['var'];
	
	   $selsql="select * from hall1 where  seatnumber='$a' ";
	   	$result = mysqli_query($dbc, $selsql); 
		
		$res=mysqli_fetch_assoc($result);
		
		if($res['status']=="notbooked")
		{
	
	
	
	$name="Vaidehi";
	$email="vaidu@gmail.com";
	$date=date("Y/m/d");
	
	$time1="B1-1";
 
   $selsql1="insert into book (name,email,seatnumber,date) values ('$name','$email','$a','$date')";
   $selsql2="update hall1 set status='booked' where seatnumber='$a'";
    $sql= $selsql1.";".$selsql2;
	$result = mysqli_multi_query($dbc, $sql); 
	$res=mysqli_fetch_assoc($result);
	if($result)
	{?>
		<script>
		alert("Booking confirm");
		</script>
	<?php 	
	}
	else{ ?>
		<script>
		alert("Already booked");
		</script>
	<?php 
		
	}
		}
		else{
			?>
		<script>
		alert("Already booked");
		</script>
	<?php 
	
		}
	
}

?>




  <div class="wrapper">
   
	
<?php 
	for ($i=1;$i<=8;$i++)
{    if($i==5)
	{ ?>
	<div> </div>	

   
		<?php
	}
	?>
   <div >
   
   <a href="book1.php?var=A<?php echo $i ; ?>"> A<?php echo $i ?>

	
	
	<?php


$time1="A".$i;
 
   $selsql="select * from hall1 where seatnumber='$time1'";
	$result = mysqli_query($dbc, $selsql);  


$res=mysqli_fetch_assoc($result) ;

	if($res['status']=="notbooked")
    

{?>
<div class="imageBox">
  <div class="imageInn">
    <img src="seat-empty.png" height="80em" id="new">
  </div>
  <div class="hoverImg">
    <img src="seat-selected.png" height="80em" id="new">
  </div>
</div>

	<?php }
	else{ ?>
	<div class="imageBox">	<img src="seat-booked.png" height="80px"></div>
	<?php }
	
	

	?>
   
   </a>
   
   
   
   
	
    </div>
<?php }?>
	





  
	
<?php 
	for ($i=1;$i<=8;$i++)
{    if($i==5)
	{ ?>
<div> </div>	

   
		<?php
	}
	?>
   <div >
 <a href="book1.php?var=B<?php echo $i ; ?>"> B<?php echo $i ?>

	
	
	<?php


$time1="B".$i;
 
   $selsql="select * from hall1 where seatnumber='$time1'";
	$result = mysqli_query($dbc, $selsql);  


$res=mysqli_fetch_assoc($result) ;

	if($res['status']=="notbooked")
    

{?>

<div class="imageBox">
  <div class="imageInn">
    <img src="seat-empty.png" height="80em" id="new">
  </div>
  <div class="hoverImg">
    <img src="seat-selected.png" height="80em" id="new">
  </div>
</div>
	<?php }
	else{ ?>
<div class="imageBox">	<img src="seat-booked.png" height="80px"></div>
	<?php }
	
	

	?>
  </a>  </div>
<?php }?>

<?php 
	for ($i=1;$i<=8;$i++)
{ 
   if($i==5)
	{ ?>
<div> </div>	
	
   
		<?php
	}
	?>
   <div>
 <a href="book1.php?var=C<?php echo $i ; ?>"> C<?php echo $i ?>

	
	
	<?php


$time1="C".$i;
 
   $selsql="select * from hall1 where seatnumber='$time1'";
	$result = mysqli_query($dbc, $selsql);  


$res=mysqli_fetch_assoc($result) ;

	if($res['status']=="notbooked")
    

{?>

<div class="imageBox">
  <div class="imageInn">
    <img src="seat-empty.png" height="80em" id="new">
  </div>
  <div class="hoverImg">
    <img src="seat-selected.png" height="80em" id="new">
  </div>
</div>

	<?php }
	else{ ?>
	<div class="imageBox">	<img src="seat-booked.png" height="80px"></div>
	<?php }
	
	

	?>
 </a>   </div>
<?php }?>



    
	
<?php 
	for ($i=1;$i<=8;$i++)
{ 
   if($i==5)
	{ ?>
	<div></div>	

   
		<?php
	}
	?>
   <div>
	 <a href="book1.php?var=D<?php echo $i ; ?>"> D<?php echo $i ?>

	
	
	<?php


$time1="D".$i;
 
   $selsql="select * from hall1 where seatnumber='$time1'";
	$result = mysqli_query($dbc, $selsql);  


$res=mysqli_fetch_assoc($result) ;

	if($res['status']=="notbooked")
    

{?>

<div class="imageBox">
  <div class="imageInn">
    <img src="seat-empty.png" height="80em" id="new">
  </div>
  <div class="hoverImg">
    <img src="seat-selected.png" height="80em" id="new">
  </div>
</div>
	<?php }
	else{ ?>
	<div class="imageBox">	<img src="seat-booked.png" height="80px"></div>
	<?php }
	
	

	?>
  </a>  </div>
<?php }?>


	
</div><table width="90%"><tr><td>
 <div class="relative">
  <ul id="seatDescription" style="list-style-type:none;" >
									<li><span><img src="seat-empty.png" height="24px"></span> Available Seat</li>
									<li><span><img src="seat-booked.png" height="24px"></span> Booked Seat</li>
									<li><span><img src="seat-selected.png" height="24px"></span> Selected Seat</li>
								</ul>
								</div></td>
								<td>
									<a href="movie_pay.html"><button id="btn"> Confirm selection </button></td></tr></table>
						
</body>
</html>
