// buscando os dados do formulario
let updateJoia = document.getElementById('edit_joia');

// pegando o evento de envio do formulario
updateJoia.addEventListener('submit', (event) => {
    event.preventDefault();
    let dadosAtualizaJoia = new FormData(updateJoia);

    postEditJoia(dadosAtualizaJoia);
})

function postEditJoia(updateJoiaPost) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-joias.php', {
        method: 'POST',
        body: updateJoiaPost
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

function excluirJoia(event) {
   
    let joiaId = new URLSearchParams();
    joiaId.append('id', event.id);

    fetch('http://localhost/Dashboard-Gallant/admin/ajax/excluir-joias.php', {
      method: 'POST',
      body: joiaId
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