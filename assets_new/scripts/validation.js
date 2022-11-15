function validateForm() {

    if (document.myform.fname.value.trim() == "") {
        alert("Please enter first name.");
        document.myform.fname.focus();
        return false;
    }

    if (document.myform.lname.value.trim() == "") {
        alert("Please enter last name.");
        document.myform.lname.focus();
        return false;
    }

    if (document.myform.states.value.trim() == "") {
        alert("Please choose state.");
        document.myform.states.focus();
        return false;
    }

    if (document.getElementById("radio1").checked === false && document.getElementById("radio2").checked === false && document.getElementById("radio3").checked === false) {
        alert("Please Choose Your Package Type");
        return false;
    }
    document.getElementById("myModal").style.display = "none";
    document.location = 'https://www.dmvreported.com/index.php?state=' + document.getElementById('states').value + "&fname=" + document.getElementById('fname').value + "&lname=" + document.getElementById('lname').value;
    return true;
}
