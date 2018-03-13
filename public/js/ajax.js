$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.js_add_comment').click(function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            type: "Post",
            url: '/ajax/getidtask',
            data: {   id: id
            },
            success: function (data) {
                $('.js_id_task_field').html(data);
            }
        });
    });
})