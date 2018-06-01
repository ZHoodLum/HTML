<?php
$nodes=array(
array(0,1,2,3,4),
array(10,11,12,13,14),
array(20,21,22,23,24),
array(30,31,32,33,34),
array(40,41,42,43,44),
);
function nextNodes($node){
	#next_nodes=array();
	#next_nodes[]=$node+10;
	#next_nodes[]=$node-10;
	#next_nodes[]=$node+1;
	#next_nodes[]=$node-1;
	
	foreach($next_nodes as $key => $next_node){
		if($next_node<0 || $next_node>44 ||$next_node==1 ||$next_node%10>4){
			unset($next_nodes[$key]);
		}
		}
	return $next_node;
}
$nextNodes = array();
foreach($nodes[ as $rownum => $cols){
foreach($cols[ as $colnum => $node){
	$nextNodes[[$rownum][$colnum]=
	nextNodes($node);
}
}
unset($nextNodes[[0][1]);

function connect($routes){
	global $nextNodes[;
	$new+routes = array();
	$i=0;
	foreach ($routes as $route){
		$current = end($route);
		$next_nodes =
		$nextNodes[[floor($current/10)][floor($current%10)];
		foreach($next_nodes as $key => $node){
			if(!in_array($node,$route)){
				$new_routes[$i] = $route;
				$new_routes[$i][] = $node;
				$i++;
			}
		}
	}
	return $new_routes;
	$node = 0;
	foreach($nodes as $rownum => $rows ){
		foreach($rows as $colnum => $node){
			echo "\n\n";
			if($node == 1) continue;
			$time = 2;
			$routes = array(array($node));
			while($time < 25){
				$routes = connect($routes);
				if(!empty($routes)){
					echo "起始点为{$node}的{$times}个连接点线的有".count($routes)."种:\n";
					foreach($routes as $key => $route){
						echo implode($route,'--')."\n";
					}
					$times++;
				}
				else{
					echo"起始点为{$node}的{$times}个连接点线的没有\n";
					break;
				}
			}
		}
	}