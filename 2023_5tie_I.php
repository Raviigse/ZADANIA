<?php 

/*
Sprawdzian PHP (1)

Łączna ilość punktów: 48.
Czas: 45 min. 

Prace umieszczamy w formie pliku z odpowiedziami na pulpicie w formie spakowanej podpisanej imieniem i nazwiskiem.
*/

#######  
#Zadanie 1 (3pkt) Zakomentuj poniższe linie kodu wykorzystując wszytkie znane Ci 3 sposoby (każdą inaczej) 
#######

//echo "Użyj komentarza :)";
/*$y = 4;

echo <<< END
    wielo
    #poziomowy
    tekst<br><br>*/
#END;

#######
#zadanie 2 (2 pkt) Odkomentuj i wypisz za pomocą echo lub var_dump() poprawnie utworzone zmienną(e) z poniższych:
#######

$_12a = 3; 
//$T ESTOWA = null;
//$abc = 4,43;
//$p0czątek = true;
$test = false;


echo $test;
echo "</br>";
echo $_12a;
echo "</br>";



#######
#zadanie 3 (5 pkt). Wykonaj na poniższych zmiennych działania i wypisz ich wyniki: x dodać y, y odjąć x, y do potęgi x, x modulo y, pierwiastek 2 stopinia z y
#######

$x = 100;
$y = 20;

echo $x+$y;
echo '<br>';
echo $y-$x;
echo '<br>';
echo $y**$x;  
echo '<br>';
echo $x%$y;
echo '<br>';
echo sqrt($y);
echo '<br>';
echo pow($y,$x);
echo "</br>";


#######
# zadanie 4 (5 pkt). Na poniższej zmiennej x, wykonaj kolejno dzialania z !!! wykorzystaniem operatorów przypisania !!! oraz zmiennej y (x+y, x**y, x-y).
# wypisz wartość zmienniej x po wykonaniu wszystkich działań;
# ostatni wynik zapisz do zmiennej $z i wykonaj na niej inkrementację oraz dekrementację korzystając z odpowiednich operatorów wykonujących działania po wypisaniu zmiennej.
#######

$x = 50;
$y = 2;

echo $x+=$y;
echo "</br>";

echo $x;
echo "</br>";

echo $x*=$y;
echo "</br>";

echo $x;
echo "</br>";

echo $x-=$y;
echo "</br>";

echo $x;
echo "</br>";



#######
# zadanie 5 (3 pkt)
# Korzystając z operatora !! konkatenacji !! oraz własnej inwencji ułóż zdanie używając poniższych zmiennych i wypisz je za pomocą funkcji echo lub print.
# !!! Wypisz to samo zdanie, ale zamiast wartości zmiennych wypisz ich nazwy wraz z $ ;
#######

$a = "Jastrzębie-Zdrój";
$b = "TEB Technikum";
$c = "09.10.2023";

echo 

#######
#zadanie 6.(3 pkt) Korzystając z odpowiedniej funkcji (implode lub join) oraz operatora konkatenacji wypisz elementy poniższej tablicy w zadaniu (rozdzielając je przecinkiem). 
#uwaga! posortuj elementy tablicy malejąco przed wypisaniem!
#######
$tab01 = [23, 10, 9, 11, 22, 31];
echo "W dzisiejszym losowaniu lotto wylosowano liczby:";




#######
# zadanie 7 (7 pkt)
/* 
Utwórz zmienną $t i przypisz do niej tablicę dowolnych wartościach typu integer lub float (min 5 wartości). Klucze nie mają znaczenia (tablica zwykła).
następnie: 
    a) wypisz ją funkcją wskazującą klucze i wartości poszczególnych elementów
    b) wypisz przedostatni element tablicy, 
    b) dodaj kolejny element tablicy korzystając z funkcji "automatycznej indeksacji" dla nowego elementu "[]" i wypisz wszystkie elementy tabeli korzystając z funkcji implode()
    c) zmień wartość pierwszego elementu na dowolny i wypisz go
*/

$t=[1,2,3,4,5];
print_r($t);
echo "</br>";
print ($t[3]);
echo "</br>";
$t[]=7;
print_r($t);
//echo ("</br>")
$t[0]=123;
echo ($t[0]);

echo "</br>";

#######
# zadanie 8 (14 pkt)
/*
Utwórz tablicę asocjacyjną "cennik", która będzie zawierała pary zmiennych produkt => cena produktu
Tablica powinna zawierać przynajmniej 3 elementy. Tablicę przypisz to zmiennej $cennik. Następnie:
      a) Wypisz tablicę za pomocą funkcji print_r()
      b) Wypisz cenę 2 wybranych produktów (pojedynczo cenę 1 produktu i cenę 2 produktu)
      c) Dodaj nowy element tablicy (nowy cennik) bez zmiany samej definicji tablicy tj. nie zmieniając miejsce definicji tablicy.
      d) Korzystając z funkcji foreach wypisz wszystkie ceny produktów występujace w tablicy.
      e) Posortuj tablicę po cenach produktów rosnąco 
      f) Posortuj tablicę po nazwach (kluczach) malejąco - nie zwracaj uwagi na polskie znaki
      f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "nazwa produktu -> cena produktu" (klucz => wartosc)
      
*/

$cennik=[
    'koks' => 2,
    'chleb' => 4,
    'kosiarka' => 200000,

];
print_r($cennik);   

#######
# zadanie 9 (4 pkt)
/* 
   Dla poniższych tablic z użyciem odpowiednich operatorów tablicowych:

    $t1 = ["abc,"11",12];
    $t2 = ["12, "11", "abc];
    $t3 = [8,8,8];

    a) przypisz do zmiennej $ut unię tablic $t1 i $t3 oraz wypisz tą zmienną
    b) sprawdź czy $t1 i $t2 są identyczne i wypisz wynik testu odpowiednią funkcją
    c) sprawdź czy $t1 i $t2 nie są takie same i wypisz wynik testu odpowiednią funkcją
*/

#######
# zadanie 10 (2 pkt)
# Ze zmiennej $txt utwórz tablicę fraz rozdzielając je po "|". Wykorzystaj funkcję explode();  Wypisz otrzymaną tablicę;
$txt = "Zosia,|Marianna|Genowefa;||Pigwa";

echo $txt;

#######
# zadanie 11*** (na 6 / 8 pkt)
/*
 Z użyciem wielokrotnej pętli foreach oraz ew. innych funkcji wykonaj polecenie wykorzystując dane z poniższej tablicy
 a) wypisz wyloty dla każdego z miast w formacie 

        Nazwa miasta:
        - godzina wylotu -> miejsce docelowe

 b) poniżej wypisu wypisz dodatkowo dane w 3 wierszach:
    Liczba wylotów z Warszawy: liczba wylotów.
    Liczba wylotów z Katowic: liczba wylotów.
    Liczba wylotów z Warszawy i Katowic łącznie: liczba wylotów.
 
 */

$Wyloty = [
                'Warszawa' => [
                    '7:32' => 'Maroko',
                    '11:58' => 'Zimbabwe',
                    '17:00' => 'Budapeszt'
                ],

                'Katowice' => [
                    '6:32' => 'Kraków',
                    '12:00' => 'Radom',
                    '18:00' => 'Paryż',
                    '18:05' => 'Doha'
                ]
            ];











      


