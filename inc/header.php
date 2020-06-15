<?php
 $fonts = "verdana";
 $bgcolor = "#444";
 $fontcolor = "#fff";
?>

<!doctype html>
<html>
<head>
 <title>PHP OOP CRUD</title>
 <style>
  body{font-family:<?php echo $fonts;?>}
  .phpcoding{width:950px; margin: 0 auto;
   background:<?php echo "#ddd" ?>;}
  .headeroption, .footeroption{background:<?php echo $bgcolor; ?>;
   color:<?php echo $fontcolor; ?>;text-align:center;padding:20px;}
  .headeroption h2, .footeroption h2{margin:0;font-size:14px}
  .maincontent{min-height:400px;padding:20px;font-size:14px}
  p{margin:0}

 input[type="text"]{border: 1px solid #ddd; margin-bottom: 5px; width:228px;padding:5px; font-size: 16px;}
 input[type="submit"]{cursor: pointer; }

 select{font-size:14px;padding:2px 5px;width:250px;}

 .tblone{width:100%;border:1px solid #fff;}
 .tblone td{padding:5px 10px;text-align:center;}

 table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
 table.tblone tr:nth-child(2n){background:#fdf0f1 none repeat scroll 0 0;height:30px;}

 #myform{width:400px;border:1px solid #fff;padding:10px;}

 .insert{color: #06960E; font-weight: bold;}
 .delete{color: #DE5A24; font-weight: bold;}


.mainleft{border-right: 1px dotted #999; float:left; margin-right: 16px;width:350px;}
.mainright{float: right; width: 450px;}

 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Form Validation"; ?></h2>
 
<hr>
  <span style="float: right">
      <?php
         
          echo "Date: ".date("d-m-Y");
      ?>
  </span>

 </section>
  

  <section class="maincontent">
   <div><a href="index.php">For Student</a> || <a href="T_index.php">For Teacher</a></div> 