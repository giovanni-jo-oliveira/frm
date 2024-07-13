<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
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
                'nome_prod' => 'Lorem ipsum dolor sit amet',
                'principio_ativo' => 'Lorem ipsum dolor sit amet',
                'indicacao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
