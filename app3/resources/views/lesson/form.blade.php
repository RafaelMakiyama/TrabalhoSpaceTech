@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero Aulas</label>
    <input type="text" class="form-control" name="num_lesson" value="{{ $lesson->num_lesson ?? old ('num_lesson')}}" placeholder="Informe numero de aulas" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Tema</label>
  <input type="text" class="form-control" name="theme" placeholder="Informe o tema" value="{{  $lesson->theme ?? old('theme') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Duracão</label>
  <input type="text" class="form-control" name="duration" placeholder="Informe a duracao" value="{{  $lesson->duration ?? old('duration') }}" >
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Observação</label>
  <input type="text" class="form-control" name="obs" placeholder="Adicione observacao" value="{{  $lesson->obs ?? old('obs') }}" >
</div>

<div class="mb-3">
  <label for="teacher_id" class="form-label">Selecione o Professor do Curso: </label>
  <select class="form-select" name="teacher_id" aria-label="Default select example">
        <option value=""></option>
        @foreach($teachers as $teacher)
            <option value="{{$teacher->id}}" 
                {{(($lesson->teacher_id ?? old('teacher_id')) == $teacher->id?'selected':'')}}
            >{{$teacher->fullname}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Selecione o Curso: </label>
  <!-- <input type="text" class="form-control" name="course_id" placeholder="Informe o curso" value="{{  $lesson->course_id ?? old('course_id') }}" >
   -->
  <select class="form-select" name="course_id" aria-label="Default select example">
        <option value=""></option>
        @foreach($courses as $course)
            <option value="{{$course->id}}" 
                {{(($lesson->course_id ?? old('course_id')) == $course->id?'selected':'')}}
            >{{$course->name}}</option>
        @endforeach
    </select>

</div>