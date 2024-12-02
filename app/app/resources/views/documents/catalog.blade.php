@extends('principal')
@section('content')
<div class="w-100">
    <div class="d-flex justify-content-between">
        <h1>{{$title}}</h1>
        @if(auth()->user() && auth()->user()->hasPermission('documents:create'))
            <a class="btn btn-outline-dark btn-rounded me-1" title="Criar Documento" href="{{ route('documents.create.view') }}" role="button" style="margin: 0.3rem"><i class="fa fa-file-circle-plus"></i></a>
        @endif
    </div>
    <p>Encontre aqui os documentos disponíveis para leitura.</p>
    <table id="documentsTable" class="display">
        <thead>
            <tr>
                <th>Título</th>
                <th>Publicação</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@endsection

@section('innerJS')
<script>

    let table = new DataTable('#documentsTable', {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/pt-BR.json'
        },
        ajax: "{{ route('api.v1.documents.index') }}",
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
                width: "25%",
                data: 'author.name'
                {{-- data: function(row, type, val, meta) {
                    return row.author ? `<span>${row.author.name}<a class="ms-1 text-reset text-decoration-none" href="` + "{{ route('authors.view', '') }}" + `/${row.author.id}"><i class="fa-solid fa-magnifying-glass"></i></a></span>` : '';
                } --}}
            },
            {
                targets: 3,
                width: "15%",
                data: function(row, type, val, meta) {
                    let actions = `<a class="btn btn-outline-dark btn-rounded me-1" title="Ver detalhes" href="{{ route('documents.view', '__id__') }}" role="button"><i class="fa-solid fa-magnifying-glass"></i></a>`;
                    if (row.file_url)
                        actions += `<a class="btn btn-outline-dark btn-rounded me-1" title="Baixar PDF" href="${row.file_url}" role="button"><i class="fa-solid fa-file-arrow-down"></i></a>`;
                    @if(auth()->user() && auth()->user()->hasPermission('documents:edit'))
                        actions += `<a class="btn btn-outline-dark btn-rounded me-1" title="Editar" href="{{ route('documents.edit.view', '__id__') }}" role="button"><i class="fa-solid fa-pencil"></i></a>`;
                    @endif
                    actions = actions.replace(/__id__/g, row.id);
                    return actions;
                }
            }
        ]
    });
</script>
@endsection()