<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\{Orcamento};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado};

$orcamento = new Orcamento();
//$pedido = new Pedido();

$orcamento->valor = 1200;
$orcamento->quantidadeItens = 4;

//$pedido->nomeCliente = 'Claudio';

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoXml = new ArquivoXmlExportado('orcamento');
echo $orcamentoXml->salvar($orcamentoExportado);

//$pedidoExportado = new PedidoExportado($pedido);