<?php
//var_dump($_SERVER);
//var_dump($_GET);

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

use Somatik\Artist;
use Somatik\SocialLink;

require_once __DIR__ . '/../src/dto/artist.php';

$artist = Artist::resolve("Arthur Tourenism");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://tourenism.bandcamp.com/");
$artist->addSocialLink(SocialLink::DISCOGS, "https://www.discogs.com/artist/2730027-Arthur-Tourenism");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/arthur_tourenism");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/tourenism");
$artist = Artist::resolve("Petr Nikitin");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/petrnikitin");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/petr._.nikitin/");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/petrrrnikitin");
$artist = Artist::resolve("Dubsane");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/altabdubsane");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://instagram.com/dubsane");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/dubsane");
$artist->addSocialLink(SocialLink::FB, "https://fb.com/dubsane");
$artist = Artist::resolve("Lem");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/lemnic");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/nicholas_lem");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/lemnic");
$artist->addSocialLink(SocialLink::FB, "https://www.facebook.com/nicholas.lem.5");
$artist->addSocialLink(SocialLink::YOUTUBE, "http://www.youtube.com/user/lemelektron");
$artist = Artist::resolve("Dronum");
$artist = Artist::resolve("Vova PCP");
$artist = Artist::resolve("Tsaritsa Logiki");
$artist = Artist::resolve("Alex Cool");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/alex-cool");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/technoalexcool/");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/acltech");
$artist->addSocialLink(SocialLink::FB, "https://www.facebook.com/alexcooltech");
$artist = Artist::resolve("Office Passenger");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/officepassenger");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://officepassenger.bandcamp.com/");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/officepassenger/");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/bubbleberry");
$artist->addSocialLink(SocialLink::FB, "https://www.facebook.com/OfficePassenger/");
$artist->addSocialLink(SocialLink::YOUTUBE, "https://www.youtube.com/channel/UC6UJ6HvlV485IWZhmPJ2piQ");
$artist = Artist::resolve("Primary Substance");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/primarysubstance");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://primarysubstance.bandcamp.com");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://instagram.com/primary_substance");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/primarysubstance");
$artist->addSocialLink(SocialLink::FB, "https://facebook.com/Primarysubstance");
$artist = Artist::resolve("Kinestetic");
$artist = Artist::resolve("DOQTA");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/doqta-somatik");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://doqta.bandcamp.com/album/dissocination");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/doqta");
$artist = Artist::resolve("NPLM");
$artist = Artist::resolve("U3niko");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/user-930539857");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/evgeny_malashenkov/");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/u3nik");
$artist->addSocialLink(SocialLink::FB, "https://www.facebook.com/profile.php?id=100010250283615");
$artist = Artist::resolve("Kashapov");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://instagram.com/evgenkashapov");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/evgenkashapov");
$artist = Artist::resolve("Kansai");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/x8mgt7gmkj7x");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/kansai_somatik_sound_system");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/kansai88");
$artist = Artist::resolve("Bees And Cobras");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/beesandcobras");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://beesandcobras.bandcamp.com");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://www.instagram.com/eugene.eeee");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/reveswa");
$artist->addSocialLink(SocialLink::FB, "https://www.facebook.com/beesandcobras");
$artist = Artist::resolve("Aedem");
$artist->addSocialLink(SocialLink::SOUNDCLOUD, "https://soundcloud.com/aedem");
$artist->addSocialLink(SocialLink::BANDCAMP, "https://aedem.bandcamp.com/");
$artist->addSocialLink(SocialLink::DISCOGS, "https://www.discogs.com/ru/artist/1843808-Aedem");
$artist->addSocialLink(SocialLink::INSTAGRAM, "https://instagram.com/aedem.ru/");
$artist->addSocialLink(SocialLink::VK, "https://vk.com/kostia_aedem");
$artist->addSocialLink(SocialLink::FB, "https://facebook.com/aedem.ru/");
$artist = Artist::resolve("ICD");
$artist = Artist::resolve("Cylriel");
$artist = Artist::resolve("Dopesmoker");
$artist = Artist::resolve("Costas Alexas");