<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $endereco
 * @property string $email
 * @property string $telefone
 * @property \Cake\I18n\FrozenDate $data_nasc
 * @property string $sexo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Cliente extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome' => true,
        'endereco' => true,
        'email' => true,
        'telefone' => true,
        'data_nasc' => true,
        'sexo' => true,
        'created' => true,
        'modified' => true,
    ];
}
