<?php 

/* Sprawdzian PHP (2.4)

Pętle: while, do..while, for
Instrukcje warunkowe: if, if...else, switch
Połączenie z bazą danych i operacje na bazie danych za pomocą SQL i PHP
Instrukcje break i continue

*/






/* ## Zadanie 1 ###############################################################################  
   
   Stwórz instrukcję warunkową (if .. elseif.. else), która:
   a) Jeżeli liczba elementów tablicy $liczby jest mniejsza od 6 wypisze: "Liczba el. < 6, kończę działanie"
   b) Jeżeli liczba elementów tablicy $liczby jest większa lub równa 6 i przedostatnia liczba w tablicy jest większa od 4 wypisze: "Liczba el. >=6 oraz przedostatni większy od 4."
   c) Jeżeli obydwa powyższe nie są spełnione wypisze "Liczba el. >=6 oraz przedostatni mniejszy od 4."

*/

$liczby = [1,2,6,4,5,6];
if($liczby<6){
    echo "lIczba el. < 6, kończe działanie";
}
if($liczby=>6 && 5>4){
    echo "liczba el. >=6 oraz przedostatni wiekszy od 4.";
}else{
    echo "liczba el. >=6 oraz przedostatni mniejszy niż 4.";
}






/* ## Zadanie 2 ###############################################################################  

    Stwórz pętlę for, która kolejno od $i=0 do $i<=50 zwiększając w każdej iteracji $i o 6, wypisze wartość zmiennej $i

*/
    for($i=0; $i<=50; $i++6  ){
    echo "wartość zmiennej: $i";
    }

/* ## Zadanie 3 ###############################################################################  

    Stwórz pętle do .. while lub while (dokonaj właściwego wyboru!), która:
    a) na początku sprawdzi czy zmienna $liczba > 0
    b) jeżeli powyższy warunek jest spełniony wykona wewnątrz wypisanie wartości zmiennej poprzedzonej napisem "Aktualna wartość zmiennej:",
       następnie sprawdzi czy zmienna jest < 3 jeżeli prawda, to przerwie działanie pętli, 
       jeżeli nie odejmie 1 od obecnej wartości zmiennej.
*/

$liczba = 10;
while($liczba>0){
    echo "aktualna wartość zmiennej:"
    print_r($liczba);
}if($liczba<3){
    break;
}else($liczba=-1);




/* ## Zadanie 4 ###############################################################################  

    Wykorzystując odpowiednią funkcję utwórz połączenie z bazą danych o następujących parametrach:
    - adres serwera: tebu.civ.pl
    - użytkownik i nazwa bazy danych to: tebu_spr5tie
    - hasło to: TebSpr123!
    - port: 3306

    i przypisz je do zmiennej o nazwie $pol
 
*/

$polaczenie = mysqli_connect("tebu.civ.pl", "tebu_spr5tie", "TebSpr123!", "tebu_spr5tie");






/* ## Zadanie 5 ###############################################################################  

    Wykorzystując powyższe połączenie wykonaj z jego wykorzystaniem kwerendę:

    "select * from ubezpieczenia"

    Sprawdź z wykorzystaniem instrukcji warunkowej czy zapytanie zostało wykonane i czy zwróciło wynik.
    Jeżeli tak to wypisz kolejno wiersze w postaci elementów listy nieuporządkowanej "Lp., Nazwa ubezpieczenia, towarzystwo, suma ubezpieczenia, składka"
    Wypisz liczbę wyników uzyskanych przez zapytanie. 

    Nazwy pól w tabeli: id, nazwa, towarzystwo, suma_ubezpieczenia, skladka.

    Po wykonaniu powyższego zamknij połączenie z bazą danych. 

    Przydatne funkcje: mysqli_query, mysqli_fetch_array, mysqli_fetch_row, mysqli_num_rows, mysqli_affected_rows, mysqli_fetch_assoc, mysqli_close, mysqli_inserted_id
    oraz pętla while i instrukcja warunkowa if

*/

    $query = "select * from ubezpieczenia";
    $rezultat = mysqli_query($poloczenie,$query);
    $liczba_wierszy = echo mysqli_num_rows($rezultat);
    if($liczba_wierszy>0){
         $row= mysqli_fetch_row($rezultat)
         print_r($row);
         $lp = 1;
         while(mysqli_fetch_row($rezultat)){
              print_r($row);
             echo '<tr>
             <td>'.$row[1].'</td>
             <td>'.$row[2].'</td>
             <td>'.$row[3].'</td>
             <td>'.$row[4].'</td>
             </tr>';

             $lp++;
         }}

    mysqli_close($polaczenie);

/* ## Zadanie 6 ###############################################################################  

   Wykorzystując instrukcję warunkową switch:
    a) jeżeli wartość zmiennej $pojazd jest równa "samochód" wypisz "Mój obecny pojazd to samochód"
    b) jeżeli wartość zmiennej $pojazd jest równa "hulajnoga" wypisz "Mój obecny pojazd to hulajnoga"
    c) jeżeli wartość zmiennej $pojazd jest równa "skuter" wypisz "Mój obecny pojazd to skuter"
    d) jeżeli wartość nie pasuje do powyższych "wzorców", zadaj defaultowy warunek wypisujący "Nie potrafię obsłużyć pojazdu, jadę autobusem!"
 
*/

$pojazdy = ['samochód','hulajnoga','skuter','rower','statek kosmiczny'];
shuffle($pojazdy);
$pojazd = array_shift($pojazdy);


switch($pojazd = 'samochód'){
    echo "moj obecny pojazd to samochód";
}switch($pojazd = 'hulajnoga'){
    echo "moj obecny pojazd to samochód";
}switch($pojazd = 'skuter'){
    echo "moj obecny pojazd to samochód";
}else{
    echo "Nie potrafię obsluzyc pojazdu , jade autobusem";
}

//zmienna pojazd została wytypowana przez powyższy skrypt, stwórz poniżej instrukcję switch (nie zmieniaj powyższego);


/* ## Zadanie 7 ###############################################################################  

   Zdefiniuj własną funkcję która:
   a) będzie przyjmowała 2 parametry $x i $y (bez wartości domyślnych)
   b) będzie wykonywała działanie $x ** $y i zwracała jego wynik
   c) wywołaj stworzoną funkcję z dowolnymi dwoma parametrami i wypisz to co zwróciła
 
*/
    $x = 3;
    $y = 4;
    $wynik = $x+$y
    function($x ** $y){
        echo ($wynik);
    }
    ?>