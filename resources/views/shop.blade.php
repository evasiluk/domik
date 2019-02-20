@extends('layouts.app')

@section('content')
<div class="container">
<div class="border row">
    @forelse($items as $item)
        <div class="col-md-3 border">
            <p>Наименование: {{$item->name}}</p>
            <p>Сезон: {{$item->season}}</p>
            <p>Бренд: {{$item->brand}}</p>
            <p>Размер: {{$item->size}}</p>
            <p>Цвет: {{$item->color}}</p>
            <p>Цена: {{$item->price}}</p>
        </div>
    @empty
        <p>No items found :(</p>
    @endforelse
    </div>
</div>
@endsection