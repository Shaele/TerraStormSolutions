$(document).ready(function () {
    $("submit").click(function () {
        var name = $("#fname").val();
        var email = $("#femail").val();
        var message = $("#fmsg").val();

        $("#returnmessage").empty();

        if (name == '' || email == '') {
            alert("Please fill the required fields!");
        } else {
            $.post("contact_form.php"), {
                name1: name,
                email1: email,
                message1: message
            }, function (data) {
                $("#returnmessage").append(data);
                if (data == "Your query has been received, We will contact you soon.") {
                    $("form")[0].RESET();
            }
});
}
});
});