
document.addEventListener('DOMContentLoaded',function(){
  document.getElementById("menuButton").addEventListener("click",function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
})
});

function jinjya(){
  document.getElementById("input_message").value="神社・寺";
}
function miyage(){
  document.getElementById("input_message").value="お土産";
}
function hotel(){
  document.getElementById("input_message").value="宿";
}


<<<<<<< HEAD
 let mySwiper = new Swiper ('.swiper-container', {
=======

let mySwiper = new Swiper ('.swiper-container', {
>>>>>>> 5f5f70aff6141897bc83a91bf43644077d796ca2
  loop: true, //最後に達したら先頭に戻る

  pagination: {
    el: '.swiper-pagination', //ページネーションの要素
    type: 'bullets', //ページネーションの種類
    clickable: true, //クリックに反応させる
  },
<<<<<<< HEAD

  navigation: {
    nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
  },

  scrollbar: {
    el: '.swiper-scrollbar', //要素の指定
  },
})


function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
=======

  navigation: {
    nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
  },

  scrollbar: {
    el: '.swiper-scrollbar', //要素の指定
  },
})
>>>>>>> 5f5f70aff6141897bc83a91bf43644077d796ca2
