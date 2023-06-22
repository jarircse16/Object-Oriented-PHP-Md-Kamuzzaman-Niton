<?php

	Class ColorUtil{
	public static function hexToRGB( $color)
	{
		$color = self::_checkerHex($color);
		
		$R = hexdec($color[0] . $color[1]);
		$G = hexdec($color[2] . $color[3]);
		$B = hexdec($color[4] . $color[5]);
		
		$RGB['R'] = $R;
		$RGB['G'] = $G;
		$RGB['B'] = $B;
		
		return $RGB;
	}
	
	private static function _checkerHex($hex)
	{
		$color = str_replace("#", " " ,$hex);
		if(strlen($color) == 3)
		{
			$color = $color[0].$color[0] . 
					 $color[1].$color[1] .
					 $color[2].$color[2];
		}
		else if( strlen($color) != 6)
		{
			throw new Exception("ERROR: HEX color should 6 or 3 digits long");
		}
		
		return $color;
		
		}
		
	}
	$RGB = ColorUtil::hexToRGB("FFBBCC");
	print_r($RGB);
	?>
		