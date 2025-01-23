<?php 
include 'oeuvres.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
    exit;
}
$oeuvre = null;
foreach ($oeuvres as $item) {
    if ($item['id'] == $_GET['id']) {
        $oeuvre = $item;
        break;
    }
}
if (!$oeuvre) {
    header('Location: index.php');
    exit;
}


include 'header.php';

?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= $oeuvre["image"]?>" alt="<?= $oeuvre["title"]?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $oeuvre["title"]?></h1>
            <p class="description"><?= $oeuvre["artist"]?></p>
            <p class="description-complete"><?= $oeuvre["description"]?></p>
        </div>
    </article>
</main>
<?php include 'footer.php'; ?>