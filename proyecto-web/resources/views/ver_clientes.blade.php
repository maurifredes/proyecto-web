@extends("layouts.master")

@section("contenido")
    <div class="row mt-5 d-flex justify-content-center ">
        <div class="col-12 col-md-12 col-lg-6 espacio-tabla">
            <table class="table table-hover tabla-cliente ">
                <thead>
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">RUT</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">REGION</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">CORREO</th>
                  </tr>
                </thead>
                <tbody>
              </tbody>
              </table>

        </div>
    </div>
@endsection
