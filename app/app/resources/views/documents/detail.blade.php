@extends('principal')
@section('content')
    
    <div class="container-fluid" style="display:flex; flex-direction:column; align-items: center">
        {{--  <h1>TITULO TCC</h1>  --}}
        <h1>Análise de Algoritmos de Machine Learning na Previsão de Demandas de Estoque</h1>
        {{--  <h3>Subtítulo TCC</h3>  --}}
        <h3>Um estudo comparativo aplicado ao setor varejista brasileiro</h3>
        {{--  <h3>Autor TCC</h3>  --}}
        <h3>Autor: João Carlos da Silva</h3>
        {{--  <h5 style="text-align: left;">Resumo TCC</h5>  --}}
        <h5 style="text-align: left; padding: 1rem 0.2rem 1rem 0.2rem">
            Com o aumento da competitividade no mercado varejista, prever demandas de estoque com precisão tornou-se essencial para reduzir custos e evitar perdas. Este trabalho apresenta uma análise comparativa entre os algoritmos de Regressão Linear, Árvores de Decisão e Redes Neurais, aplicados na previsão de demandas em uma rede de supermercados. O estudo utilizou dados reais de vendas dos últimos cinco anos, processados e analisados com ferramentas de código aberto. Os resultados demonstram que modelos baseados em Redes Neurais apresentam maior acurácia, embora demandem maior custo computacional. Este trabalho contribui para a adoção de tecnologias de inteligência artificial no planejamento estratégico de empresas varejistas.
        </h5>
        <a class="btn btn-outline-dark btn-rounded" href="#linkpdf" role="button">Ver Completo</a>
    </div>

@endsection