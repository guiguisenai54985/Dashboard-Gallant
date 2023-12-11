// buscando os dados do formulario
let updateJoias = document.getElementById('edit_joias');

// pegando o evento de envio do formulario
updateJoias.addEventListener('submit', (event) => {
    event.preventDefault();
    let dados = new FormData(updateJoias);

    postJoias(dados);
})

function postJoias(updateJoia) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-joias.php', {
        method: 'POST',
        body: updateJoia
    })
        .then((result) => {
        location.reload();  
        return result.json();
    })
    .then((result) => {
       
        cadastrarJoias(result);
    
    }
    )  
    .catch((err) => {
        
    });
}

function excluirJoias(event) {
   
    let joiasId = new URLSearchParams();
    joiasId.append('id', event.id);

    fetch('http://localhost/Dashboard-Gallant/admin/ajax/excluir-joias.php', {
      method: 'POST',
      body: joiasId
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