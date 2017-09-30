$(document).ready(function () {
    $('.carousel').carousel({
        padding: 200,
        fullWidth: true
    });
    setTimeout(autoplay, 2000);;
});
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3000);
}

