//buscando os dados do formularios
let dadosRelogios = document.getElementById('relogio');

//pegando o evento do formulario
dadosRelogios.addEventListener('submit', (event) =>{
    event.preventDefault();

    let dados = new FormData(dadosRelogio);

    postRelogio(dados);

})

function postCliente(dadosrelogios) {
    fetch('http://localhost/Dashboard-gallant/admin/ajax/cad-relogio.php',{
        method: 'POST',
        body: dadosrelogios
    })
    .then((result) =>{
        document.getElementById("relogio").reset();
        alert("cadastrado com sucesso");
    }).then((result) =>{

    }).catch((err) =>{

    });
}


