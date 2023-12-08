//buscando os dados do formularios
let dadosJoias = document.getElementById('joias');

//pegando o evento do formulario
dadosJoias.addEventListener('submit', (event) =>{
    event.preventDefault();
    let dados = new FormData(dadosJoias);
    postJoias(dados);
})

function postCliente(dadosJoias) {
    fetch('http://localhost/Dashboard-gallant/admin/ajax/cad-joias.php',{
        method: 'POST',
        body: JSON.stringify(dadosJoias)
    })
    .then((result) =>{
        document.getElementById("joia").reset();
        alert("cadastrado com sucesso");
    }).then((result) =>{

    }).catch((err) =>{

    });
}