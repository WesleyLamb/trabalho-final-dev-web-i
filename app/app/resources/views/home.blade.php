@extends('principal')
@section('content')
    
<div>
     <header style="display: flex; flex-direction:column;">
          <div class="logo" style="display: flex; flex-direction: column; align-items: center">
               <img src="{{asset('images/logotcc.webp')}}" alt"Logo Portal TCC" height="180rem">
          </div>
          <h1 style="padding-top:2rem; ">Bem-vindo ao Portal TCC</h1>
          <p style="padding-bottom: 1rem">A sua biblioteca online de Trabalhos de Conclusão de Curso.</p>
     </header>
     <div style="display: flex; flex-direction:column;">
          <section>
               <h2>O que você encontra no Portal TCC:</h2>
               <ul>
                    <li><strong>Ferramenta de busca inteligente:</strong> Encontre trabalhos por palavras-chave, tema ou autor.</li>
                    <li><strong>Acesso rápido e fácil:</strong> Todos os trabalhos disponíveis na palma da sua mão.</li>
                    <li><strong>Inspiração e aprendizado:</strong> Explore diferentes formatos, métodos e ideias para seu próprio TCC.</li>
               </ul>
          </section>
          <section>
               <h2>Por que escolher o Portal TCC?</h2>
               <ul>
                    <li><strong>Gratuito e acessível:</strong> Democratizamos o acesso ao conhecimento.</li>
                    <li><strong>Foco na excelência:</strong> Trabalhos revisados e com qualidade comprovada.</li>
               </ul>
          </section>
          <div class="cta">
               <p>Pronto para dar o próximo passo no seu trabalho acadêmico?</p>
               <a href="{{route('documents.catalog')}}" class="btn btn-primary" style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);" role="button">Explorar TCCs</a>
               <a href="{{route('auth.login.view')}}" class="btn btn-primary" style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);" role="button">Login</a>
          </div>
     </div>
</div>

@endsection