function dmyToYmd(dmy) {
  const match = dmy.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
  if (!match) return null;

  const [, d, m, y] = match;
  return `${y}-${m.padStart(2, '0')}-${d.padStart(2, '0')}`;
}





// DESC
descModal = document.getElementById('descModal');

descModal.addEventListener('show.bs.modal', event => {
    row = event.relatedTarget.closest('tr');

    descModal.querySelector('.modal-body').textContent =
        row.querySelector('.desc-value').textContent
    descModal.querySelector('.modal-title').textContent =
        row.querySelector('.titulo-value').textContent
});


// EDIT
const editModal = document.getElementById('editModal');

if (editModal) {
    const editForm = editModal.querySelector('#editform');

    editModal.addEventListener('show.bs.modal', event => {
        const row = event.relatedTarget?.closest('tr');
        if (!row) return;

        const id = row.dataset.id;
        const data = dmyToYmd(row.querySelector('.data-value')?.textContent ?? '');
        const titulo = row.querySelector('.titulo-value')?.textContent ?? '';
        const desc = row.querySelector('.desc-value')?.textContent ?? '';

        editModal.querySelector('[name="id"]').value = id;
        editModal.querySelector('[name="data"]').value = data;
        editModal.querySelector('[name="titulo"]').value = titulo;
        editModal.querySelector('[name="descricao"]').value = desc;
    });

    editModal.addEventListener('hidden.bs.modal', () => {
        editForm.reset();
    });
}




// ADD
const addModal = document.getElementById('addModal');

if (addModal) {
    const addForm = addModal.querySelector('#addform');

    addModal.addEventListener('hidden.bs.modal', () => {
        addForm.reset();
    });
}


