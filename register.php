    <?php
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');
    include('config.php');
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $celphone = $_POST["celphone"];
    $query1 = mysqli_num_rows(mysqli_query($con,"SELECT * FROM creds WHERE username = '$username'"));

    if($query1 == 1){
              echo "<script>alert('Usuário já cadastrado. Utilize outro.'); history.back();</script>";
            }
            else {
    		mysqli_query($con,"INSERT INTO creds (username,password,name,celphone) VALUES ('$username','$password','$name','$celphone')");
     	} 
        mysqli_close ($con);
    ?>

    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>UniMaster - Captive Portal</title>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
      </head>

      <body>

            <div class="top-content">

                <div class="inner-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 text">
                                <img src="images/logo.png" height=230px>
                                  <h1><strong>Register Successful!</strong></h1>
                                    <div class="description">
                                      <a href="#">Click here to login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

      </body>
    </html>
