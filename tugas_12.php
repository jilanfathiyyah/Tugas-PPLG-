<?php
// Tugas 12: pengunaan foreach
$nama_kelas_10b = [
    "Akifah Zahrani Arafat",
    "Al Qumaerah",
    "Althaf Azza Zahra",
    "Andi AlFirqahtunnajiyah Ahsyar",
    "Andi Mufrodatul Fanzila",
    "Fahrah Furaidah Sahrir",
    "Fauziyyah",
    "Jilan Fathiyyah",
    "Nadia Mirzayanti Hasbi",
    "Rabi'atul Adawiyah",
    "Alifah Izzah Rahmadini",
    "Muftihaturrahmah",
    "Aulia Nahtyti Khayla Armada",
    "Putri Kinanti Al Maghfirah",
]; 

echo "Daftar Anggota Kelas 10 B <br>" ;
 foreach ($nama_kelas_10b as $anggota_kelas_10b) {
    echo "-" . $anggota_kelas_10b . "<br>" ;
 }