<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>obliczanie_wieku</title>
</head>
<body>
    <form action="" method="post">
        Liczba osób:
        <input type="number" name="ile" min="1" max="70" required autofocus>
        <input type="submit" value="zatwierdz" name="button">
        <?php
        function liczWiek($wiek) {

            $sumWiek = 0;
            $mlod = 1000;
            $star = 0;
            for($i = 0; $i < sizeof($wiek); $i++) {
                $sumWiek += $wiek[$i];
                if($wiek[$i]>$star)
                    $star = $wiek[$i];

                if($wiek[$i]<$mlod)
                    $mlod = $wiek[$i];
            }

            $avgWiek = round($sumWiek/sizeof($wiek),2);

            echo "<ul>";
            echo"<li>średni wiek: $avgWiek lat</li>";
            echo"<li>najmłodsza osoba: $mlod lat</li>";
            echo"<li>najstarsza osoba: $star lat</li>";
            echo "</ul>";
        }

            if(!empty($_POST['ile'])&&isset($_POST['button'])) {
                $wartosc = $_POST['ile'];
                ob_clean();
                echo "<form method='post'>";
                for($i = 1; $i <= $wartosc; $i++) {
                    echo "Osoba $i: <input type='number' name='wiek[]' required min='1'><br>";
                }

                echo "<input type='submit' value='wyslij' name='przycisk'>", "</form>";

            }

            if(!empty($_POST['wiek'][0])&&isset($_POST['przycisk'])) {
                liczWiek($_POST['wiek']);
            }

        ?>
    </form>
</body>
</html>