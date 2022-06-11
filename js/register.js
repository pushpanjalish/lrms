document.getElementById("yes").disabled = true;
function changeFunctn(){
   
    if (document.getElementById("chck").checked=true){
        document.getElementById("yes").disabled = false;
    }

}
function fname_valid(){
    name=document.getElementById('fname').value;
    let fname_regex=/^[a-z A-Z]{3,}$/;

    if(!fname_regex.test(name)){
        document.getElementById('msg').innerHTML="enter valid name";
        document.getElementById('msg').style.color="red";
        return false;

        }
    else{
        document.getElementById('msg').innerHTML=" ";
        return true;
        }
}
function lname_valid(){
    lname=document.getElementById('lname').value;
    let lname_regex=/^[a-z A-Z]{1,}$/;

    if(!lname_regex.test(lname)){
        document.getElementById('msg').innerHTML="enter valid name";
        document.getElementById('msg').style.color="red";
        return false;
        }
    else{
        document.getElementById('msg').innerHTML=" ";
        return true;
        }
}
function pass_valid(){
   password=document.getElementById('password').value;  
    pass1=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

   if(!pass1.test(password)){
           document.getElementById('msg').innerHTML="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
            document.getElementById('msg').style.color="red";
            return false;
        }
        else{
        document.getElementById('msg').innerHTML=" ";
        return true;
        }
}
function validation(){
    name=document.getElementById('fname').value;
    lname=document.getElementById('lname').value;
    email=document.getElementById('email').value;
    file=document.getElementById('file').value;
    password=document.getElementById('password').value;
    cnfrmpassword=document.getElementById('cnfrmpassword').value;
    answer=document.getElementById('yes').value;
    mail_regex=/^[a-z A-Z 0-9]+@[a-z A-Z]+\.[a-z A-Z]{2,4}$/;

 //    let fname_regex=/^[a-z A-Z]{3,}$/;

 //    if(!fname_regex.test(name)){
 //        document.getElementById('msg').innerHTML="enter valid name";
 //        document.getElementById('msg').style.color="red";
 //        return false;
 //        }

 //    let lname_regex=/^[a-z A-Z]{1,}$/;

 //    else if(!lname_regex.test(lname)){
 //        document.getElementById('msg').innerHTML="enter valid name";
 //        document.getElementById('msg').style.color="red";
 //        return false;
 //        }


 // pass1=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

 //   else if(!pass1.test(password)){
 //            alert("Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character");
 //            //document.getElementById('password').style.borderColor="red";
 //            return false;
 //        }
       if(password!= cnfrmpassword){
            alert("enter similar pswd");
           
            return false;
         }

         else if(!mail_regex.test(email)){
            alert("invalid mail id");
            document.getElementById('email').style.borderColor="red";
            return false;
         }
        else{
            return true;
        }
       

}
// function alertt(){
// swal({
//   icon: "success",
// });
// }
