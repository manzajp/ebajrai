<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Login </title>
        <link rel="stylesheet" href="base_style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/a7b35074e7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="astyle.css">
        
        <style>
            
            body {
                background-color: #F5F8F2;
                color: darkslategray;
                font-size: 15px;
            }

            .Signup .btn {
                width: 100%;
                margin: 10px 0px;
                font-size: 18px;
                background-color: #53B175;
                border: none;
            }
            
            .user_card{
                height: 420px;
                width: 500px;
                padding: 80px;
            }
            
            .top {
                text-align: center;
                justify-content: center;
            }

        </style>
        
    </head>

    <body>
        
        <div class="top">
            <img src="images/logo.png" width="80pixels" height="80pixels">
            <div style="padding-top: 25px">E-Bajrai Mini Market </div>
        </div><br><br>

        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <form action="registration.php" method="post" name="form" class="Signup">
                        <div class="container">
                            <div class="row"> 
                                <div class="col-sm">

                                    <h2 style="text-align: center"> Login </h2>
                                    <p style="text-align: center; color: gray"> Enter your credentials to continue </p>
                                    <hr class="mb-3"><br>

                                    <label for="email"> <b>Email Address</b> </label>
                                    <input class="form-control" type="email" name="email" required>

                                    <label for="pswd"> <b>Password</b> </label>
                                    <input class="form-control" type="password" name="pswd" required>

                                    <hr class="mb-3">
                                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                                    
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-center links">
                                            Don't have an account? &nbsp; <a href="register.html" style="color: #53B175; text-decoration: none">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    
</html>