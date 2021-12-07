<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

$caption = "Fórum";
$text = "<b>Geral</b><br />
Use esta tela para criar ou editar seus fóruns<br />
<br />
<b>Fóruns Principais</b><br />
Um fórum principal (pai) é o que traz outros fóruns sob ele, isso faz com que um layout simples facilite a navegação nos fóruns.
<br /><br />
<b>Acessibilidade</b>
<br />
Você pode configurar seus fóruns para apenas serem acessíveis a certos visitantes.  Uma vez configurada a 'classe' do visitante, você poderá classificar e permitir que aqueles visitantes tenham acesso ao fórum. Dessa maneira, você pode configurar fóruns principais ou fóruns individuais.
<br /><br />
<b>Moderadores</b>
<br />
Clique nos nomes dos administradores listados para dar a eles status de moderador no fórum.  O administrador precisa ter permissões de moderador no fórum para ser listado aqui.
<br /><br />
<b>Ranks/Níveis</b>
<br />
Configure os níveis (ranks/classificação) dos usuários aqui. Se os campos de imagens foram preenchidos, as imagens serão usadas, para usar um nome no ranking, digite um nome correspondente à imagem no campo em branco..<br />O limite é o número de pontos que o usuário precisa ganhar para mudar de nível.";
$ns -> tablerender($caption, $text);
unset($text);

