
// buscando os dados do formulario
let updateCliente = document.getElementById('edit_relogio');

// pegando o evento de envio do formulario
updateCliente.addEventListener('submit', (event) => {
    event.preventDefault();
    let dados = new FormData(updateCliente);

    postRelogio(dados);
})

function postCliente(updateRelogio) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-relogio.php', {
        method: 'POST',
        body: updateRelogio
    })
        .then((result) => {
            //console.log(result);
        location.reload();  
        return result.json();
    })
    .then((result) => {
       
        cadastrarRelogio(result);
    
    }
    )  
    .catch((err) => {
        
    });
}

function excluirCliente(event) {
   


      fetch('http://localhost/Dashboard-Gallant/admin/ajax/excluir-relogio.php', {
        method: 'POST',
        body: event.id
    })
        .then((result) => {
        
    })
    .then((result) => {
    
    
    }
    )  
    .catch((err) => {
        
    });
    

}