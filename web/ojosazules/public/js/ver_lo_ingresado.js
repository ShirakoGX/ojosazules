const iniciarEliminacion = async function() {
    let id = this.idConsola;
    let resp = await Swal.fire({title:"Estas seguro?", text:"Esta operacion es irreversible", icon:"warning", showCancelButton:true})
    if(resp.isConfirmed){
        if (await eliminarConsola(id)){
            let consolas = await getConsolas();
            cargarTabla(consolas);
            Swal.fire("Lectura Eliminada","Lectura eliminada exitodamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "warning");
        }
    }else{
        Swal.fire("Cancelado","Cancelado a peticion del usuario", "warning")
    }
}; 

const cargarTabla = (consolas)=>{
    let tbody = document.querySelector("#tbody-consola");
    tbody.innerHTML = "";
    for(let i=0; i<consolas.length;++i){
    let tr = document.createElement("tr");

    let tdFecha = document.createElement("td");
    tdFecha.innerText = consolas[i].fecha;

    let tdHora = document.createElement("td");
    tdHora.innerText = consolas[i].hora;

    let tdTipo = document.createElement("td");
    tdTipo.innerText = consolas[i].tipo;

    let tdValor = document.createElement("td");
    tdValor.innerText = consolas[i].valor;

    let tdMedida = document.createElement("td");
    tdMedida.innerText = consolas[i].medida;

    let tdAcciones = document.createElement("td");
    let botonEliminar = document.createElement("button");
    botonEliminar.innerText="Eliminar";
    botonEliminar.classList.add("btn", "btn-danger");
    botonEliminar.idConsola = consolas[i].id;
    botonEliminar.addEventListener("click", iniciarEliminacion);
    tdAcciones.appendChild(botonEliminar);

    tr.appendChild(tdFecha);
    tr.appendChild(tdHora);
    tr.appendChild(tdTipo);
    tr.appendChild(tdValor);
    tr.appendChild(tdMedida);

    tbody.appendChild(tr);
    }
};  

document.addEventListener("DOMContentLoaded", async ()=>{

    let consolas = await getConsolas();
    cargarTabla(consolas);
});