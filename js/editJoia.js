
// buscando os dados do formulario
let updateCliente = document.getElementById('edit_joia');

// pegando o evento de envio do formulario
updateCliente.addEventListener('submit', (event) => {
    event.preventDefault();
    let dados = new FormData(updateJoia);

    postJoia(dados);
})

function postCliente(updateJoia) {
    fetch('http://localhost/Dashboard-Gallant/admin/ajax/edit-joias.php', {
        method: 'POST',
        body: updateJoia
    })
        .then((result) => {
            //console.log(result);
        location.reload();  
        return result.json();
    })
    .then((result) => {
       
        cadastrarJoia(result);
    
    }
    )  
    .catch((err) => {
        
    });
}

function excluirJoia(event) {
   
    let joiasId = new URLSearchParams();
    joiasId.append('id', event.id);

    fetch('http://localhost/Dashboard-Gallant/admin/ajax/excluir-joias.php', {
      method: 'POST',
      body: joiasId
  })
      .then((result) => {
          alert("Ecluido com sucesso!");
          location.reload();  
      
  })
  .then((result) => {
    
  }
  )  
  .catch((err) => {
      
  });
  
}