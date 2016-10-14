# Trabalho de Hiperdocumentos
em suma, uma bosta..

---

# Organização do código

- Na raiz estão as páginas que o usuário acessará. Basicamente só editar o arquivo com HTML/CSS puro. Dá pra usar PHP também se preferir. Tem um arquivo 'exemplo.php' que contém demonstrações das formatações que serão mais utilizadas.

- Na pasta '_view' há templates defaults usados em todas as páginas.

- Na pasta 'scripts' tem funções helpers de PHP para processar dinamicamente as features atuais do site.

# Criando questões dinamicamente

- Implementei um sistema que cria dinamicamente questões para um quiz online.

- Para criar uma questão:
- Vá na pasta 'quiz'
- Acesse uma subpasta (cada subpasta equivale a um tópico do site [ex.: introdução, string, matrizes... ] )
- Crie um arquivo .txt seguindo a ordem 01, 02... (para padronizar)
- Dentro do arquivo, estruture-o da seguinte forma:

[titulo : pode ter quantas linhas quiser]
[resposta1: uma linha começando com os caracteres ">>"]
...
[respostaN: uma linha começando com os caracteres ">>"]
[explicação: quantas linhas quiser começando com os caracteres ";;"]

Para padronizar, manter apenas 4 respostas por questão, sendo a primeira a correta. (O programa randomiza depois)



