<HTML>
<HEAD>
<META  http-equiv="content-type" content="text/html; charset=utf-8" >
<META name="viewport" content="width=device-width, initial-scale=1, minimun-scale=1, maximum-scale=1">


<html>
<head>
    <title>Html-Qrcode Demo</title>
  <META  http-equiv="content-type" content="text/html; charset=utf-8" >
<META name="viewport" content="width=device-width, initial-scale=1, minimun-scale=1, maximum-scale=1">
<body>
    <div id="qr-reader" style="width:300px"></div>
    <div id="qr-reader-results"></div>
  <FORM METHOD="post" ACTION="bar2.php">
  <li><label for="A">A(파일명)</label><br><INPUT TYPE ="text" NAME="A" ID="AA"></li>
    <div align="center"><button TYPE="submit" VALUE="전송하기" style="width:130px;height:30px;"><font size="4pt" color="green">전송하기</font></button></div>
</body>
<script src="html5-qrcode.min.js"></script>
<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                console.log(`Scan result ${decodedText}`, decodedResult);
              document.getElementById('AA').value=decodedText;
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
</head>
</html>
