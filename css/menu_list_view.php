<?php
	/*$con=mysql_connect("localhost", "root", "") or die('Server connexion not possible.');
mysql_select_db("adminfrench",$con) or die('Database connexion not possible.');
$qry="SELECT * FROM categorylist where status=1";
$result=mysql_query($qry,$con);*/
    include "../administration/DBConfig.php";
    $con=mysql_connect($host, $user, $pass) or die('Server connexion not possible.');
    mysql_select_db($db,$con) or die('Database connexion not possible.');
    $qry="SELECT * FROM categorylist where status=1 ORDER BY weight ASC";
    /*$qry = "select id, cname, weight, 
			pid, url, 
			status from categorylist 
			ORDER BY weight ASC";*/
    $result=mysql_query($qry,$con);
    $arrayMenu = array();
    while($row = mysql_fetch_assoc($result)){
        $arrayMenu[$row['id']] = array( "id" => $row['id'], "pid" => $row['pid'], "url" => $row['url'],"name" => $row['cname'], "single" => $row['single']);
}



    //createTree($arrayCategories, 0);
	function createTree($array, $curParent, $currLevel = 0, $prevLevel = -1) {
        foreach ($array as $categoryId => $category) {
            
            if ($curParent == $category['pid']) {
                	
				
				if($category['pid']==0) $class="class='cd-navigation'"; else $class="class='sub-menu' style='display:none;'"; 


				if ($currLevel > $prevLevel) echo "<ul ".$class.">";
					//$link = "#catalog.php?&category=$categoryId";
					$link = $category['url'];
					
					if ($link == 0) { 
						$linker = "#0";
						$subclass = "item-has-children";
						$linkclass = "ui-button";
					}else { 
						$linker = "#catalog.php?&category=$categoryId";
						$subclass = "cd-single-item-wrapper";
						$linkclass = "navlink";
					}
					if ($currLevel == $prevLevel) echo " </li> ";
               // if(($category['pid']==0) && ($category['single']==0)) {
				/* if(($category['pid'] == 00) && ($category['single'] == 0)) {
                  	$class="cd-navigation";
					$class2 ="item-has-children";
                  	$style="display:none";
					$link = "#0";
				}
				
				else {
                  	
					$class="sub-menu";
                    $class2 ="cd-navigation cd-single-item-wrapper";
					$style="display:block";
					$link = "#catalog.php?&category=$categoryId";
				}*/
				//if ($currLevel = $prevLevel) { $prevLevel < $currLevel; }
         
				/*if ($currLevel > $prevLevel) echo "<ul class='".$class."' style='".$style."'>";*/
				
				//if ($category['single'] == 1) echo "<ul class='cd-navigation' style='display:block;'>";
				
              /*  if ($currLevel = $prevLevel) {
                    echo "<li id=".$category['pid']." class='".$class2."' 
					data-expanded-icon='carat-u' data-collapsed-icon='carat-d'>
					<a href='".$link."'>".$category['name']."</a>";
                }*/


 
				$cname = ucwords(strtolower($category['name']));
							
					   if ($currLevel = $prevLevel) {
                    echo "<li id=".$category['pid']." class=".$subclass."
					data-expanded-icon='carat-u' data-collapsed-icon='carat-d'>
					<a class=".$linkclass." href=".$linker.">".$cname."</a>";
			   }		
							
							
            /*   if ($currLevel = $prevLevel) {
                    echo "<li id=".$category['pid']." class=".$subclass."
					data-expanded-icon='carat-u' data-collapsed-icon='carat-d'>
					<a class=".$linkclass." href=".$linker."  @charset='utf-8'>".$category['name']."</a>";
			   }*/
                
				
                if ($currLevel > $prevLevel) {
                    $prevLevel = $currLevel;
					
                }

                $currLevel++;
                createTree ($array, $categoryId, $currLevel, $prevLevel);
                $currLevel--;
            }

            ?>
<?php /*?></pre><?php */?>
<?php
		}

        
        if ($currLevel == $prevLevel) echo " </li> </ul> ";
    }

    ?>
<div id="nav">
<?php
    
    if(mysql_num_rows($result)!=0){
        createTree($arrayMenu, 0);
    }

    ?>
</div>