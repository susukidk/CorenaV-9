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

<p class="fs-2 text-center mt-4 titulos">Arboles Frutales</p>

<div class="card mt-4">
    <div class="card-body">
        <table id="tablaArbolesFrutales" class="display nowrap border border-dark mt-2" style="width:100%">
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
                    <th>Cultivo principal</th>
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
                @foreach ($arbolesfrutales as $arbolesfrutales)
                <tr>
                    <td>{{ $arbolesfrutales->folioarbolesfrutales }}</td>
                    <td>{{ $arbolesfrutales->nombre_productor }}</td>
                    <td>{{ $arbolesfrutales->telefono_celular }}</td>
                    <td>{{ $arbolesfrutales->telefono }}</td>
                    <td>{{ $arbolesfrutales->fecha_nacimiento }}</td>
                    <td>{{ $arbolesfrutales->sexo }}</td>
                    <td>{{ $arbolesfrutales->seccionElectoral }}</td>
                    <td>{{ $arbolesfrutales->alcaldia }}</td>
                    <td>{{ $arbolesfrutales->pueblo }}</td>
                    <td>{{ $arbolesfrutales->coloniaBarrio }}</td>
                    <td>{{ $arbolesfrutales->codigoPostal }}</td>
                    <td>{{ $arbolesfrutales->calle }}</td>
                    <td>{{ $arbolesfrutales->alcaldiaUbicacionParcela }}</td>
                    <td>{{ $arbolesfrutales->puebloUbicacionParcela }}</td>
                    <td>{{ $arbolesfrutales->RegimenPropiedadUbicacionParcela }}</td>
                    <td>{{ $arbolesfrutales->NombreEjidoRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->Paraje1RegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->TablaRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->Numero2ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->NombreBienesComunalesRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->Paraje2RegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->NombrePropiedadPrivadaRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->BarrioRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->Paraje3RegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->Numero3ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $arbolesfrutales->SuperficieTotalPredio }}</td>
                    <td>{{ $arbolesfrutales->SuperficieProductiva }}</td>
                    <td>{{ $arbolesfrutales->CultivoPrincipal }}</td>
                    <td>{{ $arbolesfrutales->PropietarioOArrendado }}</td>
                    <td>{{ $arbolesfrutales->NombreDueñoArrendado }}</td>
                    <td>{{ $arbolesfrutales->aX }}</td>
                    <td>{{ $arbolesfrutales->aY }}</td>
                    <td>{{ $arbolesfrutales->bX }}</td>
                    <td>{{ $arbolesfrutales->bY }}</td>
                    <td>{{ $arbolesfrutales->cX }}</td>
                    <td>{{ $arbolesfrutales->cY }}</td>
                    <td>{{ $arbolesfrutales->dX }}</td>
                    <td>{{ $arbolesfrutales->dY }}</td>
                    <td>{{ $arbolesfrutales->eX }}</td>
                    <td>{{ $arbolesfrutales->eY }}</td>
                    <td>{{ $arbolesfrutales->fX }}</td>
                    <td>{{ $arbolesfrutales->fY }}</td>
                    <td>{{ $arbolesfrutales->gX }}</td>
                    <td>{{ $arbolesfrutales->gY }}</td>
                    <td>{{ $arbolesfrutales->hX }}</td>
                    <td>{{ $arbolesfrutales->hY }}</td>
                    <td>{{ $arbolesfrutales->CoordenadaCentralX }}</td>
                    <td>{{ $arbolesfrutales->CoordenadaCentralY }}</td>
                    <td>
                        <a href="{{ route('arbolesfrutales.edit', $arbolesfrutales->folioarbolesfrutales) }}" class="btn btn-warning"><i class="icocod">&#128221;</i> Editar</a>
                    </td>
                    <td>
                        <form id="deleteForm{{ $arbolesfrutales->folioarbolesfrutales }}" action="{{ route('arbolesfrutales.destroy', $arbolesfrutales->folioarbolesfrutales) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $arbolesfrutales->folioarbolesfrutales }}')" class="btn btn-danger">
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
        $('#tablaArbolesFrutales').DataTable({
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
    function confirmDelete(folioarbolesfrutales) {
        console.log('Eliminar ' + folioarbolesfrutales); // Verificar si la función se ejecuta al hacer clic
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
                document.getElementById('deleteForm' + folioarbolesfrutales).submit();
            }
        });
    }
</script>




@endsection
