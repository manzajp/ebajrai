<!DOCTYPE html>
<html>
    
    <head>
        
        <title> User Registration </title>
        <link rel="stylesheet" href="css/base_style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/a7b35074e7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/astyle.css">
        
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
                height: 600px;
                width: 500px;
                padding: 80px;
            }
            
            .top {
                text-align: center;
                justify-content: center;
            }
            
            footer{
                position: absolute;
                bottom: 0;
            }

        </style>
        
    </head>

    <body>
        
        <div class="top">
            <img src="images/logo.png" width="80pixels" height="80pixels">
            <div style="padding-top: 25px">E-Bajrai Mini Market </div>
        </div>
        <br><br>

        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <form action="register.php" method="post" name="form" class="Signup">
                        <div class="container">
                            <div class="row"> 
                                <div class="col-sm">

                                    <h2 style="text-align: center"> Sign Up </h2>
                                    <p style="text-align: center; color: gray"> Enter your credentials to continue </p>
                                    <hr class="mb-3">

                                    <label for="firstname"><b>First Name</b></label>
                                    <input class="form-control" id="firstname" type="text" name="firstname" required>

                                    <label for="lastname"><b>Last Name</b></label>
                                    <input class="form-control" id="lastname" type="text" name="lastname" required>

                                    <label for="email"><b>Email Address</b></label>
                                    <input class="form-control" id="email" type="email" name="email" required>

                                    <label for="phone"><b>Phone Number</b></label>
                                    <input class="form-control" id="phone" type="text" name="phone" required>

                                    <label for="password"><b>Your Password</b></label>
                                    <input class="form-control" id="password" type="password" name="password" required>
                                    <br><br>

                                    <hr class="mb-3">
                                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                                    
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-center links">
                                            Already have an account? &nbsp; <a href="login.php" style="color: #53B175; text-decoration: none">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <p>© Copyright 2021 Bajrai Mini Market, Inc.</p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
        $(function()
         {
            $('#register').click(function(e){

                var check = this.form.checkValidity();

                if(check)
                {
                    var firstname = $('#firstname').val();
                    var lastname  = $('#lastname').val();
                    var email     = $('#email').val();
                    var phone     = $('#phone').val();
                    var password  = $('#password').val();

                    e.preventDefault();

                    $.ajax
                    ({
                        type: 'POST',
                        url : 'process.php',
                        data: {firstname:firstname, lastname:lastname, email:email, phone:phone, password:password},
                        success: function(data){
                            Swal.fire
                            ({
                                'title': 'Success',
                                'icon' : 'success',
                                'text': data
                            })
                            .then(function()
                            {
                                window.location = "login.php"
                            });
                        },
                        error: function(data){
                            Swal.fire
                            ({
                                'title': 'Error',
                                'icon' : 'error',
                                'text': 'There were error while creating the account!'
                            });
                        }
                    });  
                }
            });
        });
    </script>
        
    </body>
    
</html>