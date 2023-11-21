<?php /*rozwiązanie z wykorzystaniem połączenia jako obiektu*/ ?>
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
            <form action="logowanie.php" method="post">
                <label for="login">login:</label> <input type="text" name="login" id="login"><br>
                <label for="haslo">hasło:</label> <input type="password" name="haslo" id="haslo"><br>
                <label for="haslo2">powtórz hasło:</label> <input type="password" name="haslo2" id="haslo2"><br>
                <button type="submit">Zapisz</button>
            </form>
            <?php
                // Skrypt #1

                /*  Sprawdzenie czy występują zdefiniowane indeksy w tablicy $_POST (odpowiadające polom formularza), jeżeli występują oznacza to że formularz został wysłany metodą POST
                    funkcja isset($zmienna) sprawdza (zwraca pradę lub fałsz) czy dana zmienna istnieje (jest zdefiniowana) i posiada wartość inną niż null)
                */
                if(isset($_POST["login"]) && isset($_POST["haslo"]) && isset($_POST["haslo2"])) { 
                    
                    /*  1 warunek w poleceniu egzaminu - sprawdź czy wypełnione pola
                    
                        Poniższa instrukcja sprawdza czy wszystkie elementy są niepuste (czyli inaczej wszystkie wypełnione)
                        Do sprawdzenia "pustości" wykorzystana zotała funkcja empty($zmienna), która zwraca 
                        true (prawdę) jeżeli zmienna istnieje i nie jest pusta (ma jakąś wartość) oraz nie jest 0.
                        W innych przypadkach zwraca false (fałsz) 
                        Wywołanie empty($zmienna) sprawdza czy zmienna jest pusta, wywołanie !empty($zmienna) sprwdza warunek odwrotny
                    */


                    if(!empty($_POST["login"]) && !empty($_POST["haslo"]) && !empty($_POST["haslo2"])) {

                        //jeżeli wszystkie pola wypełnione wykonaj:
                        $conn = new mysqli("localhost","root","","psy"); //połączenie z bazą danych (odpowiednik mysqli_connect())
                        $login = $conn->real_escape_string($_POST["login"]); //w tym miescu do zmiennej $login przypisywana jest wartość z formularza  z pola login ($_POST['login']) wraz z jej zabezpieczniem przez funkcję obkietu mysqli ($conn)
                        $haslo = $conn->real_escape_string($_POST["haslo"]); //jak wyżej tylko zmienna haslo
                        $haslo2 = $conn->real_escape_string($_POST["haslo2"]); //jak wyżej tylko zmienna haslo2

                        /* 2 warunek egzaminu - sprawdź czy istnieje login w bazie

                            Poniżej zostaje zdefiniowana zmienna $istniejelogin
                            Zrobione jest to w celu późniejszego podjęcia decyzji czy skrypt może iść dalej, czy ma wyświetlić błąd. 
                            W chwili obecnej mówi ona nam tylko tyle, że ma wartość fałsz, w kontekście możemy się jednak domyślić że znaczy to tyle, co przyjęcie założenia
                            o nie istnieniu loginu w bazie w tym momencie

                        
                        */
                        $istniejelogin = false;

                        
                        $sql = "SELECT login FROM uzytkownicy;"; //wybieramy zgodnie z poleceniem wszystkich użytkowników 
                        $result = $conn->query($sql); //wykonanie zapytania na bazie danych (wersja obiektowa)
    
                        while($row = $result -> fetch_array()) { //pobranie kolejno w pętli wiersza uzyskanych wyników 
                            if($login == $row[0]) { //oraz sprawdzenie czy login wpisany przez usera w formularzu jest równy temu co jest w bazie pod kolumną login w danym wierszu
                                echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>"; //jeżeli taki login spotykamy to wypiszujemy komunikat
                                $istniejelogin = true; //i ustawiamy wartość zmiennej $istniejelogin na true (prawdę) - co w kontakscie oznacza, że znaleźliśmy taki sam login i ta zmienna ma nam o tym mówić
                            }
                        }

                        /* w tym miejscu sprawdzamy czy spotkaliśmy login podczas wcześniejszego sprawdzania, gdyby nie został znaleziony zmienna $istniejelogin dalej miała by wartość false
                         i instrukcja nie zostanie wykonana, jeżeli zostanie znaleziony to zmienna ma wartość true i wykonujemy to co w instrukcji 
                         */

                         //jeżeli login nie został znaleziony 
                        if($istniejelogin == false) { 
                        
                            if($haslo == $haslo2) { //warunek 3 sprawdzianu - sprawdzamy 
                                $hash = sha1($haslo); //haszujemy hasło fukcją sha1()


                                //dodanie użytkownika do bazy
                                $sql = "INSERT INTO uzytkownicy VALUES (NULL, '$login', '$hash');";
                                $result = $conn->query($sql);

                                echo "<p>Konto zostało dodane</p>";
                            }
                            else {
                                echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                            }
                        } else { //jeżeli login został znaleziony 
                            echo "<p>login istnieje, konto nie zostało dodane</p>";    
                        }
    
                        $conn -> close();
                    }
                    else {
                        //brak wypełnienia wszystkich pól
                        echo "<p>wypełnij wszystkie pola</p>";
                    }
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