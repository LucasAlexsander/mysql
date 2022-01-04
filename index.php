<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>MySQL Documentação</title>
</head>
<body>
    <header>
        <div class="logo">
            <div class="ponto"></div>
        </div>
        <nav>
            <ul><li><a href="#mysql">MySQL</a></li>
                <li><a href="../form/home.php">Home</a></li>
                <li><a href="../form/logoff.php">Login</a></li>
                <li><a href="../form/logoff_index.php">Sair</a></li>
                <li><a href="https://lucasalexsander.github.io/simple/">Exemp5</a></li>
            </ul>
        </nav>
    </header>

    <div id="mysql" class="line-space"></div>

    <section>
        <div class="container">
            <h1>MySQL</h1>
            <h2>Campos de texto:</h2>
            <p><ul>
                <li><b>Text</b> - Tamanho variável que armazena uma grande quantidade de caracteres;</li>
                <li><b>Varchar</b> - Tamanho variável que armazena de 0 até 255 caracteres;</li>
                <li><b>Char</b> - Tamanho fixo que armazena de 0 até 255 caracteres.</li>
            </ul></p>
            
            <h2>Campos numéricos:</h2>
            <p><ul>
                <li><b>Int</b> - Valor númerico inteiro;</li>
                <li><b>Float</b> - Valor númerico fracionado.</li>
            </ul></p>

            <h2>Campo de data e hora:</h2>
            <p><ul>
                <li><b>Data</b> - Data no formato YYYY/mm/dd;</li>
                <li><b>Time</b> - Hora;</li>
                <li><b>Datatime</b> - Combinação de data e time em um mesmo campo.</li>
            </ul></p>

            <h2>Diferença entre char e varchar:</h2>
            <p><b>Char</b> - Todo o espaço definido de caracteres ficam reservados. Tendo como um ponto de vantagem a maior agilidade e rápidez no momento de pesquisa, porém, perde espaço em disco.</p>
            <p><b>Varchar</b> - Usa somente o espaço necessário mesmo que o limite esteja definido um valor maior. Sua vantagem está na economia de espaço em disco, mas temos uma contra partida que é a lentidão nas pesquisas quando comparamos com o char.</p>
            <br>
            <p><b>OBS:</b> Podemos usar o char para nomes, e informações mais curtas e importantes. Para termos um programa mais rápido na hora da pesquisa de algum dado. E deixamos o varchar para descrições, resumos, coisas do tipo.</p>
            <br>
        </div>
    </section>

    <!-- CRIAÇÃO DE TABELAS E ALTERAÇÕES NAS COLUNAS -->
    <section>
        <div class="container">
            <h1>Criação de tabelas e alterações nas colunas</h1>
            <h2>Criando tabelas:</h2>
            <p>Usamos as palavras chaves '<b>CREATE TABLE</b>' em seguida colocamos o nome da tabela. Por fim, abrimos parêneteses '<b>(</b>' e colocamos o nome das colunas e as suas propriedades e fechamos o parênteses '<b>)</b>'. Podemos criar muitas colunas ao mesmo tempo, para isso separamos usando a virugla '<b>,</b>'.</p>

            <div class="code">
                <h3>Sintaxe:</h3>
                <p><b>CREATE TABLE &lt;nome da tabela&gt; (
                &lt;nome da coluna tipo valor&gt;, &lt;nome da coluna tipo valor&gt;);</b></p>
            </div>

            <h2>Modificando o nome da tabela:</h2>
            <p>Para realizar esta modificação usamos no começo da codificação as palavras '<b>RENAME TABLE</b>' juntamente com o nome da tablea que deseja realizar a troca, e em seguida colocamos o '<b>TO</b>' e o seu novo nome.</p>

            <div class="code">
                <h3>Sintaxe:</h3>
                <p><b>RENAME TABLE &lt;nome da tabela atual&gt; TO &lt;novo nome da tablea&gt;;</b></p>
            </div>

            <h2>Adcionando, mudando e apagando colunas:</h2>
            <p><ul>
                <li><b>ADD</b> - Permite a inclusão de uma nova coluna em uma tabela;</li>
                <li><b>CHANGE</b> - Perminete a alteração do nome de uma coluna e de suas propriedades, como por exemplo o tipo;</li>
                <li><b>DROP</b> - Permite a remoção de uma coluna da tabela.</li>
            </ul></p>

            <div class="code">
                <h3>Sintaxe:</h3>
                <h4>ADD:</h4>
                <p>ALTER TABLE &lt;nome da tabela&gt; ADD &lt; nome da coluna + seus atributos&gt;</p>
                <h4>CHANGE:</h4>
                <p>ALTER TABLE &lt;nome da tabela&gt; CHANGE &lt; nome da coluna que vamos trabalhar e o seu tipo&gt; &lt;modificações&gt;</p>
                <h4>DROP:</h4>
                <p>ALTER TABLE &lt;nome da tabela&gt; DROP &lt; nome da coluna&gt;</p>
            </div>
        </div>
    </section>

    <!-- INSERINDO DADOS EM TABLEAS -->
    <section>
        <div class="container">
            <h1>Inserindo e consultado dados em tabelas</h1>
            <h2>Inserindo:</h2>
            <p>Para fazermos a inserção de dados usamos as palavras chaves '<b>INSERT INTO</b>' jutamente com o nome da tabela que deseja inserir o registro e em parênteses '<b>(</b>' a coluna que receberá o valor. Em seguida, colocamos a palavra-chave '<b>VALUES</b>' e dentro de parênteses o valor da coluna.</p>
            <p><b>OBS:</b> Podemos fazer muitas inserções, para isso colocamos virgulas para separar os valores. E no primeiro parênteses podemos colocar as tabelas de ordem aleatórias, mas os valores devem respeitar as ordens aleatórias.</p>

            <div class="code">
                <h3>Sintaxe:</h3>
                <p><b>INSERT INTO &lt;tabela&gt; (coluna que receberá o registro) VALUES (valores da coluna definida);</b></p>
            </div>

            <h2>Consultando:</h2>
            <p>Colocamos o '<b>SELECT</b>' junto com o nome da coluna ou colunas e '<b>FROM</b>' com o nome da tabela que você deseja consultar.</p>
            <div class="code">
                <h3>Sintexe:</h3>
                <p><b>SELECT &lt;coluna ou colunas&gt; FROM &lt;tabela&gt;;</b></p>
            </div>
            <p><b>OBS:</b> Podemos fazer o inclusão de todos as colunas, para isso usamos o <b>*</b>, mas não é muito recomendado.</p>
        </div>
    </section>

    <!-- FILTRANDO REGISTROS (WHERE) E OPERADORES LÓGICOS -->
    <section>
        <div class="container flex-column">
            <div class="area-lado">
                <div class="text-left">
                    <h2>Filtrando registros (Where):</h2>
                    <p><ul>
                        <li><span>=</span> - Esquerda <b>igual</b> direita;</li>
                        <li><span><</span> - Esquerda <b>menor</b> direita;</li>
                        <li><span><=</span> - Esquerda <b>menor ou igual</b> direita;</li>
                        <li><span>></span> - Esquerda <b>maior</b> direita;</li>
                        <li><span>>=</span> - Esquerda <b>maior ou igual</b> direita;</li>
                    </ul></p>
                </div>
                <div class="text-right">
                    <h2>Operadores lógicos:</h2>
                    <p><ul>
                        <li><span>AND</span> - Tudo verdadeiro;</li>
                        <li><span>OR</span> - Pelo menos um verdadeiro.</li>
                    </ul></p>
                </div>
            </div>

            <div class="code">
                <h3>Sintaxe:</h3>
                <p><b>SELECT &lt;coluna&gt; FROM &lt;tabela&gt; WHERE &lt;filtro&gt;</b></p>
            </div>
        </div>
    </section>

    <!-- TIPOS DE FILTROS -->
    <section>
        <div class="container">
            <h1>Tipos de filtros</h1>
            <h2>Informações importantes:</h2>
            <p>Neste capítpulo vamos aplicar os filtros somente no WHERE, sendo assim, é importante já ter em mente a sintaxe padrão.</p>
                <p><b>SELECT &lt;coluna&gt; FROM &lt;tabela&gt; WHERE &lt;filtro&gt;</b></p>
            
            <h2>Filtro de comparação (=):</h2>
            <p>Na frente do WHERE vamos colocar o campo que desejamos comparar, exemplo, nome e na frente colocamos o filtro de comparação = e o valor que queremos comparar. Funcionando para todos os tipos de operadores, <, >, <=, >=.</p>
            <div class="code">
                <p><b>WHERE nome = 'Lucas'</b></p>
            </div>

            <h2>Filtro com operador BETWEEN:</h2>
            <p>Para evitar a repetição quando queremos saber valores entre um valor e outro, podemos colocar o BETWEEN. Nele conseguimos deixar de ficar repetindo as coisas.</p>
            <div class="code">
                <h4>Trocamos isso:</h4>
                <p>WHERE idade >= 18 AND idade <= 21</p>
                <h4>Por isso:</h4>
                <p>WHERE idade BETWEEN 18 and 21</p>
            </div>

            <h2>Filtro com o operador IN:</h2>
            <p>Tem o mesmo intuito do BETWEEN, reduzir a repetição das palavras.</p>
            <div class="code">
                <h4>Trocamos isso:</h4>
                <p>WHERE interesse = 'Jogos' OR interesse = 'Música' OR interesse = 'Esporte'</p>
                <h4>Passamos a usar:</h4>
                <p>WHERE interesse IN ('Jogos', 'Música', 'Esporte')</p>
            </div>

            <h2>Filtro com o operador LIKE:</h2>
            <p>Ele permite realizar filtros com base em uma pesquisa de caracteres dentro de uma coluna textual.</p>
            <p>Caracteres especiais:</p>
            <p><ul>
                <li>% - Indica que pode haver a existência de qualquer conjunto de caracteres no texto;</li>
                <li>_  - Indica que pode haver a existência de um ou mais caracteres em uma posção especifica do texto.</li>
            </ul></p>

            <div class="code">
                <h3>Sintaxe:</h3>
                <p>WHERE &lt;coluna&gt; LIKE '%_e_%'</p>
            </div>
        </div>
    </section>

    <!-- SELEÇÃO ORDENADA -->
    <section>
        <div class="container">
            <h1>Ordenando resultado e limitando retorno</h1>
            <h2>Ordenando resultado:</h2>
            <p>A sua palavra-chave '<b>ORDER BY</b>' ficará logo depois do WHERE e seus filtros. Para realizarmos a ordenação, vamos colocar a palavra-chave e uma coluna (a sua escolha), em seguida, podemos usar o '<b>ASC</b> ou <b>DESC</b>'. </p>
            <p><ul>
                <li><b>ASC</b> - Crescente (Padrão)</li>
                <li><b>DESC</b> - Decrescente</li>
            </ul></p>

            <h2>Limitando retorno LIMIT:</h2>
            <p>Define o tanto de registro que irá aparecer na hora do retorno, geralmente usado para páginação. Sendo colocado no final da query.</p>
            <p><b>OBS</b>: As tabelas sempre começam do 0.</p>

            <h3>OFFSET:</h3>
            <p>Pode ser declaro quando o LIMIT for usado, caso o contrário não será usado. Ele tem a função de definir de onde começará.</p>
            <div class="code">
                <h3>Sintaxe:</h3>
                <p>LIMIT 5 OFFSET 3</p>
                <h4 style="text-align: center; font-weight: 400">Ou</h4>
                <p>LIMIT 5, 3</p>
                <p>Onde começa e quantos aparecem.</p>
            </div>
        </div>
    </section>
    
    <!-- FUNÇÃO DE AGRUPAÇÃO E AGRUPANDO SELECÇÃO DE REGISTROS -->
    <section>
        <div class="container">
            <h1>Função de agrupação e agrupando seleção de registros</h1>
            <h2>Função de agrupação: MAX, MIN e AVG:</h2>
            <p>Para usarmos essas funções teremos que colocar ela depois do <b>SELECT</b> e antes do nome da coluna. Ficando da seguinte forma.</p>
            <p><b>SELECT MIN(&lt;coluna&gt;)</b></p>

            <br>
            <h3>Explicando MIN, MAX e AVG:</h3>
            <p><ul>
                <li><b>MIN</b> - Retorna o menor valor de todos os registros com base em uma coluna;</li>
                <li><b>MAX</b> - Retorna o maior valor de todos os registros com base em uma coluna;</li>
                <li><b>AVG</b> - Retorna a média de todos os registros com base em uma coluna.</li>
            </ul></p>
            <br>
            <h3>Extras:</h3>
            <p><ul>
                <li><b>SUM (&lt;coluna&gt;)</b> - Retorna a soma dos valores de todos os registros com base em uma coluna;</li>
                <li><b>COUNT (*)</b> - Retorna a quantidade de todos os registros de uma tabela.</li>
            </ul></p>

            <h2>Agrupando seleção de registros (GROUP BY):</h2>
            <p>Para agruparmos vamos usar sua palavra-chave depois do WHERE e seus filtros, caso tenha. Sua palavra-chave é '<b>GROUP BY</b>' seguindo da ordenação, tem como função agrupar os registros com base em uma ou mais colunas cujos valores sejam iguais. Permite realizar funções de agrupação em cada subconjunto agrupado de registro.</p>
            <h4>Exemplo:</h4>
            <p><ul>
                <li>Quantidade total de alunos no curso.</li>
                <li>Quantidade total de cliques por anúncio.</li>
                <li>Total de reclamações por categoria.</li>
                <li>Total de chamados por número telefônico.</li>
            </ul></p>
            
            <h2>Filtrando seleções agrupados (HAVING)</h2>
            <p>Filtro realizado sobre o resultado dos agrupamentos (GROUP BY)</p>

            <h2>Até o momento temos a sintaxe geral:</h2>
            <p><b>SELECT &lt;coluna(s)&gt; FROM &lt;tabela(s)&gt; WHERE &lt;filtro(s)&gt; GROUP BY &lt;odernação&gt; HAVING &lt;filtro(s) sobre agrupamento&gt; LIMIT &lt;offset&gt;, &lt;limit&gt;</b></p>
        </div>
    </section>

    <!-- Atualizando registros -->
    <section>
        <div class="container">
            <h1>Atualizando registros</h1>
            <h2>UPDATE:</h2>
            <p>Ele funciona para modificiar algum valor na tabela.</p>
            <div class="code">
                <h3>Sintaxe:</h3>
                <p>UPDATE &lt;tabela&gt; SET &lt;coluna&gt; = &lt;valor&gt;,... WHERE &lt;filtro(s)&gt;</p>
            </div>

            <h2>DELETE:</h2>
            <p>Usamos para apagar alguma coluna ou podemos apagar todos os registros de uma tabela. Então, é importante sempre tomar cuidado ao usar esta função.</p>
            <div class="code">
                <h3>Sintaxe:</h3>
                <p>DELETE FROM &lt;tabela&gt; WHERE &lt;filtro(s)&gt;</p>
            </div>
            <p><b>OBS:</b> Sempre coloque algum filtro, caso contrário apagará todos os registros.</p>

            <h2>Algumas funções que podemos usar no momento de criar alguma coluna:</h2>
            <p><ul>
                <li><b>PRIMARY KEY</b> - Faz com que os valores não se repitam em outras colunas</li>
                <li><b>AUTO_INCREMENT</b> - Faz com que quando criamos uma nova coluna, pegue o valor da anterior e some com 1. Como se fosse um ID para cada registro.</li>
                <li><b>FOREIGN KEY</b> - Usamos para incrementar uma coluna estrangeira em uma coluna de outra tabela.</li>
                <li><b>REFERENCES</b> - Usado juntamente com o FOREIGN KEY para indicar a tabela estrangeira e a coluna que vai ser importada.</li>
                <li><b>CURRENT_TIMESTAMP</b> - Guarda a data e hora corrente do sgbd.</li>
            </ul></p>
            <div class="code">
                <p>FOREIGN KEY &lt;nome da coluna que vai receber&gt; REFERENCES &lt;nome da tabela estrangeira&gt; (&lt;coluna que vai ser importada&gt;)</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <? require 'footer.html'?>

</body>
</html>