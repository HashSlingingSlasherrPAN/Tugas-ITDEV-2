<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>
<body>
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

    <?php
        require_once VIEWS . "partials/footer.php";
    ?>
<!-- 
    <script src="<?=BASEURL?>public/js/script.js"></script> -->
</body>
</html>