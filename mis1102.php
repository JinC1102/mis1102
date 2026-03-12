<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>朱晉呈簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#3aff3a; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Tzyy-Ching Yang";
  			document.getElementById("h2text").innerText = "Jin-Cheng Chu";
		}
	</script>

@@ -37,32 +37,32 @@
		</tr>
	</table>

<table width="70%" border="1">
<table width="110%" border="1">
		<tr>
			<td>

	就讀<a href="https://csim.pu.edu.tw/"target="_blank">靜宜大學資管系</a><br>

	Tel:  <a href="tel:0426328001">04-26328001</a><br>

	E-Mail: <a href="mailto:justin20051102@gmail.com">justin20051102@gmail.com</a><br>

	</td>

			<td>
	大象席地而坐電影配樂<br>
	<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>

	</td>

			<td>

	不要去臺灣<br>
	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
	</td>
		</tr>
	</table>
<?php echo date("Y-m-d") ?>
</body>