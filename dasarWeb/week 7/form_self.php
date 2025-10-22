<!Doctype html>
<html>
    <head>
        <title> Form Input PHP</title>
    </head>
    <body>
        <h2> Form Input PHP</h2>
        <?php
        //inisialisasi variabel
        $namaErr ="";
        $nama ="";

        // Cek apakah form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            } else {
                $nama = $_POST["nama"];
                echo "Nama : berhasil diinput";
            }
        }
        ?>
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <label for ="nama">Nama:</label>
           <input type ="text" name="nama" id="nama" value="<?php echo $nama; ?>">
            <span class="error"></span><?php echo $namaErr; ?></span><br><br> 

            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>