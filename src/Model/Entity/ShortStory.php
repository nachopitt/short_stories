<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShortStory Entity
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $source
 * @property string $genre
 * @property \Cake\I18n\FrozenDate $date
 * @property string $language
 * @property int $length
 * @property string $length_unit
 * @property string $summary
 * @property string $state
 *
 * @property \App\Model\Entity\Keyword[] $keywords
 */
class ShortStory extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'author' => true,
        'source' => true,
        'genre' => true,
        'date' => true,
        'language' => true,
        'length' => true,
        'length_unit' => true,
        'summary' => true,
        'state' => true,
        'keywords' => true,
    ];
}
