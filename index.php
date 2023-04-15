<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<div class="container d-flex justify-content-center" id="container">
        <div class="container col-lg-8 " >
            <div class=" col-lg-4" id="login_details">
                <form action="" method="post">
                <label for="email" class="mt-3 mb-3">User E-mail ID: </label>
                <input class="form-control" type="email" id="email">
                <label for="password" class="mt-3 mb-3">User Password: </label>
                <input class="form-control" type="password" name="pass" id="pass">
                <button type="submit" class="btn btn-primary mt-3 mb-3">Login</button>
                <br>
                <span><pre> New User ?... Sign up </pre></span>
                </form>
            </div>
            <div class=" col-lg-4 p-3" id="login_msg">
               <span class="h3 "> Hello there!!! </span>
                <br>
                <span>
                    Please enter your credentials
                    to
                    login and explore my site
                </span>
            </div>
        </div>
</div>


    <!-- <form action="" method="post">
                    <input class="form-control" type="text" name="fname" id="fname">
                    <input class="form-control" type="text" name="sname" id="sname">
                    <input class="form-control" type="tel" name="tel" id="tel">
                    <input class="form-control" type="date" name="D.O.B" id="dob">
                    <input class="form-control" type="email" name="email" id="email">
                    <input class="form-control" type="password" name="pass" id="pass">
                    <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <span><pre> New User ?... Sign up </pre></span>
                </form>     -->
</body>
</html>



