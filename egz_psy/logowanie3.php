<?php /* Rozwiązanie właściwe */ ?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forum o psach</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <header>
            <h1>Forum wielbicieli psów</h1>
        </header>

        <div id="lewy">
            <img src="obraz.jpg" alt="foksterier">
        </div>

        <div id="prawy1">
            <h2>Zapisz się</h2>
            <form action="logowanie3.php" method="post">
                <label for="login">login:</label> <input type="text" name="login" id="login"><br>
                <label for="haslo">hasło:</label> <input type="password" name="haslo" id="haslo"><br>
                <label for="haslo2">powtórz hasło:</label> <input type="password" name="haslo2" id="haslo2"><br>
                <button type="submit">Zapisz</button>
            </form>

            <?php
               
                $pol = mysqli_connect("localhost",'root','','psy');

                
                if($_SERVER['REQUEST_METHOD']==="POST"){

                  

                        $login = mysqli_real_escape_string($pol,$_POST['login']);
                        $haslo = mysqli_real_escape_string($pol,$_POST['haslo']);
                        $haslo2= mysqli_real_escape_string($pol,$_POST['haslo2']);


                        
                        if($login!="" && $haslo!="" && $haslo2!=""){
                            
                            

                            
                            $loginWystepujeWBazie = false;



                            $query = "SELECT login FROM uzytkownicy;"; 
                            $wynik = mysqli_query($pol,$query); 
                            if($wynik && mysqli_num_rows($wynik)>0){ 
                                    
                                    while($tab = mysqli_fetch_row($wynik)){
                                        if($login===$tab[0]){ 
                                            $loginWystepujeWBazie = true; 
                                            break; 
                                        }
                                    }
                            }

                           

                           
                            if($loginWystepujeWBazie){
                                echo '<p>login wystepuje w bazie, konto nie dodane</p>';
                            } else {
                               
                                if($haslo===$haslo2){
                                   

                                    $hasloZaszyfrowane = sha1($haslo); 
                                    $userQuery = "INSERT INTO uzytkownicy VALUES (NULL, '$login', '$hasloZaszyfrowane');"; 
                                    $wynik = mysqli_query($pol,$userQuery); 


                                    

                                    if($wynik && mysqli_affected_rows($pol)==1){ 
                                        echo '<p>konto zostało dodane</p>';    
                                    } else {
                                       
                                        echo '<p>przepraszamy konto nie dodane, spróbuj jeszcze raz!</p>';
                                    }

                                } else {
                                    
                                    echo '<p>hasła nie są takie same</p>';
                                }
                            }
                            
                        } else {
                         
                            echo '<p>wypelnij wszystkie pola!</a>';
                        }

                  
                    mysqli_close($pol);
                }

                
            ?>
        </div>

        <div id="prawy2">
            <h2>Zapraszamy wszystkich</h2>
            <ol>
                <li>właścicieli psów</li>
                <li>weterynarzy</li>
                <li>tych, co chcą kupić psa</li>
                <li>tych, co lubią psy</li>
            </ol>
            <a href="regulamin.html">Przeczytaj regulamin forum</a>
        </div>

        <footer>
            Stronę wykonał: <a href="https://ee-informatyk.pl/" target="_blank" style="color: unset;text-decoration: none;">EE-Informatyk.pl</a>
        </footer>
    </body>
</html>