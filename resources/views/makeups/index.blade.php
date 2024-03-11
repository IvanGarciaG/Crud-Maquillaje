@extends('layout.app')

@section('title', 'Maquillajes')
@section('header')
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-1 mb-1">Maquillajes</span>
            
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('makeups.create') }}" class="btn btn-sm btn-light-primary">
                <i class="fa-solid fa-plus"></i>Nuevo Maquillaje</a>
        </div>
    </div>
@endsection
@section('content')

    <!--begin::Table container-->
    <div class="table-responsive">
        <!--begin::Table-->
        <table class="table align-middle gs-0 gy-4" id="new_arrivals">
            <!--begin::Table head-->
            <thead>
                <tr class="fw-bold text-muted bg-light">
                    <th class="min-w-125px text-center">ID</th>
                    <th class="min-w-125px text-center">Nombre</th>
                    <th class="min-w-125px text-center">Precio</th>
                    <th class="min-w-200px text-center">Marca</th>
                    <th class="min-w-150px text-center">Descripcion</th>
                    <th class="min-w-150px text-center">Acciones</th>
                </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody>
                @foreach ($makeups as $makeup)
                    <tr>
                        <td class="text-center">{{ $makeup->id }}</td>
                        <td class="text-center">{{ $makeup->name }}</td>
                        <td class="text-center">${{ $makeup->price }}</td>
                        <td class="text-center">{{ $makeup->brand }}</td>
                        <td class="text-center">{{ $makeup->description }}</td>
                        <td class="text-center">
                            {{-- <a href="{{ route('makeups.show', ['id' => $makeup->id]) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('makeups.edit', ['id' => $makeup->id]) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a> --}}
                            <a href="{{ route('makeups.destroy', ['id' => $makeup->id]) }}"
                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Table container-->
@endsection
@section('scripts')
    <script>
        function crearAlertas(titulo, mensaje, icono) {
            Swal.fire(
                titulo,
                mensaje,
                icono
            )
        }
        $(document).ready(function() {
            $('#new_arrivals').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
        });

        @if (Illuminate\Support\Facades\Session::has('error'))
            crearAlertas('Maquillaje no eliminado!', '{{ Session::get('error') }}', 'warning');
            {{ Session::forget('error') }}
        @endif
        @if (Illuminate\Support\Facades\Session::has('success'))
            crearAlertas('Maquillaje eliminado!', '{{ Session::get('success') }}', 'success');
            {{ Session::forget('success') }}
        @endif
    </script>
@endsection
