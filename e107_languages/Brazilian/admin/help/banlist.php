<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$caption = "Banindo usuários do seu site";
$text = "Você pode banir usuários do seu site nesta tela.<br />
Digite um endereço IP ou uma faixa de IPs para banir diversos endereços.  Você poderá também digitar um endereço de email para bloquear um usuário registrado como membro do seu site.<br /><br />
<b>Banindo por endereço de IP:</b><br />
Digitando o endereço IP 123.123.123.123 irá banir o usuário que tem este IP e ele não poderá mais visitar o seu site.<br />
Digitando o endereço IP 123.123.123.* irá banir qualquer usuário que esteja na faixa desse IP, impedindo-os de visitar o seu site.<br /><br />
<b>Banindo por endereço de email</b><br />
Digitando o endereço de email foo@bar.com irá parar o usuário um que estiver usando este email na lista de membros do seu site.<br />
Digitando *@bar.com irá parar qualquer um que use este domínio no endereço de email nos membros registrados no seu site.";
$ns -> tablerender($caption, $text);
?>
