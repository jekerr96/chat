<?

session_start();
$_SESSION['last_msg'] = 0;
	$arr = array('a','b','c','d','e','f',

                 'g','h','i','j','k','l',

                 'm','n','o','p','r','s',

                 't','u','v','x','y','z',

                 'A','B','C','D','E','F',

                 'G','H','I','J','K','L',

                 'M','N','O','P','R','S',

                 'T','U','V','X','Y','Z',

                 '1','2','3','4','5','6',

                 '7','8','9','0');

    

    $token = "";

    for($i = 0; $i < 32; $i++)

    {

      

      $index = rand(0, count($arr) - 1);

      $token .= $arr[$index];

	}

	echo $token;

?>