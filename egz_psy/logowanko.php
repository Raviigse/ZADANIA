<?php
   ob_start();
   session_start();
   $msg = '';
            
   if (isset($_POST['login']) && !empty($_POST['username']) 
      && !empty($_POST['password'])) {
       
      if ($_POST['username'] == 'uczen' && 
         $_POST['password'] == 'XDGAMER22') {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['username'] = 'uczen';
         
         echo 'You have entered valid use name and password';
      }else {
         $msg = 'Wrong username or password';
      }
   }
 
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forum o psach</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
<body>
        <header>
            <h1>Forum wielbicieli psów</h1>   
                   
        </header>

        <div id="container">
        
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = uczen" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = XDGAMER22" required>
            <button class = "btn" type = "submit" 
               name = "login">Login</button>
         </form>
			
          
         
      </div> 
      <footer>
      <a href = "logowanie3.php" class="link">WYLOGUJ.
      </footer>
      
      
      
         
       
       