<?php
$testo_censurato = str_replace(
    $_GET['blasphemy'],
    ('***'),
    $_GET['paragraph']);
?>

<h1><?= $_GET['blasphemy']?></h1>
<p><?= $_GET['paragraph'] . ", la lunghezza del testo è ". strlen($_GET['paragraph'])?></p>
<div>Il testo censurato sarà:</div>
<div> <?= $testo_censurato . ", la nuova lunghezza del testo è ". strlen($testo_censurato)?> </div>
