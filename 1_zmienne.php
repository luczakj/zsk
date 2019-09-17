<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Document</title>
  </head>
  <body>
    <?php
    $_name = 'Janusz';
    $name1 = 'Janusz';
    $name = 'Janusz';

    echo "$name1".$name;
    echo "$name1",$name;

    $prawda = True;

  //typy integer

    $calkowita = 10;
    $hex = 0xA;
    $oct = 010;
    $bin = 0b1010;

   echo $bin,"<br>$hex".$calkowita;

  // skladnia heredoc

    $imie = 'Kasia';
    $nazwisko = 'Nazwisko';

    $text = <<< ETYKIETA
    Twoje imie: $imie<br>
    Twoje nazwisko: $nazwisko<hr>

ETYKIETA;

    echo $text;

    echo <<< E
    Imie: $imie<br>
E;

  //skladnia nowdoc

    echo <<< 'E'
    Imie: $imie<br>
E;

  //nazwy zmiennych
    echo "<hr>Nazwa zmiennej: \$imie, wartość zmiennej imie: $imie";

  ?>
  </body>
</html>
