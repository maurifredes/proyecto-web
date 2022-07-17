const cargarRegiones = async()=>{
    //1. Ir a buscar las regiones a la api
    let resultado = await axios.get("api/regiones/get");
    let regiones = resultado.data;
    //2. Cargar las regiones dentro del select
    let regionSelect = document.querySelector("#region-select");
    regiones.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        regionSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarRegiones();
});

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let apellido = document.querySelector("#apellido-txt").value;
    let rut = document.querySelector("#rut-txt").value;
    let fono = document.querySelector("#fono-txt").value;
    let region = document.querySelector("#region-select").value;
    let direccion= document.querySelector("#direccion-txt").value;
    let correo = document.querySelector("#correo-txt").value;
    let cliente = {};
    cliente.nombre = nombre;
    cliente.apellido = apellido;
    cliente.rut = rut;
    cliente.fono = fono;
    cliente.region = region;
    cliente.direccion = direccion;
    cliente.correo = correo;
    //Solo esta linea hace:
    //1. Va al controlador, le pasa los datos
    //2. El controlador crea el modelo
    //3. El modelo ingresa en la base de datos
    let res = await crearCliente(cliente);
    await Swal.fire("Cliente Registrado", "Cliente registrado exitosamente", "info");
    //La linea que viene despues del Swal.fire se va a ejecutar solo cuando la persona presione OK
    //Aqui va a redirigir a otra pagina
    window.location.href = "ver_clientes";
});



