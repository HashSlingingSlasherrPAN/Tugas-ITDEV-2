<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>
<body>

    <section id="home-article" class="detail-img">
        <article class="">
            <h1 id="judul">Ubuntu 15.10 Disk</h1>
            <p id="deskripsi">Ini adalah kaset yang berisi distro Linux Ubuntu versi 15.10 dan memiliki fitur Premium yang tidak ada di distro gratis lainnya.</p>
            <p>Rp. <a id="harga">5.00</a></p>
            <ul>
                <li>Stok: <a id="stok">99</a></li>
                <li>Berat: <a id="berat">20</a> Kg</li>
                <li>Brand: <a id="merk">Ubuntu</a></li>
                <li>Kategori: <a id="kat">Computer</a></li>
                <li>Tags: <a id="tag">Tech</a></li>
            </ul>
            <button class="bg-grey pad-2 text-white fw-bold border-radius">Tambah ke Keranjang</button>
            <button class="bg-green pad-2 text-white fw-bold border-radius">Beli Sekarang</button>
        </article>
        <figure>
            <img src="https://www.linux-magazine.com/var/linux_magazin/storage/images/issues/2016/182/this-month-s-dvd/dvd-182-lpm_ubuntu.png/662590-1-eng-US/dvd-182-lpm_Ubuntu.png_reference.png" id="gambar" alt="detail" class="detail-img">
        </figure>
    </section>

    <?php
        require_once VIEWS . "partials/footer.php";
    ?>
    <!-- <script src="<?=BASEURL?>public/js/detail.js"></script> -->
</body>
</html>