@extends('layouts/main')
@section('contenido')
<style>
     .agregarbotonestylo{
    font-size: 1.0rem;
    color: #ffffff;
    background-color: #98989A;
    margin-right: 10px;
  }
  .titulos {
    text-align: left; 
    font-family: Arial Black; 
    font-weight: bold; font-size: 30px; 
    background: #202020; 
    -webkit-background-clip: text; 
    -moz-background-clip: text; 
    background-clip: text; 
    color: transparent; 
    text-shadow: 0px 3px 3px rgba(255,255,255,0.4),0px -1px 1px rgba(0,0,0,0.3);
    }
    .estiloCard{
        background-color: rgba(255, 255, 255, 0.6); 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
    }
</style>
    <br>
    <a href="/" class="btn btn-block mt-3 col-12 agregarbotonestylo">
        <td class="icocod">&#9194;</td>Regresar </a>
    <div class="card my-4 p-4 estiloCard">
        <div class="card-body">
        <form class="row g-3 fs-4" action="{{ route ('update', $items->id)}}" method="post">
        <p class="fs-2 text-center titulos">Editar Datos Beneficiarios</p>
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-4">
                <label for="nombre_productor" class="form-label">Nombre del Productor <td class="icocod">&#128221;</td></label>
                <input type="text" name="nombre_productor" id="nombre_productor" class="form-control" value="{{ $items->nombre_productor }}" required>
            </div>
            <div class="col-md-6 mt-4">
                <label for="telefono_celular" class="form-label">Telefono Celular <td class="icocod">&#128241;</td></label>
                <input type="number" name="telefono_celular" id="telefono_celular" class="form-control" value="{{ $items->telefono_celular }}" required>
            </div>
            <div class="col-4 mt-4">
                <label for="telefono">Telefono Fijo <td class="icocod">&#128224;</td></label>
                <input type="number" name="telefono" id="telefono" class="form-control" value="{{ $items->telefono }}" required>
            </div>
            <div class="col-4 mt-4">
                <label for="fecha_nacimiento"> Fecha de nacimiento <td class="icocod">&#128198;</td></label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $items->fecha_nacimiento }}" required>
            </div>
            <div class="col-4 mt-4">
                <label for="sexo">Sexo<td class="icocod">&#128107;</td></label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="Masculino" {{ $items->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ $items->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="Otro" {{ $items->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            <div class="col-6 mt-4">
                <label for="seccionElectoral">Sección Electoral <td class="icocod">&#127915;</td></label>
                <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control" value="{{ $items->seccionElectoral }}" required>
            </div>
            <div class="col-md-6 mt-4">
                <label for="alcaldia">Alcaldía <td class="icocod">&#127961;</td></label>
                <select name="alcaldia" id="alcaldia" class="form-control" required>
                    <option value="" disabled selected>Seleccione una opción</option>
                    @foreach($alcaldias as $alcaldia)
                        <option value="{{ $alcaldia->nombre }}" {{ $items->alcaldia == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mt-4">
                <label for="pueblo">Pueblo <td class="icocod">&#127969;</td></label>
                <input type="text" name="pueblo" id="pueblo" class="form-control" value="{{ $items->pueblo }}" required>
            </div>
            <div class="col-6 mt-4">
                <label for="coloniaBarrio">Colonia o Barrio<td class="icocod">&#127968;</td></label>
                <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control" value="{{ $items->coloniaBarrio }}" required>
            </div>
            <div class="col-6 mt-4">
                <label for="codigoPostal">Codigo Postal <td class="icocod">&#128236;</td></label>
                <input type="number" name="codigoPostal" id="codigoPostal" class="form-control" value="{{ $items->codigoPostal }}" required>
            </div>
            <div class="col-6 mt-4">
                <label for="calle">Calle y número<td class="icocod">&#128290;</td></label>
                <input type="text" name="calle" id="calle" class="form-control" value="{{ $items->calle }}" required>
            </div>
        <div>
            <button class="btn btn-success mt-3 col-12"><td class="icocod">&#128221;</td>
                Actualizar 
            </button>
        </div>
        <br><br>

    </form>
    </div>
</div>
    
@endsection