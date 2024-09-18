<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
                <a href="<?= BASEURL ?>home/index">Home</a>
                <a href="<?= BASEURL ?>products/index">Products</a>
            </nav>
        </div>
    </header>
    <section id="our-product">
        <center>
            <h1>Our Product</h1>
        </center>
        <div id="product-container">
            <div class="card border-radius">
                <div class="card-img">
                    <img src="https://www.linux-magazine.com/var/linux_magazin/storage/images/issues/2016/182/this-month-s-dvd/dvd-182-lpm_ubuntu.png/662590-1-eng-US/dvd-182-lpm_Ubuntu.png_reference.png" alt="linux">
                </div>
                <section>
                    <header>
                        <p class="fw-bold">Ubuntu 15.10 Disk</p>
                    </header>
                        <p>Rp. 5.00  <s>Rp. 10.00</s></p>
                        <p>Stock: In Stock</p>
                        <a href="<?=BASEURL?>detail/index" class="bg-blue border-radius shadow pad-2 decoration-none">Detail Produk</a>
                </section>
            </div>
        </div>
    </section>

    <footer class="mt-30">
        <div class="footer-content">
            <p>&copy; 2024 - TIM 8</p>
        </div>
    </footer>

    <script src="<?=BASEURL?>public/js/script.js"></script>
</body>
</html>