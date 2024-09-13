@extends('layouts/main')
@section('contenido')
<style>
    .agregarbotonestylo {
        font-size: 1.0rem;
        color: #ffffff;
        background-color: #98989A;
        margin-right: 10px;
    }
    .non-interactive-select {
        pointer-events: none;
        background-color: #f3f4f6;
        color: #6c757d; 
    }
    .hidden {
        display: none;
    }
    . {
        font-weight: bold;
    }
    .form-control {
        border-radius: 10px;
    }
    .section-label {
        font-size: 1.2rem;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .required:after {
        content: '*';
        color: red;
        margin-left: 5px;
    }
    .estiloCard{
        background-color: rgba(255, 255, 255, 0.6); 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
    }
    .lnSeparacion {
            border: none;
            border-top: 3px solid transparent;
            border-image: linear-gradient(to right, white, red, white) 1;
            margin: 30px 0; /* Ajusta el margen según sea necesario */
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
</style>
<a href="/" class="btn btn-block mt-3 col-12 agregarbotonestylo">
    <td class="icocod">&#9194;</td> Regresar
</a>
<div class="card my-4 p-4 estiloCard">
        <div class="card-body">
<p class="text-center titulos">
    <td class="icocod">&#128101;</td> Datos Generales del Productor Solicitante:
</p>


<form class="row g-3 fs-4" action="{{ route('compostas.store') }}" method="post">
    @csrf
    @method('POST')

    <!-- ID del beneficiario Que esta oculto -->
    <input type="hidden" name="identificadoBeneficiario" id="identificadoBeneficiario" value="{{ $beneficiario->id }}">

    <div class="col-md-4 mt-4">
        <label for="nombre_productor" class="required">Nombre del Productor <td class="icocod">&#128221;</td></label>
        <input type="text" name="nombre_productor" id="nombre_productor" class="form-control non-interactive-select" required value="{{ $beneficiario->nombre_productor }}" readonly>
    </div>

    <div class="col-md-4 mt-4">
        <label for="telefono_celular" class="required">Telefono Celular <td class="icocod">&#128241;</td></label>
        <input type="number" name="telefono_celular" id="telefono_celular" class="form-control non-interactive-select" required value="{{ $beneficiario->telefono_celular }}" readonly>
    </div>

    <div class="col-4 mt-4">
        <label for="telefono" class=" required">Telefono Fijo <td class="icocod">&#128224;</td></label>
        <input type="number" name="telefono" id="telefono" class="form-control non-interactive-select" required value="{{ $beneficiario->telefono }}" readonly>
    </div>

    <div class="col-4 mt-4">
        <label for="fecha_nacimiento" class=" required">Fecha de nacimiento <td class="icocod">&#128198;</td></label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control non-interactive-select" required value="{{ $beneficiario->fecha_nacimiento }}" readonly>
    </div>

    <div class="col-4 mt-4">
        <label for="sexo" class=" required">Sexo <td class="icocod">&#128107;</td></label>
        <select name="sexo" id="sexo" class="form-control non-interactive-select" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="Masculino" {{ $beneficiario->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ $beneficiario->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="Otro" {{ $beneficiario->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
        </select>
    </div>

    <div class="col-4 mt-4">
        <label for="seccionElectoral" class=" required">Sección Electoral <td class="icocod">&#127915;</td></label>
        <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control non-interactive-select" required value="{{ $beneficiario->seccionElectoral }}" readonly>
    </div>
    <hr class="lnSeparacion">
    <p class="text-center titulos">
        <td class="icocod">&#128101;</td> Domicilio del Productor: 
    </p>
    <div class="col-md-4 mt-4">
        <label for="alcaldia" class=" required">Alcaldía <td class="icocod">&#127961;</td></label>
        <select name="alcaldia" id="alcaldia" class="form-control non-interactive-select" required readonly>
            <option value="" disabled selected>Seleccione una opción</option>
            @foreach($alcaldias as $alcaldia)
                <option value="{{ $alcaldia->nombre }}" {{ $beneficiario->alcaldia == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4 mt-4">
        <label for="pueblo" class=" required">Pueblo <td class="icocod">&#127969;</td></label>
        <input type="text" name="pueblo" id="pueblo" class="form-control non-interactive-select" required value="{{ $beneficiario->pueblo }}" readonly>
    </div>

    <div class="col-4 mt-4">
        <label for="coloniaBarrio" class=" required">Colonia o Barrio <td class="icocod">&#127968;</td></label>
        <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control non-interactive-select" required value="{{ $beneficiario->coloniaBarrio }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="codigoPostal" class=" required">Codigo Postal <td class="icocod">&#128236;</td></label>
        <input type="number" name="codigoPostal" id="codigoPostal" class="form-control non-interactive-select" required value="{{ $beneficiario->codigoPostal }}" readonly>
    </div>

    <div class="col-6 mt-4">
        <label for="calle" class=" required">Calle y número <td class="icocod">&#128290;</td></label>
        <input type="text" name="calle" id="calle" class="form-control non-interactive-select" required value="{{ $beneficiario->calle }}" readonly>
    </div>

    <hr class="lnSeparacion">
    <div class="section-label titulos text-center"> 
        <td class="icocod">&#128101;</td> Ubicacion de la Parcela o Unidad Productiva</div>

    <div class="col-md-6 mt-4">
            <label for="alcaldiaUbicacionParcela">Alcaldía <td class="icocod">&#127961;</td></label>
            <select name="alcaldiaUbicacionParcela" id="alcaldiaUbicacionParcela" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                @foreach($alcaldias as $alcaldia)
                    <option value="{{ $alcaldia->nombre }}" {{ old('alcaldia') == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
                @endforeach
            </select>
    </div>

    <div class="col-6 mt-4">
        <label for="puebloUbicacionParcela" >Pueblo</label>
        <input type="text" name="puebloUbicacionParcela" id="puebloUbicacionParcela" class="form-control" value="{{ old('puebloUbicacionParcela') }}">
    </div>

    <div class="col-12 mt-4">
        <label for="RegimenPropiedadUbicacionParcela" class=" required">Elige el régimen de propiedad de la parcela<td class="icocod">&#127745;</td></label>
        <select name="RegimenPropiedadUbicacionParcela" id="RegimenPropiedadUbicacionParcela" class="form-control" required>
            <option value="" disabled {{ old("RegimenPropiedadUbicacionParcela") ? '' : 'selected' }}>Seleccione una opción</option>
            <option value="Ejido" {{ old("RegimenPropiedadUbicacionParcela") == "Ejido" ? 'selected' : '' }}>Ejido</option>
            <option value="BienesComunales" {{ old("RegimenPropiedadUbicacionParcela") == "BienesComunales" ? 'selected' : '' }}>Bienes Comunales</option>
            <option value="PropiedadPrivada" {{ old("RegimenPropiedadUbicacionParcela") == "PropiedadPrivada" ? 'selected' : '' }}>Propiedad Privada</option>
        </select>
    </div>

    <div class="section-label Ejido titulos text-center">Régimen de propiedad de la parcela</div>
    <div class="section-label BienesComunales titulos text-center">Régimen de propiedad de la parcela</div>
    <div class="section-label PropiedadPrivada titulos text-center">Régimen de propiedad de la parcela</div>

    <div class="col-4 mt-4 Ejido hidden">
        <label for="NombreEjidoRegimenPropiedadParcela" >Nombre del ejido</label>
        <input type="text" name="NombreEjidoRegimenPropiedadParcela" id="NombreEjidoRegimenPropiedadParcela" class="form-control" value="{{ old('NombreEjidoRegimenPropiedadParcela') }}">
    </div>

    <div class="col-4 mt-4 Ejido hidden">
        <label for="Paraje1RegimenPropiedadParcela" >Paraje</label>
        <input type="text" name="Paraje1RegimenPropiedadParcela" id="Paraje1RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje1RegimenPropiedadParcela') }}">
    </div>

    <div class="col-4 mt-4 Ejido hidden">
        <label for="TablaRegimenPropiedadParcela" >Tabla</label>
        <input type="text" name="TablaRegimenPropiedadParcela" id="TablaRegimenPropiedadParcela" class="form-control" value="{{ old('TablaRegimenPropiedadParcela') }}">
    </div>

    <div class="col-12 mt-4 Ejido hidden">
        <label for="Numero2ParcelaRegimenPropiedadParcela" >N° de parcela</label>
        <input type="text" name="Numero2ParcelaRegimenPropiedadParcela" id="Numero2ParcelaRegimenPropiedadParcela" class="form-control" value="{{ old('Numero2ParcelaRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 BienesComunales hidden">
        <label for="NombreBienesComunalesRegimenPropiedadParcela" >Nombre de bienes comunales</label>
        <input type="text" name="NombreBienesComunalesRegimenPropiedadParcela" id="NombreBienesComunalesRegimenPropiedadParcela" class="form-control" value="{{ old('NombreBienesComunalesRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 BienesComunales hidden">
        <label for="Paraje2RegimenPropiedadParcela" >Paraje</label>
        <input type="text" name="Paraje2RegimenPropiedadParcela" id="Paraje2RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje2RegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 PropiedadPrivada hidden">
        <label for="NombrePropiedadPrivadaRegimenPropiedadParcela" >Nombre de la propiedad privada</label>
        <input type="text" name="NombrePropiedadPrivadaRegimenPropiedadParcela" id="NombrePropiedadPrivadaRegimenPropiedadParcela" class="form-control" value="{{ old('NombrePropiedadPrivadaRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 PropiedadPrivada hidden">
        <label for="BarrioRegimenPropiedadParcela" >Barrio</label>
        <input type="text" name="BarrioRegimenPropiedadParcela" id="BarrioRegimenPropiedadParcela" class="form-control" value="{{ old('BarrioRegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 PropiedadPrivada hidden">
        <label for="Paraje3RegimenPropiedadParcela" >Paraje</label>
        <input type="text" name="Paraje3RegimenPropiedadParcela" id="Paraje3RegimenPropiedadParcela" class="form-control" value="{{ old('Paraje3RegimenPropiedadParcela') }}">
    </div>

    <div class="col-6 mt-4 PropiedadPrivada hidden">
        <label for="Numero3ParcelaRegimenPropiedadParcela" >N° de parcela</label>
        <input type="text" name="Numero3ParcelaRegimenPropiedadParcela" id="Numero3ParcelaRegimenPropiedadParcela" class="form-control" value="{{ old('Numero3ParcelaRegimenPropiedadParcela') }}">
    </div>
    <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label titulos text-center mt-0">Datos de la Parcela</div>

    <div class="col-6 mt-4">
        <label for="SuperficieTotalPredio" >Superficie total del predio (m2)</label>
        <input type="text" name="SuperficieTotalPredio" id="SuperficieTotalPredio" class="form-control" value="{{ old('SuperficieTotalPredio') }}">
    </div>

    <div class="col-6 mt-4">
        <label for="SuperficieProductiva" >Superficie productiva (m2)</label>
        <input type="text" name="SuperficieProductiva" id="SuperficieProductiva" class="form-control" value="{{ old('SuperficieProductiva') }}">
    </div>

    <div class="col-12 mt-4">
        <label for="CultivoPrincipal" >Cultivo(s) principal(es)</label>
        <input type="text" name="CultivoPrincipal" id="CultivoPrincipal" class="form-control" value="{{ old('CultivoPrincipal') }}">
    </div>

    <div class="col-12 mt-4">
        <label for="PropietarioOArrendado" class=" required">¿El propietario(a) es dueño(a) o arrendatario(a) de la parcela? <td class="icocod">&#127745;</td></label>
        <select name="PropietarioOArrendado" id="PropietarioOArrendado" class="form-control" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="Propietario" {{ old('PropietarioOArrendado') == 'Propietario' ? 'selected' : '' }}>Propietario(a)</option>
            <option value="Arrendatario" {{ old('PropietarioOArrendado') == 'Arrendatario' ? 'selected' : '' }}>Arrendatario(a)</option>
        </select>
    </div>

    <div class="col-12 mt-4 Arrendatario hidden">
        <label for="NombreDueñoArrendado" >Favor de colocar el nombre completo del dueño de la parcela o chinampa</label>
        <input type="text" name="NombreDueñoArrendado" id="NombreDueñoArrendado" class="form-control" value="{{ old('NombreDueñoArrendado') }}">
    </div>
    <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label titulos text-center mt-0">Coordenadas del polígono (UTM)</div>

    <div class="col-6 mt-4 titulos text-center">
        <label for="aX" > X</label>
        <input type="text" name="aX" id="aX" placeholder="A" class="form-control text-center" value="{{ old('aX') }}">
    </div>
    <div class="col-6 mt-4 titulos text-center">
        <label for="aY" >Y</label>
        <input type="text" name="aY" id="aY" placeholder="A" class="form-control text-center" value="{{ old('aY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="bX" ></label>
        <input type="text" name="bX" id="bX"  placeholder="B" class="form-control text-center" value="{{ old('bX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="bY" ></label>
        <input type="text" name="bY" id="bY"  placeholder="B" class="form-control text-center" value="{{ old('bY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="cX" ></label>
        <input type="text" name="cX" id="cX"  placeholder="C" class="form-control text-center" value="{{ old('cX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="cY" ></label>
        <input type="text" name="cY" id="cY"  placeholder="C" class="form-control text-center" value="{{ old('cY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="dX" ></label>
        <input type="text" name="dX" id="dX"  placeholder="D" class="form-control text-center" value="{{ old('dX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="dY" ></label>
        <input type="text" name="dY" id="dY"  placeholder="D" class="form-control text-center" value="{{ old('dY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="eX" ></label>
        <input type="text" name="eX" id="eX"  placeholder="E" class="form-control text-center" value="{{ old('eX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="eY" ></label>
        <input type="text" name="eY" id="eY" placeholder="E" class="form-control text-center" value="{{ old('eY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="fX" ></label>
        <input type="text" name="fX" id="fX" placeholder="F" class="form-control text-center" value="{{ old('fX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="fY" ></label>
        <input type="text" name="fY" id="fY" placeholder="F" class="form-control text-center" value="{{ old('fY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="gX" ></label>
        <input type="text" name="gX" id="gX" placeholder="G" class="form-control text-center" value="{{ old('gX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="gY" ></label>
        <input type="text" name="gY" id="gY" placeholder="G" class="form-control text-center" value="{{ old('gY') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="hX" ></label>
        <input type="text" name="hX" id="hX" placeholder="H" class="form-control text-center" value="{{ old('hX') }}">
    </div>
    <div class="col-6  mt-0 titulos">
        <label for="hY" ></label>
        <input type="text" name="hY" id="hY" placeholder="H" class="form-control text-center" value="{{ old('hY') }}">
    </div>
    <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label mt-0 titulos text-center">Coordenada CENTRAL (UTM)</div>
    <div class="col-6 mt-4 titulos text-center">
        <label for="CoordenadaCentralX" >X</label>
        <input type="text" name="CoordenadaCentralX" id="CoordenadaCentralX" class="form-control" value="{{ old('CoordenadaCentralX') }}">
    </div>
    <div class="col-6 mt-4 titulos text-center">
        <label for="CoordenadaCentralY" >Y</label>
        <input type="text" name="CoordenadaCentralY" id="CoordenadaCentralY" class="form-control" value="{{ old('CoordenadaCentralY') }}">
    </div>

    <div class="col-12">
        <button class="btn btn-success mt-3 col-12">Guardar</button>
    </div>
    <br><br>
</form>
</div></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function toggleFields() {
            const selectedValue = document.getElementById('RegimenPropiedadUbicacionParcela').value;
            
            const ejidoFields = document.querySelectorAll('.Ejido');
            const bienesComunalesFields = document.querySelectorAll('.BienesComunales');
            const propiedadPrivadaFields = document.querySelectorAll('.PropiedadPrivada');
            
            ejidoFields.forEach(field => field.classList.add('hidden'));
            bienesComunalesFields.forEach(field => field.classList.add('hidden'));
            propiedadPrivadaFields.forEach(field => field.classList.add('hidden'));
            
            if (selectedValue === 'Ejido') {
                ejidoFields.forEach(field => field.classList.remove('hidden'));
            } else if (selectedValue === 'BienesComunales') {
                bienesComunalesFields.forEach(field => field.classList.remove('hidden'));
            } else if (selectedValue === 'PropiedadPrivada') {
                propiedadPrivadaFields.forEach(field => field.classList.remove('hidden'));
            }

            const propietarioOArrendado = document.getElementById('PropietarioOArrendado').value;
            const arrendatarioFields = document.querySelectorAll('.Arrendatario');

            arrendatarioFields.forEach(field => field.classList.add('hidden'));
            if (propietarioOArrendado === 'Arrendatario') {
                arrendatarioFields.forEach(field => field.classList.remove('hidden'));
            }
        }
        
        document.getElementById('RegimenPropiedadUbicacionParcela').addEventListener('change', toggleFields);
        document.getElementById('PropietarioOArrendado').addEventListener('change', toggleFields);

        toggleFields();
    });
</script>

@endsection
