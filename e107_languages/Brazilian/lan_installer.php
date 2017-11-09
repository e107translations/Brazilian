<?php
/*
+---------------------------------------------------------------+
|        e107 website system
|        ../../e107_languages/Portuguese_Brazilian/lan_installer.php
|        (Portuguese_Brazilian language file)
|
|        Tradução Português(Brasil) -> Comunidade e107Brasil.NET
|        (http://www.e107brasil.net), 2007-2009
|
|        ©Steve Dunstan 2001-2002
|        http://e107.org
|        jalist@e107.org
|
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/
define("LANINS_001", "Instalação do e107");
define("LANINS_002", "Passo");
define("LANINS_003", "1 (um)");
define("LANINS_004", "Seleção do Idioma");
define("LANINS_005", "Por favor escolha o idioma que deverá ser usado no processo de instalação");
define("LANINS_007", "4 (quatro)");
define("LANINS_008", "Checando as versões PHP e MySQL e as permissões de arquivos");
define("LANINS_009", "Refazer teste de permissão dos arquivos");
define("LANINS_010", "Arquivo sem permissão de escrita:");
define("LANINS_010a", "Pasta sem permissão de escrita:");
define("LANINS_012", "As funções de MySQL não parecem existir. Isto significa provavelmente que ou a extensão de MySQL PHP não está instalada ou sua instalação de PHP não esteve compilada com sustentação do MySQL.");
define("LANINS_013", "Não foi possível determinar a versão do MySQL. Isto não é um erro fatal, portanto prossiga com a instalação, mas fique ciente que o e107 requer MySQL maior ou igual a 3.23 para funcionar corretamente.");
define("LANINS_014", "Permissão dos Arquivos");
define("LANINS_015", "Versão do PHP");
define("LANINS_017", "Passou!");
define("LANINS_018", "Certifique-se que todos os arquivos listados possuem permissões de escrita pelo servidor.  Isto envolve normalmente CHMOD 777 mas pode variar - contate seu servidor caso encontre problemas.");
define("LANINS_019", "A versão do PHP instalado no seu servidor não é capaz de suportar o e107. O e107 requer PHP versão ".MIN_PHP_VERSION." para funcionar corretamente. Atualize a versão do PHP ou contate seu servidor para fazer a atualização.");
define("LANINS_021", "2 (dois)");
define("LANINS_022", "Detalhes do servidor MySQL");
define("LANINS_023", "Indique aqui os detalhes do seu MySQL. Se tem privilégios de 'root' pode criar uma nova base de dados clicando na caixa. Caso contrário, crie a base de dados ou use uma pré-existente. Se você só tem uma base de dados, use um prefixo de forma que outros scripts possam partilhar a mesma base. Se não sabe os seus dados de MySQL contate o administrador do servidor.");
define("LANINS_024", "Servidor MySQL:");
define("LANINS_025", "Username do MySQL:");
define("LANINS_026", "Senha do MySQL:");
define("LANINS_027", "Banco de dados MySQL:");
define("LANINS_028", "Criar Banco de Dados?");
define("LANINS_029", "Prefixo da tabela:");
define("LANINS_030", "O servidor MySQL que você deseja que o e107 use. Este pode também incluir o número da porta, exemplo hostname:porta ou o caminho para um local socket, exemplo: /caminho/para/socket para o localhost.");
define("LANINS_031", "O nome de usuário que você deseja que o e107 use para conectar ao servidor do MySQL");
define("LANINS_032", "A senha do usuário escolhido");
define("LANINS_033", "A base de dados do MySQL que você deseja alocar o e107. Se tiver permissão você poderá optar por criar a base de dados automaticamente se ela já não existir.");
define("LANINS_034", "O prefixo que você deseja que o e107 use quando criar as tabelas. É muito útil quando se instala múltiplos e107 ou outros sistemas em uma base de dados.");
define("LANINS_036", "3 (três)");
define("LANINS_037", "Verificação de conexão com MySQL");
define("LANINS_038", "e Criação do Banco de Dados");
define("LANINS_039", "Favor ter certeza de que preencheu todos os campos. Os mais importantes são Servidor MySQL, Nome de Usuário do MySQL e Base de Dados MySQL (Esses são sempre requeridos pelo servidor MySQL)");
define("LANINS_040", "Erros");
define("LANINS_041", "O e107 não conseguiu estabelecer ligação com o servidor MySQL usando a informação indicada. Por favor, volte à página anterior e assegure-se de que o informado está correto.");
define("LANINS_042", "Conexão com o MySQL estabelecida e verificada.");
define("LANINS_043", "Impossível criar a base de dados. Por favor, assegure-se de que existem privilégios corretos para criar a base no servidor.");
define("LANINS_044", "Banco de dados criado com sucesso.");
define("LANINS_045", "Por favor clique no botão para passar ao próximo estágio.");
define("LANINS_046", "5 (cinco)");
define("LANINS_047", "Detalhes de Administrador");
define("LANINS_048", "Voltar ao passo anterior");
define("LANINS_049", "As duas senhas que você inseriu não são as mesmas. Por favor volte e tente outra vez.");
define("LANINS_050", "Extensão XML");
define("LANINS_051", "Instalado");
define("LANINS_052", "Não Instalado");
define("LANINS_055", "Confirmação da Instalação");
define("LANINS_056", "6 (seis)");
define("LANINS_057", "O software e107 tem agora toda a informação de que necessita para completar o processo de instalação. Clique no botão para criar as tabelas da base e gravar todos os seus dados.");
define("LANINS_058", "7 (sete)");
define("LANINS_060", "Impossível ler o arquivo sql. Por favor, assegure-se de que o arquivo [b]core_sql.php[/b] existe na pasta [b]/e107_core/sql[/b].");
define("LANINS_061", "O software e107 não conseguiu criar todas as tabelas necessárias à base de dados. Por favor, limpe a base de dados e corrija qualquer problema antes de tentar de novo.");
define("LANINS_069", "O software e107 foi instalado com sucesso!<br />Por razões de segurança é preciso agora configurar os privilégios do arquivo <br />[b]e107_config.php[/b] para 644.<br />Por favor, DELETE também o arquivo install.php do seu servidor, depois de ter clicado no botão abaixo");
define("LANINS_070", "O software e107 não conseguiu gravar o arquivo principal da configuração no seu servidor.<br />Por favor, assegure-se de que o arquivo [b]e107_config.php[/b] tem as permissões corretas");
define("LANINS_071", "Finalização da Instalação");
define("LANINS_072", "Nome do Usuário de Admin");
define("LANINS_073", "Este é o login que você usará para entrar no site. Se você desejar poderá usá-lo como nome de usuário também.");
define("LANINS_074", "Nome de Exibição do Admin");
define("LANINS_076", "Senha de Admin");
define("LANINS_077", "Digite a senha de administrador aqui");
define("LANINS_078", "Confirme a Senha de Admin");
define("LANINS_079", "Digite a senha do administrador novamente para confirmação");
define("LANINS_080", "E-Mail do Admin");
define("LANINS_081", "Insira o endereço de e-mail");
define("LANINS_083", "Erro de MySQL reportado:");
define("LANINS_084", "O instalador não conseguiu estabelecer uma conexão com a base de dados");
define("LANINS_085", "O instalador não pôde selecionar a base de dados:");
define("LANINS_086", "Nome de usuário do Admin, senha de Admin e Email de Admin são [b]campos requeridos[/b]. Favor retornar à última página e certificar que a informação correta foi digitada.");
define("LANINS_105", "Um nome de banco de dados ou prefixo começando com alguns dígitos seguidos por \'e\' ou \'E\' não são aceitáveis. Um banco de dados (ou prefixo) não pode ser vazio.");
define("LANINS_106", "AVISO - O e107 não pode escrever nos diretórios ou arquivos listados. Isto não irá parar a instalação do e107; porém, significa que algumas funções não estarão disponíveis. Você precisará mudar as permissões de arquivos para usar essas funções mais tarde.");
define("LANINS_107", "Nome do Site");
define("LANINS_108", "ex.: 'Meu Blog'");
define("LANINS_109", "Tema do Site");
define("LANINS_111", "Incluir Configurações/Conteúdo");
define("LANINS_112", "Reproduzir rapidamente o visual do preview do tema ou demo. (Se disponível)");
define("LANINS_113", "Favor digitar um nome para o site");
define("LANINS_114", "Favor selecionar um tema");
define("LANINS_115", "Nome do Tema");
define("LANINS_116", "Tipo de Tema");
define("LANINS_117", "Preferências do Site");
define("LANINS_118", "Instalar Plugins");
define("LANINS_119", "Instalar todos os plugins que o tema talvez precise.");
define("LANINS_120", "8 (oito)");
define("LANINS_121", "e107_config.php já existe! Não é um arquivo vazio!");
define("LANINS_122", "É possível que você já possua uma instalação");
define("LANINS_123", "Opcional: Seu nome público ou pseudônimo. Deixe em branco para usar o nome de usuário");
define("LANINS_124", "Favor escolher  uma senha de pelo menos 8 caracteres");
define("LANINS_125", "O e107 foi instalado com sucesso!");
define("LANINS_126", "Por questões de segurança, você deve configurar as permissões do arquivo e107_config.php para 644 novamente.");
define("LANINS_127", "O banco de dados [x] já existe. Sobrescrevê-lo? (qualquer dado existente será perdido)");
define("LANINS_128", "Sobrescrever");
define("LANINS_129", "Banco de dados não encontrado.");
define("LANINS_134", "Instalação");
define("LANINS_135", "de");
define("LANINS_136", "Banco de dados existente excluído");
define("LANINS_137", "Encontrado o banco de dados existente");
define("LANINS_141", "Por favor, preencha o formulário abaixo com seus dados de MySQL. Se você não sabe esta informação, por favor, entre em contato com seu provedor de hospedagem. Você pode passar o mouse sobre cada campo para obter informações adicionais.");
define("LANINS_142", "IMPORTANTE: Por favor, renomeie e107.htaccess para. htaccess");
define("LANINS_144", "IMPORTANTE: Por favor copie e cole o conteúdo da [b]e107.htaccess[/b] em seu arquivo. htaccess [/ b] [b]. Por favor, tome cuidado para não substituir quaisquer dados existentes que podem ser nele.");
define("LANINS_145", "e107 v2. x requer PHP [x] ser instalado. Por favor, entre em contato com seu anfitrião ou ler as informações em [y] antes de continuar.");
