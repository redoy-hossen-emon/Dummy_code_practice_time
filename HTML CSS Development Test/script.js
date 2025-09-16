	var backTop =document.querySelector('.backTop');
document.addEventListener('scroll', function(){
  if(document.body.scrollTop > 40){ 
      backTop.style.opacity="1" 
  }else if(document.body.scrollTop < 40){
          backTop.style.opacity="0"
      }
   } )