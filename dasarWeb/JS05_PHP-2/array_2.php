<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
         <?php
         $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'perempuan'];

        echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse:collapse;'>";
        echo "<tr><th>Nama</th><th>Domisili</th><th>jenis kelamin</th></tr>";
        echo "<tr>
                <td>{$Dosen['nama']}</td>
                <td>{$Dosen['domisili']}</td>
                <td>{$Dosen['jenis_kelamin']}</td>
                </tr>";
        echo "</table>";
        ?>
    </body>
</html>