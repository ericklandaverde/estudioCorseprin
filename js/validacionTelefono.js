alert("Hola soy el scritp validacion");
    function upperCase() {
       var x=document.getElementById("formulario").value
       document.getElementById("formulario").value = x.toUpperCase()
    }
    </script>
    <script type="text/javascript" src="../jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
      $('#insertar').click(function() {
          if ($('#telefono').val().length != 8 || isNaN($('#telefono').val())) {
              $('#telefono').css('border-color','#FF0000');
              alert('El número de teléfono solo 8 números.');
              return false;
          }
          else {
              alert('OK');
          }
      });
  });