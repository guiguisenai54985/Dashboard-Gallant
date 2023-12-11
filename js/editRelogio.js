// buscando os dados do formulario
let updateRelogio = document.getElementById('edit_relogio');

// pegando o evento de envio do formulario
updateRelogio.addEventListener('submit', (event) => {
    event.preventDefault();
    let dadosAtualizaRelogio = new FormData(updateRelogio);

    postEditRelogio(dadosAtualizaRelogio);
})

function postEditRelogio(updateRelogioPost) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-relogio.php', {
        method: 'POST',
        body: updateRelogioPost
    })
        .then((result) => {
        alert("Dados atualizados com sucesso");    
        location.reload();  
    
    })
    .then((result) => {
       
    
    }
    )  
    .catch((err) => {
        
    });
}

function excluirRelogio(event) {
   
    let relogioId = new URLSearchParams();
    relogioId.append('id', event.id);

      fetch('http://localhost/Dashboard-Gallant/admin/ajax/excluir-relogio.php', {
        method: 'POST',
        body: relogioId
    })
        .then((result) => {
            alert("Excluido com sucesso!");
            location.reload();  
    })
    .then((result) => {
    
    
    }
    )  
    .catch((err) => {
        
    });
    

}