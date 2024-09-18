<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="<?=BASEURL?>/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div id="nav-container">
            <img src="<?=BASEURL?>public/img/logo.png" alt="logo" width="50px">
            <nav id="search-bar">
                <input class="border-radius" type="search">
            </nav>
            <button id="submit-btn" class="border-radius"><i class="fa-solid fa-magnifying-glass"></i></button>
            <nav id="nav-items">
                <a href=".<?=BASEURL?>home/index">Home</a>
                <a href="<?=BASEURL?>products/index">Products</a>
            </nav>
        </div>
    </header>

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

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 - TIM 8</p>
        </div>
    </footer>

    <script src="<?=BASEURL?>public/js/detail.js"></script>
</body>
</html>