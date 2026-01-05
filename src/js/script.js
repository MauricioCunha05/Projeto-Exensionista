descModal = document.getElementById('descModal');
addModal = document.getElementById('addModal');
editModal = document.getElementById('editModal');


descModal.addEventListener('show.bs.modal', event => {
  btn = event.relatedTarget;
  console.log(event)
  descModal.querySelector('.modal-body').textContent =
    btn.getAttribute('data-bs-descricao');
  descModal.querySelector('.modal-title').textContent =
    btn.getAttribute('data-bs-titulo');
});

addModal.addEventListener('hidden.bs.modal', event => {
    event.target.querySelector('form').reset()
});

/* editModal.addEventListener('show.bs.modal', event => {
  btn = event.relatedTarget;
  modal.querySelector(input[name='login']).textContent =
    btn.getAttribute('data-bs-descricao');
}); */