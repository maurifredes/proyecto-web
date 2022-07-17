//Este archivo va a tener las operaciones tipicas para comunicarse con el controlador
//Por cada funcion que yo cree en el controlador, yo debo crear una acá

const getClientes = async ()=>{
    let resp = await axios.get("api/clientes/get");
    return resp.data;
};

const crearCliente = async(cliente)=>{ //arrow functions
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/clientes/post", cliente, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarCliente = async(id)=>{
    try{
        let resp = await axios.post("api/clientes/delete", {id}, {
            headers:{
                'Content-Type': 'application/json'
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};
