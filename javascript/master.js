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
    var url = "./Ajax/ajax-handler.php?function=sendMail";
    $.ajax({
        type: 'POST',
        url: url,
        datatype: "json",
        data: $("#emailMeFrm").serialize(),
        success: function (data)
        {
            if (data == 1)
            {
                Materialize.toast("Message Sent Successfully.", 3000);
                $("#first_name,#last_name,#email,#textarea1").val("");
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