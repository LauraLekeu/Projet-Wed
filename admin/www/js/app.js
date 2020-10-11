$(function() {

  $('.delete').click(function() {
    if (!confirm('Êtes vous sûr de vouloir supprimer cette catégorie?')) {
      return false;
    }
  });

  $('.edit').submit(function() {
    if (!confirm('Êtes vous sûr de vouloir modifier cette catégorie?')) {
      return false;
    }
  });

});
