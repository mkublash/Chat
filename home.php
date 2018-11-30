<?php
session_start();
if(isset($_SESSION['name']))
{
?>


<!doctype html>
<html>  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link href="css/home.css" rel="stylesheet" >
	<title>მთავარი1</title>

</head>


<body background="css/ukan3.jpg">



	<div class="header">

                 <ul>
		               <li><a href="home.php">მთავარი</a></li>

                     <li><a>კატეგორიები</a>
                    <ul>
                        <li><a href="#">ავტომობილები</a></li>
                        <li><a href="#">ბინები</a></li>
                        <li><a href="#">ტექნიკა</a></li>
                        <li><a href="#">აქსესუარები</a></li>
                        <li><a href="#">ტანსაცმელი</a></li>
                        <li><a href="#">ავეჯი</a></li>
                        <li><a href="#">სხვადასხვა</a></li>
                    </ul></li>

                    <li><a href="about.html">ჩვენს შესახებ</a></li>

                 </ul>

</div>


<div align="right"  id="anim_pic">


					<img src="logo/georgia.png" width="300px" height="300px">

				</div>



 <div  class="sidebar1" >

                           <h1> reklama </h1>

</div>

                  <div class="sidebar"><br><br><br>





                   <div class="C">
                                   <ul>
              	                  <li><a href="#">ჩემი გვერდი</a></li>
                                   </ul>
              	  </div><br><br>





                   <div class="C1">
                   	              <ul>
                                  <li><a href="#">შეტყობინებები</a></li></ul>
                   </div>


                      <br>


                   <div class="C2">
                                  <ul>
              	                  <li><a href="#">პარამეტრები</a></li></ul>
              	  </div>

              	    <br>

                  <div class="C3">
                      <form action="logout.php">
                                 <ul>
                                 <li><input type="submit" value="გასვლა"></li></ul>
                      </form>
              	  </div>


                       <div class="sidebar3">

                     	<textarea id="a" rows="30" cols="102" disabled="true">
                        <?php
                      include '../conn1.php';
                      $sql = "SELECT text FROM chat";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo $row['text'];
                        }
                    }
                      ?>
                      </textarea><br/>


                     	<form action="text.php" method="POST">
                     	<input  type="text" name="text">
                      <input type="submit"  value="Send">
                      </form>
                     </div>

	</body>
	</html>

    <?php
}
else
{
    header('Location: index.html');
}
?>