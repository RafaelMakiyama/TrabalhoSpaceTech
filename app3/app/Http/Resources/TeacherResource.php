<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'user_id' => $this->user_id,
            'fullname' => $this->fullname,
            'registration' => $this->registration,
            'competence' => $this->competence,
            'scholarity' => $this->scholarity,
            'created_at' => $this->created_at,
            'updated_at' =>$this->updated_at
        ];

    }

    public function with($request)
    {
        return[
            'extra_information' => "Essa API não está em produção, é apenas de homologação e testes"
        ];
    }
}
