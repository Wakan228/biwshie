
	 function random(min, max) {
    var rand = min + Math.random() * (max + 1 - min);

      rand = Math.floor(rand);
      return rand;
  };

  var ex = document.querySelector(".ex")
    var imain = document.querySelector(".imain")
    var soc = document.querySelector(".soc")
    var instain = document.querySelector(".instain")
    var instin = document.querySelector(".instin")
    var instin = document.querySelector(".instin")
  var p = imain.offsetHeight - 96 
  var i = 0
  var a = 0

// СМАЙЛИКА В ВАЖНОСТЬ


// 3 строка
  $('.i3').focus(function(){
    $('.i3').attr('type','date')
  })
 // 5строка
 // $('.i5').keyup(function(){
 //    if($('.i5').val() > 9){
 //     $('.i5').text(' ')
 //      alert('Большое число')
 //    }
 //  })
 
// КНОПКА МЕНЮ

 setInterval(function(){
 ex.style.height = imain.offsetHeight - (imain.offsetHeight / 100 * 4)  + 'px' 
},1) 

 // ИНСТАГРАМ
  $('.inst').append('<img src="img/i.png" class="img2">')
 $('.inst').hover(function(){
    $('.instin').css('margin-top',209 +'px')
    $('.instin').focus()
 },function(){
  $('.instin').css('margin-top',10 + 'px')
  $('.instin').blur()
  $('.sd').attr('href',$('.instin').val()) 
 })
 // ФОТКА
$('.photo').keyup(function(){
   $('.photo').css('background-image', 'url('+$('.photo').val()+')')
   // $(this).css('font-size',0)
})
 








