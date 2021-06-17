<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleIdiomaResource extends JsonResource
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
            'id_habilidad' => $this->id_hab_idioma,
            'habilidad' => $this->habilidad()->find($this->id_hab_idioma)->nombre_hab_idioma,
            'id_nivel' => $this->id_nivel_idioma,
            'nivel' => $this->nivel()->find($this->id_nivel_idioma)->nombre_nivel_idioma,
        ];
    }
}
