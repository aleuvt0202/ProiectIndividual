<?php
    if(isset($_POST["username"])&&isset($_POST["password"]))
    {
        include("conectare.php");
        $utilizator=$_POST['username'];
        $p=$_POST['password'];
        $sql="SELECT * from user WHERE username='$utilizator' AND password='$p'";

        if ($r=mysqli_query($id_con,$sql))
        {
                if(mysqli_num_rows($r))///daca s-a gasit utilizatorul
                {
                    //$linie=mysqli_fetch_array($r);                   
                    ///if($linie[7]==$parola_criptata
                        // server should keep session data for AT LEAST 1 hour
                        ini_set('session.gc_maxlifetime', 3600);
                        // each client should remember their session id for EXACTLY 1 hour
                        session_set_cookie_params(3600);
                        session_start();
                        $_SESSION['looser'] = $utilizator;
                        $_SESSION['tip']=$linie[6];
                        header("Location: ok.php");
                }
                    else
                    {
                        session_start();
                        $_SESSION["mesaj"]="Utilizator inexistent!";
                        // echo("user inexistent!");
                        header("Location: signinup1.php");
                    }
                        
        }
	} 
    else
        header("Location: signinup1.php");
?>