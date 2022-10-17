<?php



namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'unit'         => $this->unit->name ?? '',
            'product_attr' => $this->sku_id_text,
            'type_str'     => $this->type_str
        ];
    }
}
