<div class="profile">
<div class="container mt-5">

    <div class="mb-4 col-centered">
        <div class="flex-container">
            <div class="img-profile left">
                <img class="img-fluid pic" src="<?= BASE_URL; ?>/assets/images/usuarios/<?= $profile->url_foto; ?>" alt="Card image cap">
            </div>
            <div class="profile-info right">
                <h5 class="card-title"><?= $profile->nome; ?></h5>
                <p class="card-text"><?= $profile->descricao; ?></p>
                <a href="<?=BASE_URL?>/profile/edit" class="btn btn-primary">Edit Info</a>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach ($fotos as $foto) : ?>
            <div class="col-md-4 in-container">
                <img class="object-fit" src="<?= BASE_URL ?>/assets/images/galeria/<?= $foto->url ?>" alt="<?= $foto->titulo ?>">
                <div class="text-left">
                    <span><?=$foto->titulo?></span> -
                    <span><?=$foto->created_at?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>