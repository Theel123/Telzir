
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

function validacaoFormulario() {

   var planoFaleMais = document.getElementById('planoSelecionado').value;
   var origem = document.getElementById('origem').value;
   var destino = document.getElementById('destino').value;
   var minutos = document.getElementById('minutos').value;

   if (planoFaleMais == 0 || planoFaleMais == null) {

      alert('por favor preencha o plano')
      return false
   
   } else if (origem == 0 || origem  == null ) {

      alert('por favor preencha o origem')
      return false

   } else if (destino == 0 || destino == null) {

      alert('por favor preencha a destino');
      return false

   } else if (minutos == 0 || minutos == null ) {

      alert('por favor preencha os minutos')
      return false
   } 
}
