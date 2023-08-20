function hideall(){
    $("#addUserDiv").hide();
    $("#updateUserDiv").hide();
}

function dispData(){
    let temp={flag:2};
    $("#dispUserDiv").show();
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        // dataType: "dataType",
        success: function (response) {
            console.log("called!!");
            let data=JSON.parse(response);
            if(data.result==1)
            {
                $("#dispUserDiv").html(data.data);
            }
            else{
                $("#dispUserDiv").html("");
            }
            
        }
    });
}

function deleteData(x){
    let temp={flag:3,sid:x};

    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        // dataType: "dataType",
        success: function (response) {
            console.log(response)
            let data=JSON.parse(response);
            dispData();
            if(data.result==1){
                
            }
        }
    });
}

function getOldData(x) {
    localStorage.setItem("updtSid",x);

    let temp={flag:4,sid:x};

    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: temp,
        // dataType: "dataType",
        success: function (response) {
            hideall();
            let data=JSON.parse(response);

            $("#txtUName").val(data.data.sname);
            $("#txtUEmail").val(data.data.semail);
            $("#txtUPass").val(data.data.spass);
            $("#txtUDob").val(data.data.sdob);

            $("#updateUserDiv").show();

        }
    });
    
}




$(document).ready(function(){


    $("#addUserBtn").on("click",function(event){
        event.preventDefault();
        let temp={flag:1,sname:$("#txtName").val(),semail:$("#txtEmail").val(),spass:$("#txtPass").val(),sdob:$("#txtDob").val()};
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: temp,
            // dataType: "dataType",
            success: function (response) {
                let data=JSON.parse(response);
                if(data.result==1){
                    
                    dispData();
                }
            }
        });
    })

    $("#updateUserBtn").on("click",function(event){
        event.preventDefault();
        let temp={flag:5,sid:localStorage.getItem("updtSid"),sname:$("#txtUName").val(),semail:$("#txtUEmail").val(),spass:$("#txtUPass").val(),sdob:$("#txtUDob").val()};
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: temp,
            // dataType: "dataType",
            success: function (response) {
                let data=JSON.parse(response);
                if(data.result==1){
                    
                    dispData();
                }
            }
        });
    })

    //Default
    hideall();
    $("#addUserDiv").show();
    dispData();
})