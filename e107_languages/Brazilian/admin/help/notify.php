<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "Notificação envia e-mails de avisos quando algum evento no e107 ocorre..<br /><br />
Por exemplo, configurando 'Banir IP por flood' para usuários da classe 'Admin' e todos os administradores receberão um e-mail avisando que o seu site foi 'floodado'.<br /><br />
Você pode também, como outro exemplo, configurar 'Notícia postada por admin' para a classe 'Membros' e todos os usuários irão receber um e-mail avisando que uma nova notícia foi postada no site.<br /><br />
Se você preferir que as notificações de e-mail sejam enviadas a um e-mail alternativo, selecione a opção 'Email' e digite o endereço de e-mail no campo.";

$ns -> tablerender("Notificação - Ajuda", $text);


