function checkinput () {

var userId = document.getElementById("USRID").value;
var password = document.getElementById("PWD").value;

if(userId===""&&password==="")
{
	alert(" username and password cannot be empty");
  
}
else{
  if(userId===""){
    alert("username cannot be empty");
  }
  else if(userId.length!=6){
    alert("username should be six digits");
  }
  if(password===""){
    alert("password cannot be empty");
  }
  else if(password.length<=10)
  {
    alert("password should be equal or more than 10 digits");
  }
  
  
}

}