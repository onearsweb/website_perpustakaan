<?php
require '../database/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

    $sql = "INSERT INTO anggota (nim, nama, jk, alamat, no_tlp) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nim, $nama, $jk, $alamat, $no_tlp);

    if ($stmt->execute()) {
        echo "Registrasi anggota berhasil!";
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
    <title>Registrasi Anggota</title>
</head>
<body>
    <h2>Registrasi Anggota</h2>
    <form method="post" action="">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="jk">Jenis Kelamin:</label><br>
        <select id="jk" name="jk" required>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select><br><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" required></textarea><br><br>
        <label for="no_tlp">No Telepon:</label><br>
        <input type="text" id="no_tlp" name="no_tlp" required><br><br>
        <input type="submit" value="Registrasi">
    </form>
</body>
</html>
