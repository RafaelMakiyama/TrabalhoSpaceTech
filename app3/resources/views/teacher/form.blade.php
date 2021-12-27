<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome completo</label>
    <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $teacher->fullname ?? old ('fullname')}}" placeholder="Informe o nome completo" >
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Registro da matrícula</label>
  <input type="text" class="form-control" name="registration" placeholder="Informe a matrícula" value="{{  $teacher->registration ?? old('registration') }}" >
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Competência</label>
  <input type="text" class="form-control" name="competence" placeholder="Informe a competência" value="{{  $teacher->competence ?? old('competence') }}" >
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Escolaridade</label>
  <input type="text" class="form-control" name="scholarity" placeholder="Informe a escolaridade" value="{{  $teacher->scholarity ?? old('scholarity') }}" >
</div>