$(document).ready(function () {
    var color = localStorage.getItem("color");
    if (color) {
        if (color == "dark") {
            $("body").addClass(color);
            $("input#colorChanger").prop("checked", true);
            $("i#colorChangerMoon").show();
        } else {
            $("i#colorChangerSun").show();
        }
    } else {
        localStorage.setItem("color", "light");
    }
});
function changeColor(el) {
    if (el.is(":checked")) {
        $("body").addClass("dark");
        localStorage.setItem("color", "dark");
        $("i#colorChangerSun").hide();
        $("i#colorChangerMoon").show();
    } else {
        $("body").removeClass("dark");
        localStorage.setItem("color", "light");
        $("i#colorChangerSun").show();
        $("i#colorChangerMoon").hide();
    }
}
