@extends('principal')
@section('content')
<div class="w-100">
    <div class="d-flex flex-column container">
        <h1 class="mb-3">{{$title}}</h1>
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label class="form-label" for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" {{$action == 'view' ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="subtitle">Subtítulo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" {{$action == 'view' ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="publication_year">Ano de publicação</label>
            <input type="text" class="form-control" id="publication_year" name="publication_year" {{$action == 'view' ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <input type="hidden" name="author.id" id="author.id">
            <label class="form-label" for="author">Autor</label>
            <input type="text" class="form-control" id="author.name" name="author.name" {{$action == 'view' ? 'readonly' : ''}}>
        </div>
        <div class="mb-3">
            <label class="form-label" for="abstract">Resumo</label>
            <textarea type="text" class="form-control" id="abstract" name="abstract" {{$action == 'view' ? 'readonly' : ''}} style="height: 300px"></textarea>
        </div>
        @if(in_array($action, ['create', 'edit']))
        <div class="mb-3">
            <label class="form-label" for="file">Arquivo PDF</label>
            <input type="file" class="form-control" id="file" name="file" accept="application/pdf">
        </div>
        @else
            <a class="btn btn-outline-dark btn-rounded" href="" role="button"><i class="me-1 fa-solid fa-file-arrow-down"></i>Baixar PDF</a>
        @endif
        @if(in_array($action, ['create', 'edit']))
        <div class="mb-2">
            <button class="btn btn-primary" id="salvar">Salvar</button>
        </div>
        @endif
    </div>
</div>

@endsection
@section('innerJS')
<script>
    @if(in_array($action, ['view', 'edit']))
    document.addEventListener('DOMContentLoaded', function () {
        axios({
            method: 'get',
            url: "{{route('api.v1.documents.show', $id)}}"
        }).then(function (response) {
            data = response.data.data;
            document.getElementById('id').value = data.id;
            document.getElementById('title').value = data.title;
            document.getElementById('subtitle').value = data.subtitle;
            document.getElementById('publication_year').value = data.publication_year;
            document.getElementById('author.id').value = data.author.id;
            document.getElementById('author.name').value = data.author.name;
            document.getElementById('abstract').value = data.abstract;
        }).catch(function (error) {
            console.error(error);
        });
    });
    @endif
    @if($action == 'edit')
        document.getElementById('salvar').addEventListener('click', async function() {
            let data = {};
            data.id = document.getElementById('id').value;
            data.title = document.getElementById('title').value;
            data.subtitle = document.getElementById('subtitle').value;
            data.publication_year = document.getElementById('publication_year').value;
            data.author = {};
            data.author.id = document.getElementById('author.id').value;
            data.abstract = document.getElementById('abstract').value;
            console.log(document.getElementById('file').files);
            if (document.getElementById('file').files.length > 0)
                data.file = await toBase64(document.getElementById('file').files[0]);

            axios({
                method: 'put',
                url: "{{route('api.v1.documents.update', $id)}}",
                data: data,
            }).then(function (response) {
                alert('Documento atualizado com sucesso!');
                window.location.href = "{{route('documents.catalog')}}";
            }).catch(function (error) {
                console.error(error);
            })
        });
    @endif
    @if($action == 'create')
        document.getElementById('salvar').addEventListener('click', function() {
            let data = {};
            data.id = document.getElementById('id').value;
            data.title = document.getElementById('title').value;
            data.subtitle = document.getElementById('subtitle').value;
            data.publication_year = document.getElementById('publication_year').value;
            data.author = {};
            data.author.id = document.getElementById('author.id').value;
            data.abstract = document.getElementById('abstract').value;
            data.file = toBase64(document.getElementById('file').files[0]);

            axios({
                method: 'post',
                url: "{{route('api.v1.documents.store')}}",
                data: data,
            }).then(function (response) {
                alert('Documento criado com sucesso!');
                window.location.href = "{{route('documents.catalog')}}";
            }).catch(function (error) {
                console.error(error);
            })
        });
    @endif
</script>
@endsection