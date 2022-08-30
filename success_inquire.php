<?php 
  include('connection.php');
  session_start();
  if (!isset($_SESSION['get_data']['email'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/tup-logo.png" rel="icon">
    <title>P.E Department - Inquire Uniform</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light nav-bg sticky-top">
        <div class="container">
          <img src="assets/images/gear-spin.gif" width="50" alt="">
          <h4 class="title-pe">P.E Department</h4>
          <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" id="link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link" href="home.php#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link" href="#">Account</a>
              </li>
            </ul>
            <div class="d-flex flex-row-reverse bd-highlight">
                <h5 class="title_profile">Welcome,  <?php echo $_SESSION['get_data']['firstname']; ?> 
        
                 <a href="functions.php?logout" type="submit" class="btn btn-danger side" >Logout</a>
                </h5>
            </div>
          </div>
        </div>
      </nav>

        <div class="jumbotron">
            <div class="text-center">
                <h2>Your Request has been sent</h2>
                <p>Please wait for your response.</p>
            </div>
            <br>
            <div class="container marg-top d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                <div class="card card_custom">
                    <div class="row">
                        <div class="col">
                            <h4>Name: <?php echo $_SESSION['success_data'][0];?> <?php echo $_SESSION['success_data'][1];?> <?php echo $_SESSION['success_data'][2];?></h4>
                            <hr>
                            <h4>Gender: <?php echo $_SESSION['success_data'][5];?></h4>
                            <hr>
                            <h4>Course: <?php echo $_SESSION['success_data'][3];?></h4>
                            <hr>
                            <h4>Size of T-Shirt: <?php echo $_SESSION['success_data'][7];?></h4>
                            <hr>
                            <h4>Size of Short: <?php echo $_SESSION['success_data'][8];?></h4>
                            <hr>
                            <h4>Size of Joggingpants: <?php echo $_SESSION['success_data'][9];?></h4>
                        </div>
                        <div class="col">
                            <h4>P.E Teacher: <?php echo $_SESSION['success_data'][6];?></h4>
                            <hr>
                            <h4>Date of Submission: <?php echo $_SESSION['success_data'][14];?></h4>
                            <hr>
                            <h4>Department: <?php echo $_SESSION['success_data'][4];?></h4>
                            <hr>
                            <h4>Status: <?php
                                if($_SESSION['success_data'][12] == 'PENDING'){
                                    $set_pending = $_SESSION['success_data'][12];
                                    echo '<h4 style="color:rgb(185, 187, 48)">'.$set_pending.'</h4>';
                                }
                             
                             ?></h4>
                             <hr>
                             <h4>Note: <?php echo $_SESSION['success_data'][13];?></h4>

                        </div>
                        <div class="text-center">
                          <br>
                            <a class="btn btn-secondary" href="pickuniform.php">Back</a>
                            <button type="submit" class="btn btn-danger" name="request_student_1">Cancel Request</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   

  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/scripts.js"></script>
    <script>
      function preview() {
          frame_1.src=URL.createObjectURL(event.target.files[0]);
      }

    </script>
</body>
</html>