// Recupera os alunos que já foram salvos no navegador.
// Se ainda não existir nenhum cadastro, começa com uma lista vazia.
let alunos = JSON.parse(localStorage.getItem("alunos")) || [];

// Seleciona o formulário e a parte da página onde a tabela será exibida.
const formulario = document.getElementById("formulario");
const listaAlunos = document.getElementById("lista-alunos");
const avisoVazio = document.getElementById("aviso-vazio");
const mensagem = document.getElementById("mensagem");

// Mostra todos os alunos na tabela.
function mostrarAlunos() {
    listaAlunos.innerHTML = "";

    // Mostra um aviso quando a lista estiver vazia.
    avisoVazio.style.display = alunos.length === 0 ? "block" : "none";

    alunos.forEach(function(aluno) {
        const linha = document.createElement("tr");

        // Exibe as informações do aluno.
      [aluno.nome, aluno.matricula, formatarData(aluno.nascimento), aluno.curso, aluno.turma]
    .forEach(function(informacao) {
        const coluna = document.createElement("td");
        coluna.textContent = informacao;
        linha.appendChild(coluna);
    });
        listaAlunos.appendChild(linha);
    });
}

function formatarData(data) {
    const partes = data.split("-");
    return partes[2] + "/" + partes[1] + "/" + partes[0];
}

// Executa esta parte quando o usuário envia o formulário.
formulario.addEventListener("submit", function(evento) {
    evento.preventDefault(); // Evita que a página recarregue.

    // Pega os valores digitados nos campos.
    const novoAluno = {
        nome: document.getElementById("nome").value.trim(),
        matricula: document.getElementById("matricula").value.trim(),
        nascimento: document.getElementById("nascimento").value,
        curso: document.getElementById("curso").value.trim(),
        turma: document.getElementById("turma").value.trim()
    };

    // Impede o cadastro de duas pessoas com a mesma matrícula.
    const matriculaJaExiste = alunos.some(function(aluno) {
        return aluno.matricula === novoAluno.matricula;
    });

    if (matriculaJaExiste) {
        mensagem.textContent = "Já existe um aluno com essa matrícula.";
        return;
    }

    // Adiciona o novo aluno à lista.
    alunos.push(novoAluno);

    // Salva a lista no armazenamento do navegador.
    localStorage.setItem("alunos", JSON.stringify(alunos));

    // Atualiza a tabela e limpa o formulário.
    mostrarAlunos();
    formulario.reset();
    mensagem.textContent = "Aluno cadastrado com sucesso!";
});

// Mostra os cadastros salvos assim que a página abre.
mostrarAlunos();