<? php
// Tanggal
// Untuk menampilkan tanggal dengan format tertentu
    // tanggal gema ("l, dMY");

// Waktu
// Stempel waktu UNIX / waktu EPOCH
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time ();
// tanggal gema ("dMY", waktu () + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// tanggal gema ("l", mktime (0,0,0,7,26,2001));

// strtotime
 tanggal gema ( "l" , strtotime ( "26 jul 2001" ));
?>