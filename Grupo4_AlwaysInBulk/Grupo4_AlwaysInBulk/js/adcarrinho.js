async function adcarrinho(id, nome, preco, count) {
    let formData = new FormData();
    formData.append("id", id);
    formData.append("nome", nome);
    formData.append("preco", preco);
    formData.append( "quantidade",document.getElementById("quantidade-" + count).value);
    let xhr = new XMLHttpRequest();
  
    xhr.open("POST", "forms/adcarrinho.php");
    xhr.send(formData);
    location.reload();
  }
 