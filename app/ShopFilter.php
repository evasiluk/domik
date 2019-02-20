<?php
namespace App;

class ShopFilter extends QueryFilter {
    public function name($name)
    {
        return $this->builder->where('name', $name);
    }

    public function season($season)
    {
        return $this->builder->where('season', $season);
    }

    public function brand($brand)
    {
        return $this->builder->where('brand', $brand);
    }

    public function size($size)
    {
        return $this->builder->where('size', $size);
    }

    public function color($color)
    {
        return $this->builder->where('color', $color);
    }

    public function price($price)
    {
        return $this->builder->where('price', '<=', $price);
    }
}

