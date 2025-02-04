<?php include_once "config.php"; ?>



<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM cliente WHERE email = '$email' and senha ='$senha'";
    $resultado = mysqli_query($conn,$sql);
    $linha  = mysqli_fetch_array($resultado);
    
    if ($linha){
        header("Location: index.php") ; 
    }
    else{
        if( $linha['email'] != $email or $linha['senha'] != $senha){
            header("Location: login.php?error=1"); // Redireciona com erro

        }
        else{
            echo "deu erro". $sql . "<br>" . mysqli_error($conn);
        }
        
    } 
    
?>
  