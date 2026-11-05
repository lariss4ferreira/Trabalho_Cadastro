<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="topo">
        <h1>Cadastro de Alunos</h1>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#cadastro">Cadastrar aluno</a>
            <a href="#lista">Lista de alunos</a>
        </nav>
    </header>

    <main>

<!-- página inicial -->
        <section id="inicio" class="painel inicio">
            <h2>Bem-vindo ao Sistema de Cadastro</h2>
            <p>Organize e consulte as informações dos alunos de forma simples.</p>
            <a class="botao" href="#cadastro">Começar cadastro</a>
        </section>

<!-- formulário de cadastro de alunos -->
        <section id="cadastro" class="painel">
            <h2>Cadastrar novo aluno</h2>

            <form id="formulario">
                <div class="campo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="campo">
                    <label for="matricula">Matrícula</label>
                    <input type="text" id="matricula" name="matricula" required>
                </div>

                <div class="campo">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" id="nascimento" name="nascimento" required>
                </div>

                <div class="campo">
                    <label for="curso">Curso</label>
                    <input type="text" id="curso" name="curso" required>
                </div>

                <div class="campo">
                    <label for="turma">Turma</label>
                    <input type="text" id="turma" name="turma" required>
                </div>

                <button type="submit" class="botao">Salvar aluno</button>
                <p id="mensagem" class="mensagem" aria-live="polite"></p>
            </form>
        </section>
<!-- tabela de alunos -->
        <section id="lista" class="painel">
            <h2>Alunos cadastrados</h2>

            <div class="tabela-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Matrícula</th>
                            <th>Nascimento</th>
                            <th>Curso</th>
                            <th>Turma</th>
                        </tr>
                    </thead>

                    <tbody id="lista-alunos">
                    </tbody>
                </table>
            </div>

            <p id="aviso-vazio">Nenhum aluno cadastrado ainda.</p>
        </section>

    </main>

    <footer>
        <p>Sistema de Cadastro de Alunos</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>