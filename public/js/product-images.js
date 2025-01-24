$(document).ready(function() {
    $('.delete-image').click(function() {
        const imageId = $(this).data('image-id');
        const imageCard = $(`#image-${imageId}`);

        if (confirm('Вы уверены, что хотите удалить это изображение?')) {
            $.ajax({
                url: `/products/images/${imageId}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    imageCard.remove();
                    alert('Изображение успешно удалено');
                },
                error: function(xhr, status, error) {
                    alert('Произошла ошибка при удалении изображения');
                }
            });
        }
    });
});
