var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.6.3.min.js'; // Check https://jquery.com/ for the current version
document.getElementsByTagName('head')[0].appendChild(script);



function validatename()
{
    let temp=document.getElementById('name').value

    let pt=/^[a-z]{2,}$/ig

    if(pt.test(temp)==true)
    {
        return true
    }
    else
    {
        document.getElementById('d1').innerHTML="Invalid Name"
        return false
    }

}


function validateemail()
{
    let temp=document.getElementById('email').value

    let pt=/^[a-z]{1,}[a-z0-9]{0,}[@]{1}[a-z]{1,}[.]{1}[a-z]{1,}$/ig

    if(pt.test(temp)==true)
    {
        return true
    }
    else
    {
        document.getElementById('d1').innerHTML="Invalid Email"
        return false
        
    }

}


function validatepassword()
{
    let temp=document.getElementById('password').value

    let pt=/[a-z]{1,}[0-9]{1,}[A-Z]{1,}$/g

    if(pt.test(temp)==true)
    {
        return true
    }
    else
    {
        document.getElementById('d1').innerHTML="Invalid Pass"
        return false
    }

}


function validatemobile()
{
    let temp=document.getElementById('mobile').value

    let pt=/^[6-9]{1}[0-9]{9}$/ig

    if(pt.test(temp)==true)
    {
        return true
    }
    else
    {
        document.getElementById('d1').innerHTML="Invalid Mobile"
        return false
    }

}


function validateall()
{
    if(validatename()==true&&validateemail()==true&&validatepassword()==true&&validatemobile()==true)
    {
        var formdata = 'name=' + document.getElementById('name').value + '&email=' + document.getElementById('email').value + '&password=' + document.getElementById('password').value +'&mobile=' + document.getElementById('mobile').value;
        document.getElementById('d1').innerHTML=""
        $.ajax({
            type: "POST",
            url: "newinsert.php", 
            data: formdata,
            cache: false,
            success: function(html) {
             //alert(html);
            }
       });
    }
    else
    {
        console.log("Invalid")
    }
}