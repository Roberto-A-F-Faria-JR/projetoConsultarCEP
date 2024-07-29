function validarNumero(input) {
  input.value = input.value.replace(/[^0-9]/g, "");
}

$("#submit").on("click", function () {
  var numberCEP = $("#numberCEP").val();

  $.ajax({
    method: "POST",
    url: "../controller/controllerCEP.php",
    data: {
      cep: numberCEP,
    },
    dataType: "json",
    success: function (data) {
      if (data != null) {
        var html = "<h4>O CEP consultado é:</h4>";

        $.each(data, function (i, v) {
          if (v != "") {
            html += "<div>";
            html += "<b>" + i + "</b>: " + v;
            html += "</div>";
          }
        });

        $("#divResponse").html(html);
      } else {
        $("#divResponse").html("");

        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          },
        });

        Toast.fire({
          icon: "error",
          title: "CEP não encontrado !!",
        });
      }
    },
    error: function (error) {
      console.log(error);
    },
  });
});