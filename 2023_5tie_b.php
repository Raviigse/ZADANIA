<?php 

/* Sprawdzian PHP (2.2)

Pętle: while, do..while, for
Instrukcje warunkowe: if, if...else, switch
Połączenie z bazą danych i operacje na bazie danych za pomocą SQL i PHP
Instrukcje break i continue

*/






/* ## Zadanie 1 ###############################################################################  

   Wykorzystujac instrukcję warunkową switch:
    a) jeżeli wartość zmiennej $pojazd jest równa "samochód" wypisz "Mój obecny pojazd to samochód"
    b) jeżeli wartość zmiennej $pojazd jest równa "statek kosmiczny" wypisz "Mój obecny pojazd to statek kosmiczny"
    c) jeżeli wartość zmiennej $pojazd jest równa "skuter" wypisz "Mój obecny pojazd to skuter"
    d) jeżeli wartość nie pasuje do powyższych "wzorców", zadaj defaultowy warunek wypisujący "Nie potrafię obsłużyć pojazdu, idę z buta!"
 
*/

$pojazdy = ['samochód','hulajnoga','skuter','rower','statek kosmiczny'];
shuffle($pojazdy);
$pojazd = array_shift($pojazdy);

//zmienna pojazd została wytypowana przez powyższy skrypt, stwórz poniżej instrukcję switch (nie zmieniaj powyższego);


/* ## Zadanie 2 ###############################################################################  

    Stwórz pętle do .. while lub while (dokonaj właściwego wyboru!), która:
    a) na wykona polecenia pętli a następnie sprawdzi czy zmienna $liczba >= 5
    b) jeżeli powyższy warunek jest spełniony wykona wewnątrz wypisanie wartości zmiennej poprzedzonej napisem "Aktualna wartość zmiennej:",
       następnie sprawdzi czy zmienna jest < 10  jeżeli, to przerwie działanie pętli, 
       następnie doda 1 do obecnej wartości zmiennej.
*/

$liczba = 4;



/* ## Zadanie 3 ###############################################################################  

    Stwórz pętlę for, która kolejno od $i=10 do $i>0 zmniejszając w każdej iteracji $i o 1, wypisze wartość zmiennej $i 

*/



/* ## Zadanie 4 ###############################################################################  

    Wykorzystując odpowiednią funkcję utwórz połączenie z bazą danych o następujących parametrach:
    - adres serwera: tebu.civ.pl
    - użytkownik i nazwa bazy danych to: tebu_spr5tit
    - hasło to: TebSpr123!
    - port: 3306

    i przypisz je do zmiennej o nazwie $pol
 
*/






/* ## Zadanie 5 ###############################################################################  

    Wykorzystując powyższe połączenie wykonaj z jego wykorzystaniem kwerendę przypisaną poniżej do zmiennej $query, wcześniej zmieniając zmienne $nazwaUrzadzenia, $wartoscUrzadzenia,o raz $wlascicielUrzadzenia na własne!

    Sprawdź z wykorzystaniem instrukcji warunkowej czy zapytanie zostało wykonane i czy zwróciło wynik.
    Jeżeli tak to wypisz liczbę wyników wykonanych przez zapytanie. 
    Jeżeli twoja instrukcja była "dodająca" i skuteczna (czyli wykonana poprawnie) wypisz klucz ostatnio dodanego elementu.

    Po wykonaniu powyższego zamknij połączenie z bazą danych. 

    Przydatne funkcje: mysqli_query, mysqli_fetch_array, mysqli_fetch_row, mysqli_num_rows, mysqli_affected_rows, mysqli_fetch_assoc, mysqli_close, mysqli_inserted_id
    oraz pętla while i instrucja warunkowa if

*/

$nazwaUrzadzenia = 'TuWpiszNazwęUrządzenia'; //zmień
$wartoscUrzadzenia = 0; //zmień
$wlascicielUrzadzenia = 'TuTwojeImięiNazwisko'; //zmień
$query = "insert into urzadzenia values(null,'$nazwaUrzadzenia',$wartoscUrzadzenia,'$wlascicielUrzadzenia')";






/* ## Zadanie 6 ###############################################################################  
   
   Stwórz instrukcję warunkową (if .. elseif.. else), która:
   a) Jeżeli liczba elementów tablicy $liczby jest mniejsza od 5 wypisze: "Liczba el. mniejsza od pięć, kończę działanie"
   b) Jeżeli liczba elementów tablicy $liczby jest większa lub równa 5 i ostatnia liczba w tablicy jest większa od 4 wypisze: "Liczba el. większa lub równa pięć oraz ostatni większy od 4."
   c) Jeżeli obydwa powyższe nie są spełnione wypisze "Liczba el. większa lub równa pięć oraz ostatni mniejszy od 4."

*/

$liczby = [1,2,3,4,2];






/* ## Zadanie 7 ###############################################################################  

   Zdefiniuj własną funkcję która:
   a) będzie przyjmowała 3 parametry $x, $y oraz $z (bez wartości domyślnych - wszystkie muszą być podane)
   b) będzie wykonywała działanie $x + $y - $z i zwracała jego wynik
   c) wywołaj stworzoną funkcję z dowolnymi parametrami i wypisz to co zwróciła
 
*/



