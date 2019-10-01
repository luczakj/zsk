<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $text = "Janusz";
        echo strtolower($text),'<br>';
        echo strtoupper($text),'<br>';

        $text = 'janusz Kowalski poznan';
    //pierwsza na duza
        echo ucfirst($text),'<br>';
    //wszystkie pierwsze na duze
        echo ucwords($text),'<br>';

    #######################################

    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    echo $lorem;

    $col = wordwrap($lorem, 35, '<br>');

    ////////////////////////////////
    //czyszczenie zawartosci bufora

    ob_clean();

    #############################################
    //usuwanie bialych znakow

    $name = 'Janusz';
    $name1 = '    Janusz   ';

    echo 'dlugosc zmiennej $name: ', strlen($name),'<br>';
    echo 'dlugosc zmiennej $name1: ', strlen($name1),'<br>';

    echo strlen(ltrim($name1)),'<br>';
    echo strlen(rtrim($name1)),'<br>';
    echo strlen(trim($name1)),'<br>';

    //przeszukiwanie znakow

    $address = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel');
    echo $search,'<br>';

    $address = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
    $search = strstr($address, 'tel', true);
    echo $search,'<br>';

    $address = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
    $search = stristr($address, 'Tel');
    echo $search,'<br>';

    $mail = strstr('zsk@gmail.com', '@');
    echo $mail,'<br>';

    $mail = strstr('zsk@gmail.com', 64);
    echo $mail,'<br>';

    ################################################

    $ciag1 = 'a';
    $ciag2 = 'aa';

    echo strcmp($ciag1, $ciag2),'<br>';//-1
    echo strcmp('z', 'z'),'<br>';//0
    echo strcmp('a', 'z'),'<br>';//-1
    echo strcmp('z', 'a'),'<br>';//1
    echo strcmp('z', 'za'),'<hr>';//-1

    //pozycja

    $pos = strpos('abcdefg','cde');
    echo $pos; //2

    $pos = strpos('abcdefcabcdeg','abc');
    echo $pos; //0

    /*
    Zad.1
    sprawdz czy w ciagu o nazwie text1 znajduje sie ciag text2
    */

    $text1 = 'abcdabcd';
    $text2 = 'ab';//ab
    $pos = strpos($text1,$text2);
    echo '<hr>';
    if($pos > -1){
      echo 'woah';
    }else{
      echo 'ni ma';
    }

    if(strpos($text1,$text2) === false){
      echo 'woah';
    }else{
      echo 'ni ma';
    }

    //przetwarzanie ciagu znakow

    $replace = str_replace('%name%', 'Janusz', 'Mam na imie: %name%');
    echo $replace,'<br>';

    //substr

    $surname = substr('Janusz Kowalski', 3);
    echo $surname,'<br>';

    $surname = substr('Janusz Kowalski', -5);
    echo $surname,'<br>';

    $surname = substr('Janusz Kowalski', 7, -3);
    echo $surname,'<br>';

    //zamiana polskich znakow

    $login = 'żąkol';
    $censore = array('ą','ę','ś','ć','ź','ż','ó','ń','ł');
    $replace = array('a','e','s','c','z','z','o','n','l');

    $newlogin = str_replace($censore, $replace, $login);
    echo ucfirst($newlogin),'<hr>';

    ob_clean();

    /*
    Zad.2
    Napisz aplikacje cenzurującą 'biały' i 'czarny' na ciag '#####'
    */

    echo <<< FORM
      <form method="post">
        <input type="text" name="dane" placeholder="wpisz zdanie"><br><br>
        <input type="submit" value="Zatwierdz">
      </form>
    FORM;

    if (isset($_POST['dane'])){
      $data = $_POST['dane'];

      $censore = array('biały','czarny');
      $replace = '######';

      $new = str_replace($censore, $replace, $data);
      echo 'dane przed sprawdzeniem','<h6>',$data,'</h6>','<br>';
      echo 'dane po sprawdzeniu','<h3>',$new,'</h3>','<br>';

    }



    ?>

</body>
</html>
