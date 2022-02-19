<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

        <!-- JavaScript -->
        <script src="./assets/js/validate.js"></script>

        <!-- Icone da página -->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "./assets/img/favicon.ico"/>

        <!-- Título da página -->
        <title>Vacinação COVID-19</title>
    </head>

    <body>
        <!-- PHP (Formulário) -->
        <form class="format" name="formCadastVacina" action="./assets/php/salvar-agendamento.php" method="post">

            <div>
                <h1 id="titulo">Agendamento de Vacinação COVID-19</h1><br>
                <h3 class="subtitulo">Complete suas informações</h3><br>
            </div>

            <!-- Campos dados do usuario -->
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" class="txtbox" name="nome" id="nome" placeholder="Insira seu nome">
                </div>

                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" class="txtbox" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome">
                </div>

                <div class="campo">
                    <label for="email"><strong>E-mail</strong></label>
                    <input type="email" class="txtbox" name="email" id="email" placeholder="exemplo@exemplo">
                </div>

                <div class="campo">
                    <label for="celular"><strong>Celular</strong></label>
                    <input type="text" class="txtbox" name="celular" id="celular" placeholder="(00) 00000-0000">
                </div>

                <div class="campo">
                    <label for="datNasc"><strong>Data de nascimento</strong></label>
                    <input type="text" class="txtbox" name="data_nascimento" id="datNasc" placeholder="dd/mm/aaaa">
                </div>

                <div class="campo">
                    <label for="cep"><strong>CEP</strong></label>
                    <input type="text" class="txtbox" name="cep" id="cep" placeholder="Insira seu CEP">
                </div>

                <div class="campo">
                    <label for="altura"><strong>Altura</strong></label>
                    <input type="text" class="txtbox" name="altura" id="altura" placeholder="Insira sua altura (cm)">
                </div>

                <div class="campo">
                    <label for="peso"><strong>Peso</strong></label>
                    <input type="text" class="txtbox" name="peso" id="peso" placeholder="Insira seu peso (kg)">
                </div>

                <div class="campo">
                    <label for="genero"><strong>Gênero</strong></label>
                    <select id="genero" name="genero">
                        <option selected disabled value="">Selecione</option>
                        <option>Feminino</option>
                        <option>Masculino</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="etnia"><strong>Etnia</strong></label>
                    <select id="etnia" name="sua_etnia">
                        <option selected disabled value="">Selecione</option>
                        <option>Indígena</option>
                        <option>Pardo</option>
                        <option>Negro</option>
                        <option>Branco</option>
                    </select>
                </div>
            </fieldset><br>

            <div>
                <h3 class="subtitulo">Questionário</h3><br>
            </div>

            <!-- Campos do questionário -->
            <fieldset class="grupo">
                <div class="campo">
                    <label><strong>Está atualmente empregado?</strong></label>
                    <label>
                        <input type="radio" name="pergunta1" value="Empregado" checked> Sim, estou empregado
                    </label>
                    <label>
                        <input type="radio" name="pergunta1" value="Desempregado"> Atualmente estou desempregado
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Quantas pessoas vivem na sua residência? (Incluindo você)</strong></label>
                    <label>
                        <input type="radio" name="pergunta2" value="Moro sozinho" checked> Eu moro sozinho
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="2 Pessoas"> 2 Pessoas
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="2-5 Pessoas"> 2-5 Pessoas
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="Mais de 5 Pessoas"> Mais de 5 Pessoas
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Alguém na sua residência tem mais de 64 anos?</strong></label>
                    <label>
                        <input type="radio" name="pergunta3" value="Sim" checked> Sim
                    </label>
                    <label>
                        <input type="radio" name="pergunta3" value="Não"> Não há ninguém com mais de 64 anos
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Alguém na sua residência frequenta escola ou creche?</strong></label>
                    <label>
                        <input type="radio" name="pergunta4" value="Sim" checked> Sim
                    </label>
                    <label>
                        <input type="radio" name="pergunta4" value="Não"> Não
                    </label>
                </div>
            </fieldset><br>

            <div>
                <h3 class="subtitulo">Agendamento de Vacinação</h3><br>
            </div>

            <!-- Campos do agendamento -->
            <fieldset class="grupo">
                <div class="campo">
                    <label for="agendamento"><strong>Data do agendamento</strong></label>
                    <input class="txtbox" type="date" name="data_agendamento" id="agendamento" placeholder="Insira a data">
                </div>

                <div class="campo">
                    <label for="horaAt"><strong>Horário de atendimento</strong></label>
                    <input class="txtbox" type="time" name="hora_atendimento" id="horaAt" placeholder="Insira a hora">
                </div>
            </fieldset><br>

            <!-- Botão para enviar ou apagar o formulário -->
            <button class="botao1" type="submit" onclick="return validar()">Enviar</button>
            <button class="botao2" type="reset">Apagar</button>

            <!-- Div com o botão para abrir a lista de agendamentos -->
            <div>
                <a href="./assets/php/listar-agendamento.php" target="_self">
                <img class="botao3" width="100" height="100" src="./assets/img/busca-lista.jpg" alt="Lista"></a>
            </div>

        </form>
    </body>
</html>