@extends("layouts.master")
@section("contenido")
    <h1>página de vistas ingresadas (2)</h1>
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card-header bg-info text-white">
                <span>Filtrar</span>
            </div>
            <div class="card-body">
                <select class="form-select" id="filtro-cbx">
                    <option value="todos">Todos</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 colmd-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/ver_lo_ingresado.js')}}"></script>
@endsection