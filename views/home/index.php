<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>

    <section id="home-article">
        <article class="ms-40">
            <h1>Selamat Datang di Nano Store</h1>
            <p>
                "Senyuman anda kebanggaan kami"
            </p>
            <p>
                Nano Store telah berdiri sejak tahun 1995 dan telah mencetak banyak penghargaan dari seluruh dunia.
                Kami menyediakan berbagai kebutuhan anda mulai dari fashion, alat rumah tangga, elektronik, hingga mainan
                untuk balita anda. Sebagai toko yang baik, kami akan selalu melayani anda dengan senyuman 3S. 
                Toko kami tersebar di seluruh dunia yang memiliki cabang diberbagai kota dan negara.
            </p>
            <p>
                Barang yang kami sediakan 100% ORI dan memiliki harga dibawah pasar. Tiap minggu terdapat promo besar-besaran
                Jadilah member dan dapatkan banyak diskon dan voucher tiap harinya.
            </p>
            <a href="<?= BASEURL ?>products/index" class="btn-red pad-2 fw-bold border-radius shadow decoration-none text-white">Pelajari lebih lanjut!</a>
        </article>
        <figure>
            <img src="<?=BASEURL?>/public/img/bg.png" alt="blackarch" class="border-radius me-40">
        </figure>
    </section>
    
    <?php
    require_once VIEWS . "partials/footer.php";
    ?>
