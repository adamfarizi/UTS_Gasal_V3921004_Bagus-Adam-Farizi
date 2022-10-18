<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi & Dekripsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_POST['enkripsi'])) {

        $input = $_POST["input"];
        $upper = strtolower($input);

        $key = array(
            'a' => 'B',
            'b' => 'A',
            'c' => 'G',
            'd' => 'U',
            'e' => 'S',
            'f' => 'D',
            'g' => 'M',
            'h' => 'C',
            'i' => 'E',
            'j' => 'F',
            'k' => 'H',
            'l' => 'I',
            'm' => 'J',
            'n' => 'K',
            'o' => 'L',
            'p' => 'N',
            'q' => 'O',
            'r' => 'P',
            's' => 'Q',
            't' => 'R',
            'u' => 'T',
            'v' => 'V',
            'w' => 'W',
            'x' => 'X',
            'y' => 'Y',
            'z' => 'Z'
        );

        $output = str_replace(array_keys($key), $key, $upper);
    } elseif (isset($_POST['dekripsi'])) {

        $input = $_POST["input"];
        $upper = strtoupper($input);

        $key = array(
            'a' => 'B',
            'b' => 'A',
            'c' => 'G',
            'd' => 'U',
            'e' => 'S',
            'f' => 'D',
            'g' => 'M',
            'h' => 'C',
            'i' => 'E',
            'j' => 'F',
            'k' => 'H',
            'l' => 'I',
            'm' => 'J',
            'n' => 'K',
            'o' => 'L',
            'p' => 'N',
            'q' => 'O',
            'r' => 'P',
            's' => 'Q',
            't' => 'R',
            'u' => 'T',
            'v' => 'V',
            'w' => 'W',
            'x' => 'X',
            'y' => 'Y',
            'z' => 'Z'
        );

        $output = str_replace($key, array_keys($key), $upper);
        $final = strtoupper($output);
    }
    ?>
    <div class="link">
        <a href="index.php">Vigenere</a>
        <a href="caesar.php" class="active">Caesar</a>
    </div>
    <div class="enkrip">
        <div class="atas">
            <form method="POST">
                <center>
                    <h4>PLAINTEXT</h4>
                </center>
                <textarea name="input" cols="50" rows="8" style="font-family: Arial;" placeholder="Masukkan disini ..."></textarea><br>
                <input type="submit" name="enkripsi" value="ENKRIPSI !" class="button btn1" />
                <input type="submit" name="dekripsi" value="DEKRIPSI !" class="button btn2" />
            </form>
        </div>
        <div class="bawah enkripsi">
            <center>
                <h4>CIPHERTEXT</h4>
            </center>
            <textarea name="hasil" cols="50" rows="10" style="font-family: Arial;" readonly> <?php echo $final; ?> </textarea>
        </div>
    </div>
</body>

</html>