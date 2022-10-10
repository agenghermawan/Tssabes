<?php

namespace App\Http\Resources;

use App\Models\StatistikPeserta;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'alamat' => $this->alamat,
            'tanggalLahir' => $this->tanggalLahir,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'statistic' => StatisticResource::collection(StatistikPeserta::where('user_id',$this->id)->get())
        ];
    }
}
