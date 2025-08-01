<?php session_start();
$errorMsg = "";
$validUser = "";
if (isset($_POST["submit"])) {
    $validUser = $_POST["username"] == "mastechadmin" && $_POST["password"] == "admin@mastech";
    //echo $validUser;exit();
    if ($validUser == 1) {
        $_SESSION["login"] = true;
        header("Location:dashboard.php");
        die();
    } else
        $errorMsg = "Invalid username or password.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MasTech Admin/Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;

        }

        .login-form form {

            margin-bottom: 15px;
            background: #90EE90;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 40px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }

        .login-logo {
            text-align: center;
            padding-bottom: 20px;
        }

        h2 {
            font-family: sans-serif;
            color: blue;
        }

        .error {
            color: crimson;
        }
    </style>
</head>

<body>
    <div class="login-form">


        <form method="post" action="" id="formdata" name="formdata">

            <!--  <div class="login-logo">
                 <img src="img/intek.png"height="120px" width="120px">
             </div> -->
            <h2 class="text-center">MasTech Admin</h2>
            <div class="error"><?= $errorMsg ?></div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                    required="">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <!-- <div id="user_err"></div> -->
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                    required="">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <!-- <div id="pass_err"></div> -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Login</button>
            </div>

        </form>
    </div>
    <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap 3.3.7 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <script type="text/javascript">   
var validate =  $("#formdata").validate({
    rules: {
        username:"required",
        password:"required",
    },
     messages: {
                username:"Please enter username",
                password:"Please enter password",
            },
      errorPlacement:function(error,element){
              if (element.attr("name") == "username") {
                        error.insertAfter("#user_err"); 
                        } 
                        else if (element.attr("name") == "password") {
                        error.insertAfter("#pass_err");
                        } 
                        else {
                        error.insertAfter(element);
                        } 
      }
      });
</script>
</body>

</html>