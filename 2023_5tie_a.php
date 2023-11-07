<?php 

/* Sprawdzian PHP (2.1)

Pętle: while, do..while, for
Instrukcje warunkowe: if, if...else, switch
Połączenie z bazą danych i operacje na bazie danych za pomocą SQL i PHP
Instrukcje break i continue

*/






/* ## Zadanie 1 ###############################################################################  
   
   Stwórz instrukcję warunkową (if .. elseif.. else), która:
   a) Jeżeli liczba elementów tablicy $liczby jest mniejsza od 5 wypisze: "Liczba el. mniejsza od pięć, kończę działanie"
   b) Jeżeli liczba elementów tablicy $liczby jest większa lub równa 5 i ostatnia liczba w tablicy jest większa od 4 wypisze: "Liczba el. większa lub równa pięć oraz ostatni większy od 4."
   c) Jeżeli obydwa powyższe nie są spełnione wypisze "Liczba el. większa lub równa pięć oraz ostatni mniejszy od 4."

*/

$liczby = [1,2,3,4,5];







/* ## Zadanie 2 ###############################################################################  

    Stwórz pętlę for, która kolejno od $i=2 do $i<=10 zwiększając w każdej iteracji $i o 2, wypisze wartość zmiennej $i

*/



/* ## Zadanie 3 ###############################################################################  

    Stwórz pętle do .. while lub while (dokonaj właściwego wyboru!), która:
    a) na początku sprawdzi czy zmienna $liczba > 0
    b) jeżeli powyższy warunek jest spełniony wykona wewnątrz wypisanie wartości zmiennej poprzedzonej napisem "Aktualna wartość zmiennej:",
       następnie sprawdzi czy zmienna jest > 4 jeżeli, to przerwie działanie pętli, 
       następnie odejmie 1 od obecnej wartości zmiennej.
*/

$liczba = 10;





/* ## Zadanie 4 ###############################################################################  

    Wykorzystując odpowiednią funkcję utwórz połączenie z bazą danych o następujących parametrach:
    - adres serwera: tebu.civ.pl
    - użytkownik i nazwa bazy danych to: tebu_spr5tit
    - hasło to: TebSpr123!
    - port: 3306

    i przypisz je do zmiennej o nazwie $pol
 
*/








/* ## Zadanie 5 ###############################################################################  

    Wykorzystując powyższe połączenie wykonaj z jego wykorzystaniem kwerendę:

    "select * from urzadzenia"

    Sprawdź z wykorzystaniem instrukcji warunkowej czy zapytanie zostało wykonane i czy zwróciło wynik.
    Jeżeli tak to wypisz kolejno wiersze w postaci elementów listy nieuporządkowanej "Lp. Nazwa urządzenia, właściciel"
    Wypisz liczbę wyników uzyskanych przez zapytanie. 

    Po wykonaniu powyższego zamknij połączenie z bazą danych. 

    Przydatne funkcje: mysqli_query, mysqli_fetch_array, mysqli_fetch_row, mysqli_num_rows, mysqli_affected_rows, mysqli_fetch_assoc, mysqli_close, mysqli_inserted_id
    oraz pętla while i instrukcja warunkowa if

*/

$query = "select * from urzadzenia";



/* ## Zadanie 6 ###############################################################################  

   Wykorzystując instrukcję warunkową switch:
    a) jeżeli wartość zmiennej $pojazd jest równa "samochód" wypisz "Mój obecny pojazd to samochód"
    b) jeżeli wartość zmiennej $pojazd jest równa "hulajnoga" wypisz "Mój obecny pojazd to hulajnoga"
    c) jeżeli wartość zmiennej $pojazd jest równa "skuter" wypisz "Mój obecny pojazd to skuter"
    d) jeżeli wartość nie pasuje do powyższych "wzorców", zadaj defaultowy warunek wypisujący "Nie potrafię obsłużyć pojazdu, idę z buta!"
 
*/

$pojazdy = ['samochód','hulajnoga','skuter','rower','statek kosmiczny'];
shuffle($pojazdy);
$pojazd = array_shift($pojazdy);

//zmienna pojazd została wytypowana przez powyższy skrypt, stwórz poniżej instrukcję switch (nie zmieniaj powyższego);


/* ## Zadanie 7 ###############################################################################  

   Zdefiniuj własną funkcję która:
   a) będzie przyjmowała 2 parametry $x i $y (bez wartości domyślnych)
   b) będzie wykonywała działanie $x + $y i zwracała jego wynik
   c) wywołaj stworzoną funkcję z dowolnymi dwoma parametrami i wypisz to co zwróciła
 
*/