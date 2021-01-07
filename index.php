<?php 
    include_once ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sederhana</title>
</head>
<body>
    <h1>List Member</h1>
    <a href="form-tambah-member.php">Tambah Member</a>
    <table border="2">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th colspan="2">Action Button</th>
        </tr>

        <?php 
            $query = mysqli_query($koneksi, 'SELECT * FROM member');
            $no = 1;

            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$row[id]</td>";
                echo "<td>$row[nama]</td>";
                echo "<td>$row[umur]</td>";
                echo "<td><a href='form-edit-member.php?id=$row[id]''>EDIT</a></td>";
                echo "<td><a href ='deleteMember.php?id=$row[id]''>DELETE</a></td>";
                echo "</tr>";

                $no++;
            }
        ?>

    </table>
</body>
</html>