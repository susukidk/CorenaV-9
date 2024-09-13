<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanizacion extends Model
{
    use HasFactory;

    protected $table = 'mecanizacion';
    protected $primaryKey = 'folioMecanizacion';

    protected $fillable = [
        'identificadoBeneficiario',
        'nombre_productor',
        'telefono_celular',
        'telefono',
        'fecha_nacimiento',
        'sexo',
        'seccionElectoral',
        'alcaldia',
        'pueblo',
        'coloniaBarrio',
        'codigoPostal',
        'calle',
        'alcaldiaUbicacionParcela',
        'puebloUbicacionParcela',
        'RegimenPropiedadUbicacionParcela',
        'NombreEjidoRegimenPropiedadParcela',
        'Paraje1RegimenPropiedadParcela',
        'TablaRegimenPropiedadParcela',
        'Numero2ParcelaRegimenPropiedadParcela',
        'NombreBienesComunalesRegimenPropiedadParcela',
        'Paraje2RegimenPropiedadParcela',
        'NombrePropiedadPrivadaRegimenPropiedadParcela',
        'BarrioRegimenPropiedadParcela',
        'Paraje3RegimenPropiedadParcela',
        'Numero3ParcelaRegimenPropiedadParcela',
        'SuperficieTotalPredio',
        'SuperficieProductiva',
        'CultivoEstablecidos',
        'PropietarioOArrendado',
        'NombreDueñoArrendado',
        'aX',
        'aY',
        'bX',
        'bY',
        'cX',
        'cY',
        'dX',
        'dY',
        'eX',
        'eY',
        'fX',
        'fY',
        'gX',
        'gY',
        'hX',
        'hY',
        'CoordenadaCentralX',
        'CoordenadaCentralY'
    ];
}