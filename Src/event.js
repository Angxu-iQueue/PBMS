//page handler
var set= document.getElementById('limit');
var add= document.getElementById('add');
var bt1= document.getElementById('btnset');
var bt2= document.getElementById('btnadd');

set.addEventListener('click', () => {
   const body = document.querySelectorAll('.modal.active')
   body.forEach(modal => {
      closeModal(modal)
   })
})

