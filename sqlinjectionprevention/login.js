$(document).ready(function () {
    // alert("qorks");

    $("#loginres").hide();

    $('#loginbtn').on('click', function (event) {
        event.preventDefault();

        let ptid = /^\d$/ig;
        let ptppass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[0-9a-zA-Z!@#$%^&*()_+]{8,}$/g;



        let strid = $('#txtid').val();
        let strpass = $('#txtpass').val();

        // console.log(ptppass.test(strpass));

        // if (ptid.test(strid) && ptppass.test(strpass)) {

            let temp = { flag: 1, uid: strid, upass: strpass };
            // console.log(temp);

            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: temp,
                // dataType: "dataType",
                success: function (response) {
                    // console.log(response);
                    $("#loginres").show();
                    $("#loginres").html(response);

                }
            });
        // }
        // else {
        //     $("#loginres").show();
        //     $("#loginres").html("Request Not Sent");
        // }

    })

});