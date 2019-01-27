<?php

include '../../connection.php';


if(isset($_POST['btnsubmit']))
{
$cid=$_POST["ID"];
$imginp = $_FILES['img']['name'];
$des=$_POST["MainDescription"];
$sdes=$_POST["ShortDescription"];
$orderid=$_POST["OrderID"];
// $isactive=$_POST["IsActive"];

if(isset($_POST["IsActive"]))
{
  $isactive = "checked";
}
else
{
  $isactive = "not checked"; 
}

if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 199999999) )
        {
           copy($_FILES['img']['tmp_name'],"SliderImages/".$imginp);
          
$query = mysqli_query($conn,"INSERT INTO slider(ID,SliderImage,MainDescription,ShortDescription,OrderID,IsActive) VALUES ('$cid','$imginp','$des','$sdes','$orderid','$isactive')");

?>
  <script>
    alert("Data Inserted");
    window.location.href="SliderImage.php"
  </script> 
<?php 
       
        }
        else
        {
          
        }
                  

}


}


?>