@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" 
            value="{{ $patient->name ?? old ('name')}}" 
            placeholder="Informe o nome do Paciente">
</div>
<div class="mb-3">
    <label for="sobrenome" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" name="surname" 
            value="{{ $patient->surname ?? old('surname') }}" 
            placeholder="Informe o sobrenome do Paciente">
</div>
<div class="mb-3">
    <label for="age" class="form-label">Idade</label>
    <input type="number" class="form-control" name="age" 
            value="{{ $patient->age ?? old('age') }}"
            placeholder="Informe a idade do Paciente">
</div>
<div class="mb-3">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="string" class="form-control" name="address" 
            value="{{$patient->address ?? old('address') }}"
            placeholder="Informe o endereço do Paciente">
</div>
<div class="mb-3">
    <label for="telephone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telephone" 
            value="{{$patient->telephone ?? old('telephone') }}"
            placeholder="Informe o telefone do Paciente">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" 
            value="{{$patient->email ?? old('email') }}"
            placeholder="Informe o email do Paciente">
</div>
<div class="mb-3">
    <div class="form-check form-check-inline">        
        @if(isset($patient))        
            <input name="is_donor" type="hidden" value="0" >
            <input  name="is_donor" type="checkbox" value="1"@if($patient->is_donor) checked @endif>                    
        @else
            <input name="is_donor" type="hidden" value="0" >
            <input  name="is_donor" type="checkbox" value="1"@if(old('is_donor')) checked @endif>                    
        @endif                     
        <label class="form-check-label" for="is_donor">É doador de sangue?</label>
    </div>
</div>