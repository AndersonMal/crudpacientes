document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const status = params.get("status");
    const deleted = params.get("deleted");
  
    let mensaje = "";
    let tipo = "success";
  
    if (status === "created") {
      mensaje = "Paciente agregado correctamente.";
    } else if (status === "updated") {
      mensaje = "Paciente actualizado correctamente.";
    } else if (status === "error") {
      mensaje = "Hubo un error al guardar el paciente.";
      tipo = "danger";
    } else if (deleted) {
      mensaje = "Paciente eliminado correctamente.";
    }
  
    if (mensaje) {
      const div = document.createElement("div");
      div.className = `alert alert-${tipo} alert-dismissible fade show`;
      div.textContent = mensaje;
  
      // Botón de cierre
      const closeBtn = document.createElement("button");
      closeBtn.className = "btn-close";
      closeBtn.setAttribute("data-bs-dismiss", "alert");
      closeBtn.setAttribute("aria-label", "Close");
      div.appendChild(closeBtn);
  
      // Insertar alerta al inicio del contenedor
      const container = document.querySelector(".container");
      container.insertBefore(div, container.firstChild);
  
      // Ocultar automáticamente después de 4 segundos
      setTimeout(() => {
        div.classList.remove("show");
        div.classList.add("hide");
      }, 4000);
    }
  
    // Confirmación al eliminar
    document.querySelectorAll('.btn-eliminar').forEach(boton => {
      boton.addEventListener('click', function (e) {
        e.preventDefault();
  
        if (confirm("¿Estás seguro de que deseas eliminar este paciente?")) {
          fetch(this.href)
            .then(res => res.text())
            .then(() => {
              this.closest('tr').remove();
            });
        }
      });
    });
  });
  