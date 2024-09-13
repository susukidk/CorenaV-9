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

<p class="fs-2 text-center mt-4 titulos">Compostas</p>

<div class="card mt-4">
    <div class="card-body">
        <table id="tablaCompostas" class="display nowrap border border-dark mt-2" style="width:100%">
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
                @foreach ($compostas as $composta)
                <tr>
                    <td>{{ $composta->folioCompostas }}</td>
                    <td>{{ $composta->nombre_productor }}</td>
                    <td>{{ $composta->telefono_celular }}</td>
                    <td>{{ $composta->telefono }}</td>
                    <td>{{ $composta->fecha_nacimiento }}</td>
                    <td>{{ $composta->sexo }}</td>
                    <td>{{ $composta->seccionElectoral }}</td>
                    <td>{{ $composta->alcaldia }}</td>
                    <td>{{ $composta->pueblo }}</td>
                    <td>{{ $composta->coloniaBarrio }}</td>
                    <td>{{ $composta->codigoPostal }}</td>
                    <td>{{ $composta->calle }}</td>
                    <td>{{ $composta->alcaldiaUbicacionParcela }}</td>
                    <td>{{ $composta->puebloUbicacionParcela }}</td>
                    <td>{{ $composta->RegimenPropiedadUbicacionParcela }}</td>
                    <td>{{ $composta->NombreEjidoRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->Paraje1RegimenPropiedadParcela }}</td>
                    <td>{{ $composta->TablaRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->Numero2ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->NombreBienesComunalesRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->Paraje2RegimenPropiedadParcela }}</td>
                    <td>{{ $composta->NombrePropiedadPrivadaRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->BarrioRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->Paraje3RegimenPropiedadParcela }}</td>
                    <td>{{ $composta->Numero3ParcelaRegimenPropiedadParcela }}</td>
                    <td>{{ $composta->SuperficieTotalPredio }}</td>
                    <td>{{ $composta->SuperficieProductiva }}</td>
                    <td>{{ $composta->CultivoPrincipal }}</td>
                    <td>{{ $composta->PropietarioOArrendado }}</td>
                    <td>{{ $composta->NombreDueñoArrendado }}</td>
                    <td>{{ $composta->aX }}</td>
                    <td>{{ $composta->aY }}</td>
                    <td>{{ $composta->bX }}</td>
                    <td>{{ $composta->bY }}</td>
                    <td>{{ $composta->cX }}</td>
                    <td>{{ $composta->cY }}</td>
                    <td>{{ $composta->dX }}</td>
                    <td>{{ $composta->dY }}</td>
                    <td>{{ $composta->eX }}</td>
                    <td>{{ $composta->eY }}</td>
                    <td>{{ $composta->fX }}</td>
                    <td>{{ $composta->fY }}</td>
                    <td>{{ $composta->gX }}</td>
                    <td>{{ $composta->gY }}</td>
                    <td>{{ $composta->hX }}</td>
                    <td>{{ $composta->hY }}</td>
                    <td>{{ $composta->CoordenadaCentralX }}</td>
                    <td>{{ $composta->CoordenadaCentralY }}</td>
                    <td>
                        <a href="{{ route('compostas.edit', $composta->folioCompostas) }}" class="btn btn-warning"><i class="icocod">&#128221;</i> Editar</a>
                    </td>
                    <td>
                        <form id="deleteForm{{ $composta->folioCompostas }}" action="{{ route('compostas.destroy', $composta->folioCompostas) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $composta->folioCompostas }}')" class="btn btn-danger">
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
        $('#tablaCompostas').DataTable({
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
    function confirmDelete(folioCompostas) {
        console.log('Eliminar ' + folioCompostas); // Verificar si la función se ejecuta al hacer clic
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
                document.getElementById('deleteForm' + folioCompostas).submit();
            }
        });
    }
</script>




@endsection
