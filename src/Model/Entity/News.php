<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class News extends Entity
{
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'titlle' => true,
        'text' => true,
        'resume' => true,
        'author' => true,
        'type_id' => true,
        'news_type' => true,
    ];
}
