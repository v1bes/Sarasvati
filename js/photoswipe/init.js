var openPhotoSwipe = function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [
        {
            src: 'img/gallery/watt1.jpg',
            w: 525,
            h: 366
        },
        {
            src: 'img/gallery/watt2.jpg',
            w: 1252,
            h: 1252
        },
        {
            src: 'img/gallery/watt3.jpg',
            w: 703,
            h: 466
        },
        {
            src: 'img/gallery/watt4.jpg',
            w: 800,
            h: 800
        },
        {
            src: 'img/gallery/watt5.jpg',
            w: 524,
            h: 366
        },
        {
            src: 'img/gallery/watt6.jpg',
            w: 480,
            h: 360
        }
    ];

    // define options (if needed)
    var options = {
             // history & focus options are disabled on CodePen
        history: false,
        focus: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0

    };

    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};

// openPhotoSwipe();
document.getElementById('psbtn').onclick = openPhotoSwipe;
