<?php 
// Membuat koneksi ke database 
// mysqli(source, username, password, nama db)

$db = new mysqli("localhost","root","","11rpl1_db",);
if (mysqli_connect_errno()) {
    echo "Error :" . mysqli_connect_error() ;
}
else {
  //  echo "Success";
}

    
?>

<table border="1" cellpadding = "10" cellspacing = "0">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM siswa";
            $result = $db->query($sql);
            $no = 1;
            while( $row = $result->fetch_assoc() ) //menampilkan bentuk array
            {
                //echo $row["nama_lengkap"] . "<br>";
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$row["nis"]."</td>
                        <td>".$row["nama_lengkap"]."</td>
                        <td>".$row["jk"]."</td>
                        <td>".$row["tmp_lahir"]."</td>
                        <td>".$row["tgl_lahir"]."</td>
                        <td>".$row["alamat"]."</td>
                        <td>".$row["no_hp"]."</td>
                    </tr>
                ";

                $no++;
            }
        ?>
    </tbody>
</table>
