<?php

	class FileOperation
	{
		public function readFIle($filename)
		{
			$file_size = getFileSize($filename);
			
			if ($file_size <= self::MAX_LEN) {
				echo 'size is ok<br>';
			}
			else{
				echo 'size exceeded';
			}
		}	
		
		public function writeFIle($filename)
		{
			$contents = getContents();
			
			if (strlen($contents) <= self::MAX_LEN) {
				echo 'size is ok<br>';
			}
			else{
				echo 'size exceeded';
			}
		}
	}
	
	?>