function validation(){

    var a = document.forms["formlogin"]["email"].value;
    var b = document.forms["formlogin"]["pass"].value;

    if(a == ""){

        alert("Your Email was Missed or Incorrect");
        return false;
    }else if(b== ""){

        alert("Your Password was Missed");
        return false;
    }else{

        alert("Hi welcome Have a good day!")
        return true;
    }


    };


