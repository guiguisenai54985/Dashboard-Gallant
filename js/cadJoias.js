//buscando os dados do formularios
let dadosJoias = document.getElementById('joias');

//pegando o evento do formulario
dadosJoias.addEventListener('submit', (event) =>{
    event.preventDefault();
    
    let dadosCadastroJoias = new FormData(dadosJoias); 

    postCadJoias(dadosCadastroJoias);
})

function postCdaJoias(dadosJoiasPost) {
    fetch('http://localhost/Dashboard-gallant/admin/ajax/cad-joias.php',{
        method: 'POST',
        body: dadosJoiasPost
    })
    .then((result) =>{
        document.getElementById("joias").reset();
        alert("cadastrado com sucesso");
    }).then((result) =>{

    }).catch((err) =>{

    });
}