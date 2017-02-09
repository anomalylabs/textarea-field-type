$(function () {

    // Initialize text suggestions
    $('textarea[data-provides="anomaly.field_type.textarea"]').each(function () {

        var wrapper = $(this).closest('div');
        var counter = wrapper.find('.counter');

        $(this).characterCounter({
            limit: $(this).data('max'),
            counterSelector: $(this).closest('div').find('.count'),
            onExceed: function () {
                counter.addClass('text-danger');
            },
            onDeceed: function () {
                counter.removeClass('text-danger');
            }
        });
    });
});
