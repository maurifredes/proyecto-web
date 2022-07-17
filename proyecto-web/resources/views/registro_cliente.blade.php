@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-8 col-lg-5 mx-auto">
            <div class="card">
                <div class="barraformulario">
                    <span >Ingresar Cliente</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="apellido-txt" class="form-label">Apellido</label>
                        <input type="text" id="apellido-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="rut-txt" class="form-label">RUT</label>
                        <input type="text" class="inputs form-control" name="cliente" id="cliente"
                        maxlength="12" onkeyup="formatCliente(this)">
                    </div>
                    <div class="mb-3">
                        <label for="fono-txt" class="form-label">Telefono</label>
                        <input type="text" id="fonos-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="region-select" class="form-label">Región</label>
                        <select class="form-select" id="region-select">

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Dirección</label>
                        <input type="text" id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="correo-txt" class="form-label">Correo</label>
                        <input type="text" id="correo-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" type="button" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Esto define el contenido de la sección javascript del master -->
@section("javascript")
    <script src="{{asset('js/servicios/clientesService.js')}}"></script>
    <script src="{{asset('js/registro_cliente.js')}}"></script>
@endsection
