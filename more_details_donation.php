<?php
	session_start();
	require_once("webcontrol/connect_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php require_once("title.php"); ?></title>
	<?php require_once("metatag.php"); ?>
<!--Banner start-->
    <script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Banner end-->

<!--Top menu start-->
	<link rel="stylesheet" href="top_menu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="top_menu/script.js"></script>
<!--Top menu end-->

<!--responsive menu start-->
	<link rel="stylesheet" href="css/resmenu.css"> <!-- Gem style -->
	<script src="js/resmenu.js"></script> <!-- Modernizr -->
<!--responsive menu end-->

<!--Left menu start-->
	<link rel="stylesheet" href="left_menu/styles.css">
<!--Left menu end-->

<!--Anather start-->
	<link href="css_2/image_effect.css" rel="stylesheet">
	<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Left menu & slider start-->
<div class="row" style="padding:10px 0px 10px 0px;">
	<div class="col-md-2  hidden-sm hidden-xs  ">
	<?php require_once("left_menu.php"); ?>
	</div>



	<div class="col-md-10">
		<div class="row" style="padding:0px 0px 10px 0px;">
			
			<div class="col-md-12">
				<div style=" background-color:#39619c; border-radius:6px 6px 0px 0px; color:#FFFFFF; font-size:20px; padding:8px 0px 8px 10px;">
					This books are donated by our respected clients
				</div>
			</div>

			<?php
		    $p2 = mysql_query("select * from donation where status = 'Received' and quantity > 0");
			while($q2 = mysql_fetch_array($p2))
			{
			$id 	= $q2['id'];
			$uid	= $q2['user_id'];
			$bname 	= $q2['book_name'];
			$image 	= $q2['image'];
			$status = $q2['status'];
			$q1 = mysql_query("select name from registration_form where id = $uid");
			$row = mysql_fetch_row($q1);
			$uname = $row[0];
			?>
			<div class="col-md-3" style="padding-top:30px;">
				<div class="col-md-12" style="border:solid 1px #39619c; padding-bottom:10px;">
					<div class="row">
						<div class="hovereffect">
							<img class="img-responsive" src="/boighor/donation_photo/<?php echo $image; ?>" alt="Products Image" style="height:200px; padding-left:20%">
							<div class="overlay">
							  <a class="info" href="donation_product_details.php?pro_id=<?php echo $id;?>">BUY NOW</a>
							</div>
						</div>
					</div>
					<div class="row" style="padding-left:5px; padding-right:5px;">
						<div class="col-md-12" style="color:#666666; font-weight:bold; padding-bottom:10px; padding-top:10px;"> <?php echo $bname; ?> </div>
						<div>
							<div class="col-md-6">
							<div class="row">
								
								<div style="font-weight:bold;padding-left:5%">Donor Name</div>
              
								<div style="padding-left:5%"><?php echo $uname; ?></div>
							</div>
							</div>
							<div class="col-md-6" align="right">
							<div class="row">
							<a href="donation_product_details.php?pro_id=<?php echo $id;?>"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#FF0000;">View Details</span></a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
                $a++;
                if($a == $b) echo "</div>";
                if($a == $b) $a=0;
              } 
            ?>
		</div>
	</div>
</div>
<!--Left menu & slider end-->
</div>
<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a422116bbdfe97b137fd4f3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>