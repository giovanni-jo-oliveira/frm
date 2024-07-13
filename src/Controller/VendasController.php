<?php
declare(strict_types=1);

namespace App\Controller;


class VendasController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos', 'Clientes'],
        ];
        $vendas = $this->paginate($this->Vendas);
    
        $this->set(compact('vendas'));
    }

   
    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('venda'));
    }

    public function add()
{
    $venda = $this->Vendas->newEmptyEntity();
    if ($this->request->is('post')) {
        $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
        if ($this->Vendas->save($venda)) {
            $this->Flash->success(__('The venda has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The venda could not be saved. Please, try again.'));
    }

    // Carregar os produtos e clientes
    $produtos = $this->Vendas->Produtos->find('list', ['limit' => 200]);
    $clientes = $this->Vendas->Clientes->find('list', ['limit' => 200]);

    // Passar os produtos e clientes para a view
    $this->set(compact('venda', 'produtos', 'clientes'));
}


public function edit($id = null)
{
    $venda = $this->Vendas->get($id, [
        'contain' => ['Produtos', 'Clientes'], // Carrega dados relacionados de Produtos e Clientes
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
        $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
        if ($this->Vendas->save($venda)) {
            $this->Flash->success(__('The venda has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The venda could not be saved. Please, try again.'));
    }

    // Carrega todos os produtos e clientes para dropdowns
    $produtos = $this->Vendas->Produtos->find('list')->toArray();
    $clientes = $this->Vendas->Clientes->find('list')->toArray();

    $this->set(compact('venda', 'produtos', 'clientes'));
}



    
    

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('The venda has been deleted.'));
        } else {
            $this->Flash->error(__('The venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
