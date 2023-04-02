<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <ol>
        <li>DOUBLE QUOTED</li>
            <p>Aspas duplas ""</p>
            <p>Concatenação de strings com ponto ( . )</p>
            <p>Nas aspas duplas, há interpretação do conteúdo! <small>Exemplo: Quando colocado o código de um emoticon</small></p>

        <li>SINGLE QUOTED</li>
            <p>Aspas simples ''</p>
            <p>Concatenação de strings com ponto ( . )</p>
            <p>Nas aspas simples, <strong>NÃO HÁ</strong> interpretação do conteúdo!</p>

        <li>Heredoc</li>


        <li>Nowdoc</li>


    </ol>
    <p>Sequência de escape:</p>
    <ul>
        <li>\" - Código para aspas duplas</li>
        <li>\n - Nova linha</li>
        <li>\t - Tabulação horizontal</li>
        <li>\\ - Barra Invertida</li>
        <li>\$ - Cifrão</li>
        <li>\u{} - Codepoint Unicode (Apresentar emojis ou símbolos)</li>
    </ul>
    <?php 
        // 0x = Hexadecimal  0b = Binário  0 = Octal

        /* $num = 0x2B;
        echo "O valor da variável é $num!"; */

        
    ?>
</body>
</html>