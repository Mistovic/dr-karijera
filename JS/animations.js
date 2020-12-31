$(document).ready(function () {

    var $controlers = $('.controler');
    var $controlerWrapper = $('.icon-wrap');
    var $containers = $('.ajaxCont');
    var $heading = $('.ajax-headings');
    var $headingUpper = $('#upper-header');

    $($controlers).click(function (e) {
        var $controler = $(this);
        // Hvatamo podatak koji prosledjujemo kao klasu kasnije
        var $data = $controler.attr('data-class');

        // Dodaje klasu na wraper kontrolera radi stilizacije
        $controlerWrapper.each(function () {
            var $contWraper = $(this);
            if ($contWraper.hasClass($data)) {
                $contWraper.addClass('active');
            } else {
                $contWraper.removeClass('active');
            }
        });

        // Postavlja klasu na header i prikazuje pozadinu
        $headingUpper.attr('class', $data);
        // Treba da prodjemo kroz svaki heading tekst i prikazemo tekst koji se poklapa sa $data
        showHeading($data);
        showContent($data);
        // myScroll();
    });

    // Funkcija za prikaz teksta u headingu sa pozadinskim slikama
    function showHeading($data) {
        $heading.each(function () {
            var $heading = $(this);
            var $headingData = $heading.attr('data-heading');
            if ($data == $headingData) {
                $heading.attr('class', 'show ajax-headings');
            } else {
                $heading.attr('class', 'hide ajax-headings');
            }
        });
    }

    // Funkcija za prikaz sadržaja u MAIN elementu
    function showContent($data) {
        $containers.each(function () {
            var $container = $(this);
            if ($container.attr('id') == $data) {
                $container.attr('class', 'show');
            } else {
                $container.attr('class', 'hide');
            }
        });
    }

    // Prikaz liste sa sadrzajem paketa
    var $btnExpand = $('.btn-expand');

    $($btnExpand).click(function (e) {
        e.preventDefault();
        var btnExpand = e.target;
        btnExpand.classList.toggle('active');
        var $ul = $(btnExpand).siblings();

        $($ul).each(function (i) {
            var $expandable = $(this);
            if ($expandable.hasClass('box-list')) {
                console.log(i, this);
                $expandable.toggleClass('expand');
            }
        });
        // console.log($ul);
    });

    // Paralax na header grafiku
    function isInViewport(node) {
        var rect = node.getBoundingClientRect();
        return (
            (rect.height > 0 || rect.width > 0) &&
            rect.bottom >= 0 &&
            rect.right >= 0 &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.left <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // $(window).scroll(function () {
    //     var scrolled = $(window).scrollTop();
    //     $('#upper-header').each(function (index, element) {
    //         var initY = $(this).offset().top;
    //         var height = $(this).height();
    //         var endY = initY + $(this).height();

    //         // Check if the element is in the viewport.
    //         var visible = isInViewport(this);
    //         if (visible) {
    //             var diff = scrolled - initY;
    //             var ratio = Math.round((diff / height) * 20);
    //             // console.log(scrolled, initY, diff, height);
    //             $(this).css('background-position', 'center ' + parseInt(ratio) + 'px')
    //         }
    //     });
    // });

});

