var deleteHandler = function() {
    $('.ocp_delete').click(function(evt) {
        $(this).closest('.ocp_color').remove();
        evt.preventDefault();
    });
};
deleteHandler();

$('.ocp_addcolor').click(function(evt) {
    var template  = '<div class="ocp_color">'
        template += '<input class="ocp_input" name="settings[colors][]" value="Grey" type="text" />'
        template += '<a class="ocp_delete" href="#">[delete]</a>'
        template += '</div>'
    $('.ocp_colors').append(template);
    deleteHandler();
    evt.preventDefault();
});
