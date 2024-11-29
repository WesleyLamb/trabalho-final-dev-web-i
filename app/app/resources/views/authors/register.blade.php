@extends('principal')
@section('content')
    
    <div style="display:flex; width: 40rem; justify-content:center">
        <form style="height: 36rem; width: 30rem; display: flex; flex-direction:column; align-items:flex-start; padding:1rem 1rem 3rem 1rem; gap:1rem; border-radius:0.5rem; box-shadow: 0 0.3rem 0.5rem rgba(0,0,0,0.4);">
            <h3>Cadastre-se:</h3>
            <div class="form-group" style="width: 100%">
                <label for="validationCustom01">Nome Completo</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
            </div>
            <div class="form-group">
                <label for="validationCustomUsername">Nome de usuário</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Nome de usuário" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Escolha um nome de usuário.
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
            </div>
            <div class="form-group" style="width: 100%">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary"  style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);">Cadastrar</button>
            <a class="text-black" href="{{route('auth.login.view')}}">Já tem cadastro?</a>
        </form>
    </div>

@endsection