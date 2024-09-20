<?php
require_once VIEWS . "partials/header.php";
require_once VIEWS . "partials/navbar.php";
?>
<section id="home-article" class="detail-img">
    <?php if (!empty($product)): ?>
        <article class="ms-40 mt-60">
            <h1><?= htmlspecialchars($product['nama']) ?></h1>
            <p><?= htmlspecialchars($product['deskripsi']) ?></p>
            <h4>Rp. <?= number_format($product['harga'], 0, ',', '.') ?></h4>
            <ul>
                <li>Stok: <?= $product['stok'] ?></li>
                <li>Merk: <?= htmlspecialchars($product['merk']) ?></li>
                <li>Processor: <?= htmlspecialchars($product['processor']) ?></li>
                <li>Ram: <?= $product['ram'] ?> GB</li>
                <li>Penyimpanan: <?= $product['penyimpanan'] ?> GB</li>
                <li>Jenis Penyimpanan: <?= htmlspecialchars($product['jenis_penyimpanan']) ?></li>
                <li>Ukuran Layar: <?= $product['ukuran_layar'] ?> Inch</li>
                <li>VGA: <?= htmlspecialchars($product['vga']) ?></li>
                <li>Berat: <?= $product['berat'] ?> Kg</li>
                <li>Brand: <?= htmlspecialchars($product['merk']) ?></li>
            </ul>
            <button class="bg-grey pad-2 text-white fw-bold border-radius">Tambah ke Keranjang</button>
            <button class="bg-green pad-2 text-white fw-bold border-radius">Beli Sekarang</button>
        </article>
        <figure>
            <img src="<?= htmlspecialchars($product['gambar']) ?>" id="gambar" alt="detail" class="detail-img border-radius">
        </figure>
    <?php else: ?>
        <p>Produk tidak ditemukan.</p>
    <?php endif; ?>
</section>

<?php
require_once VIEWS . "partials/footer.php";
?>
<!-- <script src="<?=BASEURL?>public/js/detail.js"></script> -->
