require('./bootstrap');

$('#report-form').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: '/reports/store',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $('.control-number').html(response.data.control_no)
            $('.police-station').html(response.data.station)
            $('#bs-example-modal-md').modal('show')

            $('.is-invalid').removeClass('is-invalid');
            $('.form-first_name').val('');
            $('.form-others').val('');
            $('.form-middle_name').val('');
            $('.form-last_name').val('');
            $('.form-email').val('');
            $('.form-mobile').val('');
            $('.form-suffix').val('');
            $('.form-permanent_address').val('');
            $('.form-present_address').val('');
            $('.form-citizenship').val('');
            $('.form-gender').val('');
            $('.form-what').val('');
            $('.form-who').val('');
            $('.form-where').val('');
            $('.form-when').val('');
            $('.form-how').val('');
            $('.form-synopsis').val('');
            $('.form-date_of_birth').val('');
            $('.form-filename').val('');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            if(jqXHR.status === 422) {
                $('.is-invalid').removeClass('is-invalid');
                var messages = jqXHR.responseJSON.errors;
                $.each(messages, function(key, val) {
                    if(key == 'others') {

                    }
                    var element = $('.form-' + key);
                    element.addClass('is-invalid');
                    element.parent().find('.invalid-feedback').html(val[0])
                })
                $("html, body").animate({ scrollTop: 0 }, "slow");
            }
        }
    })
})

$('#search-form').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: '/search',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            $('.search-notification')
                .removeClass('hide')
                .addClass('hide');

           location.href = window.appUrl + '/view-report?code=' + response.data.control_no
        },
        error: function(jqXHR, textStatus, errorThrown) {
            if(jqXHR.status === 404) {
                $('.search-notification').removeClass('hide')
            }
        }
    })
})

$('#report_type').change(function() {
    var self = $(this);
    console.log(self.val())

    if(self.val() === 'others') {
        $('#others')
            .removeClass('hide');
    } else {
        $('#others')
            .removeClass('hide')
            .addClass('hide');
    }
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.admin-file').change(function(){
    var self = $(this);
    //on change event
    var formdata = new FormData();
    if($(this).prop('files').length > 0)
    {
        file =$(this).prop('files')[0];
        formdata.append("file", file);

        var reportUuid = $('#show-report-uuid').val();

        $.ajax({
            url: '/admin/reports/' + reportUuid + '/upload/user',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                self.val('');
                $('.user-uploaded-signature').attr('src', response.data.path).show();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if(jqXHR.status === 422) {
                    $('.admin-notification').removeClass('hide').addClass('hide')
                    var messages = jqXHR.responseJSON.errors;
                    $.each(messages, function(key, val) {
                        $('.admin-notification').removeClass('hide').html(val[0])
                    })
                }
            }
        })
    }
});

$('.commander-file').change(function(){
    var self = $(this);
    //on change event
    var formdata = new FormData();
    if($(this).prop('files').length > 0)
    {
        file =$(this).prop('files')[0];
        formdata.append("file", file);

        var reportUuid = $('#show-report-uuid').val();

        $.ajax({
            url: '/admin/reports/' + reportUuid + '/upload/commander',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                self.val('');
                $('.commander-uploaded-signature').attr('src', response.data.path).show();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if(jqXHR.status === 422) {
                    $('.commander-notification').removeClass('hide').addClass('hide')
                    var messages = jqXHR.responseJSON.errors;
                    $.each(messages, function(key, val) {
                        $('.commander-notification').removeClass('hide').html(val[0])
                    })
                }
            }
        })
    }
});