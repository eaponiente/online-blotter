require('./bootstrap');

$('#report-form').submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    console.log(formData);

    $.ajax({
        url: '/reports/store',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            console.log(123)
        }
    })
})