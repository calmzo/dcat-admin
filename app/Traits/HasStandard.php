<?php



namespace App\Traits;

trait HasStandard
{
    public function getStandardStrAttribute()
    {
        return self::STANDARD[$this->standard];
    }
}
