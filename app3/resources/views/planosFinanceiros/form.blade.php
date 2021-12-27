@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" 
            value="{{ $financialPlan->name ?? old ('name')}}" 
            placeholder="Informe o nome">
</div>
<div class="mb-3">
    <label for="discount" class="form-label">Desconto</label>
    <input type="number" class="form-control" name="discount" min="0" 
            value="{{$financialPlan->discount ?? old('discount') }}"
            placeholder="Informe o Desconto">
</div>
<div class="mb-3">
    <label for="observation" class="form-label">Observações</label>
    <input type="text" class="form-control" name="observation" 
            value="{{$financialPlan->observation ?? old('observation') }}"
            placeholder="Observações....">
</div>
