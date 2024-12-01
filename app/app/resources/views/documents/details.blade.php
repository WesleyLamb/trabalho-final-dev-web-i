@extends('principal')
@section('content')
    <div class="container-fluid" style="display:flex; flex-direction:column;">
        <div class="mb-3">
            <label class="form-label" for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" {{!$edit ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="subtitle">Subtítulo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" {{!$edit ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="publication_year">Ano de publicação</label>
            <input type="text" class="form-control" id="publication_year" name="publication_year" {{!$edit ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <input type="hidden" name="author.id" id="author.id">
            <label class="form-label" for="author">Autor</label>
            <input type="text" class="form-control" id="author.name" name="author.name" {{!$edit ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="title">Resumo</label>
            <textarea type="text" class="form-control" id="abstract" name="abstract" {{!$edit ? 'readonly' : ''}} style="height: 300px"></textarea>
        </div>
        @if($edit)

        @else
            <a class="btn btn-outline-dark btn-rounded" href="" role="button" id="file_url"><i class="me-1 fa-solid fa-file-arrow-down"></i>Baixar PDF</a>
        @endif
    </div>

@endsection
@section('innerJS')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log('Document ready');
        axios({
            method: 'get',
            url: "{{route('api.v1.documents.show', $id)}}"
        }).then(function (response) {
            data = response.data.data;
            document.getElementById('title').value = data.title;
            document.getElementById('subtitle').value = data.subtitle;
            document.getElementById('publication_year').value = data.publication_year;
            document.getElementById('author.id').value = data.author.id;
            document.getElementById('author.name').value = data.author.name;
            document.getElementById('abstract').value = data.abstract;
            document.getElementById('file_url').href = data.file_url;
        }).catch(function (error) {
            console.error(error);
        })
    });
</script>
@endsection