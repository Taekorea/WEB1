<HTML>
<title>타이머</title>
<HEAD>
<META  http-equiv="content-type" content="text/html; charset=utf-8" >
<META name="viewport" content="width=device-width, initial-scale=1, minimun-scale=1, maximum-scale=1">
<?php
	$con=mysqli_connect("lovelikelove.ipdisk.co.kr","root","apple","test") or die("접속실패");
	$bar = $_GET["A"];

	$A=date("H:i:s");
    $B=date("Y-m-d");
    $C=date("H:i:s", strtotime($A."+$time1 minutes"));

		$sql = "
		INSERT INTO bar(bar, date1) VALUES
		('$bar', '$B' )
		";
		$ret = mysqli_query($con,$sql);

        $sql1 ="insert into aa(name1) values('3')";
		$ret1 = mysqli_query($con, $sql1);

	if($ret) {
	echo  "바코드가 정상적으로 등록되었습니다.."."<br>" ;

	echo "<br><button type='button' onclick='history.back()'>돌아가기</button>";

	}
	else {
	echo "실패"."<br>";
	echo "실패 원인 :".mysqli_error($con);
	}
	mysqli_close($con);
?>
</html>

<HTML>
<HEAD>
<META  http-equiv='refresh' content='0.5; bar2.html'>
</head>
</html>
