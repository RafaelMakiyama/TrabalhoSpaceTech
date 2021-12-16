@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" 
                value="{{ $donor->name ?? old ('name')}}"
                placeholder="Informe o Nome">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" 
                value="{{ $donor->telephone ?? old('telephone') }}"
                placeholder="Informe o Telefone">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">E - mail</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" 
                value="{{ $donor->email ?? old('email') }}"
                placeholder="Informe o E-mail">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Peso</label>
        <input type="number" class="form-control" name="weight" id="exampleInputPassword1" 
                value="{{ $donor->weight ?? old('weight') }}"
                placeholder="Informe o Peso">
    </div>

    <div class="mb-3">
      <div class="form-check form-check-inline">        
          @if(isset($donor))        
              <input name="smoker" type="hidden" value="0" >
              <input  name="smoker" type="checkbox" value="1"@if($donor->smoker) checked @endif>                    
          @else
              <input name="smoker" type="hidden" value="0" >
              <input  name="smoker" type="checkbox" value="1"@if(old('smoker')) checked @endif>                    
          @endif                     
          <label class="form-check-label" for="is_donor">Fumante?</label>
      </div>
    </div>

    <div class="mb-3">
      <div class="form-check form-check-inline">        
          @if(isset($donor))        
              <input name="disease" type="hidden" value="0" >
              <input  name="disease" type="checkbox" value="1"@if($donor->disease) checked @endif>                    
          @else
              <input name="disease" type="hidden" value="0" >
              <input  name="disease" type="checkbox" value="1"@if(old('disease')) checked @endif>                    
          @endif                     
          <label class="form-check-label" for="is_donor">Doença?</label>
      </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Comentários</label>
        <input type="text" class="form-control" name="comments" id="exampleInputPassword1" 
                value="{{ $donor->comments ??  old('comments') }}"
                placeholder="Informe os Comentários">
    </div>
      