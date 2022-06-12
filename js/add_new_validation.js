function validateName(idAtt)
{
    var name = document.getElementById(idAtt).value;
    if(name == null || name.length < 5 || name.length > 30)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var nameformat = /^[0-9a-zA-Z]+$/;
    if(!(name.match(nameformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}

function validateDesc(idAtt)
{
    var desc = document.getElementById(idAtt).value;
    if(desc == null || desc.length < 30 || desc.length > 150)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var nameformat = /^[0-9a-zA-Z!@#$%^&*()'"]+$/;
    if(!(desc.match(nameformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}

function validateDesign(idAtt)
{
    var design = document.getElementById(idAtt).value;
    if(design == null || design.length < 5 || design.length > 30)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var designformat = /^[0-9a-zA-Z%()]+$/;
    if(!(design.match(designformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}

function validateWeight(idAtt)
{
    var weight = document.getElementById(idAtt).value;
    if(weight == null || weight.length <= 1 || weight.length > 10)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var weightformat = /^[0-9a-zA-Z]+$/;
    if(!(weight.match(weightformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}
/*
function validateSelection(idAtt)
{
    var selection = document.getElementById(idAtt).value;
    if(selection == "Category")
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}
*/
function validateColor(idAtt)
{
    var color = document.getElementById(idAtt).value;
    if(color == null || color.length <= 2 || color.length > 50)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var colorformat = /^[a-zA-Z]+$/;
    if(!(color.match(colorformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}

function validateStock(idAtt)
{
    var stock = document.getElementById(idAtt).value;
    if(stock == null || stock.length <= 1 || stock.length > 11)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var stockformat = /^[0-9]+$/;
    if(!(stock.match(stockformat))) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "3px solid green";
    return true;
}