
//form e button atualizar tarefa

function editar(id, txt_tarefa) {
    //criar um  form de edição
    let form = document.createElement('form');
    form.action = 'index.php?pag=index&acao=atualizar';
    form.method = 'post';
    form.className = 'row';
    //criar um input para entrada de texto
    let inputTarefa = document.createElement('input');
    inputTarefa.type = 'text';
    inputTarefa.name = 'tarefa';
    inputTarefa.className = 'col-9 form-control';
    inputTarefa.value = txt_tarefa;
    //criar um input hidden para guardar o id da tarefa
    let inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id';
    inputId.value = id;
    //button para envio do form 
    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-3 btn btn-info';
    button.innerHTML = 'Atualizar';
    //incluir input no form
    form.appendChild(inputTarefa);
    //incluir inputID no form
    form.appendChild(inputId);
    //incluir button no form
    form.appendChild(button);
    //teste
    //selecionar a div tarefa
    let tarefa = document.getElementById('tarefa_' + id);
    //limpar o texto da tarefa
    tarefa.innerHTML = '';
    //incluir form na página
    tarefa.insertBefore(form, tarefa[0]);
}
function remover(id) {
    location.href = 'index.php?pag=index&acao=remover&id=' + id;
}
function concluir(id) {
    location.href = 'index.php?pag=index&acao=concluir&id=' + id;
}
