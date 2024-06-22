<?php
  session_start();
  include('database/connection.php');

  $sqlBuku = "SELECT * FROM buku";
  $result = $conn->query($sqlBuku);

  if ($result->num_rows > 0) {
      $books = $result->fetch_all(MYSQLI_ASSOC);
  } else {
      $books = [];
  }

  $conn->close();

  require 'views/Anggota/daftar_buku.php';