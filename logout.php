<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
echo '<script language="javascript">alert("Anda berhasil Logout Sekian Terima Kasih (^_^)"); document.location="login.php";</script>';
?>