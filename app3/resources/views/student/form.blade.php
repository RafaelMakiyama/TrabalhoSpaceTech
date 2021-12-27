@csrf
<div class="mb-3">
    <label for="username" class="form-label">Nome de Usuário</label>
    <input type="hidden" name="user_id" value="{{$student->user_id ?? ''}}">    
    <input type="text" class="form-control" name="name" 
            value="{{ $student->user->name ?? old ('name')}}" 
            placeholder="Informe o nome de Usuario">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" 
            value="{{ $student->user->email ?? old ('email')}}" 
            placeholder="Informe o Email">
</div>
<div class="mb-3">
    <label for="fullname" class="form-label">Nome</label>
    <input type="text" class="form-control" name="fullname" 
            value="{{ $student->fullname ?? old ('fullname')}}" 
            placeholder="Informe o nome do Aluno">
</div>
<div class="mb-3">
    <label for="matricula" class="form-label">Matrícula</label>
    <input type="text" class="form-control" name="registration" 
            value="{{ $student->registration ?? old('registration') }}" 
            placeholder="Informe a matrícula do Aluno">
</div>
<div class="mb-3">
    <label for="birthday" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="birthday" 
            value="{{ $student->birthday ?? old('birthday') }}"
            placeholder="Informe a Data de Nascimento do Aluno">
</div>
<div class="mb-3">
    <label for="financial_responsable" class="form-label">Responsável Financeiro</label>
    <input type="text" class="form-control" name="financial_responsable" 
            value="{{$student->financial_responsable ?? old('financial_responsable') }}"
            placeholder="Informe o Responsável Financeiro do Aluno">
</div>
<div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="number" class="form-control" name="cpf" min="0" 
            value="{{$student->cpf ?? old('cpf') }}"
            placeholder="Informe o CPF do Aluno">
</div>
<div class="mb-3">
    <label for="course_id" class="form-label">Selecione o Curso:</label>
    <select class="form-select" name="course_id" aria-label="Default select example">
        <option value=""></option>
        @foreach($courses as $course)
            <option value="{{$course->id}}" 
                {{(($student->course_id ?? old('course_id')) == $course->id?'selected':'')}}
            >{{$course->name}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="financial_plan_id" class="form-label">Selecione o Plano:</label>
    <select class="form-select" name="financial_plan_id" aria-label="Default select example">
        <option value=""></option>
        @foreach($financialPlans as $financialPlan)
            <option value="{{$financialPlan->id}}" 
                {{(($student->financial_plan_id ?? old('financial_plan_id')) == $financialPlan->id?'selected':'')}}
            >{{$financialPlan->name}}</option>
        @endforeach
    </select>
</div>