<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{
    /**
    *Created at accessor
    *
    *return string
    */ 
    

    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A');
    }

    /**
    *Created at accessor
    *
    *return string
    */ 
    

    public function getUpdatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->diffForHumans();
    }


}