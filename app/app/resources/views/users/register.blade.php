{{--  @extends('principal')
@section('content')
    
    <div style="display:flex; width: 40rem; justify-content:center">
        <form action="{{route('api.v1.auth.register')}}?redirect=/auth/login" method="POST" style="height: 31rem; width: 30rem; display: flex; flex-direction:column; align-items:flex-start; padding:1rem 1rem 3rem 1rem; gap:1rem;">
            <h3>Cadastre-se:</h3>
            <div class="form-group" style="width: 100%">
                <label for="name">Nome Completo</label>
                <input type="text" class="form-control" id="name" placeholder="Nome Completo" required>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Senha" required>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="checkPassword">Confirme sua senha</label>
                <input type="password" class="form-control" id="checkPassword" placeholder="Confirme sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary"  style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);">Cadastrar</button>
            <a class="text-black" href="{{route('auth.login.view')}}">Já tem cadastro?</a>
        </form>
    </div>
@endsection  --}}