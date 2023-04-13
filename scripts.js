function form_validation() {
  var b1 = false;
  var b2 = false;
  var b3 = false;
  var name = document.forms["form"]["name"].value;
  if (name == "") {
    document.getElementById("error_name").style.display = "block";
    b1 = false;
  }
  else{
    document.getElementById("error_name").style.display = "none";
      b1 = true;
  }
   var email = document.forms["form"]["email"].value;
  if (email == "") {
    document.getElementById("error_mail").style.display = "block";
    b2 = false;
  }
    else{
    document.getElementById("error_mail").style.display = "none";
    b2 = true;
  }
    var message = document.forms["form"]["message"].value;
  if (message == "") {
    document.getElementById("error_message").style.display = "block";
    b3 = false;
  }
    else{
    document.getElementById("error_message").style.display = "none";
    b3 = true;
  }
    b = true;
    if(b1==true && b2==true && b3==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function coloring(){
    document.getElementById("cont").style.backgroundColor = "white";
}
