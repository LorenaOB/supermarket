// const formAdmin = new bootstrap.form("#table-admin", {
//   keyboard: false,
// });

function readAdmin() {
  const documento = window.sessionStorage.getItem('documento');

  axios
    .get("http://127.0.0.1:8000/controlador/perfil/leer?documento=" + documento)
    .then((res) => {
      console.log(res.data)
      document.getElementById("documento_a").value = res.data.documento;
      document.getElementById("nombre_a").value = res.data.nombre;
      document.getElementById("apellido_a").value = res.data.apellido;
      document.getElementById("email_a").value = res.data.email;
      document.getElementById("telefono_a").value = res.data.telefono;
    
    })
    .catch((err) => {
      console.log(err);
    });
}

readAdmin();

const btn_actualizar = document.getElementById("btn-actualizar");

if (btn_actualizar) {
  btn_actualizar.addEventListener("click", function () {
    if (confirm("seguro que desea actualizar sus datos?")) {
      const form = {
        documento: document.getElementById("documento_a").value,
        nombre: document.getElementById("nombre_a").value,
        apellido: document.getElementById("apellido_a").value,
        email: document.getElementById("email_a").value,
        telefono: document.getElementById("telefono_a").value,
       
      };

      axios
        .put("http://127.0.0.1:8000/controlador/perfil/actualizar/", form, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {
          console.log(res.data);
          readAdmin();
        })
        .catch((err) => {
          console.log(err.response);
        });
    }
  });
}
