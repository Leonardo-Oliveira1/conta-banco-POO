const adicionar = document.querySelector(".deposit");
const retirar = document.querySelector(".withdraw");

console.log(adicionar)


function Adicionar(){
    adicionar.classList.add("active");
    retirar.classList.remove("active");
}

function Retirar(){
    adicionar.classList.remove("active");
    retirar.classList.add("active");
}