@extends('principal')
@section('content')
    
     <div style="display: flex; justify-content: center; width: 100%">
          <form action="{{route('documents.store')}}" style="width: 50%; height: auto; padding: 1rem; gap:1rem; border-radius:0.5rem; box-shadow: 0 0.3rem 0.5rem rgba(0,0,0,0.4);">
               <h3>Novo Documento</h3><br>
               <div class="form-group" style="width: 100%">
                    <label for="validationCustom01">Nome do Autor:</label>
                    <input type="text" class="form-control" id="authorName" placeholder="Nome completo do autor" required>
               </div>
               <div class="form-group" style="width: 100%">
                    <label for="validationCustom01">Nome do Co-autor (caso exista):</label>
                    <input type="text" class="form-control" id="authorName" placeholder="Nome completo do co-autor">
               </div>
               <div class="form-group" style="width: 100%">
                    <label for="validationCustom01">Nome do Orientador:</label>
                    <input type="text" class="form-control" id="authorName" placeholder="Nome completo do orientador" required>
               </div>
               <div class="form-group">
                    <label for="yearInput">Ano:  </label>
                    <input type="number" id="yearInput" name="year" min="1950" max="2024" placeholder="YYYY" required>
               </div>
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Título:</label>
                    <textarea class="form-control" id="titulo" rows="1" required></textarea>
               </div>
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Subtítulo:</label>
                    <textarea class="form-control" id="subtitulo" rows="1" required></textarea>
               </div>
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resumo:</label>
                    <textarea class="form-control" id="resumo" rows="6" required></textarea>
               </div>
               <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 0.7rem;">
                    <div class="form-group">
                         <label for="exampleFormControlFile1">Adicione o arquivo em PDF:</label>
                         <input type="file" class="form-control-file" id="arquivoPdf" placeholder="Nenhum arquivo selecionado" required>
                    </div>
                    <button type="submit" class="btn btn-primary"  style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);">Upload</button>
               </div>
          </form>
     </div>
     <style>
          input[type="number"] {
               background-color: #ffffff; /* Cor de fundo branco */
               color: #000; /* Cor do texto (preto) */
               margin: 0.6rem 0 0.6rem 0.4rem;
               border: 1px solid #ccc; /* Borda cinza clara */
               border-radius: 0.4rem; /* Bordas arredondadas */
               padding: 0.35rem; /* Espaçamento interno */
           }
           
           /* Adicionar efeito ao focar no input */
           input[type="number"]:focus {
               background-color: #f9f9f9; /* Cor de fundo levemente diferente */
               border-color: rgb(0,0,50); /* Cor da borda ao focar (azul Bootstrap) */
               outline: none; /* Remove o contorno padrão */
           }
           
           /* Placeholder estilizado */
           input[type="number"]::placeholder {
               color: #aaa; /* Cor do placeholder */
               font-style: italic; /* Estilo em itálico */
           }           
     </style>

@endsection