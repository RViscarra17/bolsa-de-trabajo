<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OfertaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre_oferta,
            'descripcion' => $this->descripcion_oferta,
            'empresa' => $this->empresa->nombre_emp,
            'puesto' => $this->puesto->nombre_puesto,
            'salario' => ($this->salario->maximo) ?
                'Entre ' . $this->salario->minimo . ' a ' . $this->salario->maximo
                : $this->salario->minimo,

            'edad' => ($this->edad->edad_maxima) ?
                'De ' . $this->edad->edad_minima . ' a ' . $this->edad->edad_maxima
                : $this->edad->edad_minima,

            'otros' => $this->otros_requisitos,
            'ubicacion' => $this->ubicacion,

            'ciudad' => '(' . $this->ciudad->nombre_ciudad . ', '
                . $this->ciudad->estado->nombre_estado . ', '
                . $this->ciudad->estado->pais->nombre_pais . ')',

            'inicio' => Carbon::createFromFormat('Y-m-d', $this->fecha_inicio)->format('d/m/Y'),
            'fin' => Carbon::createFromFormat('Y-m-d', $this->fecha_fin)->format('d/m/Y'),
            'vacantes' => $this->vacantes,
            'experiencia' => $this->experiencia != 0 ?  $this->experiencia . ' año(s)' : 'No requerida',
            'genero' => $this->genero_str,
            'viajar' => $this->viajar ? 'SI' : 'NO',
            'vehiculo' => $this->vehiculo ? 'SI' : 'NO',
            'cambio_residencia' => $this->cambio_residencia ? 'SI' : 'NO',
            'habilidades' => HabilidadResource::collection($this->habilidades),
            'titulos' => TituloResource::collection($this->titulos),

        ];
    }
}
