(
    isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) 
    ? 
    'https' 
    : 
    'http'
) 
. 
"://" 
. 
$_SERVER['HTTP_HOST']
