

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    
</head>
<body>
    
    <link rel="stylesheet" href="signup.css">
    <?php
    include("config.php");
    ?>
    <center>
<div class="form-container" >
        <h2>Login</h2>
        <form action="" method="POST">
            <label for="email">Email:</label>
            <span style="color: red;"><?php if(isset($emailvalue)) echo $emailerror ?></span>
            <input name="emailvalue" type="email" id="email" name="email" >

            <label for="password">Password:</label>
            <input name="passvalue" type="password" id="password" name="password" >
            <span style="color: red;"><?php if(isset($passvalue)) echo $passerror ?></span>

            <button type="submit">Login</button>
        </form>
    </div>
</center>
  
</body>
</html>
