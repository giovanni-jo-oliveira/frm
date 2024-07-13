<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $data_venda
 * @property string|null $quantidade
 * @property int|null $id_produto
 * @property int|null $id_cliente
 */
class Venda extends Entity
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
        'data_venda' => true,
        'quantidade' => true,
        'id_produto' => true,
        'id_cliente' => true,
    ];
}
