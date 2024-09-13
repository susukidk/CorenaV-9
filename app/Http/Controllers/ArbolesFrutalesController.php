<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\ArbolesFrutales;
use App\Models\Alcaldias;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArbolesFrutalesController extends Controller
{
    public function index()
    {
        $arbolesfrutales = ArbolesFrutales::all();
        return view('arbolesfrutales.index', compact('arbolesfrutales'));
    }

    public function create($id)
    {
        $beneficiario = Alumnos::findOrFail($id);
        $alcaldias = Alcaldias::all();
        return view('arbolesfrutales.create', compact('beneficiario', 'alcaldias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // Recordatori: verificar con los de CORENADR qeu datos quieren que se valden
        ]);

        $arbolesfrutales = new ArbolesFrutales();
        $this->fillArbolesFrutalesFromRequest($arbolesfrutales, $request);
        $arbolesfrutales->save();

        Alert::success('Agregado', 'Se agregó correctamente');
        return redirect('/inicio');
    }

    public function edit($folioarbolesfrutales)
    {
        $arbolesfrutales = ArbolesFrutales::findOrFail($folioarbolesfrutales);
        $alcaldias = Alcaldias::all();
        return view('arbolesfrutales.edit', compact('arbolesfrutales', 'alcaldias'));
    }

    public function update(Request $request, $folioarbolesfrutales)
    {
        $request->validate([
            // Recordatori: verificar con los de CORENADR qeu datos quieren que se valden
        ]);

        $arbolesfrutales = ArbolesFrutales::findOrFail($folioarbolesfrutales);
        $this->fillArbolesFrutalesFromRequest($arbolesfrutales, $request);
        $arbolesfrutales->save();

        Alert::success('Actualizado', 'Se actualizó correctamente');
        return redirect()->route('arbolesfrutales.index');
    }

    public function destroy($folioarbolesfrutales)
    {
        $arbolesfrutales = ArbolesFrutales::findOrFail($folioarbolesfrutales);
        $arbolesfrutales->delete();

        Alert::success('Eliminado', 'Se eliminó correctamente');
        return redirect()->route('arbolesfrutales.index');
    }
    
    // Método para llenar los campos de arboles frutales desde la solicitud
    private function fillArbolesFrutalesFromRequest(ArbolesFrutales $arbolesfrutales, Request $request)
    {
        $arbolesfrutales->identificadoBeneficiario = $request->identificadoBeneficiario;
        $arbolesfrutales->nombre_productor = $request->nombre_productor;
        $arbolesfrutales->telefono_celular = $request->telefono_celular;
        $arbolesfrutales->telefono = $request->telefono;
        $arbolesfrutales->fecha_nacimiento = $request->fecha_nacimiento;
        $arbolesfrutales->sexo = $request->sexo;
        $arbolesfrutales->seccionElectoral = $request->seccionElectoral;
        $arbolesfrutales->alcaldia = $request->alcaldia;
        $arbolesfrutales->pueblo = $request->pueblo;
        $arbolesfrutales->coloniaBarrio = $request->coloniaBarrio;
        $arbolesfrutales->codigoPostal = $request->codigoPostal;
        $arbolesfrutales->calle = $request->calle;
        $arbolesfrutales->alcaldiaUbicacionParcela = $request->alcaldiaUbicacionParcela ?: 'N/A';
        $arbolesfrutales->puebloUbicacionParcela = $request->puebloUbicacionParcela ?: 'N/A';
        $arbolesfrutales->RegimenPropiedadUbicacionParcela = $request->RegimenPropiedadUbicacionParcela ?: 'N/A';
        $arbolesfrutales->NombreEjidoRegimenPropiedadParcela = $request->NombreEjidoRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->Paraje1RegimenPropiedadParcela = $request->Paraje1RegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->TablaRegimenPropiedadParcela = $request->TablaRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->Numero2ParcelaRegimenPropiedadParcela = $request->Numero2ParcelaRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->NombreBienesComunalesRegimenPropiedadParcela = $request->NombreBienesComunalesRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->Paraje2RegimenPropiedadParcela = $request->Paraje2RegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->NombrePropiedadPrivadaRegimenPropiedadParcela = $request->NombrePropiedadPrivadaRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->BarrioRegimenPropiedadParcela = $request->BarrioRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->Paraje3RegimenPropiedadParcela = $request->Paraje3RegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->Numero3ParcelaRegimenPropiedadParcela = $request->Numero3ParcelaRegimenPropiedadParcela ?: 'N/A';
        $arbolesfrutales->SuperficieTotalPredio = $request->SuperficieTotalPredio ?: 'N/A';
        $arbolesfrutales->SuperficieProductiva = $request->SuperficieProductiva ?: 'N/A';
        $arbolesfrutales->CultivoPrincipal = $request->CultivoPrincipal ?: 'N/A';
        $arbolesfrutales->PropietarioOArrendado = $request->PropietarioOArrendado ?: 'N/A';
        $arbolesfrutales->NombreDueñoArrendado = $request->NombreDueñoArrendado ?: 'N/A';
        $arbolesfrutales->aX = $request->aX ?: '-';
        $arbolesfrutales->aY = $request->aY ?: '-';
        $arbolesfrutales->bX = $request->bX ?: '-';
        $arbolesfrutales->bY = $request->bY ?: '-';
        $arbolesfrutales->cX = $request->cX ?: '-';
        $arbolesfrutales->cY = $request->cY ?: '-';
        $arbolesfrutales->dX = $request->dX ?: '-';
        $arbolesfrutales->dY = $request->dY ?: '-';
        $arbolesfrutales->eX = $request->eX ?: '-';
        $arbolesfrutales->eY = $request->eY ?: '-';
        $arbolesfrutales->fX = $request->fX ?: '-';
        $arbolesfrutales->fY = $request->fY ?: '-';
        $arbolesfrutales->gX = $request->gX ?: '-';
        $arbolesfrutales->gY = $request->gY ?: '-';
        $arbolesfrutales->hX = $request->hX ?: '-';
        $arbolesfrutales->hY = $request->hY ?: '-';
        $arbolesfrutales->CoordenadaCentralX = $request->CoordenadaCentralX ?: '-';
        $arbolesfrutales->CoordenadaCentralY = $request->CoordenadaCentralY ?: '-';
    }
}
