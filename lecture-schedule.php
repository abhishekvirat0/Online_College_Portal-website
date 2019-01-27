
<table class="table table-striped table-schedule">
	                <thead>
	                  <tr class="bg-theme-colored2">
	                    <th>Course</th>
	                    <th>Class</th>
	                    <th>Center</th>
	                    <th>Batchtiming</th>
	                    <th>Day</th>
	                    <th>ClassRoom</th>
	                    <th>Subject</th>
	                  </tr>
	                </thead>
	                <?php

	                $get2 = mysqli_query($conn,"SELECT * FROM  managetimetable");
	                while($row2 = mysqli_fetch_array($get2))
	                {

	                	$course=$row2['Course'];
	                	$class1=$row2['Class'];
	                	$branch = $row2['Center'];
	                	$Batchtiming = $row2['Batchtiming'];
	                	$subject=$row2['Day'];
	                	$tdate=$row2['ClassRoom'];
	                	$ttime=$row2['Subject'];

	                	?>  
	                <tbody>
	                  <tr>
	                    <td><?php echo $course; ?></td>
	                    <td><strong><?php echo $class1; ?></strong></td>
	                    <td><?php echo $branch; ?></td>
	                    <td><?php echo $Batchtiming; ?></td>
	                    <td><?php echo $subject; ?></td>
	                    <td><?php echo $tdate; ?></td>
	                    <td><?php echo $ttime; ?></td>
	                  </tr>
	              <?php }?>
	                  
	                </tbody>
	              </table>
	              