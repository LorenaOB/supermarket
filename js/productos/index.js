const myModal = new bootstrap.Modal("#modal-edit-products", {
  keyboard: false,
});

const Modal = new bootstrap.Modal("#modal-agregar-producto", {
  keyboard: false,
});



function readProducts() {
  axios
    .get("http://127.0.0.1:8000/controlador/productos/leer")
    .then((res) => {
      new DataTable("#table-products", {
        data: !res.data.status ? res.data : [],
        destroy: true,
        responsive: true,
        language: {
          url: "https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json",
        },
        columns: [
          { data: "codprod" },
          { data: "nompro" },
          { data: "stockpro" },
          { data: "prepro" },
          { data: "despro" },
        ],
        createdRow: (html, row, index) => {
          html.setAttribute("role", "button");

          html.addEventListener("click", () => {
            console.log(row);
            document.getElementById("codprod_e").value = row.codprod;
            document.getElementById("nompro_e").value = row.nompro;
            document.getElementById("prepro_e").value = row.prepro;
            document.getElementById("stockpro_e").value = row.stockpro;
            document.getElementById("despro_e").value = row.despro;
            // document.getElementById("product3_name").value = row.product3_name;
            myModal.show();
          });
        },
      });
    })
    .catch((err) => {
      console.log(err);
    });
}


readProducts();

const btn_update = document.getElementById("btn-update");

if (btn_update) {
  btn_update.addEventListener("click", function () {
    if (confirm("seguro que desea actualizar este producto?")) {
      const form = {
        codprod: document.getElementById("codprod_e").value,
        nompro: document.getElementById("nompro_e").value,
        prepro: document.getElementById("prepro_e").value,
        stockpro: document.getElementById("stockpro_e").value,
        despro: document.getElementById("despro_e").value,
      };

      axios
        .put("http://127.0.0.1:8000/controlador/productos/actualizar", form, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {
          console.log(res.data);
          readProducts();
          myModal.hide();
        })
        .catch((err) => {
          console.log(err.response);
        });
    }
  });
}

const btn_delete = document.getElementById("btn-delete");

if (btn_delete) {
  btn_delete.addEventListener("click", function () {
    if (confirm("seguro que desea Eliminar este producto?")) {
      const form = {
        data: {
          codprod: document.getElementById("codprod_e").value,
        },
      };

      axios
        .delete("http://127.0.0.1:8000/controlador/productos/eliminar", form, {
          headers: {
            "Content-Type": "application/json",
          },
        })
        .then((res) => {
          console.log(res.data);
          readProducts();
          myModal.hide();
        })
        .catch((err) => {
          console.log(err.response);
        });
    }
  });
}
const btn_create = document.getElementById("btn-create");

if (btn_create) {
  btn_create.addEventListener("click", function () {
    const codprod = document.getElementById("codprod");
    const nompro = document.getElementById("nompro");
    const prepro = document.getElementById("prepro");
    const stockpro = document.getElementById("stockpro");
    const despro = document.getElementById("despro");

    const form = new FormData();
    form.append("codprod", codprod.value);
    form.append("nompro", nompro.value);
    form.append("prepro", prepro.value);
    form.append("stockpro", stockpro.value);
    form.append("despro", despro.value);

    axios
      .post("http://127.0.0.1:8000/controlador/productos/crear", form, {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      })
      .then((res) => {
        console.log(res.data);
        readProducts();

        codprod.value = '';
        nompro.value = '';
        prepro.value = '';
        stockpro.value = '';
        despro.value = '';

        Modal.hide();
      })
      .catch((err) => {
        console.log(err.response);
      });
  });
}
