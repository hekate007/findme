$(function () {
  $(window).scroll(function () {
      var scrollVal = $(window).scrollTop();
      if (scrollVal >= 100) {
          $('.card').removeClass('d-none')
      }
  });
});
/*
const divs = document.getElementsByClassName('card');

const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

function handleCard(myDiv, observer) {
    myDiv.forEach(myDivSingle => {
        console.log(myDivSingle.intersectionRatio);
        if (myDivSingle.intersectionRatio > 0) {
            loadDiv(myDivSingle.target);
        }
    })
}

function loadDiv(divs) {
    divs.removeClass('d-none');
}

const observer = new IntersectionObserver(handleCard, options);

divs.forEach(div => {
   observer.observe(div);
});*/
