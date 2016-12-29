$( document ).ready(function() {
    $('#datetimepicker').datetimepicker({
        locale: 'vi',
        format: 'DD/MM/YYYY'
    });

    $("#regist-btn").off('click').on('click',
        function() {
            var data = {};
            $.each($('#registerForm').serializeArray(), function(i, field) {
                data[field.name] = field.value;
            });

            $.ajaxSend("../admin/worker/insert", data, function(result) {
                if (result.error) {
                    if (result.data.model != null) {
                        if (result.data.model.type == 'application-error') {
                            $('#applicationError').text(result.data.model.error);
                            $('#applicationError').show();
                        }
                    } else {
                        $('label.error').text('');
                        $('#registerForm input').addClass('valid');
                        $.each(result.data, function(key, value) {
                            $('input[name=' + key + ']')
                                .removeClass('valid').addClass(
                                'error');
                            $('#' + key + '-error').text(value).show();
                        });
                    }
                } else {
                    $.transitionTo('worker', null);
                }
            }, function() {
                alert('có lỗi xảy ra.')
            });
    })
})