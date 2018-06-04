<div class="home">
    <div class="container">
        <h1 class="text-center display-3 mt-4">Galeria</h1>
        
        <?php foreach ($fotos as $foto) : ?>
        <figure>
            <img class="img-size img-fluid figure-img" src="<?= BASE_URL; ?>/assets/images/galeria/<?= $foto->url; ?>" alt="foto">
            <h2><?= $foto->titulo; ?></h2><figcaption class="figure-catpion"><?= $foto->created_at; ?></figcaption>
        </figure>
        <?php endforeach; ?>
<   /div>
</div>