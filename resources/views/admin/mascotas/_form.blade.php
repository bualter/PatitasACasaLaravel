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
  <input type="text" name="nombre" class="form-control" value="
  {{ old('nombre', $mascota->nombre) }}">
</div>
<div class="col-md-12 form-group">
  <label> Tipo </label>
  <input type="text" name="tipo" class="form-control" value="{{ old('tipo', $mascota->tipo) }}">
</div>
<div class="col-md-6 form-group">
  <label> Edad </label>
  <input type="integer" name="edad" class="form-control" value="{{ old('edad', $mascota->edad) }}">
</div>
<div class="col-md-6 form-group">
  <label> Tamaño </label>
  <input type="text" name="tamanio" class="form-control" value="{{ old('tamanio', $mascota->tamanio) }}">
</div>
<div class="col-md-6 form-group">
  <label> Sexo </label>
  <input type="text" name="sexo" class="form-control" value="{{ old('sexo', $mascota->sexo) }}">
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
  <button type="submit" class="btn btn-primary">Publicar</button>
  <a href="{{route('lista-mascotas')}}" class="btn btn-info">Volver al perfil</a>
</div>
