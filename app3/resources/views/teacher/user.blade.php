<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
    <input type="text" class="form-control" id="username" name="username" value="{{ $user->name ?? old ('username')}}" placeholder="Informe o nome de usuário" >
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" placeholder="Informe o email" value="{{  $user->email ?? old('email') }}" >
</div>