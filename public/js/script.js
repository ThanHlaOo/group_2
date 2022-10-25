$(document).ready(function () {
    $('#user').click(function () {
        $('#user ul').toggleClass('show');
        if ($('#user .down').hasClass('fa-solid fa-angle-up')) {
            $('#user .down').removeClass('fa-solid fa-angle-up');
            $('#user .down').addClass('fa-solid fa-angle-down');
        } else {
            $('#user .down').removeClass('fa-solid fa-angle-down');
            $('#user .down').addClass('fa-solid fa-angle-up');
        }
    })
});
$(function () {
    var id = window.location.pathname.split("/")[2];
    $(".menu > a").removeClass("nav-active");
    if (id == "languages") {
        $("#language > a").addClass("nav-active");
    } else if (id == "courses") {
        $("#course > a").addClass("nav-active");
    } else if (id == "blogs") {
        $("#blog > a").addClass("nav-active");
    }
});

