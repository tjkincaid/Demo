<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php
session_start();
$_SESSION['greeting'] = "SUprise you suck";
setcookie("9Cookie", 81, (60*60*24*7));

?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	//  Create a link saying Click Here, and set
	//the link href to pass some parameters and use the GET super global to see it
	$id = 200;
	$button = "CLICK ME!"
	//	Step 2 - Set a cookie that expires in one week

	//	Step 3 - Start a session and set it to value, any value you want.

	
	?>


				<a href="9.php?id=<?php echo $id;?>"><?php echo $button;?></a>
				<?php
					if (isset($_GET['id'])){
						echo $_GET['id'];
					}
				echo $_SESSION['greeting'];
				?>







</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
