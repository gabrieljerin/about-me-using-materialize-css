function sendMail(dom)
{
    var f = validateEmpty();
    if (f == 1)
    {
        Materialize.toast("Please Enter the Data. You can't empty Firstname, Email, Message.", 3000);
        return false;
    }
    if (!isEmail($("#email").val()))
    {
        return false;
    }
    $("#prog").removeClass("hide");
    $("#sendmail").addClass('hide');
    var url = "./Ajax/ajax-handler.php?function=sendMail";
    $.ajax({
        type: 'POST',
        url: url,
        datatype: "json",
        data: $("#emailMeFrm").serialize(),
        success: function (data)
        {
            console.log(data);
            if (data == true)
            {
                Materialize.toast("Message Sent Successfully.", 3000);
                $("#prog").addClass("hide");
                $("#sendmail").removeClass('hide');
                $("#first_name,#last_name,#email,#textarea1").val("");
                $("#first_name,#last_name,#email,#textarea1").removeClass("valid");
                $("#fname,#lname,#emailId,#comment").removeClass("active");
            } else {
                Materialize.toast("Error Occured.Try again later.", 3000);
                $("#prog").addClass("hide");
                $("#sendmail").removeClass('hide');
            }
        }
    })
}
function validateEmpty()
{
    var flag;
    if ($("#first_name").val() == "" || $("#email").val() == "" || $("#textarea1").val() == "")
    {
        flag = 1;
    }
    return flag;
}
function isEmail(email)
{
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}