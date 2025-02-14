<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Serviços - BikeCicle</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Incluindo o cabeçalho -->
<object type="text/html" data="includes/header.html" width="100%" height="100px"></object>

<!-- Conteúdo principal da página -->
<div class="container">
    <h2>Agenda de Serviços</h2>

    <!-- Formulário de agendamento -->
    <form action="agenda.html" method="POST">
        <label for="id_cliente">Cliente:</label>
        <input type="text" id="id_cliente" name="id_cliente" required>

        <label for="id_servico">Serviço:</label>
        <select id="id_servico" name="id_servico" required>
            <option value="1">Troca de Pneus</option>
            <option value="2">Revisão Geral</option>
            <option value="3">Ajuste de Marcha</option>
        </select>

        <label for="dia_agendamento">Data do Agendamento:</label>
        <input type="date" id="dia_agendamento" name="dia_agendamento" required>

        <label for="horario_agendamento">Horário:</label>
        <input type="time" id="horario_agendamento" name="horario_agendamento" required>

        <button type="submit" class="btn">Agendar</button>
    </form>

    <h3>Agendamentos Recentes</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>João Silva</td>
                <td>Troca de Pneus</td>
                <td>2025-03-25</td>
                <td>10:00</td>
                <td>Pendente</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ana Oliveira</td>
                <td>Revisão Geral</td>
                <td>2025-03-26</td>
                <td>14:00</td>
                <td>Confirmado</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Incluindo o rodapé -->
<object type="text/html" data="includes/footer.html" width="100%" height="50px"></object>

</body>
</html>
