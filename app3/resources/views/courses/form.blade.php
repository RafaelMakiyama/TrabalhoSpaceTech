@csrf
<div class="mb-3">
    <label  class="form-label">Nome do Curso</label>
    <input type="hidden" name="cu_id" value="{{$course->id ?? ''}}">
    <input type="text" class="form-control" name="name"
            value="{{ $course->name ?? old ('name')}}"
            placeholder="Informe o nome do Curso">
</div>
<div class="mb-3">
    <label  class="form-label">Qntd Máxima de Alunos</label>
    <input type="number" class="form-control" name="quantities_max_students"
            value="{{ $course->quantities_max_students ?? old ('quantities_max_students')}}"
            placeholder="Informe a quantidade máxima de Alunos">
</div>
<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea class="form-control" rows="5" cols="10" name="description"
            placeholder="Informe a descrição do curso">{{ $course->description ?? old ('description')}}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">Categoria</label>
    <input type="text" class="form-control" name="category"
            value="{{ $course->category ?? old('category') }}"
            placeholder="Informe a categoria do curso">
</div>
<div class="mb-3">
    <label  class="form-label">Mensal</label>
    <input type="number" class="form-control" name="monthly"
            value="{{ $course->monthly ?? old('monthly') }}"
            placeholder="Informe o mensal">
</div>
<div class="mb-3">
    <label  class="form-label">Status</label>
    <select class="form-select" name="status" aria-label="Default select example">
        <option value=""> Selecione o status</option>      
        <option value="Ativado" {{ $course->status== 'Ativado'?'selected':''}}>Ativado</option>
        <option value="Desativado" {{ $course->status== 'Desativado'?'selected':''}}>Desativado</option>  
    </select>
</div>

