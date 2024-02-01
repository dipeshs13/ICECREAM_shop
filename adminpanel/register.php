<?php
  include '../components/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - seller registeration page</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <!-- font is left here link -->
</head>
<body>

   <div class="form-container">
      <form action="" method="" enctype="multipart/form-data" class="register">
        <h3>register now</h3>
        <div class="flex">
            <div class="col">
                <div class="input-field">
                    <p>your name <span>*</span></p>
                    <input type="text" name="name" id="" placeholder="enter your name" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>your email <span>*</span></p>
                    <input type="email" name="email" id="" placeholder="enter your email" maxlength="50" required class="box">
                </div>
            </div>
                <div class="input-field">
                    <p>your pasword <span>*</span></p>
                    <input type="password" name="pass" id="" placeholder="enter your password" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>confirm pasword <span>*</span></p>
                    <input type="password" name="cpass" id="" placeholder="confirm password" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>your profile <span>*</span></p>
                    <input type="file" name="image" accept="image/*" required class="box">
                </div>
                <p class="link">already have an account? <a href="login.php">login now</a></p>
                <input type="submit" value="register now" name="submit" class="btn">
        </div>
      </form>
   </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script src="../Javascript/script.js"></script>

  <?php include '../components/alert.php';?>
</body>
</html> 