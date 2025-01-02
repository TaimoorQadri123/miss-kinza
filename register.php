<?php
include('php/query.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class = 'container p-5'>
            <form action="" method = "post">
     <div class="form-group">
        <label for="">Name</label>
        <input
            type="text"
            name="uName"
            id=""
            value= "<?php echo $userName?>"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <small id="helpId" class="text-danger"><?php echo $userNameErr?></small>
     </div>
     <div class="form-group">
     <label for="">Email</label>
        <input
            type="email"
            name="uEmail"
            id=""
            value= "<?php echo $userEmail?>"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
     </div>
     <div class="form-group">
     <label for="">Password</label>
        <input
            type="password"
            name="uPassword"
            id=""
            value= "<?php echo $userPassword?>"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
     </div>

     <div class="form-group">
     <label for="">Confirm Password</label>
        <input
            type="password"
            name="uConfirmPassword"
            id=""
            value= "<?php echo $userConfirmPassword?>"
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <small id="helpId" class="text-danger"><?php echo $userConfirmPasswordErr?></small>
     </div>

     <button name = "addUser" class= "btn btn-info  mt-4"> Register</button>

     </form>

     
      </div>
      
    </body>
</html>


