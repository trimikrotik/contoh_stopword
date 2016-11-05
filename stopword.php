<?php
$stopword = array("dan","serta","atau","melainkan","tetapi","padahal","sedangkan","yang","agar","supaya","biar","jika","kalau","asal","asalkan","bila","manakala","sejak","semenjak","sedari","sewaktu","tatkala","ketika","sementara","begitu","seraya","selagi","selama","serta","sambil","demi","setelah","sesudah"," sebelum","sehabis","selesai","seusai","hingga","sampai","andaikan","seandainya","umpamanya","sekiranya","biar","biarpun","walau","pun","sekalipun","sungguhpun","kendati","kendatipun","seakan-akan","seolah-olah","sebagaimana","seperti","sebagai","laksana","ibarat","daripada", "alih-alih","sebab","karena","oleh","sehingga", "sampai","maka","makanya","dengan","tanpa","dengan","tanpa","bahwa","sama","lebih","bagi","pada","sangat","hanya","lebih","beberapa","banyak","sedikit","kami","mereka","kita","itu", "di","ke","dari","untuk","guna","hingga","hampir","demi","atas","di mana","yang mana","dan","atau","tetapi","ketika","seandainya","supaya","walaupun","seperti","oleh karena","sehingga","bahwa","sang","sri","para","umat","si");
global $stopword;
$file_string = glob('simpantoken/*.txt');
$string = array();
foreach ($file_string as $datatoken)
{
	$string[] = file_get_contents($datatoken);

	//str_ireplace($stopword,"", $string);
	$hapus_stopword = str_ireplace($stopword,"", $string);
	var_dump($hapus_stopword);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>STOPWORD REMOVAL</title>
</head>
<body>

</body>
</html>