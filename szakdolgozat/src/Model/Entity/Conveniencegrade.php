<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conveniencegrade Entity
 *
 * @property int $id
 * @property bool $active
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modified_by
 */
class Conveniencegrade extends Entity
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
        'active' => true,
        'name' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true
    ];
}
