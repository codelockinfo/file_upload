$(document).ready(function () {
    $(document).on('click', '.down', function (e) {
        e.preventDefault();
        var value = $("#labelNumber").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#labelNumber").val(value);
    });
    $(document).on('click', '.up', function (e) {
        e.preventDefault();
        var value = $("#labelNumber").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
        }
        $("#labelNumber").val(value);
    });
    $(document).on('click', '.bottom', function (e) {
        e.preventDefault();
        var value = $("#button_padding_top").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#button_padding_top").val(value);
    });
    $(document).on('click', '.top', function (e) {
        e.preventDefault();
        var value = $("#button_padding_top").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
        }
        $("#button_padding_top").val(value);
    });
    $(document).on('click', '.left', function (e) {
        e.preventDefault();
        var value = $("#button_padding_left").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#button_padding_left").val(value);
    });
    $(document).on('click', '.right', function (e) {
        e.preventDefault();
        var value = $("#button_padding_left").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
        }
        $("#button_padding_left").val(value);
    });
    $(document).on('click', '.lower', function (e) {
        e.preventDefault();
        var value = $("#button_font_size").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#button_font_size").val(value);
    });
    $(document).on('click', '.upper', function (e) {
        e.preventDefault();
        var value = $("#button_font_size").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
        }
        $("#button_font_size").val(value);
    });
});