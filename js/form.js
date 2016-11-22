/**
 * Created by Justin on 10/13/2016.
 */

var form = document.getElementById("contactList");

function verify(){
  var title = form.elements[1];
  var fname = form.elements[2];
  var lname = form.elements[3];
  var genre = form.elements[4];
  var wrong = [];
  var miss = false;

  if (title.value == null || title.value == ""){
    wrong.push(title.name);
    miss = true;
  }
  if (fname.value == null || fname.value == ""){
    wrong.push(fname.name);
    miss = true;
  }

  if (lname.value == null || lname.value == "") {
    wrong.push(lname.name);
    miss = true;
  }

  if (genre.value == null || genre.value == "") {
    wrong.push(genre.name);
    miss = true;
  }

  if(wrong.length > 0) {
    document.getElementById("errorMessage").innerHTML="Missing " + wrong.toString();
  }

  return !miss;
}