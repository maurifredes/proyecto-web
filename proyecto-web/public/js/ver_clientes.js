const iniciarEliminacion = async function(){
    //1. Obtener el id a eliminar
    let id = this.idCliente;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irreversible", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        //2. Eliminar
        if(await eliminarCliente(id)){
            //3. Si la eliminacion fue exitosa, recargar la tabla
            let clientes = await getClientes();
            cargarTabla(clientes);
            Swal.fire("Cliente Eliminado", "Cliente eliminado exitosamente", "info");
        }else{
            //4. Si no fue exitosa, mostrar un mensaje de error
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    }
};

const cargarTabla = (clientes)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-cliente");
    tbody.innerHTML = "";
    //2. Recorrer todos los clientes
    for(let i=0;i<clientes.length;++i){
        //3. Por cada cliente generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo del cliente, un th
        let thNombre = document.createElement("th");
        thNombre.innerText = clientes[i].nombre;
        let thApellido = document.createElement("th");
        thApellido.innerText = clientes[i].apellido;
        let thRut = document.createElement("th");
        thRut.innerText = clientes[i].rut;
        let thFono = document.createElement("th");
        thFono.innerText = clientes[i].telefono;
        let thRegion = document.createElement("th");
        thRegion.innerText = clientes[i].region;
        let thDireccion = document.createElement("th");
        thDireccion.innerText = clientes[i].direccion;
        let thCorreo = document.createElement("th");
        thCorreo.innerText = clientes[i].correo;
        let thAcciones = document.createElement("th");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idCliente = clientes[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        thAcciones.appendChild(botonEliminar);
        //5. Agregar los td al tr
        tr.appendChild(thNombre);
        tr.appendChild(thApellido);
        tr.appendChild(thRut);
        tr.appendChild(thFono);
        tr.appendChild(thRegion);
        tr.appendChild(thDireccion);
        tr.appendChild(thCorreo);
        tr.appendChild(thAcciones);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    //Aqui voy a cargar la tabla de clientes, porque si entra aqui
    //lo que haga en esta parte estoy seguro que se esta ejecutando
    //cuando la pagina esta totalmente cargada
    let clientes = await getClientes();
    cargarTabla(clientes);
});
