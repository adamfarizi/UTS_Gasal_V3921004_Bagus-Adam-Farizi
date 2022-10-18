<?php
    error_reporting(0);
?>
<?php include 'footer.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enkripsi & Dekripsi</title>
        <link rel="stylesheet" href="style2.css">
        <script type="text/javascript" src="Script.js"></script>
				

    </head>
    <body>
        <div class="link">
            <a href="index.php"class="active" >Vigenere</a>
            <a href="caesar.php">Caesar</a>
        </div>      
        <div class="enkrip">
            <div class="atas">
                <form action="index.php" method="POST">
                    <center><h4>KEY</h4></center>
                    <input type="text" name="pswd" id="pass" class="key" placeholder="Masukkan key ..." value="<?php echo htmlspecialchars($pswd); ?>">
                    <center><h4>PLAINTEXT</h4></center>
                    <textarea name="code" cols="50" rows="8" style="font-family: Arial; padding: 10px;" placeholder="Masukkan disini ..."></textarea><br>
                    <input type="submit" name="encrypt" value="ENKRIPSI !" onclick="validate(1)" class="button btn1" />
                    <input type="submit" name="decrypt" value="DEKRIPSI !" onclick="validate(2)" class="button btn2" />

                </form>
            </div>
            <div class="bawah enkripsi">
                <center><h4>CIPHERTEXT</h4></center>
                <textarea name="hasil" cols="50" rows="10" style="font-family: Arial; padding: 10px;" readonly><?php echo htmlspecialchars($code); ?></textarea>
            </div>
        </div>
    </body>
</html>
