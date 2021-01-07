<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Member</title>
</head>
<body>
    <h1>Form Tambah Member</h1>
    <form method="POST" action ="proses-tambah-member.php">
        <label><b>Nama :</b> 
            <input type = "text" name = "nama" placeholder = "isi nama anda"></input>
        </label> <br/><br/>
        <label><b>Umur :</b> 
            <input type = "number" name = "umur" placeholder = "umur anda"></input>
        </label> <br/><br/>
        <input type ="submit" value="SUBMIT"></input>
    </form>
</body>
</html>