
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );

   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      alert('apenas numeros são permitidos para este campo');
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

function verificaVazios() {
	
}
