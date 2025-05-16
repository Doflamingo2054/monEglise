// Gestion de l'ajout de commentaires (délégation d'événements)
document.addEventListener('click', async (e) => {
  if (e.target.matches('.btn-add-comment')) {
    const btnAdd = e.target;
    const post = btnAdd.closest('.post');
    const postId = post.dataset.id;
    const type = post.dataset.type;
    const list = post.querySelector(`#comments-${postId}`);
    const textarea = post.querySelector('.new-comment');

    const content = textarea.value.trim();
    if (!content) return;

    const payload = { content };
    if (type === 'prayer') payload.prayer_id = postId;
    else if (type === 'testimony') payload.testimony_id = postId;

    const res = await fetch('/comments', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify(payload)
    });

    if (!res.ok) {
      alert("Erreur lors de l'envoi du commentaire.");
      return;
    }

    const comment = await res.json();

    if (list.querySelector(`[data-id="${comment.id}"]`)) return;

    const div = document.createElement('div');
    div.className = 'comment flex justify-between items-start py-2';
    div.dataset.id = comment.id;
    div.innerHTML = `
      <div><strong>${comment.user.name}</strong> : ${comment.content}</div>
      ${(comment.user_id === window.AUTH_ID || window.AUTH_ROLE === 'admin')
        ? `<button class="btn-delete-comment text-red-500" data-id="${comment.id}">×</button>`
        : ''}
    `;
    list.append(div); // Ajouter en haut plutôt qu'en bas
    textarea.value = '';
  }
});

// Gestion de la suppression (délégation d'événements)
document.addEventListener('click', async (e) => {
  if (e.target.matches('.btn-delete-comment')) {
    const cid = e.target.dataset.id;
    if (!confirm("Supprimer ce commentaire ?")) return;

    const res = await fetch(`/comments/${cid}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
      }
    });

    if (res.ok) {
      e.target.closest('.comment').remove();
    } else {
      alert("Suppression impossible.");
    }
  }
});

