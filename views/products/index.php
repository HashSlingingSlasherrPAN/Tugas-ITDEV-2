<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>
<section id="our-product">
    <h1 align="center">Our Product</h1>
    
    <div id="product-container" class="product-container">
        <?php foreach($products as $p): ?>
            <div class="card border-radius">
                <div class="card-img">
                    <img src="<?= $p['gambar']?>" alt="linux">
                </div>
                <section>
                    <header>
                        <p class="fw-bold"><?= $p['merk'] . ' ' . $p['nama'] ?></p>
                    </header>
                    <p>Rp. <?= number_format($p['harga'], 0, ',', '.') ?></p>
                    <p>Stock: <?= $p['stok'] ?></p>
                    <a href="<?= BASEURL ?>detail/index?id=<?= $p['id_produk']?>" class="btn-black border-radius shadow pad-2 decoration-none justify-center">Detail Produk</a>
                </section>
            </div>
        <?php endforeach; ?>
    </div>
</section>


    <?php
        require_once VIEWS . "partials/footer.php";
    ?>
<!-- 
    <script src="<?=BASEURL?>public/js/script.js"></script> -->