<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Arquivo do Sistema (Core)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Arquivo do Sistema (Passou no teste de Integridade)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Arquivo do Sistema (Falhou no teste de Integridade)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Não é arquivo do sistema</div>";
$ns -> tablerender("Arquivo-Chave", $text);

$text = "O inspetor de arquivos escaneou e analisou os arquivos no servidor do seu site.  Quando o inspetor encontra um arquivo de sistema do e107 ele checa a consistência do mesmo, para ter certeza que ele não está corrompido.";

$ns -> tablerender("Ajuda do Inspetor de Arquivos", $text);
?>

