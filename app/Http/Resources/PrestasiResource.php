<?php

namespace App\Http\Resources;

use App\Models\ListAchievement;
use Illuminate\Http\Resources\Json\JsonResource;

class PrestasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'namaLengkap' => $this->namaLengkap,
            'asalSekolah' => $this->asalSekolah,
            'tingkatanSekolah' => $this->tingkatanSekolah,
            'status' => $this->status,
            'daftarJuara' => ListAchievement::where('achievements_id',$this->id)->get(),
        ];
    }

}
