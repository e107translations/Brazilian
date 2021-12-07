<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "Nesta página você poderá adicionar artigos em página única ou em múltiplas páginas.<br />
 Para um artigo em múltiplas páginas, separe cada página com o texto [newpage], por exemplo <br /><code>Teste1 [newpage] Teste2</code><br /> irá criar duas páginas no artigo com 'Teste1' na página 1 e 'Teste2' na página 2.
<br /><br />
Se seu artigo contém tags/códigos HTML que você quer preservar, coloque-os entre os comandos  [html] [/html]. Por exemplo, se você digitar o texto '&lt;table>&lt;tr>&lt;td>Olá &lt;/td>&lt;/tr>&lt;/table>' no seu artigo, uma tabela será mostrada contendo a palavra Olá. Se você digitar '[html]&lt;table>&lt;tr>&lt;td>Olá &lt;/td>&lt;/tr>&lt;/table>[/html]' o código que você digitou será mostrado e não a tabela que o código gera.";
$ns -> tablerender("Ajuda do Artigo", $text);

