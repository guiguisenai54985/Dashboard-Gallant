
// buscando os dados do formulario
let updateRelogio = document.getElementById('edit_relogio');

// pegando o evento de envio do formulario
updateRelogio.addEventListener('submit', (event) => {
    event.preventDefault();
    let dados = new FormData(updateRelogio);

    postRelogio(dados);
})

function postCliente(updateRelogio) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-relogio.php', {
        method: 'POST',
        body: updateRelogio
    })
        .then((result) => {
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

function excluirRelogio(event) {
   


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