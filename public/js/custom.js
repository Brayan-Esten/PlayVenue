const cards = document.querySelectorAll('.map-card');

cards.forEach( (card) => {
    card.addEventListener('click', (e) => {
        card.children[1].classList.toggle('closed');
    });
});





// badmin

const badmintonWidth = $('#badminton .carousel-inner')[0].scrollWidth;
const badmintonCardWidth = $('#badminton .carousel-item').width();

const badmintonInner = $('#badminton .carousel-inner');
const badmintonNext = $('#badminton .carousel-control-next');
const badmintonPrev = $('#badminton .carousel-control-prev');

let badmintonScrollPos = 0;

badmintonNext.on('click', function () {

    if (badmintonScrollPos < badmintonWidth) {
        badmintonScrollPos += badmintonCardWidth * 2;
        badmintonInner.animate({
            scrollLeft: badmintonScrollPos
        }, 600);
    }

});

badmintonPrev.on('click', function () {

    if (badmintonScrollPos > 0) {
        badmintonScrollPos -= badmintonCardWidth * 2;
        badmintonInner.animate({
            scrollLeft: badmintonScrollPos
        }, 600);
    }

});




// basket

const basketWidth = $('#basket .carousel-inner')[0].scrollWidth;
const basketCardWidth = $('#basket .carousel-item').width();

const basketInner = $('#basket .carousel-inner');
const basketNext = $('#basket .carousel-control-next');
const basketPrev = $('#basket .carousel-control-prev');

let basketScrollPos = 0;

basketNext.on('click', function () {

    if (basketScrollPos < basketWidth) {
        basketScrollPos += basketCardWidth * 2;
        basketInner.animate({
            scrollLeft: basketScrollPos
        }, 600);
    }

});

basketPrev.on('click', function () {

    if (basketScrollPos > 0) {
        basketScrollPos -= basketCardWidth * 2;
        basketInner.animate({
            scrollLeft: basketScrollPos
        }, 600);
    }

});




// voli

const volleyWidth = $('#volley .carousel-inner')[0].scrollWidth;
const volleyCardWidth = $('#volley .carousel-item').width();

const volleyInner = $('#volley .carousel-inner');
const volleyNext = $('#volley .carousel-control-next');
const volleyPrev = $('#volley .carousel-control-prev');

let volleyScrollPos = 0;

volleyNext.on('click', function () {

    if (volleyScrollPos < volleyWidth) {
        volleyScrollPos += volleyCardWidth * 2;
        volleyInner.animate({
            scrollLeft: volleyScrollPos
        }, 600);
    }

});

volleyPrev.on('click', function () {

    if (volleyScrollPos > 0) {
        volleyScrollPos -= volleyCardWidth * 2;
        volleyInner.animate({
            scrollLeft: volleyScrollPos
        }, 600);
    }

});




// renang

const swimWidth = $('#swim .carousel-inner')[0].scrollWidth;
const swimCardWidth = $('#swim .carousel-item').width();

const swimInner = $('#swim .carousel-inner');
const swimNext = $('#swim .carousel-control-next');
const swimPrev = $('#swim .carousel-control-prev');

let swimScrollPos = 0;

swimNext.on('click', function () {

    if (swimScrollPos < swimWidth) {
        swimScrollPos += swimCardWidth * 2;
        swimInner.animate({
            scrollLeft: swimScrollPos
        }, 600);
    }

});

swimPrev.on('click', function () {

    if (swimScrollPos > 0) {
        swimScrollPos -= swimCardWidth * 2;
        swimInner.animate({
            scrollLeft: swimScrollPos
        }, 600);
    }

});





// futsal

const futsalWidth = $('#futsal .carousel-inner')[0].scrollWidth;
const futsalCardWidth = $('#futsal .carousel-item').width();

const futsalInner = $('#futsal .carousel-inner');
const futsalNext = $('#futsal .carousel-control-next');
const futsalPrev = $('#futsal .carousel-control-prev');

let futsalScrollPos = 0;

futsalNext.on('click', function () {

    if (futsalScrollPos < futsalWidth) {
        futsalScrollPos += futsalCardWidth * 2;
        futsalInner.animate({
            scrollLeft: futsalScrollPos
        }, 600);
    }

});

futsalPrev.on('click', function () {

    if (futsalScrollPos > 0) {
        futsalScrollPos -= futsalCardWidth * 2;
        futsalInner.animate({
            scrollLeft: futsalScrollPos
        }, 600);
    }

});






// bowling

const bowlingWidth = $('#bowling .carousel-inner')[0].scrollWidth;
const bowlingCardWidth = $('#bowling .carousel-item').width();

const bowlingInner = $('#bowling .carousel-inner');
const bowlingNext = $('#bowling .carousel-control-next');
const bowlingPrev = $('#bowling .carousel-control-prev');

let bowlingScrollPos = 0;

bowlingNext.on('click', function () {

    if (bowlingScrollPos < bowlingWidth) {
        bowlingScrollPos += bowlingCardWidth * 2;
        bowlingInner.animate({
            scrollLeft: bowlingScrollPos
        }, 600);
    }

});

bowlingPrev.on('click', function () {

    if (bowlingScrollPos > 0) {
        bowlingScrollPos -= bowlingCardWidth * 2;
        bowlingInner.animate({
            scrollLeft: bowlingScrollPos
        }, 600);
    }

});