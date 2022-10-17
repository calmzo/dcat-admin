<?php



namespace App\Http\Requests;

class WithOrderRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'order_no'      => 'string|required',
            'func'          => 'string|required',
            'with_order_id' => 'integer|required|gt:0',
        ];
    }

    public function validated(): array
    {
        return $this->validator->validated();
    }
}
