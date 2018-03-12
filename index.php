<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas Project02</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/tampilan.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
                        <img class="mb-4" width="100%" height="100%" src="assets/images/windows-server-logo.png" alt="">
                        <div class="text-center mb-4">
                            <img class="mb-4" width="72" height="72" src="assets/images/bootstrap-solid.svg" alt="">
                            <h1>Silahkan Masuk</h1>
                            <p>Welcome to this site</p>
                        </div>
                        <div class="form-label-group">
                            <label for="inputemail">Email Address</label>
                            <input  class="form-control" type="email" required="yes" id="inputemail" name="inputemail"
                                    placeholder="Masukkan Email" autofocus="yes" >                            
                        </div>
                        <div class="form-label-group">
                            <label for="inputpassword">Password</label>
                            <input class="form-control" type="password" required="yes" id="inputpassword" name="inputpassword" 
                                   placeholder="Password">                            
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" name="" value=""> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
