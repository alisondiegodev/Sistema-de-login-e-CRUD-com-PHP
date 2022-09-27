<?php 



?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/styleCadastro.css">     
    </head> 
    <body>
<main>
    <h1>Create Account</h1> 
    <!--IMAGENS-->
    <div class="social-media">
        <a href="#">
            <a href="#">
                <img class="google" src="Assets/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="Assets/facebook.png" alt="facebook">
            </a>
            <a href="#">
                <img src="Assets/linkedin.png" alt="linkedin">
            </a>
        </a>
    </div>
    <div class="alternative">
        <span>OR</span>
    </div>
    <!-- FORM -->
    <form method="POST" action="salvar.php">
        <label>
            <span>Name</span>
            <input type="text" name="nome">
        </label>
             <span>E-mail</span>
            <input type="email"  name="email">
        </label>
            <span>Password</span>
            <input type="password"  name="senha">
        </label>
        <input type="submit" name="submit" value="Sign Up">
    </form>
    
</main>
<!-- ALIEN -->
<section class="images">
<img src="assets/alien2.png" alt="Alien">   
</section>

</body>
</html>