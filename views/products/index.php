<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>
    <section id="our-product">
        <h1 align="center">Our Product</h1>
        
        <?php foreach($products as $p):?>
        <div id="product-container">
            <div class="card border-radius">
                <div class="card-img">
                    <img src="<?= $p['gambar_produk']?>" alt="linux">
                </div>
                <section>
                    <header>
                        <p class="fw-bold"><?= $p['nama_produk']?></p>
                    </header>
                        <p>Rp. <?= $p['harga_produk']?></p>
                        <p>Stock: <?= $p['stok_produk']?></p>
                        <a href="<?=BASEURL?>detail/index" class="bg-blue border-radius shadow pad-2 decoration-none">Detail Produk</a>
                </section>
            </div>
        </div>
        <?php endforeach;?>
        
    </section>

    <?php
        require_once VIEWS . "partials/footer.php";
    ?>
<!-- 
    <script src="<?=BASEURL?>public/js/script.js"></script> -->