@extends("layouts.master")
@section("contenido")
    <div class="row mt-5">
        <div class="col-12 colmd-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medidor</td>
                        <td>Valor</td>
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