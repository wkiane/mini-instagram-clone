<div class="container">
    <div class="mt-4 img-container mx-auto d-block">
        <h3><?= $foto->titulo ?></h3>
        <a href="<?=BASE_URL?>/profile/profile/<?= $foto->user_id ?>" class="text-capitalize"><?= $foto->nome ?></a> -
        <span><?= $foto->created_at ?></span>
        <img class="img-fluid mt-3" src="<?= BASE_URL ?>/assets/images/galeria/<?= $foto->url ?>" alt="">
    </div>
</div>
