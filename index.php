<?php 
include 'oeuvres.php';
include 'header.php';
?>
    <main>
        <div id="liste-oeuvres">
            <?php foreach($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                    <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['title'] ?>">
                    <h2><?= $oeuvre['title'] ?></h2>
                    <p class="description"><?= $oeuvre['artist'] ?></p>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </main>
<?php include 'footer.php'; ?>