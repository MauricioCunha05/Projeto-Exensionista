modal = document.getElementById('descModal');

modal.addEventListener('show.bs.modal', event => {
  btn = event.relatedTarget;
  modal.querySelector('.modal-body').textContent =
    btn.getAttribute('data-bs-descricao');
  modal.querySelector('.modal-title').textContent =
    btn.getAttribute('data-bs-titulo');
});
