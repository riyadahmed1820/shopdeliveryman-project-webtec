function formValidation() {

    let uname = document.querySelector(".username");
    let fname = document.querySelector(".firstname");
    let lname = document.querySelector(".lastname");
    let password = document.querySelector(".password");
    let mobileNumber = document.querySelector(".mobile");
    let email = document.querySelector(".email");
    let address = document.querySelector(".address");

    if (uname.value == "") {
        document.querySelector("#uname").innerHTML = "Please fill up Username!! <br>";
        return false;
    }
    if (isNaN(uname.value)) {
        document.querySelector("#uname").innerHTML = "write number only .. no letter <br>";
        return false;
    }
    if ((uname.value.length < 2) || (uname.value.length > 20)) {
        document.querySelector("#uname").innerHTML = "write your name in 2 - 20 number <br>";
        return false;
    }


    if (password.value == "") {
        document.querySelector("#pass").innerHTML = "Please fill up Password!! <br>";
        return false;
    }
    if ((password.value.length < 6) || (password.value.length > 15)) {
        document.querySelector("#pass").innerHTML = "pass sould be 6-15 character <br>";
        return false;
    }

    if (fname.value == "") {
        document.querySelector("#fname").innerHTML = "Please fill up Firstname!! <br>";
        return false;
    }
    if (!isNaN(fname.value)) {
        document.querySelector("#fname").innerHTML = "write letter only .. no numbers <br>";
        return false;
    }
    if ((fname.value.length < 2) || (fname.value.length > 20)) {
        document.querySelector("#fname").innerHTML = "write your name in 2 - 20 letter <br>";
        return false;
    }

    if (lname.value == "") {
        document.querySelector("#lname").innerHTML = "Please fill up Lastname!! <br>";
        return false;
    }
    if (!isNaN(lname.value)) {
        document.querySelector("#lname").innerHTML = "write letter only .. no numbers <br>";
        return false;
    }
    if ((lname.value.length < 2) || (lname.value.length > 20)) {
        document.querySelector("#lname").innerHTML = "write your name in 2 - 20 letter <br>";
        return false;
    }

    if (mobileNumber.value == "") {
        document.querySelector("#mobile").innerHTML = "Please fill up Mobile Number!! <br>";
        return false;
    }
    if (mobileNumber.value.length !== 11) {
        document.querySelector("#mobile").innerHTML = " submit full mobile no !! <br>";
        return false;
    }



    if (email.value == "") {
        document.querySelector("#email").innerHTML = "Please fill up Email!! <br>";
        return false;
    }

    if (email.value.indexOf("@") <= 0) {
        document.querySelector("#email").innerHTML = " invalid  '@' position !! <br>";
        return false;
    }


    if ((email.value.chartAt(emails.value.length - 4) != ".") && (email.value.chartAt(emails.value.length - 3) != ".")) {
        document.querySelector("#email").innerHTML = " invalid  '.' position !! <br>";
        return false;
    }

    if (address.value == "") {
        document.querySelector("#address").innerHTML = "Please fill up Address!! <br>";
        return false;
    }
    if (!isNaN(addsree.value)) {
        document.querySelector("#address").innerHTML = "write number only .. no letter <br>";
        return false;
    }
    if ((address.value.length < 2) || (address.value.length > 20)) {
        document.querySelector("#address").innerHTML = "write your name in 2 - 20 number <br>";
        return false;
    }

}

