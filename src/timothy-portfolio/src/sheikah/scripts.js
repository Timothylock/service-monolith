$(document).ready(function () {
    $("#login").click(function () {
        if ($("#key1").val() === "253") {
            $("#key1").css("background-color", "#3CBC8D");
        } else {
            $("#key1").css("background-color", "#ff7675");
        }

        if ($("#key2").val().toLowerCase() === "ganon") {
            $("#key2").css("background-color", "#3CBC8D");
        } else {
            $("#key2").css("background-color", "#ff7675");
        }

        if ($("#key3-0").is(":checked") && $("#key3-1").is(":checked") && !$("#key3-2").is(":checked") && !$("#key3-3").is(":checked")) {
            $(".checkbox-group").css("background-color", "green")
        } else {
            $(".checkbox-group").css("background-color", "red")
        }

        if ($("#key4").val().toLowerCase() === "eno") {
            $("#key4").css("background-color", "#3CBC8D");
        } else {
            $("#key4").css("background-color", "#ff7675");
        }

        if (($("#key1").val() === "253") && ($("#key2").val().toLowerCase() === "ganon") && ($("#key3-0").is(":checked") && $("#key3-1").is(":checked") && !$("#key3-2").is(":checked") && !$("#key3-3").is(":checked")) && ($("#key4").val().toLowerCase() === "eno")) {
            window.location.replace("birthday-master/index.html");
        }
    });
});
