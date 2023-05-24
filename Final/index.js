

function validatename() {
    let temp = document.getElementById('name').value

    let pt = /^[a-z]{2,}$/ig

    if (pt.test(temp) == true) {
        return true
    } else {
        document.getElementById('d1').innerHTML = "Invalid Name"
        return false
    }

}


function validateemail() {
    let temp = document.getElementById('email').value

    let pt = /^[a-z]{1,}[a-z0-9]{0,}[@]{1}[a-z]{1,}[.]{1}[a-z]{1,}$/ig

    if (pt.test(temp) == true) {
        return true
    } else {
        document.getElementById('d1').innerHTML = "Invalid Email"
        return false

    }

}


function validatepassword() {
    let temp = document.getElementById('password').value

    let pt = /[a-z]{1,}[0-9]{1,}[A-Z]{1,}$/g

    if (pt.test(temp) == true) {
        return true
    } else {
        document.getElementById('d1').innerHTML = "Invalid Pass"
        return false
    }

}


function validatemobile() {
    let temp = document.getElementById('mobile').value

    let pt = /^[6-9]{1}[0-9]{9}$/ig

    if (pt.test(temp) == true) {
        return true
    } else {
        document.getElementById('d1').innerHTML = "Invalid Mobile"
        return false
    }

}



function validateall() {
    if (validatename() == true && validateemail() == true && validatepassword() == true && validatemobile() == true) {
        insertdata();
    }
    else {
        alert("Invalid Data");
    }
}


function insertdata() {
    let temp = { flag: "1", name: $("#name").val(), email: $("#email").val(), password: $("#password").val(), mobile: $("#mobile").val() }
    console.log(temp);
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        success: function (response) {
            //$("#d1").html("Data Inserted")
            window.location.href = "display.php";
        }
    });
}


function loaddata() {
    //$("#tb1").html("");
    //alert("asdisa")
    let temp = { flag: "2" };
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        success: function (response) {
            $("#tb1").html(response);
        }
    });
}

function searchdata() {
    let temp = { flag: "3", name: $("#srchtxt").val() };
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        success: function (response) {
            $("#tb1").html(response);
        }
    });
}


function updt(x) {
    //localStorage.setItem('upid',x);
    //console.log("update function called");
    //window.location.href = "update.php";
    //console.log(localStorage.getItem('upid'));
    //document.getElementById('upid').value=temp;

    var row = document.getElementById(x);


    var cells = row.getElementsByTagName("td");
    var tid = cells[0].textContent;
    var tname = cells[1].textContent;
    var temail = cells[2].textContent;
    var tpassword = cells[3].textContent;
    var tmobile = cells[4].textContent;
    

    let temp = { flag: "5", id: tid, name : tname , email:temail , password:tpassword , mobile:tmobile}

    $.ajax({

        type: "POST",
        url: "ajax.php",
        data: temp,
        success: function (response) {
            //alert(response);
            window.location.href = "update.php";
        }
    });
    


}



function del(x) {
    //console.log("update function called");
    // x=x.toString();


    let temp = { flag: "4", id: x }

    $.ajax({

        type: "POST",
        url: "ajax.php",
        data: temp,
        success: function (response) {
            //alert(response);
            loaddata();
        }
    });

}

function updtser() {

    if (validatename() == true && validateemail() == true && validatepassword() == true && validatemobile() == true) {
        let temp = { flag: "5", id: $("#upid").val(), name: $("#name").val(), email: $("#email").val(), password: $("#password").val(), mobile: $("#mobile").val() }
        console.log(temp);
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: temp,
            success: function (response) {
                //$("#d1").html("Data Inserted")
                //alert(response);
                window.location.href = "display.php";
            }
        });
    }
    else {
        alert("Invalid Data");
    }

}


function cancelbtn() {
    window.location.href = "display.php"
}



$("#btnrfrsh").on("click", loaddata);

$("#insertbtn").on("click", validateall);

$("#updtbtn").on("click", updtser);

$("#canclbtn").on("click", cancelbtn);



