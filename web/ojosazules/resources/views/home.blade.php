@extends("layouts.master")
@section("contenido")
    <h1>paguina principal (1)</h1>
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class= "card-header bg-primary text-black">
                    <span>Agregar archivo</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="marca-select" class="form-label">Marca</label>
                        <select class="form-select" id="marca-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anio-txt" class="form-label" >Año de fabricacion</label>
                        <input type="number" class=form-control id="anio-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>

    </div>
    @endsection
    @section("javascript")
        <script src="{{asset('js/home.js')}}"></script>
    @endsection