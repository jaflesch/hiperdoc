<?php
// includes...
require_once "scripts/navigation.php";
require_once "scripts/material.php";

$page_title = "Strings";
include "_view/head.php";

$link_navbar = Navigation::get_link('strings');
include "_view/header.php";
?>
<!-- HTML Content -->
<section id="#nomeSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Strings </h1>
                <p> 
Na programação de computadores, uma cadeia de caracteres ou string é uma sequência de caracteres, 
geralmente utilizada para representar palavras, frases ou textos de um programa.

Nas maioria das linguagens de programação, as cadeias de caracteres podem ser expressas tanto na forma literal, 
como através de algum tipo de variável. Quando expressos através de variáveis, o conteúdo da cadeia geralmente pode ser alterado pela da inclusão/exclusão de elementos ou pela da substituição de seus elementos por outros elementos, formando uma nova cadeia. Assim, uma cadeia de caracteres é vista como sendo um tipo de dado e normalmente é implementada através de um arranjo de bytes que armazena os elementos da cadeia em sequência, utilizando alguma codificação preestabelecida.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1> Exemplo </h1>

                <div class="console-header"><img src="_img/console/icon.png"></div>
                <pre><code class="cpp">
int main(int, char **) 
{ 
    char ola[4];
 
    ola[0] = 'o'; 
    ola[1] = 'l'; 
    ola[2] = 'a'; 
    ola[3] = 0;
 
    printf(ola);
 
    return 0; 
}
					</code></pre>
                <pre class="exe"> ola </pre>
                </br>

                <p>
                    Exemplo que conta o número de caracteres da entrada.
                </p>
                <div class="console-header"><img src="_img/console/icon.png"></div>
                <pre><code class="cpp">

int contaChar(const char *str) 
{ 
    int i = 0;
 
    for(;str[i] != 0; ++i);
 
    return i; 
}
 
int main(int, char **) 
{ 
    char ola[] = "ola";
 
    printf("A string %s possui %d caracteres\n", ola, contaChar(ola));
 
    
					</code></pre>
                </br>
                <p>
                    Exemplo que compara duas strings.
                </p>
                <div class="console-header"><img src="_img/console/icon.png"></div>
                <pre><code class="cpp">

bool saoIguais(const char *s1, const char *s2) 
{         
    for(int i = 0;s1[i] == s2[i]; ++i) 
    {                 
        if(s1[i] == 0) 
            return true; 
    } 
    return false; 
}
 
int main(int, char **) 
{ 
    char ola[] = "ola"; 
    char ola2[] = "ola";
 
    if(saoIguais(ola, ola2)) 
        printf("Iguais"); 
    else
        printf("Nao sao iguais");
 
    return 0; 
}
					</code></pre>




            </div>
        </div>
    </div>
</section>
<section id="#nomeSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> 2. Título Seção Par</h1>

                <ul class='material-list'>
                    <?php
                    Material::pdf('Strings', 'files/13.pdf');
                    Material::youtube('Programando em C - Aula 11', 'https://www.youtube.com/watch?v=L4IYcJSoH3M');
                    Material::quiz('Quiz online', 'quiz.php?area=strings');
                    ?>
                </ul>					

                <!-- Navigation links -->
                <p class='links'>
                    <a class='pull-left' href='vetores.php'><i class='fa fa-2x fa-angle-left'></i> Vetores </a>
                    <a class='pull-right' href='matrizes.php'> Matrizes <i class='fa fa-2x fa-angle-right'></i></a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include "_view/footer.php"; ?>