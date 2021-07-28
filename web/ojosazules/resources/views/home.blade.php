@extends("layouts.master")
@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class= "card-header bg-primary text-black">
                    <span>Agregar Lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="time" id="hora-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo-select" class="form-label">Seleccionar Medidor</label>
                        <select class="form-select" id="tipo-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label" >Direccion</label>
                        <input type="text" class=form-control id="direccion-txt">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">valor</label>
                        <input type="number" id="valor-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medida-select" class="form-label">Seleccionar Unidad de Medida</label>
                        <select class="form-select" id="medida-select">
                        </select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>

    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection