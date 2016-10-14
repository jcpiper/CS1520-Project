/**
 * Created by Justin on 10/13/2016.
 */

var form = document.getElementById("contactList");

function verify(){
  var fname = form.elements["First Name"];
  var lname = form.elements["Last Name"];
  var email = form.elements["Email"];
  var wrong = [];
  var miss = false;
  if (fname.value == null || fname.value == ""){
    wrong.add(fname.name);
    miss = true;
  }

  if (lname.value == null || lname.value == "") {
    wrong.add(lname.name);
    miss = true;
  }

  if (email.value == null || email.value == "") {
    wrong.add(email.name);
    miss == true;
  }

  if(wrong.length > 0) {
    document.getElementById("errorMessage").innerHTML="Missing " + wrong.toString();
  }

  return !miss;
}