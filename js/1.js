
function openLogin(){
   document.getElementById("win").style.display="";
}

function closeLogin(){
   document.getElementById("win").style.display="none";
}

function openres(){
   document.getElementById("reg").style.display="";
}

function closeres(){
   document.getElementById("reg").style.display="none";
}

function landing(){
	var user= document.getElementById("users");
	var pwd= document.getElementById("password");
	if(user.value==""){
	alert("账号不能为空");
	}else if(pwd.value==""){
	alert("密码不能为空");
	}else{ document.getElementById("myform").submit();  }
}

function register(){
	var rg_users= document.getElementById("rg_users");
	var rg_pwd= document.getElementById("rg_pwd");
	var confirm_pwd= document.getElementById("confirm_pwd");
	if(rg_users.value==""){
	alert("账号不能为空");
	}else if(rg_pwd.value==""){
	alert("密码不能为空");
	}else if(confirm_pwd.value==""){
	alert("确认密码不能为空");
	}else if(rg_pwd.value==confirm_pwd.value){
	alert("注册成功")
	document.getElementById("myform2").submit();
	}else{alert("两次密码输入不正确");}
}
