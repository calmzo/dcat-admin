<?php



namespace App\Repositories;

use App\Models\AttrValueModel;
use App\Traits\HasSelectLoadData;
use Yxx\LaravelQuick\Repositories\BaseRepository;

class AttrValueRepository extends BaseRepository
{
    use HasSelectLoadData;
    /**
     * @param int $attr_id
     * @return AttrValueRepository
     */
    public function getValueByAttrId(int $attr_id): self
    {
        $this->textid_array =  AttrValueModel::where('attr_id', $attr_id)->get();
        return $this;
    }
}
