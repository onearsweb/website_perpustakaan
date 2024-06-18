<?php
require '../database/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $jk = $_POST['jk'];

    $sql = "INSERT INTO admin (nama, password, jk) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nama, $password, $jk);

    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi Admin</title>
</head>
<body>
    <h2>Registrasi Admin</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="jk">Jenis Kelamin:</label><br>
        <select id="jk" name="jk" required>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select><br><br>
        <input type="submit" value="Registrasi">
    </form>
</body>
</html>
