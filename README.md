# Sistema de Gestão de Academia (PHP) 🏋️‍♂️💻

Este repositório contém o projeto de um sistema de gestão para academias de ginástica, desenvolvido inteiramente em PHP estruturado através dos pilares da Programação Orientada a Objetos (POO).

## 📌 O que é este projeto?
É um sistema back-end simulado, focado na modelagem do domínio de uma academia. O projeto mapeia as entidades do mundo real (como alunos, professores, treinos e planos) para objetos de software, criando um ecossistema onde essas entidades interagem de forma lógica e coesa.

## 🎯 Qual problema ele procura representar/resolver?
O projeto resolve a necessidade de organização e controle do fluxo interno de uma academia física. Ele gerencia:
* **Pessoas:** Diferenciando o corpo docente (`Professores`) dos clientes (`Alunos`).
* **Planos e Matrículas:** Controle de vínculos ativos e inativos, além do cálculo financeiro das mensalidades.
* **Treinos Personalizados:** Vinculação de uma lista de exercícios a um treino montado por um professor.
* **Financeiro:** Controle básico de situação de pagamentos pendentes ou realizados, associados diretamente à matrícula do aluno.

## ⚙️ Como ele foi desenvolvido?
Foi desenvolvido utilizando PHP puro (*Vanilla*), adotando a tipagem estrita de propriedades introduzida nas versões mais recentes da linguagem. 

O projeto não utiliza frameworks externos, sendo estruturado com a separação de responsabilidades: cada classe possui seu próprio arquivo `.php`. O arquivo `Index.php` atua como o ponto de entrada da aplicação, onde os objetos são instanciados, as relações são construídas e os dados são exibidos na tela para testar a lógica implementada.

## 🚀 Quais são suas principais funcionalidades?
* **Gestão de Pessoas:** Cadastro de alunos e professores, reaproveitando dados comuns (Nome, CPF, E-mail).
* **Controle de Matrículas:** Criação de matrículas, permitindo a ativação, alteração de plano ou cancelamento.
* **Montagem de Treinos:** Possibilidade de criar um `Treino`, atribuir um `Professor` responsável e adicionar múltiplos `Exercicios` (com definição de séries e repetições).
* **Gestão de Pagamentos:** Registro de pagamentos atrelados a uma matrícula, permitindo dar baixa (pagar) ou verificar a situação de pendência.
* **Exibição de Dados:** Métodos dedicados para renderizar e formatar as informações completas de qualquer entidade do sistema (ex: `exibirDados()`).

## 🛠️ Quais tecnologias foram utilizadas?
* **Linguagem:** PHP (utilizando recursos de tipagem forte de atributos introduzidos no PHP 7.4+).
* **Paradigma:** Programação Orientada a Objetos (POO).
* **Versionamento/Organização:** Padrão de separação de arquivos por classes.

## 🧠 Quais conceitos de Programação Orientada a Objetos aparecem no sistema?
O código é muito rico em conceitos fundamentais de POO. Destacam-se:

* **Classes e Objetos:** A fundação do projeto. Entidades como `Plano`, `Exercicio` e `Pagamento` são moldes perfeitos que dão origem aos objetos na aplicação.
* **Encapsulamento:** Uso rigoroso de modificadores de acesso. Atributos são `private` ou `protected`, protegendo o estado interno dos objetos. A alteração ou leitura de dados só ocorre através de métodos seguros (`getters`, `ativar()`, `realizarPagamento()`, etc.).
* **Herança:** O código aplica o princípio DRY (*Don't Repeat Yourself*) de forma excelente. As classes `Aluno` e `Professor` estendem (`extends`) a superclasse `Pessoa`, herdando atributos como `$nome`, `$cpf` e `$email`, bem como a rotina do construtor através da chamada `parent::__construct()`.
* **Polimorfismo:** Visível fortemente nos métodos `apresentar()` e `exibirDados()`. A classe mãe `Pessoa` define um comportamento que é sobrescrito (*overridden*) nas classes filhas `Aluno` e `Professor`. No arquivo `Index.php`, ao percorrer um array de Pessoas genéricas, o sistema sabe invocar a apresentação específica de cada subclasse.
* **Associação, Agregação e Composição:**
  * *Associação:* Um `Pagamento` conhece sua `Matricula`. Uma `Matricula` conhece seu `Plano` e seu `Aluno`.
  * *Agregação (Listas):* A classe `Treino` possui um array interno `$exercicios` que recebe múltiplas instâncias da classe `Exercicio` através do método `adicionarExercicio()`.
