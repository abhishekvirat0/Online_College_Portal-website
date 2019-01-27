<?php 
                  include('connection.php');
                  $sql = mysqli_query($conn,"select * from news");
                  while($row=mysqli_fetch_array($sql))
                  {
                    $title = $row['Title'];
                    $detail = $row['Details'];
                    $name = $row['name1'];
                    $date = $row['date1'];
                  }
                    ?>