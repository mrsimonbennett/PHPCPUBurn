<?php

namespace MrSimonBennett\PHPCPUBurn;

class Burn
{
	public function __construct()
	{

	}
	public function Run($runTime = -1)
	{
		$start = microtime(true);
		
		if($runTime !== -1)
			$limit = $runTime;



		$pi = 4; $top = 4; $bot = 3; $minus = TRUE;
		$accuracy = 1000000000000;

		for($i = 0; $i < $accuracy; $i++)
		{
			$pi += ( $minus ? -($top/$bot) : ($top/$bot) );
			$minus = ( $minus ? FALSE : TRUE);
			$bot += 2;
			if(($start + $limit) < microtime(true) && $runTime !== -1)
				break;
		}
		return $pi;
	}

}