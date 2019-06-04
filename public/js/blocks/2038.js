$(document).ready(function () {
    var swiper = new Swiper('#swiper-container-2038', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 1,
        autoPlay: 2500,
        effect: 'fade',
        paginationBulletRender: function (swiper, index, className) {
            //<![CDATA[
            return '<span class="' + className + '">' + (index + 1) + '</span>';
            //]]>
        }
    });
});