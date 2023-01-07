<a href="?sekcia=1">Sekcia1</a> - 
<a href="?sekcia=2">Sekcia2</a> -
<a href="?sekcia=3">Sekcia3</a> -
<a href="?sekcia=4">Sekcia4</a> -
<hr>
<?php
echo @"<h1>Sekcia {$_GET['sekcia']}</h1>";

$src="img.php?";
switch($_GET['sekcia']) {
	case 1:
		$src .="x=10&y=10&w=10&h=10";
		break;
	case 2:
                $src .="x=200&y=10&w=100&h=10";
		break;
	case 3:
                $src .="x=100&y=20&w=10&h=50";
		break;
	case 4:
                $src .="x=200&y=150&w=60&h=10";
                break;
	default:
		$src .="x=0&y=0&w=10&h=10";
}

echo "<img src=\"{$src}\">";
