@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nome do Doador</label>
    <input type="text" class="form-control" name="donor_name"
            value="{{$donation->donor_name ?? old ('donor_name')}}"
            placeholder="Informe o nome do Doador">
</div>
<div class="mb-3">
    <label for="sobrenome" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="cell"
            value="{{$donation->cell ?? old('cell') }}"
            placeholder="Informe o telefone">
</div>
<div class="mb-3">
    <label for="age" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"
            value="{{$donation->email ?? old('email') }}"
            placeholder="Informe o email">
</div>
<div class="mb-3">
    <label for="endereco" class="form-label">Qntd de Litros</label>
    <input type="number" class="form-control" name="amnt_donor_liters"
            value="{{$donation->amnt_donor_liters ?? old('amnt_donor_liters') }}"
            placeholder="Informe a quantidade de Litros">
</div>
