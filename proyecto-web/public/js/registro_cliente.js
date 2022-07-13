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

cargarRegiones();
