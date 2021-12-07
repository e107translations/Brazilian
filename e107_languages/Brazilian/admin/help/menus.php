<?php
////////////////////////////////////////////////////////////////////
// ARQUIVOS DE TRADUÇÃO DA AJUDA DO E107                          //
// Tradução Português(Brasil) -> Comunidade e107Brasil.NET        //
//             (http://www.e107brasil.net), 2007-2009             //
////////////////////////////////////////////////////////////////////

if (!defined('e107_INIT')) { exit; }

if(IsSet($_POST['reset'])){
	if(!check_class("FAKE","",TRUE)){
		$text = "<b>Operação não permitida</b><br /><br />";
	} else {
		for($mc=1;$mc<=5;$mc++){
			$sql -> db_Select("menus","*", "menu_location='$mc' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch()){
				$sql2 -> db_Update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menus resetados no banco de dados</b><br /><br />";
		}
	}
}else{
	unset($text);
}

$text .= "
Você pode arrumar onde e em que ordem os itens de menu serão mostrados aqui. Use o menu dropdown mover os menus para cima e para baixo até que você esteja satisfeito com suas posições.
<br />
<br />
Se os menus não estão sendo atualizados adequadamente, aperte o botão refresh para atualizar.
<br />
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div><input type='submit' class='button' name='reset' value='Refresh' /></div>
</form>
<br />
<div class='indent'><span style='color:red'>*</span> indica que a visibilidade do menu foi modificada</div>
";

$ns -> tablerender("Menus", $text);

