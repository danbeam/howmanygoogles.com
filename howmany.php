<?php

// filter inputs
$s = $_GET['s'];
$x = preg_replace('/[^0-9]/', '', $_GET['x']);
$y = preg_replace('/[^0-9]/', '', $_GET['y']);

// Y U NO GIVE X, Y, or R?
// NOTE: because of the rewrite rules this should never happen (in theory)
if(!in_array($s, array('b','bing','bings','g','google','googles','y','yahoo','yahoos')) || '' === $x || '' === $y || $x <= 0 || $y <= 0) {
    die('gay');
    //header('Location: /'); //, true, 301);
}

// change the src of the frames
switch ($s) {
    case 'b'       :
    case 'bing'    :
    case 'bings'   :
        $src = 'http://bing.com';
    break;
    case 'g'       :
    case 'google'  :
    case 'googles' :
        $src = 'http://google.com';
    break;
    case 'y'       :
    case 'yahoo'   :
    case 'yahoos'  :
        $src = 'http://yahoo.com';
    break;
}

ob_start();

?>
<html>
<frameset cols="<?php echo implode(',', array_fill(0, $x, '*')); ?>" rows="<?php echo implode(',', array_fill(0, $y, '*')); ?>">
<?php echo implode("\n", array_fill(0, $x * $y, '<frame src="' . $src . '">')) . "\n"; ?>
</frameset>
</html>
<?php

file_put_contents('./cache/' . $s . $x . 'x' . $y . '.html', ob_get_contents());
ob_end_flush();

?>
