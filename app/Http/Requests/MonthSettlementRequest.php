<?php



namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Yxx\LaravelQuick\Exceptions\Api\ApiRequestException;

class MonthSettlementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * @param  Validator  $validator
     * @throws ApiRequestException
     */
    protected function failedValidation(Validator $validator)
    {
        $error = $validator->errors()->all();
        throw new ApiRequestException($error[0]);
    }

    public function rules()
    {
        return [
            'accountant_item_id' => 'required|integer',
            'type' => 'required|integer',
            'customers' => 'required_if:type,1',
            'suppliers' => 'required_if:type,2'
        ];
    }
}
