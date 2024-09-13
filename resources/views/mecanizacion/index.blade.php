@extends('layouts.main')
@section('contenido')
<style>
    .agregarbotonestylo {
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
</style>

<p class="fs-2 text-center mt-4 titulos">Mecanización</p>

<div class="card mt-4">
    <div class="card-body">
        <table id="tablaMecanizacion" class="display nowrap border border-dark mt-2" style="width:100%">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Nombre del Productor</th>
                    <th>Teléfono Celular</th>
                    <th>Teléfono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Sección Electoral</th>
                    <th>Alcaldía</th>
                    <th>Pueblo</th>
                    <th>Colonia o Barrio</th>
                    <th>Código Postal</th>
                    <th>Calle</th>
                    <th>Alcaldía donde se ubica la parcela</th>
                    <th>Pueblo donde se ubica la parcela</th>
                    <th>Regimen de la propiedad de la parcela</th>
                    <th>Nombre del ejido</th>
                    <th>Paraje</th>
                    <th>Tabla</th>
                    <th>No° de parcela</th>
                    <th>Nombre de bienes comunales</th>
                    <th>Paraje</th>
                    <th>Nombre de la propiedad privada</th>
                    <th>Barrio</th>
                    <th>Paraje</th>
                    <th>No° de parcela</th>
                    <th>Superficie total del predio (m²)</th>
                    <th>Superficie productiva (m²)</th>
                    <th>Cultivos Establecidos</th>
                    <th>Propietario o arrendado</th>
                    <th>Nombre del dueño o arrendado</th>
                    <th>Coordenada en X (a)</th>
                    <th>Coordenada en Y (a)</th>
                    <th>Coordenada en X (b)</th>
                    <th>Coordenada en Y (b)</th>
                    <th>Coordenada en X (c)</th>
                    <th>Coordenada en Y (c)</th>
                    <th>Coordenada en X (d)</th>
                    <th>Coordenada en Y (d)</th>
                    <th>Coordenada en X (e)</th>
                    <th>Coordenada en Y (e)</th>
                    <th>Coordenada en X (f)</th>
                    <th>Coordenada en Y (f)</th>
                    <th>Coordenada en X (g)</th>
                    <th>Coordenada en Y (g)</th>
                    <th>Coordenada en X (h)</th>
                    <th>Coordenada en Y (h)</th>
                    <th>Coordenada Central X</th>
                    <th>Coordenada Central Y</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mecanizacion as $mecanizacion)
                <tr>
                    <td>{{ $mecanizacion->folioMecanizacion }}</td>
                    <td>{{ $mecanizacion->nombre_productor }}</td>
                    <td>{{ $mecanizacion->telefono_celular }}</td>
                    <td>{{ $mecanizacion->telefono }}</td>
                    <td>{{ $mecanizacion->fecha_nacimiento }}</td>
                    <td>{{ $mecanizacion->sexo }}</td>
                    <td>{{ $mecanizacion->seccionElectoral }}</td>
                    <td>{{ $mecanizacion->alcaldia }}</td>
                    <td>{{ $mecanizacion->pueblo }}</td>
                    <td>{{ $mecanizacion->coloniaBarrio }}</td>
                    <td>{{ $mecanizacion->codigoPostal }}</td>
                    <td>{{ $mecanizacion->calle }}</td>
                    <td>{{ $mecanizacion->alcaldiaUbicacionParcela }}</td>
                    <td>{{ $mecanizacion->puebloUbicacionParcela }}</td>
                    <td>{{ $mecanizacion->RegimenPropiedadUbicacionParcela }}</td>
                    <td>{{ $mecanizacion->NombreEjidoRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->Paraje1RegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->TablaRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->Numero2ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->NombreBienesComunalesRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->Paraje2RegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->NombrePropiedadPrivadaRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->BarrioRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->Paraje3RegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->Numero3ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $mecanizacion->SuperficieTotalPredio }}</td>
                    <td>{{ $mecanizacion->SuperficieProductiva }}</td>
                    <td>{{ $mecanizacion->CultivoPrincipal }}</td>
                    <td>{{ $mecanizacion->PropietarioOArrendado }}</td>
                    <td>{{ $mecanizacion->NombreDueñoArrendado }}</td>
                    <td>{{ $mecanizacion->aX }}</td>
                    <td>{{ $mecanizacion->aY }}</td>
                    <td>{{ $mecanizacion->bX }}</td>
                    <td>{{ $mecanizacion->bY }}</td>
                    <td>{{ $mecanizacion->cX }}</td>
                    <td>{{ $mecanizacion->cY }}</td>
                    <td>{{ $mecanizacion->dX }}</td>
                    <td>{{ $mecanizacion->dY }}</td>
                    <td>{{ $mecanizacion->eX }}</td>
                    <td>{{ $mecanizacion->eY }}</td>
                    <td>{{ $mecanizacion->fX }}</td>
                    <td>{{ $mecanizacion->fY }}</td>
                    <td>{{ $mecanizacion->gX }}</td>
                    <td>{{ $mecanizacion->gY }}</td>
                    <td>{{ $mecanizacion->hX }}</td>
                    <td>{{ $mecanizacion->hY }}</td>
                    <td>{{ $mecanizacion->CoordenadaCentralX }}</td>
                    <td>{{ $mecanizacion->CoordenadaCentralY }}</td>
                    
                    <td>
                        <a href="{{ route('mecanizacion.edit', $mecanizacion->folioMecanizacion) }}" class="btn btn-warning"><i class="icocod">&#128221;</i> Editar</a>
                    </td>
                    <td>
                        <form id="deleteForm{{ $mecanizacion->folioMecanizacion }}" action="{{ route('mecanizacion.destroy', $mecanizacion->folioMecanizacion) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $mecanizacion->folioMecanizacion }}')" class="btn btn-danger">
                                <i class="icocod">&#9940;</i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br><br><br><br>

<script>
    $(document).ready(function() {
        $('#tablaMecanizacion').DataTable({
            scrollY: 450,
            deferRender: true,
            scroller: true,
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel'],
        });
    });
</script>
<script>
    function confirmDelete(folioMecanizacion) {
        console.log('Eliminar ' + folioMecanizacion); // Verificar si la función se ejecuta al hacer clic
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Esta acción no se puede revertir. ¿Estás seguro de que deseas eliminar esta entrada?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + folioMecanizacion).submit();
            }
        });
    }
</script>




@endsection
