<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "Nesta área você pode configurar 3 menus<br>
<b> Menu de novos Artigos</b> <br>
Digite um número, por exemplo '5' no primeiro campo para mostrar os primeiros 5 artigos, deixe em branco para ver todos.  Você pode configurar o título para o link que será mostrado para os demais artigos no segundo campo, então você pode deixar a última opção em branco se você não quiser criar um link, por exemplo: 'Todos os artigos'<br>
<b> Menus de Comentários/Fórum</b> <br>
O número de comentários padrão é 5, o número de caracteres padrão é 10000. O 'postfix' serve para cortar uma linha muito longa.  Isto irá cortar o texto, uma boa opção é que fique com '...' no final.  Cheque o tópico se você quiser ver todo o texto.<br>

";
$ns -> tablerender("Configuração de Menus", $text);

