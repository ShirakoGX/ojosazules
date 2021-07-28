
const cargarTipos = async()=>{
    let resultado = await axios.get("api/tipos/get");
    let tipos = resultado.data;

    let tipoSelect = document.querySelector("#tipo-select");
    tipos.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        tipoSelect.appendChild(option);
    });
};

const cargarMedidas = async()=>{
    let resultado = await axios.get("api/medidas/get");
    let medidas = resultado.data;

    let medidaSelect = document.querySelector("#medida-select");
    medida.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = t;
        medidaSelect.appendChild(option);
    });
};

    document.addEventListener("DOMContentLoaded",()=>{
    cargarTipos();
    });
document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let  = document.querySelector("#fecha-txt").value;
    let  = document.querySelector("#hora-txt").value;
    let  = document.querySelector("#tipo-selec").value;
    let  = document.querySelector("#valor-txt").value;
    let  = document.querySelector("#medida-selec").value;
    let consola = {};
    consola.fecha = fecha;
    consola.hora = hora;
    consola.retipo = retipo;
    consola.valor = valor;
    consola.medida = medida;

    //TODO

    let res= await crearConsola(consola);
    await Swal.fire("Lectura Registrada", "Lectura Registrada con Exito!", "success");
    //(-> me dirige al aprepar el swalfire a la ventana de lo ingresado)
    //window.location.href = "ver_lo_ingresado";
});