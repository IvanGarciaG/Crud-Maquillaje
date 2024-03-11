@extends('layout.app')
@section('title', 'Crear Maquillaje')
@section('header')
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-1 mb-1">Editar Maquillaje</span>
            
        </h3>
    </div>
@endsection
@section('content')
{{-- Formulario de crear un maquillaje "Nombre", "Precio", "Marca", "Descripcion"--}}
<form action="{{ route('makeups.edit') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label
            @error('name') is-invalid @enderror">Nombre</label>
            <input type="text" name="name" class="form-control
            @error('name') is-invalid @enderror" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label
            @error('price') is-invalid @enderror">Precio</label>
            <input type="number" name="price" class="form-control
            @error('price') is-invalid @enderror" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label class="form-label
            @error('brand') is-invalid @enderror">Marca</label>
            <input type="text" name="brand" class="form-control
            @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
        </div>
        <div class="mb-3">
            <label class="form-label
            @error('description') is-invalid @enderror">Descripcion</label>
            <input type="text" name="description" class="form-control
            @error('description') is-invalid @enderror" value="{{ old('description') }}">
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('makeups.index') }}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@endsection
@section('scripts')
@endsection