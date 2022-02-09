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


    function getpacar(){
        $query = "INSERT INTO pacarku VALUES ('', 'Rose', '021197', 'eating', 'rose.png')";

        global $conn;
        mysqli_query($conn, $query);
    }

    function tambah($data, $newid){
        // ambil data dari form
        $fnama = htmlspecialchars($data["nama"]);
        $fbirth = htmlspecialchars($data["birth"]);
        $fhobi = htmlspecialchars($data["hobi"]);

        // upload foto
        $ffoto = upload($newid, $fnama);
        if (!$ffoto){
            return false;
        }

        // query insert data
        $query = "INSERT INTO pacarku VALUES ('', '$fnama', '$fbirth', '$fhobi', '$ffoto')";

        global $conn;
        mysqli_query($conn, $query);

        // cek data berhasil ditambahkan
        return mysqli_affected_rows($conn);
    }


    function upload($newid, $newname){
        $namafoto = $_FILES['foto']['name'];
        $ukuranfoto = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpnama = $_FILES['foto']['tmp_name'];

        // cek gambar sudah di-upload
        if ($error === 4){
            echo "Gambar belum di upload<br>";
            return false;
        }

        // cek ektensi file yg di-upload
        $mustfile = ['jpg', 'jpeg', 'png'];
        $getext = explode('.', $namafoto);
        $getext = strtolower(end($getext));
        if (!in_array($getext, $mustfile)){
            echo "Foto tidak terlihat, tidak diterima<br>";
            return false;
        }

        // cek ukuran gambar yg di-upload
        if ($ukuranfoto > 2000000){
            echo "Foto terlalu HD, tidak diterima<br>";
            return false;
        }

        // mendapatkan nama foto baru
        $newfotoname = $newid . "-" . $newname . "." . $getext;

        move_uploaded_file($tmpnama, 'image/' . $newfotoname);

        return $newfotoname;
    }


    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM pacarku WHERE id = $id");
        return mysqli_affected_rows($conn);
    }


    function ubah($data){
        // ambil data dari form
        $id = $data["id"];
        $fnama = htmlspecialchars($data["nama"]);
        $fbirth = htmlspecialchars($data["birth"]);
        $fhobi = htmlspecialchars($data["hobi"]);
        $ffotolama = htmlspecialchars($data["fotolama"]);
        
        // cek ada gambar yg di-upload
        if ($_FILES['foto']['error'] === 4){
            $ffoto = $ffotolama;
        }else{
            $ffoto = upload($id,$fnama);
        }
        // query insert data
        $query = "UPDATE pacarku    SET     nama = '$fnama', 
                                            birth = '$fbirth', 
                                            hobi = '$fhobi', 
                                            foto = '$ffoto' 
                                    WHERE   id = $id ";

        global $conn;
        mysqli_query($conn, $query);

        // cek data berhasil ditambahkan
        return mysqli_affected_rows($conn);
    }


    function cari($keyword){
        $query = "SELECT * FROM pacarku WHERE 
                    nama LIKE '%$keyword%' OR
                    birth LIKE '%$keyword%' OR
                    hobi LIKE '%$keyword%'
                    ";
        return query($query);
    }

    
    function registration($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek ketersediaan username
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)){
            echo "<script>alert('Username sudah dipakai')</script>";
            return false;
        }
        
        // cek kesamaan password
        if ($password !== $password2){
            echo "<script>alert('Password tidak sama')</script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambahkan user baru ke database, tabel users
        mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
        return mysqli_affected_rows($conn);
    }
    
?>