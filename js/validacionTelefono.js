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