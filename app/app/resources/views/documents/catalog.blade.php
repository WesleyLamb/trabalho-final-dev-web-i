@extends('principal')

{{-- @section('search')
<form class="d-flex mt-3" role="search" style="margin-bottom: 1rem; padding-right: 6rem;">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light btn-rounded" type="submit">Search</button>
</form>
@endsection --}}

@section('content')
<div class="w-100">
    <h1>Catálogo de Documentos</h1>
    <p>Encontre aqui os documentos disponíveis para leitura.</p>
    <table id="documentsTable" class="display">
        <thead>
            <tr>
                <th>Título</th>
                <th>Publicação</th>
                <th>Autor</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
{{-- @if (count($documents)>0)
<div style="display: flex; flex-direction: column; padding: 1rem; width: 100%">

    <h3 style="width: 100%; padding: 0 0 2rem 1rem ;">Todos os documentos</h3>

    @if (count($documents)>0)
    <div class="grid text-center"
        style="width: 100%; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap: 2rem; align-items: flex-start;">

        @foreach($documents as $document)
        <div style="display: flex; justify-content: center; align-items:center">
            <div class="card" style="width: auto; height: auto; background-color: rgb(242, 240, 224)">
                <div class="card-body">
                    <h5 class="card-title">{{ $document['title'] }}</h5>
                    <h6 class="card-subtitle">{{$document['subtitle']}}</h6>
                    <p class="card-text">Autor: {{$document->author}}</p>
                    <p class="card-text">Co-autor: variavelNomeCoautor</p>
                    <p class="card-text">Orientador: variavelNomeOrientador</p>
                    <p class="card-text">Ano de publicação: {{$document['publication_year']}}</p>
                    <a href="{{route('documents.view', $document['id'])}}" class="btn btn-primary"
                        style="  --bs-btn-bg: rgb(0,0,50);   --bs-btn-border-color: none;   --bs-btn-hover-bg: rgb(15, 39, 72);">Ler
                        mais</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <h4>Não há documentos para exibir!</h4>
    @endif
</div>

@endif --}}

{{-- @empty($documents)
<h4>Não há documentos para exibir.</h4>
@endempty --}}

@endsection

@section('innerJS')
<script>

    let table = new DataTable('#documentsTable', {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/pt-BR.json'
        },
        ajax: "{{ route('documents.index') }}",
        dataSrc: 'data',
        autoWidth: false,
        columnDefs: [
            {
                targets: 0,
                width: "50%",
                autoWidth: false,
                data: function(row, type, val, meta) {
                    return `<a class="text-decoration-none text-reset" href="{{ route('documents.view', '') }}/${row.id}">${row.title}</a>`;
                }
            },
            {
                targets: 1,
                width: "10%",
                type: 'integer',
                data: 'publication_year'
            },
            {
                targets: 2,
                width: "30%",
                data: function(row, type, val, meta) {
                    return row.author ? `<span>${row.author.name}<a class="ms-1 text-reset text-decoration-none" href="` + "{{ route('authors.view', '') }}" + `/${row.author.id}"><i class="fa-solid fa-magnifying-glass"></i></a></span>` : '';
                }
            },
            {
                targets: 3,
                width: "10%",
                data: function(row, type, val, meta) {
                    return `<a class="text-reset" href="${row.download}"><i class="fa-solid fa-file-arrow-down"></i>`;
                }
            }
        ]
    });
</script>
@endsection();