<?php 
#0 Zakomentuj poniższe linie kodu wykorzystując wszytkie znane Ci sposoby (każdą inaczej)

//$x = 1;

#$y = 4;

/*echo <<< END
    wielo
    poziomowy
    tekst<br><br>
END;
*/

#1. Wskaż niepoprawnie utworzone zmienną(e) ze zbioru: $_12a, $12a, $a12, $początek, $TESTOWA, $wynik.dzialania i wypisz je w poniższym zdaniu za pomocą funkcji echo

echo "Niepoprawne zmienne to: ".'$12a'.' $początek';
echo "<br><br>";

#2. Utwórz dowolnie nazwane zmienne i przypisz do nich: wartość typu boolean, "nic"/pustą, integer, float, double, array. Poniżej wypisz kolejno zminne używając odpowiedniej funkcji, która pokaże informacje o zmiennej
$a=12;
$b=12.5;
$c=null;
$d=true;
$e="Kamil";
$f=[1,2,3,4];

var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($d);
echo"<br>";
var_dump($e);
echo"<br>";
var_dump($f);
echo "<br><br>";

#3. Utwórz zmienną $x oraz $y o dowolnych wartościach liczbowych i wykonaj na nich działania: dodawania, odejmowania, potęgowania, pierwiastowania, modulo. Wyniki każdego z działań wypisz odpowiednią funkcją. 

$x=4;
$y=2;

$z=$x+$y;
echo "$x+$y=$z <br>";
$z=$x-$y;
echo "$x-$y=$z <br>";
$z=$x**$y;
echo "$x**$y=$z <br>";
$z=pow($x,1/$y);
echo "$x*1/$y=$z <br>";
$z=$x%$y;
echo "$x%$y=$z <br><br>";

#4. Utwórz zmienną $X o wartości 23.5 a następnie korzystjąc z operatorów przypisania wykonaj dla niej kolejno działania +0.5, -20, *4, **2
#ostatni wynik zapisz do zmiennej $Y i wykonaj na niej inkrementację oraz dekrementację korzystając z odpowiednich operatorów wykonujących działania po wypisaniu zmiennej.

$x=23.5;
echo "$x <br>";
$x=$x+0.5;
echo "$x <br>";
$x=$x-20;
echo "$x <br>";
$x=$x*4;
echo "$x <br>";
$y=$x**2;
echo "$y <br>";
$y++;
echo "$y <br>";
$y--;
echo "$y";
echo "<br><br> ";

# 5. Korzystając z poniższych zmiennych ułóż i wypisz funkcją echo (korzystając z odpowiedniego operatora) tak by zdanie miało logiczną treść. Zdanie oczywiście należy wymyślić. Należy użyć wszystkich zmiennych! 

$imie = 'Grzegorz';
$co = 'rower';
$gdzie = 'las';
$liczba = 23.5;

echo "$imie ma $co, bardzo lubi $gdzie lecz mieszka od niego $liczba km.<br>";

//Wypisz to samo zdanie, ale zamiast wartości zmiennych wypisz ich nazwy wraz z $;
echo '$imie ma $co, bardzo lubi $gdzie lecz mieszka od niego $liczba km.<br>';

//Wypisz to samo zdanie używając zmiennych pomiędzy "" bez spacji. Oznacz odpowiednio zmienne aby je wypisać
echo "{$imie}ma$co,bardzolubi{$gdzie}leczmieszkaodniego{$liczba}km.<br><br>";

#6. Korzystając z odpowiedniej funkcji wypisz poniższą tablicę (rozdzielając liczby przecinkiem) w zdaniu rozpoczętym poniżej
$liczby = [1, 23, 6 , 18, 52, 9];
echo "W dzisiejszym losowaniu lotto wylosowano liczby:".implode(", ",$liczby);
echo "<br>";

/* Dodatkowo: 
a) posotruj tablicę $liczby rosnąco i malejąco za każdym darem wypisując wynik jak powyżej. */
sort($liczby);
echo "W dzisiejszym losowaniu lotto wylosowano liczby:".implode(", ",$liczby);
echo "<br>";
rsort($liczby);
echo "W dzisiejszym losowaniu lotto wylosowano liczby:".implode(", ",$liczby);
echo "<br>";
/*b) zastosuj na tablicy funkcję losującą shuffle() i wypisz wyniki*/
shuffle($liczby);
echo "W dzisiejszym losowaniu lotto wylosowano liczby:".implode(", ",$liczby);
echo "<br>";
/*c) Wypisz liczbę elementów tablicy korzytając z odpowiedniej funkcji*/
echo count($liczby);
echo "<br><br>";

/*
7. Utwórz zmienną $t i przypisz do niej tablicę dowolnych wartościach typu string (min 3 wartości) i wypisz ją funkcją print_r()
następnie: 
    a) wypisz 2 element tablicy, 
    b) dodaj kolejny element tablicy korzystając z funkcji "automatycznej indeksacji" dla nowego elementu "[]" i wypisz wszystkie elementy tabeli korzystając z funkcji implode()
    c) zmień wartość pierwszego elementu na dowolny i wypisz go
*/
$t=[
    1 => 'jeden',
    2 => 'dwa',
    3 => 'trzy'
];
echo print_r($t);
echo "<br>";
echo $t[2];
echo "<br>";
$t[]=4;
echo implode(", ",$t);
echo "<br>";
$t[1]=5;
echo $t[1];
echo "<br><br>";

/* 8. Utwórz tablicę asocjacyjną, która będzie zawierała pary zmiennych 'autor' => 'tytuł książki'. Zarówno autorzy jak i tytuły mogą być zmyślone. 
      Tablica powinna zawierać przynajmniej 3 elementy. Tablicę przypisz to zmiennej $tA. 
      Następnie:

      a) Wypisz tablicę za pomocą funkcji print_r()
      b) Wypisz tytuł dzieła 2 autora
      c) Dodaj nowy element tablicy bez zmiany samej definicji tablicy.
      d) Korzystając z funkcji foreach wypisz wszystkie tytuły książek występujace w tablicy.
      e) Posortuj tablicę po tytułach (wartościach) malejąco - nie zwracaj uwagi na polskie znaki
      f) Posortuj tablicę po autorach (kluczach) rosnąco - nie zwracaj uwagi na polskie znaki
      f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "$Autor napisał: $tytulKsiazki", nazwy zmiennych możesz dobrać dowolnie;
*/
$tA=[
    'Jan Brzechwa' => 'Lokomotywa',
    'Henryk Sienkiewicz' => 'W pustyni i w puszczy',
    'Ludwig Nowak' => 'Lalka'
];
echo print_r($tA);
echo "<br>";
echo $tA['Henryk Sienkiewicz'];
$tA['Marcin Majski']='Historia Minecraft';
echo "<br>";
foreach($tA as $autor => $tytul){
    echo "$tytul, ";
};
echo "<br>";
arsort($tA);
echo print_r($tA);
echo "<br>";
ksort($tA);
foreach($tA as $autor => $tytul){
    echo "$autor napisał: $tytul <br>";
};
echo "<br><br>";

/* 9. Zmodyfikuj utworzoną tablicę w punkcie 8 do tablicy wielowymiarowej tak aby każdy autor posiadał kilka dzieł wraz z rokiem ich wydania.
        np. pojedynczy element powinien być zdefiniowany w taki sposób: 'Adrian Pisalski' => [1920 => "Chłopi", 1988 => "Żywot zmarłych].
      Dodaj minimum 2 elementy tablicy. Każdy ma mieć minimum po 2 elementy w 2 wymiarze czyli tablicy zawierającej rok => tutuł.
      
      Następnie:

      a) Dodaj kolejnego autora (element tablicy), który będzie posiadał już tylko 1 dzieło wydane w dowolnym roku.
      e) Posortuj tablicę po tytułach (wartościach) malejąco - nie zwracaj uwagi na polskie znaki
      f) Posortuj tablicę po autorach (kluczach) rosnąco - nie zwracaj uwagi na polskie znaki
      f) Korzystając z funkcji foreach wypisz wszystkie pary w formacie "$Autor napisał: $tytulKsiazki", nazwy zmiennych możesz dobrać dowolnie;
        b) Wypisz tytuł dzieł 2 autora korzystając z funkcji join
      c) Wypisz tytuł dzieł 1 autora korzystając z pętli foreach
      d) Korzystając z podwónej pętli foreach wypisz dla każdego elementu tablicy dane w formacie 
          $nazwaAutora wydał książki:
          - $TytułKsiążki "przecinek" $rokWydania.,

      e)***
      Korzystając z podwónej pętli foreach wypisz dla każdego elementu tablicy dane w formacie 
          $nazwaAutora wydał $liczbatytulow książek:
          - $tytułKsiążki "przecinek" $rokWydania,

      Pod wypisami podaj liczbę autorów i liczbę wszystkich książek.     
*/
$tA=[
    'Jan Brzechwa' => [
        1920 => 'Lokomotywa',
        2020 => 'Lokomotywa2'
    ],
    'Henryk Sienkiewicz' => [
        1890 => 'W pustyni i w puszczy',
        1900 => 'W puszczy i w pustyni'
    ]
];
$ilosKsiazek=0;

foreach($tA as $nazwaAutora => $liczbaTytulowKsiazek){
    echo "$nazwaAutora wydał"." ".count($liczbaTytulowKsiazek)." "."książki:<br>";
    foreach($liczbaTytulowKsiazek as $tytulKsiazki => $rokWydania){
        echo "$tytulKsiazki, $rokWydania<br>";
        $ilosKsiazek++;
    }   
}

echo "Liczba autorów: ".count(array_keys($tA))." "."oraz liczba książek: $ilosKsiazek";


/*
    10. Dla poniższych tablic z użyciem odpowiednich operatorów:

    $t1 = [10,"11",12];
    $t2 = [11, "11", 13, 15];
    $t3 = [12, "11", 10];

    a) przypisz do zmiennej unię tablic $t1 i $t2 oraz wypisz tą zmienną
    b) sprawdź czy $t1 i $t3 są identyczne i wypisz wynik testu
    c) sprawdź czy $t1 i $t3 nie są takie same i wypisz wynik testu
    d) sprawdź czy $t1 i $t3 są takie same i wypisz wynik testu
*/

#11 Ze zmiennej $txt utwórz tablicę fraz rozdzielając je po ",". Wykorzystaj funkcję explode();  Wypisz otrzymaną tablicę;

    $txt = "Iglo,Bułki,Papaya,Cukier trzcinowy";


/*
    12. Dla poniższych tablic z użyciem odpowiednich funkcji:

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"black","g"=>"purple");
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
    

    a) do zmiennej przypisz wynik połączenia tablic $a1 i $a2 (array_merge()) i wypisz go
    b) wypisz różnicę pomiędzy tabelami $a2 i $a3 (array_diff())
    c) wypisz wszystkie wartości tablicy $a2 (array_values)
    c) wypisz wszystkie klucze tablicy $a1 (array_keys)
    c) wyszukaj czy w tablicy $a3 występuje wartość "red"
    d) wyszukaj czy w tablicy $a3 występuje kluc "d"
    
*/


/*
    12. Dla poniższych tablic z użyciem odpowiednich funkcji:

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"black","g"=>"purple");
    $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
    

    a) do zmiennej przypisz wynik połączenia tablic $a1 i $a2 (array_merge()) i wypisz go
    b) wypisz różnicę pomiędzy tabelami $a2 i $a3 (array_diff())
    c) wypisz wszystkie wartości tablicy $a2 (array_values)
    d) wypisz wszystkie klucze tablicy $a1 (array_keys)
    e) sprawdź czy w tablicy $a3 występuje wartość "red"
    f) sprawdź czy w tablicy $a3 występuje klucz "d"
    g) wypisz tablicę od 3 elementu do końca (array_slice)

    
*/




      


