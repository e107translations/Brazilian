<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Portuguese Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
|        $URL: ../e107_plugins/linkwords/languages/Portuguese_admin.php $
|        $Revision: 1.0 $
|        $Id: 2015/03/02 23:32:21 $
|        $Author: Barbara $
+---------------------------------------------------------------+
*/
define("LWLAN_4", "Sem palavras link definidas ainda.");
define("LWLAN_5", "Palavras");
define("LWLAN_6", "link");
define("LWLAN_7", "Ativar?");
define("LWLAN_21", "Palavra para linkar automaticamente (ou uma lista de palavras separadas por vírgula)");
define("LWLAN_26", "Áreas onde é possível ativar palavras links");
define("LWLAN_28", "Página onde as palavras links devem ser desativadas");
define("LWLAN_33", "Áreas de Título");
define("LWLAN_34", "Resumos dos itens");
define("LWLAN_35", "Corpo de texto");
define("LWLAN_36", "Descrições (links etc)");
define("LWLAN_40", "Títulos criados por usuários (ex.: nos fóruns)");
define("LWLAN_41", "Corpo de texto digitado por usuário (ex.: fórum)");
define("LWLAN_50", "Dica de tela");
define("LWLAN_52", "Apenas Palavras Link");
define("LWLAN_53", "Dica de tela apenas");
define("LWLAN_54", "Palavra Link e Dica de tela");
define("LWLAN_55", "Abrir link em uma nova janela");
define("LWLAN_58", "Preferências do gancho convertidos para o formato 0.8");
define("LWLAN_59", "Ativar funcionalidade Ajax");
define("LWLAN_64", "Suprimir link na página atual");
define("LWLAN_66", "Classe CSS personalizada");
define("LWLAN_67", "Máx. links/dicas");
define("LAN_LW_HELP_01", "[b]Áreas a ativar[/b]<br />muitas áreas de texto têm um \'contexto\' associado e as palavras links só serão apresentadas nas áreas correspondentes neste contexto.<br /><br />[b]Desativar Palavras Links[/b]<br />Palavras Links podem ser desativadas em páginas específicas, ou páginas correspondentes a um padrão. Digite esses padrões aqui (mesma sintaxe dos menus), um padrão por linha. Se o padrão terminar com um \'!\', vai corresponder a um \'fim de consulta\', e geralmente é uma correspondência exata. Caso contrário, qualquer URL contendo a sequência especificada irá corresponder. <br />Note que as palavras links <i>nunca</i> são mostradas nas páginas de administração.<br /><br />[b]Ativar Funcionalidade Ajax[/b]<br />As dicas de tela podem usar Ajax para obter informações para exibição. Isso geralmente requer algum código personalizado.<br /><br />[b]Suprimir link na página atual[/b]<br />Normalmente não faz sentido para o usuário clicar em um link se ele já está na página. Marque esta caixa para remover a opção.<br />");
define("LAN_LW_HELP_02", "Define as palavras que se tornam links clicáveis, ou que exibição do texto no mouseover, aqui<br /><br /><b><u>Palavra para Link</u></b><br />Isto é sensível a maiúsculas e minúsculas. Para mapear várias palavras para os mesmos links e dicas de ferramentas, separe-as com vírgulas (sem espaços)<br /><br /><b><u>Link</u></b><br />Definir um link clicável aqui. Se for um link externo, ele [i] deve[/i] começar com \'http://\'. Se for um link neste site, podem ser utilizadas as constantes normais {e_XXX}<br /><br /><b><u>Dica</u></b><br />Isto define o texto a ser exibido quando o usuário passa o mouse sobre a palavra.<br /><br /><b><u>ID da Palavra Link (ID da dica de tela)</u></b><br /><br />Isto define um ID numérico opcional para ser usado com o processamento Ajax. Se estiver em branco, o número do registro do banco de dados é usado. <br /><br /><b><u>Ativar? </u></b><br />Define quais opções estão ativas.");
define("LAN_LW_HELP_03", "Normalmente, é inútil para o usuário clicar em um link se já estiver na página para a qual ele está vinculado. Quando esta opção está desligada, as palavras-chave não são acionadas neste caso.");
define("LAN_LW_HELP_04", "Os links de palavras podem ser desativados em páginas específicas ou páginas que correspondem a um padrão. Insira-os aqui (mesma sintaxe da visibilidade do menu), um padrão por linha. Se o padrão terminar em '!', Isso corresponde ao 'fim da consulta' e geralmente é uma correspondência exata. Caso contrário, qualquer URL contendo a string especificada corresponderá.");
define("LAN_LW_HELP_05", "Adicionará essa classe a todos os links gerados.");
define("LAN_LW_HELP_10", "Aqui você pode definir as palavras que se tornam links clicáveis ou que exibem texto ao passar o mouse.");
define("LAN_LW_HELP_11", "Isso não faz distinção entre maiúsculas e minúsculas. Para mapeamento de várias palavras para os mesmos links e dicas, separe-os com vírgulas (sem espaços)");
define("LAN_LW_HELP_12", "Defina um link clicável aqui. Se for um link externo, DEVE começar com 'http(s)://'. Se for um link dentro deste site, as constantes normais {e_XXX} podem ser usadas.");
define("LAN_LW_HELP_13", "Define quais opções estão ativas.");
define("LAN_LW_HELP_14", "Isso define o texto a ser exibido quando o mouse do usuário passa sobre a palavra.");
define("LAN_LW_HELP_15", "Quantidade máxima das mesmas palavras-chave. Deve ser um número positivo. Usado quando a mesma palavra é encontrada várias vezes em um trecho de texto.");
define("LAN_LW_HELP_16", "Isso define um ID numérico opcional a ser usado com o processamento Ajax. Deve ser um número positivo. Se em branco, o número do registro do banco de dados é usado");
define("LAN_LW_HELP_17", "Quando ativado, o link é aberto em uma nova guia/janela do navegador");
