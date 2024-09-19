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
                    <img src="<?= $p['gambar']?>" alt="linux">
                </div>
                <section>
                    <header>
                        <p class="fw-bold"><?= $p['merk'] .' '. $p['nama']?></p>
                    </header>
                        <p>Rp. <?= $p['harga']?></p>
                        <p>Stock: <?= $p['stok']?></p>
                        <a href="<?=BASEURL?>detail/index" class="btn-black border-radius shadow pad-2 decoration-none justify-center">Detail Produk</a>
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