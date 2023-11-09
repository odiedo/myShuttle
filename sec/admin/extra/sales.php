                              ************************Bookings********************************<br>
                              <?php
                              include '../../include/conn.php';
                              $sql = "SELECT * FROM booking";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  while($row = mysqli_fetch_assoc($result)) {
                                  $pri_key = $row['pri_key'];
                                  $number_plate = $row['number_plate'];
                                  $lname = $row['lname'];
                                  $date = $row['booked_date'];
                                  $seat = $row['seat_no'];?>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                                  #<?php echo $pri_key; ?> <?php echo $date; ?> <?php echo $lname; ?> <?php echo $seat; ?> <?php echo $number_plate; ?><br>
                              <?php
                              } 
                              }else{
                                  echo "
                                      <script>
                                          alert('There is an error. Plese try again!');
                                      </script>
                                  ";
                              }?> ***************************Thank You**************************