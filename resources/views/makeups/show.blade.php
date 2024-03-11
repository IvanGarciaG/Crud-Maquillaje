@extends('layout.app')
@section('title', 'Crear Maquillaje')
@section('header')
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-1 mb-1">Ver Maquillaje</span>
            
        </h3>
    </div>
@endsection
@section('content')
{{-- Mostrar un maquillaje "Nombre", "Precio", "Marca", "Descripcion"--}}
<div class="card-body">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ $makeup->name }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" name="price" class="form-control" value="{{ $makeup->price }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Marca</label>
        <input type="text" name="brand" class="form-control" value="{{ $makeup->brand }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" name="description" class="form-control" value="{{ $makeup->description }}" readonly>
    </div>
</div>
@endsection
@section('scripts')
@endsection