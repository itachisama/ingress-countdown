<?php
if(!isset($argv[1]) || !is_numeric($argv[1])) {
	echo "time.php <seconds>\n";
	echo "<seconds> = integer for the seconds to the countdown timer\n";
	return;
}
$i = $argv[1];
while($i >= 0) {
	echo "restante: {$i}s              \r";
	$i--;
	sleep(1);
}
exec('notify-send -i /usr/share/pixmaps/seahorse.xpm "Concluído" "tempo acabou"');
echo "\n";
