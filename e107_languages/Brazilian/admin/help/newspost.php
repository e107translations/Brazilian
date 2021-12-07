<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$caption = "Postagem de Notícia";
$text = "<b>Geral</b><br />
O corpo da notícia será mostrado na página principal, a notícia estendida poderá ser lida quando o usuário clicar no link 'Leia mais'.
<br />
<br />
<b>Mostrar apenas o título</b>
<br />
Ative isto para mostrar apenas os títulos das notícias na primeira página, eles serão um link para a história completa.
<br /><br />
<b>Ativação</b>
<br />
Se você configurar uma data para começo e/ou fim para o item de notícia, isso irá fazer com que o item fique disponível apenas entre essas datas.
";
$ns -> tablerender($caption, $text);

