<?php 

    include_once ('koneksi.php');

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM member WHERE id = '$id'");
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MEMBER</title>
</head>
<body>
    <h1>FORM EDIT MEMBER</h1>
    <form method = "POST" action = "edit-member.php?id=<?php echo $id; ?>">
        <label><b>Nama Member :</b> 
            <input type = "text" name = "nama" placeholder = "Nama Baru" />
        </label><br/><br/>
        <label><b>Umur Member : </b> 
            <input type = "number" name = "umur" placeholder = "Umur Baru" />
        </label><br/><br/>
        <input type = "submit" value = "SUBMIT" />
    </form>
</body>
</html>