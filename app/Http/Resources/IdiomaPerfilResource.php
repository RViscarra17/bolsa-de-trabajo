<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdiomaPerfilResource extends JsonResource
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
            'id_idioma' => $this->id,
            'codigo_idioma' => $this->codigo_idioma,
            'nombre_idioma' => $this->nombre_idioma,
            'id_perfil' => $this->detalle->id_perfil,
            'detalle' => DetalleIdiomaResource::collection($this->detalle->detalles_idioma)
        ];
    }
}
