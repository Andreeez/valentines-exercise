<?php
    session_start(); 
    include 'include/header.php';
    include 'include/loginfunction.php';
    include 'include/data.php';
    if($_POST['email']){
      $msg = "you are logged in with this ip address : ".$_SESSION['ip']."\\n and this email : ".$_SESSION['email'].".";
      echo "<script type='text/javascript'>alert('$msg');</script>";
  } 
    if($_SESSION['email']){
      foreach($listofEachChoclate as $key=>$array){
        echo "<div>";
        echo "<h1>$array[name]</h1>";
        echo "<img src=".$array["image"].">";
        echo "<p>$array[description]</p>";
        echo "<h2>$array[price] kr</h2>";
        echo '<button onclick=\'showProduct()\'>Lägg i varukorg</button>';
        echo "</div>";
      }}
?>

<script>
    function showProduct(){
        alert(<?php echo "'hej'"; ?>);
    }
</script>
    blomma.php?username=anders&password=1234
    

<?php

/*
    
    }else{
        alert("hej")'
      include 'include/login.php'; 
    }*/ 
include 'include/footer.php';
 ?>