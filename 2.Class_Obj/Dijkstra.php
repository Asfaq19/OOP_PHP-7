<?php
	
	class Dijkstra{

		protected $route;

		public function __construct($route)
		{
			$this->route = $route;
		}

		public function shortestPath($source,$target)
		{
			echo "Shortest route from {$source} to {$target}: ";

			$paths = array();

			$previous_paths = array();

			$queue = new SplPriorityQueue();

			foreach($this->route as $v=>$adj)
			{
				$paths[$v] = INF;
				$previous_paths[$v] = null;

				foreach ($adj as $w=>$distance)
				{
					$queue->insert($w,$distance);
				}
			}
			$paths[$source] = 0;

			while(!$queue->isEmpty())
			{
				$u = $queue->extract();

				if(!empty($this->route[$u]))
				{
					foreach($this->route[$u] as $v=>$distance)
					{
						$alt = $paths[$u] + $distance;

						if($alt < $paths[$v])
						{
							$paths[$v] = $alt;
							$previous_paths[$v] = $u;
						}
					}
				}
			}

			$stack = new SplStack();
			$via = $target;
			$dist = 0;

			while (isset($previuos_paths[$via]) && $previuos_paths[$via]) 
			{
				$stack->push($via);
				$dist += $this->route[$via][$previous_paths[$via]];
				$via = $previous_paths[$via];
			}

			if($stack->isEmpty())
			{
				echo "No route from {$source} to {$target}";
			}
			else
			{
				$stack->push($source);
				$sep = '';

				foreach($stack as $v)
				{
					echo $sep,$v;
					$sep = '->';
				}
				echo "($dist KM)<br>";
			}
		}

	}

	$itenary = new Dijkstra($route);
	$itenary->shortestPath('Dhaka','Chattagram');
	$itenary->shortestPath('Rajshahi','Habiganj');
	$itenary->shortestPath('Chattagram','Rajshahi');
	$itenary->shortestPath('Habiganj','Mymensingh');
	$itenary->shortestPath('Rajshahi','Coxsbazar');
?>