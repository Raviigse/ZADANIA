<?php /* Przerobiona wersja zadania egz. na prostszą */ ?>

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
            <form action="logowanie2.php" method="post">
                <label for="login">login:</label> <input type="text" name="login" id="login"><br>
                <label for="haslo">hasło:</label> <input type="password" name="haslo" id="haslo"><br>
                <label for="haslo2">powtórz hasło:</label> <input type="password" name="haslo2" id="haslo2"><br>
                <button type="submit">Zapisz</button>
            </form>
            <?php
                
                //Skrypt1

                //nawiązanie połączenie z bazą danych
                $pol = mysqli_connect("localhost",'root','','psy');

                /* 
                    instrukcja warunkowa sprawdzająca czy metoda wywołania to POST
                    Takie sprawdzenie pozwala nam określić jedynie metodę, nie samo istnieje zmiennych jak w przypadku rozważanym w logowanie.php
                    BTW, w ten sam sposób, zmieniają jedynie POST na GET jesteśmy w stanie potwierdzić żądanie GET-owe
                */  

                if($_SERVER['REQUEST_METHOD']==='POST'){

                    /* 
                    tu przydało by się jeszcze dodatkowe sprawdzenie czy odpowiednie klucze (odpowiadające nazwom z pól formularza ) 
                    znajdują się w tablicy $_POST, czyli do powyższego warunku można by dopisać "isset-y", co wyglądało by tak

                    if($_SERVER['REQUEST_METHOD']==='POST' and isset($_POST['login']) and isset($_POST['haslo']) and isset($_POST['haslo2'])){

                    czego jednak nie zrobiliśmy.
                    */


                    /* 
                        W tym miejscu do odpowiednio nazwanych zmennych przypisujemy wartośći przekazane przez żądanie (wysyłkę formularza) do zmiennej $_POST
                        Wartości z pól trafiają do zmiennej $_POST pod indeksy będące ich nazwami (argument name pola)

                     */

                    // $login = $_POST['login']; 
                    // $haslo = $_POST['haslo']; 
                    // $haslo2 = $_POST['haslo2'];
                  

                    /* to smo co powyzej jedynie w tym wypadku dodatkowo korzystamy z funkcji mysqli_real_escape_string($polaczenie,$zmienna) aby zabezpieczyć poźniejsze zapytania
                    przed sql injection */

                    $login = mysqli_real_escape_string($pol,$_POST['login']);
                    $haslo = mysqli_real_escape_string($pol,$_POST['haslo']);
                    $haslo2 = mysqli_real_escape_string($pol,$_POST['haslo2']);

                    /* sprawdzamy 1 warunek tworząc prostą instrukcję warunkową, która kolejno sprawdza czy któreś z pól jest puste */
                    if($login=="" or $haslo=="" or $haslo2==""){
                            //jeżeli tak to wypisuje bład 
                            echo "<p>wypełnij wszytkie pola</p>";
                    } else {
                        //w przeciwnym wypadku kontynujemy zabawę z kodem - przechodzimy do warunku 2

                        /*sprawdzamy drugi warunek pytając bazę danych bezpośrednio czy istnieje login będący taki sam jak ten podany w formualrzu */
                        $query = "SELECT login FROM uzytkownicy where login='$login'"; //zmodyfikowane zapytanie wykorzystujące zmienna
                        $wynik = mysqli_query($pol,$query); //wykonanie zapytania w bazie danych

                        if($wynik){ //sprawdzamy czy posidamy wynik zapytania, jeżeli jest on prawdziwy, funkcja mysqli_query zwraca false w przypadku błędu

                            $liczbaWierszy = mysqli_num_rows($wynik); //dla zapytań typu SELECT (i wyłącznie nich) możemy użyć fukcji mysqli_num_rows($wynik), która powie nam ile wierszy wyników zwróciło nam wykonane zapytanie
                            if($liczbaWierszy>0){ //sprawdzamy czy jest to liczba większa od 0, jeżeli tak to oznacza, że taki login już istnieje więc wypisujemy błąd
                                echo '<p>login występuje w bazie danych, konto nie zostało dodane</p>';
                            }
                            else { //w przeciwnym wypadku działamy dalej - sprawdzamy warunek nr 3

                                //sprawdzamy czy hasła są różne, jeżeli tak to wypisujemy błąd
                                if($haslo!==$haslo2){
                                    echo '<p>Hasła nie są takie same, powtórz hasło</p>';
                                } else {
                                    //w przeciwnym wypadku 

                                    $hashedPass = sha1($haslo); //haszujemy hasło
                                    $query1 = "INSERT INTO uzytkownicy VALUES (NULL, '$login', '$hashedPass');"; //tworzymy kwerendę dodającą
                                    $wynik = mysqli_query($pol, $query1); //wykonujemy powyższą kwerendę korzystając z naszego połączenia z bazą danych


                                    /* poniżej instrukcja warunkowa sprawdza w warunku, czy zapytanie się wykonało oraz czy jego wykonanie "dotknęło" jakieś wiersze - pisząc wprost
                                    ile elementów dodało
                                    
                                    UWAGA!!! - dla zapytań insert, delete, update nie stosujemy jak wyżej sprawdzenia ilości zwróconych wierszy (mysqli_num_rows) ponieważ te zapytania nic nie zwracają
                                    i pod zmienna $wynik stoi tylko wartość true!

                                    */

                                    if($wynik and mysqli_affected_rows($pol)>0){ //jeżeli zapytnie wykonane i ilość dodanych wierszy > 0 to komunikat 
                                        echo '<p>Konto zostało dodane.</p>';
                                    } else {
                                        //w innym wypadku 
                                        echo '<p>Przepraszamy konto nie zostało dodane, spróbuj ponownie.</p>';
                                    }
                                } 
                            }
                        }
                    }
                }
                mysqli_close($pol); //zamknięcie połączenia z bazą
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
            Stronę wykonał: MJ</a>
        </footer>
    </body>
</html>