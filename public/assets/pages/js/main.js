function scrolll(){
    var left = document.querySelector('.scroll');
    left.scrollBy(325,0);
     // console.log(left.scrollWidth, left.clientWidth,left.scrollLeft);
    if (left.scrollLeft === (left.scrollWidth - left.clientWidth)) {
        console.log('fin-1');
    }
   
}
function scrollr(){
    var right = document.querySelector('.scroll');
    right.scrollBy(-325,0);
    if (right.scrollLeft === 0) {
        console.log('fin');
        }
    
}