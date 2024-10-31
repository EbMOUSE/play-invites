function joinOffer(invite_id) {
    $.ajax({
        url: `/invites/${invite_id}/join`,
        type: 'POST',
        success: function(response) {
            $('#invite_list').html(response);
        },
        error: function(error) {
            console.error('Ielūgums netika pievienots', error);
        }
    });
}
