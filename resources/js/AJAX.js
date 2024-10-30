function joinOffer(offerId) {
    $.ajax({
        url: `/offers/${offerId}/join`,
        type: 'POST',
        success: function(response) {
            $('#offers-list').html(response);
        },
        error: function(error) {
            console.error('Piedvajums netika pievienots', error);
        }
    });
}
