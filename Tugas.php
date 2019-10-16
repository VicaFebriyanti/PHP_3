<?php
/// ARRAY 1 DIMENSI ///
/*  
  $test=["Vica","Asti","Nivia", "Anisa"];
  echo "Nama saya :" . " " . $test[0];

//Merubah index //
$siswa = [
  "nama" => "Vica",
  "jk" => "Perempuan",
  "kelas" => "XI RPL 1"
];

  echo "Nama saya :" . " " . $siswa["nama"];

  echo "Gender saya :" . " " . $siswa["jk"];

  echo "Kelas saya :" . " " . $siswa["kelas"]; 
*/

///ARRAY 2 DIMENSI ///
/*
$siswa = [
  [
    "nama" => "Vica",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Irfan",
    "jk" => "Laki-Laki",
    "kelas" => "XI RPL 1" 
  ]
];

echo "Nama saya :" . " " . $siswa [1] ["nama"] . "<br>";
echo "Gender saya :" . " " . $siswa [1] ["jk"] . "<br>";
echo "Kelas saya :" . " " . $siswa [1] ["kelas"] . "<br>"; 
*/

/// MULTI DIMENSI ///
$siswa = [
  [
    "nama" => "Vica",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Nivia",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Gilang",
    "jk" => "Laki-Laki",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Irfan",
    "jk" => "Laki-Laki",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Aina",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1"
  ],
  [
    "nama" => "Asti",
    "jk" => "Perempuan",
    "kelas" => "XI RPL 1" 
  ]
];

foreach($siswa as $row) {
  echo "Nama :" . " " . $row["nama"] .  "<br>";
}
?>
