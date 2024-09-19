<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>
    <section id="home-article" class="detail-img">
        <?php foreach($products as $p):?>
        <article class="ms-40 mt-60">
            <h1><?=$p['nama']?></h1>
            <p><?=$p['deskripsi']?></p>
            <h4>Rp. <?=$p['harga']?></h4>
            <ul>
                <li>Stok: <?=$p['stok']?></li>
                <li>Merk:: <?=$p['merk']?></li>
                <li>Processor: <?=$p['processor']?></li>
                <li>Ram: <?=$p['ram']?> GB</li>
                <li>Penyimpanan: <?=$p['penyimpanan']?> GB</li>
                <li>Jenis Penyimpanan: <?=$p['jenis_penyimpanan']?></li>
                <li>Ukuran Layar: <?=$p['ukuran_layar']?> Inch</li>
                <li>VGA: <?=$p['vga']?></li>
                <li>Berat: <?=$p['berat']?> Kg</li>
                <li>Brand: <?=$p['merk']?></li>
            </ul>
            <button class="bg-grey pad-2 text-white fw-bold border-radius">Tambah ke Keranjang</button>
            <button class="bg-green pad-2 text-white fw-bold border-radius">Beli Sekarang</button>
        </article>
        <figure>
            <img src="<?=$p['gambar']?>" id="gambar" alt="detail" class="detail-img border-radius">
        </figure>
        <?php endforeach; ?>
    </section>

<?php
    require_once VIEWS . "partials/footer.php";
?>
    <!-- <script src="<?=BASEURL?>public/js/detail.js"></script> -->