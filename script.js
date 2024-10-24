document.getElementById('itemForm').addEventListener('submit', function(event) {
    // Você pode adicionar validações ou exibir mensagens antes do envio
    const image = document.getElementById('image').value;
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const price = document.getElementById('price').value;

    if (!image || !name || !description || !price) {
        alert('Preencha todos os campos!');
        event.preventDefault(); // Impede o envio do formulário
    }
});
