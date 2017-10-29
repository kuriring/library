<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="/good/good.css">-->
	<title>도서관 학생 등록</title>
	<style>
		.input-group{
			padding: 10px
		}
	</style>
</head>
<body>
	<header>
		<div id ="header">
			<h1 class="logo">
				<img src="PKNU_LIB_LOGO.jpg" alt = "부경대학교 도서관"/>
			</h1>
		</div>
	</header>
	<div style="padding:10px; width:300px; border:2px solid black; margin:auto">
		<form method="post" action="register_check.php">
			<h3 id = "regist_head" style="text-align:center;">등록</h3>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">학번</span>
				<input type="text" name="id" class="form-control" placeholder="학번" aria-describedby="sizing-addon1">
				
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">비밀번호</span>
				<input type="text" name="password" class="form-control" placeholder="비밀번호" aria-describedby="sizing-addon1">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">비밀번호</span>
				<input type="text" name="password_r" class="form-control" placeholder="비밀번호" aria-describedby="sizing-addon1">
			</div>
			<h4>성별</h4>
			남자<input type="radio" name="ex" value ="man">
			여자<input type="radio" name="ex" value="women"></br></br>
			<div class="btn-group" role="group" aria-label="...">
			<button type="submit" value="Register" class="btn btn-default">확인</button>
			</div>
		</form>
	</div>
</body>
</html>
