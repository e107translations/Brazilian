<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "Você pode puxar notícias externas de outros sites que possuem o sistema de (backend) RSS no seu site.<br />Digite o caminho completo para o arquivo backend (ex.: http://e107.org/news.xml). Você poderá adicionar um caminho para uma imagem caso não goste da imagem padrão, ou ela não precisa ser definida.  Você pode ativar e desativar as notícias externas via backend se o site estiver off-line.<br /><br />Para ver as notícias externas no seu site, certifique-se que o headlines_menu está ativo na sua página de menus.";

$ns -> tablerender("Notícias Externas", $text);

