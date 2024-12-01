@extends('principal')
@section('content')

    <div class="mx-auto form-login mt-5">
            <form action="{{route('auth.login')}}?redirect=/" method="POST">
            @csrf
            <h3>Login</h3>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>
            <div class="form-group form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Lembrar de mim</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-3">Login</button>
            </div>
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
@endsection