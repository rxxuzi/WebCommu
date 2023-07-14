function combine2variables2(x,y){
    z = x+y;
    document.write(x,":");
    document.write(typeof(x) , "&");
    document.write(y,":");
    document.write(typeof(y));
    document.write("<br/>\n");

    document.write(x+y);
    document.write(typeof(x+y), "<br/>\n");
}

function combine2variables3(x,y){
    z = x+y;
    message = "x+y=" + z + ":"+typeof(x+y);
    alert(message);
}