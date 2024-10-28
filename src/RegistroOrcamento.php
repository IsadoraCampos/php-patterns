<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Http\HttpAdapter;

class RegistroOrcamento
{

    private HttpAdapter $http;
    public function __construct(HttpAdapter $http) {
        $this->http = $http;
    }

    public function registra(Orcamento $orcamento) : void {
        if(!$orcamento->estadoAtual instanceof EstadosOrcamentos\Finalizado) {
            throw new \DomainException("Apenas orçamentos finalizados");
        }
        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidade-itens' => $orcamento->quantidadeItens,
        ]);
    }
}