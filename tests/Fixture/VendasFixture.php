<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendasFixture
 */
class VendasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'data_venda' => '2024-07-06 21:01:26',
                'quantidade' => 'Lorem ipsum dolor sit amet',
                'id_produto' => 1,
                'id_cliente' => 1,
            ],
        ];
        parent::init();
    }
}
