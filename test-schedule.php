<div class="col-md-12">
<table class="table table-striped table-schedule">
	                <thead>
	                  <tr class="bg-theme-colored2">
	                  	<th>Course</th>
	                  	<th>Class</th>
	                  	<th>Branch</th>
	                  	<th>city</th>
	                  	<th>Subject</th>
	                  	<th>Test Date</th>
	                  	<th>Test Timing</th>
	                  	<th>Center</th>
	                  </tr>
	                </thead>
	                <?php

	                $get2 = mysqli_query($conn,"SELECT * FROM  weeklytest");
	                while($row2 = mysqli_fetch_array($get2))
	                {

	                	$course=$row2['courseid'];
	                	$class1=$row2['classname'];
	                	$branch=$row2['bid'];
	                	$city=$row2['centerid'];
	                	$subject=$row2['syid'];
	                	$tdate=$row2['date1'];
	                	$ttime=$row2['ttime'];
	                	$acenter=$row2['centerid'];

	                	?>            

	                <tbody>
	                  <tr>
	                    <td style="text-transform: uppercase;"><?php echo $course;?></td>
	                    <td style="text-transform: uppercase;"><strong><?php echo $class1;?></strong></td>
	                    <td><?php echo $branch;?></td>
	                    <td><?php echo $city;?></td>
	                    <td><?php echo $subject;?></td>
	                    <td><strong><?php echo $tdate;?></strong></td>
	                    <td><?php echo $ttime;?></td>
	                    <td><?php echo $acenter;?></td>
	                  </tr>
<!-- 	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Inauguration</strong></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Key Note</strong></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Tea Break</strong></td>
	                    <td>&nbsp;</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Lunch Break</strong></td>
	                    <td>&nbsp;</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Vote of Thanks</strong></td>
	                    <td>Room1</td>
	                  </tr> -->
	                </tbody>
	            <?php }?>
	              </table>
	          </div>