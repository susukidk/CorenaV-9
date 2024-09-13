<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Compostas;
use App\Models\Mecanizacion;
use App\Models\Alcaldias;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MecanizacionController extends Controller
{
    public function index()
    {
        $mecanizacion = Mecanizacion::all();
        return view('mecanizacion.index', compact('mecanizacion'));
    }

    public function create($id)
    {
        $beneficiario = Alumnos::findOrFail($id);
        $alcaldias = Alcaldias::all();
        return view('mecanizacion.create', compact('beneficiario', 'alcaldias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // Recordatori: verificar con los de CORENADR qeu datos quieren que se valden
        ]);

        $mecanizacion = new Mecanizacion();
        $this->fillMecanizacionFromRequest($mecanizacion, $request);
        $mecanizacion->save();

        Alert::success('Agregado', 'Se agregó correctamente');
        return redirect('/inicio');
    }

    public function edit($folioMecanizacion)
    {
        $mecanizacion = Mecanizacion::findOrFail($folioMecanizacion);
        $alcaldias = Alcaldias::all();
        return view('mecanizacion.edit', compact('mecanizacion', 'alcaldias'));
    }

    public function update(Request $request, $folioMecanizacion)
    {
        $request->validate([
            // Recordatori: verificar con los de CORENADR qeu datos quieren que se valden
        ]);

        $mecanizacion = Mecanizacion::findOrFail($folioMecanizacion);
        $this->fillMecanizacionFromRequest($mecanizacion, $request);
        $mecanizacion->save();

        Alert::success('Actualizado', 'Se actualizó correctamente');
        return redirect()->route('mecanizacion.index');
    }

    public function destroy($folioMecanizacion)
    {
        $mecanizacion = Mecanizacion::findOrFail($folioMecanizacion);
        $mecanizacion->delete();

        Alert::success('Eliminado', 'Se eliminó correctamente');
        return redirect()->route('mecanizacion.index');
    }

    // Método para llenar los campos de mecanizacion desde la solicitud composta
    private function fillMecanizacionFromRequest(Mecanizacion $mecanizacion, Request $request)
    {
        $mecanizacion->identificadoBeneficiario = $request->identificadoBeneficiario;
        $mecanizacion->nombre_productor = $request->nombre_productor;
        $mecanizacion->telefono_celular = $request->telefono_celular;
        $mecanizacion->telefono = $request->telefono;
        $mecanizacion->fecha_nacimiento = $request->fecha_nacimiento;
        $mecanizacion->sexo = $request->sexo;
        $mecanizacion->seccionElectoral = $request->seccionElectoral;
        $mecanizacion->alcaldia = $request->alcaldia;
        $mecanizacion->pueblo = $request->pueblo;
        $mecanizacion->coloniaBarrio = $request->coloniaBarrio;
        $mecanizacion->codigoPostal = $request->codigoPostal;
        $mecanizacion->calle = $request->calle;
        $mecanizacion->alcaldiaUbicacionParcela = $request->alcaldiaUbicacionParcela ?: 'N/A';
        $mecanizacion->puebloUbicacionParcela = $request->puebloUbicacionParcela ?: 'N/A';
        $mecanizacion->RegimenPropiedadUbicacionParcela = $request->RegimenPropiedadUbicacionParcela ?: 'N/A';
        $mecanizacion->NombreEjidoRegimenPropiedadParcela = $request->NombreEjidoRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->Paraje1RegimenPropiedadParcela = $request->Paraje1RegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->TablaRegimenPropiedadParcela = $request->TablaRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->Numero2ParcelaRegimenPropiedadParcela = $request->Numero2ParcelaRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->NombreBienesComunalesRegimenPropiedadParcela = $request->NombreBienesComunalesRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->Paraje2RegimenPropiedadParcela = $request->Paraje2RegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->NombrePropiedadPrivadaRegimenPropiedadParcela = $request->NombrePropiedadPrivadaRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->BarrioRegimenPropiedadParcela = $request->BarrioRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->Paraje3RegimenPropiedadParcela = $request->Paraje3RegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->Numero3ParcelaRegimenPropiedadParcela = $request->Numero3ParcelaRegimenPropiedadParcela ?: 'N/A';
        $mecanizacion->SuperficieTotalPredio = $request->SuperficieTotalPredio ?: 'N/A';
        $mecanizacion->SuperficieProductiva = $request->SuperficieProductiva ?: 'N/A';
        $mecanizacion->CultivoEstablecidos = $request->CultivoEstablecidos ?: 'N/A';
        $mecanizacion->PropietarioOArrendado = $request->PropietarioOArrendado ?: 'N/A';
        $mecanizacion->NombreDueñoArrendado = $request->NombreDueñoArrendado ?: 'N/A';
        $mecanizacion->aX = $request->aX ?: '-';
        $mecanizacion->aY = $request->aY ?: '-';
        $mecanizacion->bX = $request->bX ?: '-';
        $mecanizacion->bY = $request->bY ?: '-';
        $mecanizacion->cX = $request->cX ?: '-';
        $mecanizacion->cY = $request->cY ?: '-';
        $mecanizacion->dX = $request->dX ?: '-';
        $mecanizacion->dY = $request->dY ?: '-';
        $mecanizacion->eX = $request->eX ?: '-';
        $mecanizacion->eY = $request->eY ?: '-';
        $mecanizacion->fX = $request->fX ?: '-';
        $mecanizacion->fY = $request->fY ?: '-';
        $mecanizacion->gX = $request->gX ?: '-';
        $mecanizacion->gY = $request->gY ?: '-';
        $mecanizacion->hX = $request->hX ?: '-';
        $mecanizacion->hY = $request->hY ?: '-';
        $mecanizacion->CoordenadaCentralX = $request->CoordenadaCentralX ?: '-';
        $mecanizacion->CoordenadaCentralY = $request->CoordenadaCentralY ?: '-';
    }
}
