<?php

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ThreadFilters extends Filter
{
    public function user($value)
    {
        $this->builder->where('user_id', $value);

    }


}