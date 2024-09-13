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
        .form-label {
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
    <a href="{{ route('compostas.index') }}" class="btn btn-block mt-3 col-12 agregarbotonestylo">
        <td class="icocod">&#9194;</td> Regresar
    </a>

    <div class="card my-4 p-4 estiloCard">
        <div class="card-body">
    <p class="text-center mt-0 titulos">
        <td class="icocod">&#128221;</td> Editar Datos De La Composta
    </p>
    

    <form class="row g-3 fs-4 mt-4" action="{{ route('compostas.update', $composta->folioCompostas) }}" method="post">
        @csrf
        @method('PUT')

        <!-- ID del beneficiario que está oculto -->
        <input type="hidden" name="identificadoBeneficiario" id="identificadoBeneficiario" value="{{ $composta->identificadoBeneficiario }}">

        <div class="col-md-4 mt-4">
            <label for="nombre_productor" class=" required">Nombre del Productor <td class="icocod">&#128221;</td></label>
            <input type="text" name="nombre_productor" id="nombre_productor" class="form-control non-interactive-select" required value="{{ $composta->nombre_productor }}" readonly>
        </div>

        <div class="col-md-4 mt-4">
            <label for="telefono_celular" class=" required">Telefono Celular <td class="icocod">&#128241;</td></label>
            <input type="number" name="telefono_celular" id="telefono_celular" class="form-control non-interactive-select" required value="{{ $composta->telefono_celular }}">
        </div>

        <div class="col-4 mt-4">
            <label for="telefono" class=" required">Telefono Fijo <td class="icocod">&#128224;</td></label>
            <input type="number" name="telefono" id="telefono" class="form-control non-interactive-select" required value="{{ $composta->telefono }}">
        </div>

        <div class="col-4 mt-4">
            <label for="fecha_nacimiento" class=" required">Fecha de nacimiento <td class="icocod">&#128198;</td></label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control non-interactive-select" required value="{{ $composta->fecha_nacimiento }}">
        </div>

        <div class="col-4 mt-4">
            <label for="sexo" class=" required">Sexo <td class="icocod">&#128107;</td></label>
            <select name="sexo" id="sexo" class="form-control non-interactive-select" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Masculino" {{ $composta->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $composta->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="Otro" {{ $composta->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div class="col-4 mt-4">
            <label for="seccionElectoral" class=" required">Sección Electoral <td class="icocod">&#127915;</td></label>
            <input type="text" name="seccionElectoral" id="seccionElectoral" class="form-control non-interactive-select" required value="{{ $composta->seccionElectoral }}">
        </div>

        <hr class="lnSeparacion">
        <p class="text-center titulos">
        <td class="icocod">&#128101;</td> Domicilio del Productor: 

        <div class="col-md-4 mt-4">
            <label for="alcaldia" class=" required">Alcaldía <td class="icocod">&#127961;</td></label>
            <select name="alcaldia" id="alcaldia" class="form-control non-interactive-select" required>
                <option value="" disabled selected>Seleccione una opción</option>
                @foreach($alcaldias as $alcaldia)
                    <option value="{{ $alcaldia->nombre }}" {{ $composta->alcaldia == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4 mt-4">
            <label for="pueblo" class=" required">Pueblo <td class="icocod">&#127969;</td></label>
            <input type="text" name="pueblo" id="pueblo" class="form-control non-interactive-select" required value="{{ $composta->pueblo }}">
        </div>

        <div class="col-4 mt-4">
            <label for="coloniaBarrio" class=" required">Colonia o Barrio <td class="icocod">&#127968;</td></label>
            <input type="text" name="coloniaBarrio" id="coloniaBarrio" class="form-control non-interactive-select" required value="{{ $composta->coloniaBarrio }}">
        </div>

        <div class="col-6 mt-4">
            <label for="codigoPostal" class=" required">Codigo Postal <td class="icocod">&#128236;</td></label>
            <input type="number" name="codigoPostal" id="codigoPostal" class="form-control non-interactive-select" required value="{{ $composta->codigoPostal }}">
        </div>

        <div class="col-6 mt-4">
            <label for="calle" class=" required">Calle y número <td class="icocod">&#128290;</td></label>
            <input type="text" name="calle" id="calle" class="form-control non-interactive-select" required value="{{ $composta->calle }}">
        </div>

        <hr class="lnSeparacion">
        <div class="section-label titulos text-center">
            <td class="icocod">&#128101;</td> Ubicacion de la Parcela o Unidad Productiva</div>

        <div class="col-md-6 mt-4">
            <label for="alcaldiaUbicacionParcela">Alcaldía <td class="icocod">&#127961;</td></label>
            <select name="alcaldiaUbicacionParcela" id="alcaldiaUbicacionParcela" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                @foreach($alcaldias as $alcaldia)
                    <option value="{{ $alcaldia->nombre }}" {{ old('alcaldiaUbicacionParcela', $composta->alcaldiaUbicacionParcela) == $alcaldia->nombre ? 'selected' : '' }}>{{ $alcaldia->nombre }}</option>
                @endforeach
            </select>
        </div>


        <div class="col-6 mt-4">
            <label for="puebloUbicacionParcela" >Pueblo</label>
            <input type="text" name="puebloUbicacionParcela" id="puebloUbicacionParcela" class="form-control" value="{{ $composta->puebloUbicacionParcela }}">
        </div>

        <div class="col-12 mt-4">
            <label for="RegimenPropiedadUbicacionParcela" class=" required">
                Elige el régimen de propiedad de la parcela<td class="icocod">&#127745;</td>
            </label>
            <select name="RegimenPropiedadUbicacionParcela" id="RegimenPropiedadUbicacionParcela" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Ejido" {{ old('RegimenPropiedadUbicacionParcela', $composta->RegimenPropiedadUbicacionParcela) == 'Ejido' ? 'selected' : '' }}>Ejido</option>
                <option value="BienesComunales" {{ old('RegimenPropiedadUbicacionParcela', $composta->RegimenPropiedadUbicacionParcela) == 'BienesComunales' ? 'selected' : '' }}>Bienes comunales</option>
                <option value="PropiedadPrivada" {{ old('RegimenPropiedadUbicacionParcela', $composta->RegimenPropiedadUbicacionParcela) == 'PropiedadPrivada' ? 'selected' : '' }}>Propiedad privada</option>
            </select>
        </div>

        <div class="section-label Ejido titulos text-center">Régimen de Propiedad de la Parcela</div>
        <div class="section-label BienesComunales titulos text-center">Régimen de Propiedad de la Parcela</div>
        <div class="section-label PropiedadPrivada titulos text-center">Régimen de Propiedad de la Parcela</div>

        <div class="col-4 mt-4 Ejido">
            <label for="NombreEjidoRegimenPropiedadParcela" >Nombre del ejido</label>
            <input type="text" name="NombreEjidoRegimenPropiedadParcela" id="NombreEjidoRegimenPropiedadParcela" class="form-control" value="{{ $composta->NombreEjidoRegimenPropiedadParcela }}">
        </div>

        <div class="col-4 mt-4 Ejido">
            <label for="Paraje1RegimenPropiedadParcela" >Paraje</label>
            <input type="text" name="Paraje1RegimenPropiedadParcela" id="Paraje1RegimenPropiedadParcela" class="form-control" value="{{ $composta->Paraje1RegimenPropiedadParcela }}">
        </div>

        <div class="col-4 mt-4 Ejido hidden">
            <label for="TablaRegimenPropiedadParcela" >Tabla</label>
            <input type="text" name="TablaRegimenPropiedadParcela" id="TablaRegimenPropiedadParcela" class="form-control" value="{{ $composta->TablaRegimenPropiedadParcela }}">
        </div>

        <div class="col-12 mt-4 Ejido">
            <label for="Numero2ParcelaRegimenPropiedadParcela" >N° de parcela</label>
            <input type="text" name="Numero2ParcelaRegimenPropiedadParcela" id="Numero2ParcelaRegimenPropiedadParcela" class="form-control" value="{{ $composta->Numero2ParcelaRegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 BienesComunales">
            <label for="NombreBienesComunalesRegimenPropiedadParcela" >Nombre de bienes comunales</label>
            <input type="text" name="NombreBienesComunalesRegimenPropiedadParcela" id="NombreBienesComunalesRegimenPropiedadParcela" class="form-control" value="{{ $composta->NombreBienesComunalesRegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 BienesComunales">
            <label for="Paraje2RegimenPropiedadParcela" >Paraje</label>
            <input type="text" name="Paraje2RegimenPropiedadParcela" id="Paraje2RegimenPropiedadParcela" class="form-control" value="{{ $composta->Paraje2RegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 PropiedadPrivada">
            <label for="NombrePropiedadPrivadaRegimenPropiedadParcela" >Nombre de la propiedad privada</label>
            <input type="text" name="NombrePropiedadPrivadaRegimenPropiedadParcela" id="NombrePropiedadPrivadaRegimenPropiedadParcela" class="form-control" value="{{ $composta->NombrePropiedadPrivadaRegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 PropiedadPrivada">
            <label for="BarrioRegimenPropiedadParcela" >Barrio</label>
            <input type="text" name="BarrioRegimenPropiedadParcela" id="BarrioRegimenPropiedadParcela" class="form-control" value="{{ $composta->BarrioRegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 PropiedadPrivada">
            <label for="Paraje3RegimenPropiedadParcela" >Paraje</label>
            <input type="text" name="Paraje3RegimenPropiedadParcela" id="Paraje3RegimenPropiedadParcela" class="form-control" value="{{ $composta->Paraje3RegimenPropiedadParcela }}">
        </div>

        <div class="col-6 mt-4 PropiedadPrivada">
            <label for="Numero3ParcelaRegimenPropiedadParcela" >N° de parcela</label>
            <input type="text" name="Numero3ParcelaRegimenPropiedadParcela" id="Numero3ParcelaRegimenPropiedadParcela" class="form-control" value="{{ $composta->Numero3ParcelaRegimenPropiedadParcela }}">
        </div>
        <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label titulos text-center mt-0">Datos de la parcela</div>

        <div class="col-6 mt-4">
            <label for="SuperficieTotalPredio" >Superficie total del predio (m2)</label>
            <input type="text" name="SuperficieTotalPredio" id="SuperficieTotalPredio" class="form-control" value="{{ $composta->SuperficieTotalPredio }}">
        </div>

        <div class="col-6 mt-4">
            <label for="SuperficieProductiva" >Superficie productiva (m2)</label>
            <input type="text" name="SuperficieProductiva" id="SuperficieProductiva" class="form-control" value="{{ $composta->SuperficieProductiva }}">
        </div>

        <div class="col-12 mt-4">
            <label for="CultivoPrincipal" >Cultivo(s) principal(es)</label>
            <input type="text" name="CultivoPrincipal" id="CultivoPrincipal" class="form-control" value="{{ $composta->CultivoPrincipal }}">
        </div>

        <div class="col-12 mt-4">
            <label for="PropietarioOArrendado" class="form-label required">¿El propietario(a) es dueño(a) o arrendatario(a) de la parcela? <td class="icocod">&#127745;</td></label>
            <select name="PropietarioOArrendado" id="PropietarioOArrendado" class="form-control" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Propietario" {{ old('PropietarioOArrendado', $composta->PropietarioOArrendado) == 'Propietario' ? 'selected' : '' }}>Propietario(a)</option>
                <option value="Arrendatario" {{ old('PropietarioOArrendado', $composta->PropietarioOArrendado) == 'Arrendatario' ? 'selected' : '' }}>Arrendatario(a)</option>
            </select>
        </div>

        <div class="col-12 mt-4 Arrendatario">
            <label for="NombreDueñoArrendado" >Favor de colocar el nombre completo del dueño de la parcela o chinampa</label>
            <input type="text" name="NombreDueñoArrendado" id="NombreDueñoArrendado" class="form-control" value="{{ $composta->NombreDueñoArrendado }}">
        </div>
        <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label titulos text-center mt-0">Coordenadas del Polígono (UTM)</div>

        <div class="col-6 mt-4">
            <label for="aX" > a) Coordenada X</label>
            <input type="text" name="aX" id="aX" class="form-control" value="{{ $composta->aX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="aY" > a) Coordenada Y</label>
            <input type="text" name="aY" id="aY" class="form-control" value="{{ $composta->aY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="bX" > b) Coordenada X</label>
            <input type="text" name="bX" id="bX" class="form-control" value="{{ $composta->bX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="bY" > b) Coordenada Y</label>
            <input type="text" name="bY" id="bY" class="form-control" value="{{ $composta->bY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="cX" > c) Coordenada X</label>
            <input type="text" name="cX" id="cX" class="form-control" value="{{ $composta->cX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="cY" > c) Coordenada Y</label>
            <input type="text" name="cY" id="cY" class="form-control" value="{{ $composta->cY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="dX" > d) Coordenada X</label>
            <input type="text" name="dX" id="dX" class="form-control" value="{{ $composta->dX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="dY" > d) Coordenada Y</label>
            <input type="text" name="dY" id="dY" class="form-control" value="{{ $composta->dY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="eX" > e) Coordenada X</label>
            <input type="text" name="eX" id="eX" class="form-control" value="{{ $composta->eX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="eY" > e) Coordenada Y</label>
            <input type="text" name="eY" id="eY" class="form-control" value="{{ $composta->eY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="fX" > f) Coordenada X</label>
            <input type="text" name="fX" id="fX" class="form-control" value="{{ $composta->fX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="fY" > f) Coordenada Y</label>
            <input type="text" name="fY" id="fY" class="form-control" value="{{ $composta->fY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="gX" > g) Coordenada X</label>
            <input type="text" name="gX" id="gX" class="form-control" value="{{ $composta->gX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="gY" > g) Coordenada Y</label>
            <input type="text" name="gY" id="gY" class="form-control" value="{{ $composta->gY }}">
        </div>
        <div class="col-6 mt-4">
            <label for="hX" > h) Coordenada X</label>
            <input type="text" name="hX" id="hX" class="form-control" value="{{ $composta->hX }}">
        </div>
        <div class="col-6 mt-4">
            <label for="hY" > h) Coordenada Y</label>
            <input type="text" name="hY" id="hY" class="form-control" value="{{ $composta->hY }}">
        </div>
        <div class="col-12 mt-0" >
        <hr class="lnSeparacion">
    </div>
    <div class="section-label mt-0 titulos text-center">Coordenada CENTRAL (UTM)</div>

        <div class="col-6 mt-4 titulos text-center">
            <label for="CoordenadaCentralX" >X</label>
            <input type="text" name="CoordenadaCentralX" id="CoordenadaCentralX" class="form-control" value="{{ $composta->CoordenadaCentralX }}">
        </div>
        <div class="col-6 mt-4 titulos text-center">
            <label for="CoordenadaCentralY" >Y</label>
            <input type="text" name="CoordenadaCentralY" id="CoordenadaCentralY" class="form-control" value="{{ $composta->CoordenadaCentralY }}">
        </div>

        <div>
        <button class="btn btn-success mt-3 col-12">Guardar</button>
    </div>
        <br><br>
        


        <div class="col-6 mt-4">
            <br><br><br>
        </div>
    </form>
</div>
</div></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectRegimen = document.getElementById('RegimenPropiedadUbicacionParcela');
        const sections = document.querySelectorAll('.Ejido, .BienesComunales, .PropiedadPrivada');
        const selectPropietario = document.getElementById('PropietarioOArrendado');
        const arrendatarioDiv = document.querySelector('.Arrendatario');

        function clearInputs(section) {
            const inputs = section.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.value = '';
            });
        }

        function handleRegimenChange() {
            const selectedValue = selectRegimen.value.replace(' ', ''); // Remove spaces from selected value
            sections.forEach(section => {
                if (section.classList.contains(selectedValue)) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                    clearInputs(section); // Clear inputs of hidden sections
                }
            });
        }

        function handlePropietarioChange() {
            const selectedValue = selectPropietario.value;
            if (selectedValue === 'Arrendatario') {
                arrendatarioDiv.style.display = 'block';
            } else {
                arrendatarioDiv.style.display = 'none';
                clearInputs(arrendatarioDiv); // Clear inputs of hidden div
            }
        }

        selectRegimen.addEventListener('change', handleRegimenChange);
        selectPropietario.addEventListener('change', handlePropietarioChange);

        // Trigger the functions on page load to handle the initial state
        handleRegimenChange();
        handlePropietarioChange();
    });
</script>


@endsection
