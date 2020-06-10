<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class NewsType extends Entity
{
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'name' => true,
    ];
}
