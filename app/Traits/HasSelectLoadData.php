<?php



namespace App\Traits;

trait HasSelectLoadData
{
    /**
     * @var
     */
    protected $textid_array;

    /**
     * @param string $id
     * @param string $text
     * @return array
     */
    public function textIdtoArray(string $id, string $text):array
    {
        return $this->textid_array->map(function ($data) use ($id, $text) {
            return [
                'id'   => $data[$id],
                'text' => $data[$text],
            ];
        })->toArray();
    }
}
