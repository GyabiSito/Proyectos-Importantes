$(document).ready(function () {
  //.change es una actualizacion. "abrir" dentro del input lo actualiza
  $("#verImg").change(function () {
    // Para el input de id "verImg"
    $("#frames").html(""); //Agarro el DIV de ID "Frames" y le seteo que su html esté vacio cuando se actualiza el input de arriba
    for (var i = 0; i < $(this)[0].files.length; i++) {
      // Esto recorre todos los archivos que yo seleccion en el input de id PEPE "$(this)[0].files.length
      $("#frames").append(
        '<img src="' +
          window.URL.createObjectURL(this.files[i]) +
          '" width="100px" height="100px"/>'
      );
      //Todo esto lo que hace es: Tomo el div de id "frames" y con el ".append" le inserto todas las imagenes que se recorren en el for, una por una
    } // window.URL.createObjectURL crea una URL para hacer una preview de la imagen, para asi no subirla primero a la BD
  }); //luego trabajar con este div para arreglar los estilos de las imagenes
  $("#verImgdesc").change(function () {
    $("#framesdesc").html("");
    for (var i = 0; i < $(this)[0].filess.length; i++) {
      $("#framesdesc").append(
        '<img src="' +
          window.URL.createObjectURL(this.filess[i]) +
          '" width="100px" height="100px"/>'
      );
    }
  });
  $("#videoUpload").change(function () {
    $("#videoframes").html("");
    for (var i = 0; i < $(this)[0].files.length; i++) {
      // Esto recorre todos los archivos que yo seleccion en el input de id PEPE "$(this)[0].files.length
      let file = this.files[i]; //Es el archivo
      let blobURL = URL.createObjectURL(file); //blobURL=URL del archivo
      $("#videoframes").append(
        '<video src="' +
          blobURL +
          '" width="320px" height="240px" controls autoplay />'
      );
    }
  });
});
