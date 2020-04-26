<?php
declare(strict_types=1);
namespace Somatik;

use PDO;

require_once __DIR__.'/base.php';
require_once __DIR__.'/artist.php';

class Album
{
    use Base;
    public static string $TABLE = 'main.albums';

    public string $name;
    public string $image_url;
    public ?string $player_url;
    public string $released_at;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->released_at = release_date(strtotime($this->released_at));
    }

    function getArtists(): array
    {
        $stmt = self::DBH()
            ->prepare("SELECT artists.* FROM artists JOIN artist_albums aa ON artists.id = aa.artist_id WHERE aa.album_id = :id");
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, Artist::class);
    }

    public static function resolve(string $idOrName): Album
    {
        $stmt = self::DBH()->prepare("SELECT * FROM main.albums WHERE id = :id OR name = :idName");
        $id = intval($idOrName) ?: -1;
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':idName', $idOrName, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject(__CLASS__);
    }


}
