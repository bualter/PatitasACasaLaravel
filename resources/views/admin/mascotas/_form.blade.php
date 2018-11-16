@if(count($errors)>0)
  <div class="col-md-12 alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="col-md-12 form-group">
  <label>Nombre</label>
  <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $mascota->nombre) }}">
</div>

<div class="col-md-6 form-group">
  <label> Tipo </label>
  <select name="tipo">
    @foreach($mascota->tipos as $tip)
      <option value="{{ $tip }}" 
        @if($tip == old('tipo',$mascota->tipo))
          selected
        @endif
        >{{ $tip}}</option>
    @endforeach
</select>
</div>

<div class="col-md-6 form-group">
  <label> Edad </label>
  <input type="integer" name="edad" class="form-control" value="{{ old('edad', $mascota->edad) }}">
</div>

<div class="col-md-6 form-group">
  <label> Tamaño </label>
  <select name="tamanio">
    @foreach($mascota->tamanios as $tam)
      <option value="{{ $tam }}" 
        @if($tam == old('tamanio',$mascota->tamanio))
          selected
        @endif
        >{{ $tam}}</option>
    @endforeach
</select>
</div>

<div class="col-md-6 form-group">
  <label> Sexo </label>
  <select name="sexo">
    @foreach($mascota->sexos as $sex)
      <option value="{{ $sex }}" 
        @if($sex == old('sexo',$mascota->sexo))
          selected
        @endif
        >{{ $sex}}</option>
    @endforeach
</select>
</div>




<div class="col-md-6 form-group">
  <label> Zona </label>
  <input type="text" name="zona" class="form-control" value="{{ old('zona', $mascota->zona) }}">
</div>
<div class="col-md-12 form-group">
  <label> Descripción </label>
  <textarea name="descripcion" class="form-control"> {{ old('descripcion', $mascota->descripcion) }} </textarea>
</div>

<div class="col-md-12 form-group">
  <label>Foto</label>
  @if($mascota->foto)
    <img src="/storage/mascotas/fotos/{{ $mascota->foto }}" width="100%">
  @endif
  <input type="file" name="foto" class="form-control">
</div>

<div class="col-md-12 form-group">
  <button type="submit" class="btn btn-primary">Publicar</button>
  <a href="{{route('lista-mascotas')}}" class="btn btn-info">Volver al perfil</a>
</div>
