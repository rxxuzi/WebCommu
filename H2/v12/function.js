a = 123; b = "456" ; c = true; d = 987;


combine2variables(a,b);
combine2variables(a,parseInt(b));
combine2variables(a,d);
combine2variables(a.toString() , d.toString());
function combine2variables(x,y){
    document.write(x,":");
    document.write(typeof(x) , "&");
    document.write(y,":");
    document.write(typeof(y));
    document.write("<br/>\n");

    document.write(x+y);
    document.write(typeof(x+y), "<br/>\n");
}