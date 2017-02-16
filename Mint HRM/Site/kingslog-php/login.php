<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/backend.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here


        include './lib/CL_User.php';
        $user = new CL_User();
        ?>
        <div class="container">
            <div class=" col-md-5 col-md-offset-4 ">
                <div class="jumbotron login-block ">
                    <h2>Login</h2>
                    <?php
                    if (isset($_GET['err'])) :?>                                                              
                    <div class="alert alert-danger"><?php echo $_GET['err'];?></div>
                    <?php endif  ?>
                    

                    <form action="lib/user.php?login=login" method="post" name="login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Users Name</label>
                            <input type="text" class="form-control" name="username"  placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pasw"  placeholder="Password">
                        </div>

                        <input type="submit" class="btn btn-default"  value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
