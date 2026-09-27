<?php 

    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Plano.php';
    require_once 'Matricula.php';
    require_once 'Exercicio.php';
    require_once 'Treino.php';
    require_once 'Pagamento.php';

    echo "<h1>Sistema de Academia - Versão Final </h1>";

    $aluno1 = new Aluno("João Silva", "111.111.111.11", "joao@gmail.com", "ALU001");
    $aluno2 = new Aluno("Maria Oliveira", "222.222.222.22", "maria@gmail.com", "ALU002");

    $professor1 = new Professor("Carlos Santos", "333.333.333.33", "carlos@gmail.com", "Musculação", "CREF001");
    $professor2 = new Professor("Ana Costa", "444.444.444.44", "ana@gmail.com", "Treinamento Funcional", "CREF002");

    echo "<h2>Pessoas da Academia</h2>";

    $pessoas = [$aluno1, $aluno2, $professor1, $professor2];

    foreach ($pessoas as $pessoa) {
        $pessoa->apresentar();
        echo "<br>";
    }

?>