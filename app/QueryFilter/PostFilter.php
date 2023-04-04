<?php

namespace App\QueryFilter;

class PostFilter extends QueryFilter
{

    public function fromDate($value)
    {
        $this->builder->whereDate('updated_at', " >= " ,$value);
    }
    public function toDate($value)
    {
        $this->builder->whereDate('updated_at', " <= " ,$value);
    }

}
