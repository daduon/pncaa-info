$(document).ready(function () {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#image-preview").attr("src", e.target.result);
                $("#get-image").val(e.target.result);
                $("#image-preview").hide();
                $("#image-preview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    $("#banner_image").change(function () {
        readURL(this);
    });

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#form-about").submit(function (e) {
        event.preventDefault();
        var id = $("#id").val();
        var url = `http://127.0.0.1:8000/admin/update-about/${id}`;
        var banner_title = $("#banner_title").val();
        var banner_sub_title = $("#banner_sub_title").val();
        var title = $("#title").val();
        var sub_title = $("#sub_title").val();
        var des = $("#description").val();
        var banner_image = $("#get-image").val();

        var data = {
            banner_title: banner_title,
            banner_sub_title: banner_sub_title,
            title: title,
            sub_title: sub_title,
            description: des,
            banner_image:banner_image
        }
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                if(data !=null){
                    $("#notification");
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    });
});