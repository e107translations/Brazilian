<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Brazilian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
|        $URL: ../e107_languages/Portuguese/admin/lan_eurl.php $
|        $Revision: 1.0 $
|        $Id: 2015/02/15 16:12:26 $
|        $Author: Barbara - barbara.blog.br $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Gerenciar URLs do Site");
define("LAN_EURL_NAME_CONFIG", "Perfis");
define("LAN_EURL_NAME_ALIASES", "Pseudônimos (Aliases)");
define("LAN_EURL_NAME_SETTINGS", "Configurações Gerais");
define("LAN_EURL_NAME_HELP", "Ajuda");
define("LAN_EURL_EMPTY", "A lista está vazia");
define("LAN_EURL_LEGEND_CONFIG", "Escolha o perfil da URL por área de site");
define("LAN_EURL_LEGEND_ALIASES", "Configurar a base de URL de pseudônimos pelo perfil da URL");
define("LAN_EURL_DEFAULT", "Padrão");
define("LAN_EURL_PROFILE", "Perfil");
define("LAN_EURL_INFOALT", "Informação");
define("LAN_EURL_PROFILE_INFO", "Informação de Perfil não disponível");
define("LAN_EURL_LOCATION", "Localização do Perfil");
define("LAN_EURL_LOCATION_NONE", "Arquivo de Configuração indisponível");
define("LAN_EURL_FORM_HELP_DEFAULT", "Pseudônimo (Alias) quando estiver em idioma padrão.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Valor padrão é");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias quando em");
define("LAN_EURL_FORM_HELP_EXAMPLE", "URL base");
define("LAN_EURL_ERR_ALIAS_MODULE", "Pseudônimo (Alias) &quot;%1\$s&quot; não pode ser salvo - existe uma URL de perfil no sistema com o mesmo nome. Favor escolher outro pseudônimo para o perfil URL do sistema &quot;%2\$s&quot;");
define("LAN_EURL_SETTINGS_PATHINFO", "Remover nome do arquivo da URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Associar nome ao Root (namespace)");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Escolha que área do site será conectada à sua URL base do site. Exemplo: Quando as Notícias são o nome (namespace) no root http://seusite.com.br/Titulo-da-Noticia será associado com a notícia (a visualização da página do item será resolvida)");
define("LAN_EURL_SETTINGS_REDIRECT", "Página de redirecionamento do sistema não encontrada");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Se configurado para falso, a página não encontrada será renderizada diretamente (sem o navegador redirecionar)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Tipo de Criação automatizada de SEF String");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Escolha como será a criação automática da string SEF a partir do valor do título (ex.: nas notícias, páginas customizadas, etc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Basta prendê-lo");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "hifeniza-com-minusculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Hifeniza-Com-Primeira-Maiuscula");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Hifeniza-sem-mudancas-de-MAIUSCULAS-e-Minusculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "sublinha_com_letras_minusculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Sublinha_Com_Primeira_Letra_Maiuscula");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Sublinha_sem_MUDAR_o_que_foi_digitado");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "sinal+de+soma+com+letras+minusculas");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Sinal+Soma+Com+Primeira+Maiuscula");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Sinal+soma+sem_mudar+DIGITACAO");
define("LAN_EURL_MODREWR_DESCR", "Remove o nome dos arquivos de scripts de suas URL (index.php/). Você vai precisar do mod_rewrite instalado e rodando no seu servidor (Apache Web Server). Depois de ativar esta configuração na sua pasta root do site, renomeie o arquivo htaccess.txt para .htaccess e modifique a diretiva <em>&quot;RewriteBase&quot;</em> se necessário.");
define("LAN_EURL_MENU", "URLs do Site");
define("LAN_EURL_MENU_CONFIG", "Perfils de URL");
define("LAN_EURL_MENU_ALIASES", "Aliases/Pseudônimos");
define("LAN_EURL_MENU_SETTINGS", "Configurações");
define("LAN_EURL_MENU_HELP", "Ajuda");
define("LAN_EURL_UC", "Em Construção");
define("LAN_EURL_CORE_MAIN", "Nomes (namespace) da raiz (root) do site - pseudônimos (alias) não estão sendo usados");
define("LAN_EURL_FRIENDLY", "Amigável");
define("LAN_EURL_LEGACY", "Função das URLs diretas.");
define("LAN_EURL_REWRITE_LABEL", "URLs Amigáveis");
define("LAN_EURL_REWRITE_DESCR", "URLs para sistema de busca amigável");
define("LAN_EURL_CORE_NEWS", "Notícias");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "URLs totalmente amigáveis (sem performance e mais amigável)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "URLs Amigáveis sem ID (sem performance, mais amigável)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstra análise de link manual e montagem.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "URLs Amigáveis com ID (performance melhorada)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstra análise de link automático e montagem baseada em regras de rotinas predefinidas.");
define("LAN_EURL_CORE_USER", "Usuários");
define("LAN_EURL_USER_REWRITE_LABEL", "URLs Amigáveis");
define("LAN_EURL_USER_REWRITE_DESCR", "Ferramenta de Busca e URLs Amigáveis");
define("LAN_EURL_CORE_PAGE", "Páginas Customizadas");
define("LAN_EURL_PAGE_SEF_LABEL", "URLs Amigáveis com ID (performance)");
define("LAN_EURL_PAGE_SEF_DESCR", "Ferramenta de Busca e URLs Amigáveis.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "URLs Amigáveis sem ID (sem performance, mais amigável)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Sistema de Busca e URLs Amigáveis.");
define("LAN_EURL_CORE_SEARCH", "Busca");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL de Busca Padrão");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Função das URLs diretas.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "URL Amigável");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "URLs padrão do sistema");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs para páginas como Página Não Encontrada, Acesso Negado, etc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "URLs Amigáveis do Sistema");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs para páginas como Página Não Encontrada, Acesso Negado, etc.");
define("LAN_EURL_CORE_INDEX", "Primeira Página");
define("LAN_EURL_CORE_INDEX_INFO", "Primeira Página não pode ter um alias (pseudônimo).");


define("LAN_EURL_SURL_UPD", "SEF URLs foram atualizados.");
define("LAN_EURL_SURL_NUPD", "SEF URLs não foram atualizadas.");
define("LAN_EURL_MENU_PROFILES", "Perfis");
define("LAN_EURL_REBUILD", "Reconstruir");
define("LAN_EURL_REGULAR_EXPRESSION", "Expressão regular");
define("LAN_EURL_KEY", "Chave");
define("LAN_EURL_TABLE", "Tabela");

