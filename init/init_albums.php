<?php
//var_dump($_SERVER);
//var_dump($_GET);


use App\Model\Album;
use App\Model\Artist;

;;

$artist = Artist::resolve("Dubsane");
$album = Album::resolve("Escape");
$artist->albums()->save($album);
$album = Album::resolve("Girls");
$artist->albums()->save($album);
$artist = Artist::resolve("Lem");
$album = Album::resolve("Для Оргий И Хороводов");
$artist->albums()->save($album);
$artist = Artist::resolve("Dronum");
$artist = Artist::resolve("Vova PCP");
$album = Album::resolve("Neverendingstory");
$artist->albums()->save($album);
$album = Album::resolve("Remixes");
$artist->albums()->save($album);
$artist = Artist::resolve("Tsaritsa Logiki");
$artist = Artist::resolve("Alex Cool");
$artist = Artist::resolve("Office Passenger");
$artist = Artist::resolve("Primary Substance");
$album = Album::resolve("Hidden by the leaves");
$artist->albums()->save($album);
$artist = Artist::resolve("Kinestetic");
$artist = Artist::resolve("DOQTA");
$album = Album::resolve("Dissocination");
$artist->albums()->save($album);
$artist = Artist::resolve("NPLM");
$album = Album::resolve("Luna");
$artist->albums()->save($album);
$artist = Artist::resolve("U3niko");
$artist = Artist::resolve("Kashapov");
$album = Album::resolve("Mashapov");
$artist->albums()->save($album);
$artist = Artist::resolve("Kansai");
$artist = Artist::resolve("Bees And Cobras");
$artist = Artist::resolve("Aedem");
$album = Album::resolve("Eat my face");
$artist->albums()->save($album);
$album = Album::resolve("Raver baby");
$artist->albums()->save($album);
$artist = Artist::resolve("ICD");
$artist = Artist::resolve("Cylriel");
$artist = Artist::resolve("Dopesmoker");
$artist = Artist::resolve("Costas Alexas");