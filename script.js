document.getElementById("username").innerText = "luis";
document.getElementById("semestre").innerText = "PRIMEIRO SEMESTRE";
document.getElementById("titulo").innerText = "DIFICULDADES EM ALGORITMOS";

string = '[{"frase": "1. Falta de em Lógica Matemática", "link": "https://www.todamateria.com.br/matematica/"}, {"frase": "2. Dificuldade de Abstração", "link": "https://www.ime.usp.br/~pf/mac0122-2002/index.html"}, {"frase": "3. Erros de Sintaxe", "link": "https://www.w3schools.com/"}, {"frase": "4. Pouca Prática", "link": "https://www.beecrowd.com.br/"}, {"frase": "5. Materiais de Apoio", "link": "https://github.com/"}]';

json = JSON.parse(string);
container = document.getElementById("container_link");

for(i = 0; i < json.length; i++) {
  container.insertAdjacentHTML('beforeend', '<a class="link-box" id="link' + i + '">' + json[i].frase + '</a>');
  linkAtual = document.getElementById("link" + i);
  linkAtual.setAttribute("ref", json[i].link);
  linkAtual.addEventListener("click", function(){
    window.open(this.getAttribute("ref"), "_blank");
  });
}