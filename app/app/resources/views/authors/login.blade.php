@extends('principal')
@section('content')
    
    <div style="display:flex; justify-content:center">
        <form action="{{route('auth.login')}}" method="POST" style="height: 24rem; width: 30rem; display: flex; flex-direction:column; align-items:flex-start; padding:1rem 1rem 3rem 1rem; gap:1rem; border-radius:0.5rem; box-shadow: 0 0.3rem 0.5rem rgba(0,0,0,0.4);">
            @csrf
            <h3>Login</h3>
            <div class="form-group" style="width: 100%">
                <label for="exampleInputEmail1">Email ou Usuário</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email ou usuário">
            </div>
            <div class="form-group" style="width: 100%">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Senha">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar de min</label>
            </div>
            <button type="submit" class="btn btn-primary"  style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);">Login</button>
            <a class="text-black" href="{{route('auth.register.view')}}">Não tem cadastro?</a>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $errors)
                        <li>{{$errors}}</li>                        
                    @endforeach
                </ul>
            </div>            
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{session('sucess')}}
            </div>
        @endif

    </div>
    <style>
        .form-check-input:checked {
            background-color: rgb(0, 0, 50);
            border-color: rgb(0, 0, 70);
        }
    </style>

@endsection