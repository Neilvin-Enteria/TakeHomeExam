const FName = document.getElementById('AgentFName');
const LName = document.getElementById('AgentLName');
const Select = document.getElementById('Assigned_AgentID');

const fname_error = document.getElementById('fname-error');
const lname_error = document.getElementById('lname-error');

const create_button = document.getElementById('create-button');

var fnamestatus = false;
var lnamestatus = false;

var validName = /^[a-zA-Z ]*$/;


FName.addEventListener("keyup", function(event) {
    if (FName.value.length == 0) {

        fname_error.textContent = "Field must not be Empty";
        fnamestatus = false;
    } else if (FName.value.length <= 1) {

        fnamestatus = false;
        fname_error.textContent = "Invalid First Name";
    } else if (!FName.value.match(validName)) {

        fname_error.textContent = "Input is Invalid";
        fnamestatus = false;
    } else {

        fname_error.textContent = "";
        fnamestatus = true;
    }
    if (fnamestatus == false || lnamestatus == false) {
        create_button.disabled = true;
    } else {
        create_button.disabled = false;
    }
});

LName.addEventListener("keyup", function(event) {
    if (LName.value.length == 0) {

        lname_error.textContent = "Field must not be Empty";
        lnamestatus = false;
    } else if (LName.value.length <= 1) {

        lname_error.textContent = "Invalid Last Name";
        lnamestatus = false;
    } else if (!LName.value.match(validName)) {

        lname_error.textContent = "Input is Invalid";
        lnamestatus = false;
    } else {

        lname_error.textContent = "";
        lnamestatus = true;
    }
    if (fnamestatus == false || lnamestatus == false) {
        create_button.disabled = true;
    } else {
        create_button.disabled = false;
    }
});