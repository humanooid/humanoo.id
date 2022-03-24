var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

$(document).ready(function () {
    var color = localStorage.getItem("color");
    if (color) {
        if (color == "dark") {
            $("body").addClass(color);
            $("input#colorChanger").prop("checked", true);
            $("i#colorChangerMoon").show();
            $("img#logoLight").show();
            $("img#logoLightDesktop").show();
            $("div#preloader").removeClass("light");
            $("section#home").removeClass("light");
            $("header.mobile-header-1").removeClass("light");
            $("header.desktop-header-1").removeClass("light");
            $(".footer .form-check.form-switch").prop("title", "Want it brighter? Click here!");
        } else {
            $("i#colorChangerSun").show();
            $("img#logoDark").show();
            $("img#logoDarkDesktop").show();
            $(".footer .form-check.form-switch").prop("title", "Dazzled? Smash here!");
        }
    } else {
        localStorage.setItem("color", "light");
    }
});
function changeColor(el) {
    if (el.is(":checked")) {
        localStorage.setItem("color", "dark");
        $("body").addClass("dark");
        $("i#colorChangerSun").hide();
        $("i#colorChangerMoon").show();
        $("div#preloader").removeClass("light");
        $("header.mobile-header-1").removeClass("light");
        $("header.desktop-header-1").removeClass("light");
        $("img#logoLight").show();
        $("img#logoDark").hide();
        $("img#logoLightDesktop").show();
        $("img#logoDarkDesktop").hide();
        $("section#home").removeClass("light");
        $(".footer .form-check.form-switch").prop("title", "Want it brighter? Click here!");
    } else {
        localStorage.setItem("color", "light");
        $("body").removeClass("dark");
        $("i#colorChangerSun").show();
        $("i#colorChangerMoon").hide();
        $("div#preloader").addClass("light");
        $("header.mobile-header-1").addClass("light");
        $("header.desktop-header-1").addClass("light");
        $("img#logoLight").hide();
        $("img#logoDark").show();
        $("img#logoLightDesktop").hide();
        $("img#logoDarkDesktop").show();
        $("section#home").addClass("light");
        $(".footer .form-check.form-switch").prop("title", "Dazzled? Smash here!");
    }
}
