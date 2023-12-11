//buscando os dados do formularios
let dadosRelogios = document.getElementById('relogio');

//pegando o evento do formulario
dadosRelogios.addEventListener('submit', (event) =>{
    event.preventDefault();

    let dadosCadastroRelogio = new FormData(dadosRelogios);

    postCadastroRelogio(dadosCadastroRelogio);

})

function postCadastroRelogio(dadosrelogios) {
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


