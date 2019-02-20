<?php
namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilter {
    public $request;
    public $builder;

    public function __construct(Request $request)
    {
        $this->request = $request->all();
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach($this->request as $name => $value) {
            if(method_exists($this, $name)) {
                $this->$name($value);
            }
        }

        return $this->builder;
    }
}