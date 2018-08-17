$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    }
                    ;
                });
            }
        }
    });

$(function () {
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function () {
        console.log('Requested for showing');
    })
        .on('shown.simplelightbox', function () {
            console.log('Shown');
        })
        .on('close.simplelightbox', function () {
            console.log('Requested for closing');
        })
        .on('closed.simplelightbox', function () {
            console.log('Closed');
        })
        .on('change.simplelightbox', function () {
            console.log('Requested for change');
        })
        .on('next.simplelightbox', function () {
            console.log('Requested for next');
        })
        .on('prev.simplelightbox', function () {
            console.log('Requested for prev');
        })
        .on('nextImageLoaded.simplelightbox', function () {
            console.log('Next image loaded');
        })
        .on('prevImageLoaded.simplelightbox', function () {
            console.log('Prev image loaded');
        })
        .on('changed.simplelightbox', function () {
            console.log('Image changed');
        })
        .on('nextDone.simplelightbox', function () {
            console.log('Image changed to next');
        })
        .on('prevDone.simplelightbox', function () {
            console.log('Image changed to prev');
        })
        .on('error.simplelightbox', function (e) {
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
});

jQuery(function($){
    var roles = ['Hush kelibsiz', 'Bienvenue', 'Willkommen', 'Bienvenido', 'स्वागत हे', 'Welcome'];
    //used to determine which is the next roles to be displayed
    var counter = 0;
    var $role = $('#about-link');
    //repeat the passed function at the specified interval - it is in milliseconds
    setInterval(function(){
        //display the role and increment the counter to point to next role
        $role.text(roles[counter++]);
        //if it is the last role in the array point back to the first item
        if(counter >= roles.length){
            counter = 0;
        }
    }, 800)
});