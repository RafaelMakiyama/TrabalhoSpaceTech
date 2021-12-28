<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero Aulas</label>
    <input type="text" class="form-control" name="num_lesson" value="{{ $lesson->num_lesson ?? old ('num_lesson')}}" placeholder="Informe numero de aulas" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Tema</label>
  <input type="text" class="form-control" name="theme" placeholder="Informe o tema" value="{{  $lesson->theme ?? old('theme') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Duracao</label>
  <input type="text" class="form-control" name="duration" placeholder="Informe a duracao" value="{{  $lesson->duration ?? old('duration') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Obs</label>
  <input type="text" class="form-control" name="obs" placeholder="Adicione observacao" value="{{  $lesson->obs ?? old('obs') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Professor</label>
  <input type="text" class="form-control" name="teacher_id" placeholder="Informe o professor" value="{{  $lesson->teacher_id ?? old('teacher_id') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Curso</label>
  <input type="text" class="form-control" name="course_id" placeholder="Informe o curso" value="{{  $lesson->course_id ?? old('course_id') }}" >
</div>