<?php include("db.php") ?>

<?php include("includes/header.php") ?>
<h1>Contacta con nosotros</h1>
<form action='save_task.php' method='POST' id='contactForm' name='contactForm'>
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre*" aria-label="Nombre" required>
       <input type="text" class="form-control" name="telefono" placeholder="Teléfono" aria-label="Telefono">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="Email*" aria-label="Email" required>
      <input type="text" class="form-control" name="asunto" placeholder="Asunto" aria-label="Asunto">
    </div>
  </div>

  <!-- Etiqueta y textarea para "Comentario" -->
  <div class="mb-3">
    <textarea class="form-control" name="comentario" placeholder="Comentarios*" aria-label="Comentario" required></textarea>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">He leído y acepto las <span class="text-primary">políticas de privacidad</span></label>
  </div>
  
  <button type="submit" class="btn btn-primary" name="save_task" onclick="submitForm()">Enviar</button>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
function submitForm() {
  // Verificar si el checkbox está marcado
  if ($('#exampleCheck1').is(':checked')) {
    // Realizar la solicitud AJAX
    $.ajax({
      type: 'POST',
      url: 'save_task.php',
      data: $('#contactForm').serialize(),
      success: function(response) {
        // Manejar la respuesta del servidor (si es necesario)
        console.log(response);
      },
      error: function(error) {
        // Manejar errores (si es necesario)
        console.error(error);
      }
    });
  } else {
    // Mostrar un mensaje de error o realizar otra acción si el checkbox no está marcado
    alert('Debes aceptar las políticas de privacidad.');
  }
}
</script>

<?php include("includes/footer.php") ?>
