var en = document.getElementById("en");
var th = document.getElementById("th");
var thlink = window.location.href;
if (thlink.includes("/en/"))
{
    th.href = thlink.replace("/en/", "/th/");
    en.href = en.href;
}
else
{
    th.href = th.href;
    en.href = thlink.replace("/th/", "/en/");
}