@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $trainee->name ?? old ('name')}}" placeholder="Informe o nome" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Escolaridade</label>
      <input type="text" class="form-control" name="scholarity" id="exampleInputPassword1" value="{{ $trainee->scholarity ?? old('scholarity') }}" placeholder="Informe a escolaridade" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value="{{ $trainee->telephone ?? old('telephone') }}" placeholder="Informe o telefone">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{ $trainee->email ?? old('email') }}"placeholder="Informe o email" >
    </div>
