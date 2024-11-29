@extends('principal')
@section('content')
    
<div style="display:flex; width: 40rem; justify-content:center">
     <form style="height: 39rem; width: 30rem; display: flex; flex-direction:column; align-items:flex-start; padding:1rem 1rem 2rem 1rem; gap:1rem; border-radius:0.5rem; box-shadow: 0 0.3rem 0.5rem rgba(0,0,0,0.4);">
          <h3>Atualize seu cadastro:</h3>
          <div class="form-group" style="width: 100%">
               <label for="validationCustom01">Nome Completo</label>
               <input type="text" class="form-control" id="validationCustom01" placeholder="Variavel com o nome do usuario atual" required>
          </div>
          <div class="form-group">
               <label for="validationCustomUsername">Nome de usuário</label>
               <div class="input-group">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="variável com o username atual" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                         Escolha um nome de usuário.
                    </div>
               </div>
          </div>
          <div class="form-group" style="width: 100%">
               <label for="exampleInputEmail1">Email</label>
               <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Variável com Email atual" required>
          </div>
          <div class="form-group" style="width: 100%">
               <label for="exampleInputPassword1">Senha atual</label>
               <input type="password" class="form-control" id="currentPassword" placeholder="Digite a senha atual" required>
          </div>
          <div class="form-group" style="width: 100%">
               <label for="exampleInputPassword1">Nova senha</label>
               <input type="password" class="form-control" id="newPassword" placeholder="Nova senha" required>
          </div>
          <div class="form-group" style="width: 100%">
               <label for="exampleInputPassword1">Confirme sua senha</label>
               <input type="password" class="form-control" id="newPasswordConfirmation" placeholder="Confirme sua nova senha" required>
          </div>
          <button type="submit" class="btn btn-primary"  style="--bs-btn-bg: rgb(0,0,50); --bs-btn-border-color: none; --bs-btn-hover-bg: rgb(15, 39, 72);">Salvar alterações</button>
     </form>
</div>

@endsection