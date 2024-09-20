<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>

    <section id="home-article">
        <article class="ms-40">
            <h1>Welcome to the best Marketplace that can handle big Money!</h1>
           
            <p>
            Stop wasting your time with half-baked Marketplace. This is the only Marketplace worth your attention—built for serious Buyer who know what they're doing. If you can’t handle it, go back to playing with toys.
            </p>
            
            <a href="<?= BASEURL ?>products/index" class="btn-red pad-2 fw-bold border-radius shadow decoration-none text-white">Mulai belanja</a>
        </article>
        <figure>
            <img src="<?=BASEURL?>/public/img/cog.png" alt="COGMAN" class="border-radius me-40">
        </figure>
    </section>
    
    <?php
    require_once VIEWS . "partials/footer.php";
    ?>
