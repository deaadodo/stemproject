<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<title>form_student_valid</title>
	<link rel="stylesheet" href="css/screen.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script>
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				p_name: "required",
				p_username: {
					required: true,
					minlength: 3
				},
				p_password: {
					required: true,
					minlength: 5
				},
				
				
				p_phone: "required",
			},
			messages: {
				p_name: "من فضلك ادخل الاسم",
				
				p_username: {
					required: "من فضلك ادخل اسم المستخدم",
					minlength: "علي الاقل يتكون من 3 حروف"
				},
				p_password: {
					required: "من فضلك ادخل الرقم السرى",
					minlength: "الباسورد الخاص بك علي الاقل يتكون من 5 حروف"
				},
				
				
				
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var name = $("#name").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});		
	});
	</script>
	<style>
	#commentForm {
		width: 500px;
	}
	#commentForm label {
		width: 500px;
	}
	#commentForm label.error, #commentForm input.submit {
		margin-left: 253px;
	}
	#signupForm {
		width: 80%;
	}
	#signupForm label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
	}
	
	</style>
</head>
<body>
<div id="main">
			
	<form class="cmxform" id="signupForm" method="post" action="insert_privileg.php">
		<fieldset>
			<p>
				<label for="name">الاسم</label>
				<input id="name" name="p_name" type="text">
			</p>
			
			<p>
				<label for="username">اسم المستخدم</label>
				<input id="username" name="p_username" type="text">
			</p>
			<p>
				<label for="password">الرقم السرى</label>
				<input id="password" name="p_password" type="password">
			</p>
			
			
			
			<p>
				<input class="submit" type="submit" value="اشتراك">
			</p>
		</fieldset>
	</form>
	
		
</div>
</body>
</html>
