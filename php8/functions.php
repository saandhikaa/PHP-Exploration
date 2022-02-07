<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "pacar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        // ambil data dari form
        $fnama = htmlspecialchars($data["nama"]);
        $fbirth = htmlspecialchars($data["birth"]);
        $fhobi = htmlspecialchars($data["hobi"]);
        $ffoto = htmlspecialchars($data["foto"]);

        // query insert data
        $query = "INSERT INTO pacarku VALUES ('', '$fnama', '$fbirth', '$fhobi', '$ffoto')";

        global $conn;
        mysqli_query($conn, $query);

        // cek data berhasil ditambahkan
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM pacarku WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>