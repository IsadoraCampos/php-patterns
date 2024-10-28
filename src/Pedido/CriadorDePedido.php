<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $templates = [];
    public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento) : Pedido
    {
       $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
       $pedido = new Pedido();
       $pedido->template = $template;
       $pedido->orcamento = $orcamento;

       return $pedido;
    }

    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedidos
    {
        $hash = md5($nomeCliente, $dataFormatada); //Junta o nome e a data, assim cria um "ID" único para o cliente
        if (!array_key_exists($hash, $this->templates)) {
            $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
            $this->templates[$hash] = $template;
        }

        return  $this->templates[$hash];
    }
}