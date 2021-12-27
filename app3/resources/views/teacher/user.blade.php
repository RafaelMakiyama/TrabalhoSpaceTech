<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->user->name ?? old ('name')}}" placeholder="Informe o nome de usuário" >
    <input type="hidden" name="user_id" value="{{$teacher->user_id ?? ''}}">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" placeholder="Informe o email" value="{{  $teacher->user->email ?? old('email') }}" >
</div>