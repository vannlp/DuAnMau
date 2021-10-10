$(document).ready(function () {
    $('#formDK').validate({
        rules: {
            "ma_kh": {
                required: true,
                minlength: 10
            },
            "pass": {
                required: true,
                minlength: 8
            },
            "a-pass": {
                required: true,
                equalTo: "#pass"
            },
            "email": {
                required: true,
                email: true,
                minlength: 10
            }
        },
        messages: {
            "ma_kh": {
                required: "Bắt buộc nhập tên đăng nhập",
                minlength: "Tên đăng nhập tối thiểu 10 ký tự"
            },
            "pass": {
                required: "Bắt buộc nhập password",
                minlength: "Mật khẩu tối thiểu 8 ký tự"
            },
            "a-pass": {
                required: "Bắt buộc nhập lại password",
                equalTo: "Nhập lại mật khẩu không đúng"
            },
            'email': {
                required: "Bắt buộc nhập email",
                email: "email nhập ko đúng định dạng",
                minlength: "email phải nhập tối thiểu 10 ký tự"
            }
        }
    });
});