@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CRM</label>
    <input type="text" class="form-control" id="crm" name="crm" value="{{ $doctor->id ?? old ('crm')}}" >
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$doctor->name ?? old('name') }}" >
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Área de atuação</label>
    <input type="text" class="form-control" name="work_ocupattion" id="exampleInputPassword1" value="{{$doctor->work_ocupattion ?? old('work_ocupattion') }}">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Idade</label>
    <input type="number" class="form-control" name="age" id="exampleInputPassword1" value="{{$doctor->age ?? old('age') }}" >
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value="{{$doctor->telephone ?? old('telephone') }}" >
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{$doctor->email ?? old('email') }}" >
</div>