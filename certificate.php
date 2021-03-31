<?php

      $name = $_POST['name'];
      $q1 = $_POST['q1'];
      $q2 = $_POST['q2'];
      $q3 = $_POST['q3'];
      $q4 = $_POST['q4'];
      $q5 = $_POST['q5'];

      $correct = 0;

      if ($q1 == 1) {
            $correct++;
      }

      if ($q2 == 3) {
            $correct++;
      }

      if ($q3 == 2) {
            $correct++;
      }

      if ($q4 == 3) {
            $correct++;
      }

      if ($q5 == 2) {
            $correct++;
      }

      $result = ($correct/5) * 100;


?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Certificate</title>
</head>
<body>
      <center>
            <div style="width:800px; height:450px; padding:20px; text-align:center; border: 10px solid #787878">
                  <div style="width:750px; height:400px; padding:20px; text-align:center; border: 5px solid #787878">
                        <span style="font-size:50px; font-weight:bold; text-decoration: underline;">Certificate of Completion</span>
                        <br><br>
                        <span style="font-size:25px"><i>This is to certify that</i></span>
                        <br><br>
                        <span style="font-size:30px"><b>
                              <?php echo $name; ?>
                        </b></span><br/><br/>
                        <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
                        <span style="font-size:30px">HTML & CSS Quiz</span> <br/><br/>
                        <span style="font-size:30px">with score of <b>
                              <?php echo $result . "%"; ?>
                        </b></span> <br/><br/>
                        <span style="font-size:25px"><i>Dated</i></span><br>
                                   <h3> Oct - 22 - 2020 </h3>
                  </div>
            </div>
      </center>
</body>
</html>