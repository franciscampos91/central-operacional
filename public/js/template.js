document.addEventListener("DOMContentLoaded", () => {

  // 1 — Remove animações temporariamente
  document.body.classList.add("no-transition");

  const btn = document.getElementById('recolher');
  const icon = btn.querySelector("svg");

  // 2 — Aplica estado salvo ANTES da animação estar habilitada
  /*if (localStorage.getItem("sidebar") === "hidden") {
    document.body.classList.add("navbar__oculto");
    icon.style.transform = "rotate(180deg)";
  }

  // 3 — Reativa animações DEPOIS de 50ms
  setTimeout(() => {
    document.body.classList.remove("no-transition");
  }, 50);*/

  // 4 — Clique normal
  btn.addEventListener("click", () => {

    document.body.classList.toggle('navbar__oculto');

    if (document.body.classList.contains("navbar__oculto")) {
      localStorage.setItem("sidebar", "hidden");
      icon.style.transform = "rotate(180deg)";
    } else {
      localStorage.setItem("sidebar", "visible");
      icon.style.transform = "rotate(0deg)";
    }

  });
});
