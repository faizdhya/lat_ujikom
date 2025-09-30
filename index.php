<?php 
include "nav.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == "home") {
    include "home.php";
} elseif ($page == "identitas") {
    include "identitas.php";
}elseif ($page == "galeri") {
    include "galeri.php";
}elseif ($page == "vm") {
    include "vm.php";
}elseif ($page == "ekskul") {
    include "ekskul.php";
}
else {
    echo "<h5>Halaman tidak ditemukan</h5>";
}

include "footer.php";
?>