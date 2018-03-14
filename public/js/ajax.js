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
            url: '/ajax/getformcom',
            data: {   id: id
            },
            success: function (data) {
                $('.modal-content').html(data);
            }
        });
    });

    $('.js_edit_task').click(function () {
        var id = $(this).val();
        $.ajax({
            type: "Post",
            url: '/ajax/getformtask',
            data: {   id: id
            },
            success: function (data) {
                $('.modal-content').html(data);
            }
        });
    });

    $('.js_create_task').click(function () {
        $.ajax({
            type: "Post",
            url: '/ajax/getformtask',
            success: function (data) {
                $('.modal-content').html(data);
            }
        });
    });


})