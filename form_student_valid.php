<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<title>student_register</title>
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
				s_firstname: "required",
				s_lastname: "required",
				s_username: {
					required: true,
					minlength: 3
				},
				s_password: {
					required: true,
					minlength: 5
				},
				s_confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				s_email: {
					required: true,
					email: true
				},
				s_address: {
					required: true,
				},
				s_school: {
					required: true,
				},
				s_totaldegree: {
					required: true,
				},
				s_gender: {
					required: true,
				},
				s_class: {
					required: true,
				},
				s_phone: "required",
			},
			messages: {
				s_firstname: "من فضلك ادخل الاسم الاول",
				s_lastname: "من فضلك ادخل الاسم الاخير",
				s_username: {
					required: "من فضلك ادخل اسم المستخدم",
					minlength: "علي الاقل يتكون من 3 حروف"
				},
				s_password: {
					required: "من فضلك ادخل الرقم السرى",
					minlength: "الباسورد الخاص بك علي الاقل يتكون من 5 حروف"
				},
				s_totaldegree: {
					required:"ادخل الدرجة الكلية",
                    range:[200,280],
					
				},
				
				s_email: "من فضلك ادخل الايميل",
				s_address: "ادخل عنوانك",
				s_gender: "حدد نوعك",
				s_class:"ادخل صفك",
				s_phone:"ادخل تليفونك",
				s_school:"ادخل مدرستك",
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
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
			
	<form class="cmxform" id="signupForm" method="post" action="insert_student.php">
		<fieldset>
			<p>
				<label for="firstname">الاسم الاول</label>
				<input id="firstname" name="s_firstname" type="text">
			</p>
			<p>
				<label for="lastname">الاسم الاخير</label>
				<input id="lastname" name="s_lastname" type="text">
			</p>
            <p>
				<label for="address">العنوان</label>
				<input id="address" name="s_address" type="text">
			</p>
            <p>
				<label for="school">المدرسه</label>
				<input id="school" name="s_school" type="text">
			</p>
            <p>
				<label for="totaldegree">المجموع الكلى</label>
				<input id="totaldegree" name="s_totaldegree" type="text">
			</p>
              <label class="control-label" for="inputSuccess1">الصف
              </label><br/>
             <input type="radio" name="s_class" value="first" > الاول<br/>
            <input type="radio" name="s_class" value="second"> الثانى<br/>
           <label class="control-label" for="inputSuccess1">النوع
          </label><br/>
                <input type="radio" name="s_gender" value="male" > ذكر<br/>
  <input type="radio" name="s_gender" value="female"> انثى<br/>
            <p>
				<label for="phone">التليفون</label>
				<input id="phone" name="s_phone" type="text">
			</p>
           
            <p>
				<label for="email">الايميل</label>
				<input id="email" name="s_email" type="email" placeholder="mail@website.com">
			</p>
			<p>
				<label for="username">اسم المستخدم</label>
				<input id="username" name="s_username" type="text">
			</p>
			<p>
				<label for="password">الرقم السرى</label>
				<input id="password" name="s_password" type="password">
			</p>
			
			
			
			<p>
				<input class="submit" type="submit" value="اشتراك">
			</p>
		</fieldset>
	</form>
    
	
		
</div>
</body>
</html>
