<?php

$files = scandir(__DIR__);

foreach ($files as $fileName) {
	if (is_file($fileName) and pathinfo($fileName, PATHINFO_EXTENSION) === '') {
		$oldName = $fileName;
		$newName = $fileName.'.sql';
		$gitCommand = 'git mv '.$oldName.' '.$newName;
		echo $gitCommand . "\n";
		system($gitCommand);
	}
}
