<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "Nesta tela você poderá criar menus de usuários ou páginas customizadas com seu próprio conteúdo.<br /><br /><b>Notas Importantes</b><br />
- para usar esta função você precisa fazer CHMOD 777 nas pastas /e107_plugins/custom/ e em /e107_plugins/custompages/.
<br />
- você poderá usar código HTML usando ' (aspas simples) para atributos HTML!!! (Usando \" para HTML attributes irá danificar seu menu/página)
<br /><br />
<i>Nome do arquivo de Menu/Página</i>: O nome de seu menu ou página customizada, o menu será salvo como 'nome.php' na pasta ".e_PLUGIN."custom/ <br />
a página será salva como 'nome.php' na pasta ".e_PLUGIN."custompages/ <br /><br />
<i>Título do Menu/Página</i>: O texto mostrado na barra de título do item de menu ou no título da página<br /><br />
<i>Texto do Menu/Página</i>: Os dados atuais que serão mostrados no corpo do menu ou como uma página normal (Para usuários avançados: não é preciso adicionar linhas para chamar o arquivo class2.php ou para mostrar o HEADER ou FOOTER... serão automaticamente adicionados), pode ser texto, imagens, etc.";

$ns -> tablerender(Menus de Usuários, $text);
?>
