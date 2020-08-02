function menuShowHide() {
    const menu = document.getElementsByClassName("menu-primary-container")[0];
    const everything = document.getElementById("everythingcontent");
    if (menu.style.visibility === "visible")
    {
        menu.style.visibility = "hidden";
        everything.style.marginTop = "0";
    }
    else
    {
        menu.style.visibility = "visible";
        everything.style.marginTop = "150px";
    }
}