function dmyToYmd(dmy) {
  const match = dmy.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
  if (!match) return null;

  const [, d, m, y] = match;
  return `${y}-${m.padStart(2, '0')}-${d.padStart(2, '0')}`;
}


descModal = document.getElementById('descModal');
addModal = document.getElementById('addModal');
editModal = document.getElementById('editModal');
addForm = addModal.querySelector('#addform');
editForm = addModal.querySelector('#editform');


descModal.addEventListener('show.bs.modal', event => {
    row = event.relatedTarget.closest('tr');

    descModal.querySelector('.modal-body').textContent =
        row.querySelector('.desc-value').textContent
    descModal.querySelector('.modal-title').textContent =
        row.querySelector('.titulo-value').textContent
});

editModal.addEventListener('show.bs.modal', event => {
    row = event.relatedTarget.closest('tr');

    id = row.dataset.id
    data = row.querySelector('.data-value').textContent
    data = dmyToYmd(data)
    titulo = row.querySelector('.titulo-value').textContent
    desc = row.querySelector('.desc-value').textContent

    editModal.querySelector('[name="id"]').value = id
    editModal.querySelector('[name="data"]').value = data
    editModal.querySelector('[name="titulo"]').value = titulo
    editModal.querySelector('[name="descricao"]').value = desc

});

//resets

addModal.addEventListener('hidden.bs.modal', () => {
    addForm.reset()
});

editModal.addEventListener('hidden.bs.modal', () => {
    editForm.reset()
});