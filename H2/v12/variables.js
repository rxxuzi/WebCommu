a = 123; b = "456" ; c = true; d = 987;

sumA = a + b;
sumB = a + parseInt(b);

combiA = a + d;
combiB = a.toString() + d.toString();

document.write("a = ",a,":"); document.write(typeof(a) , "<br/ > \n");
document.write("b = ",b,":"); document.write(typeof(b) , "<br/ > \n");
document.write("c = ",c,":"); document.write(typeof(c) , "<br/ > \n");
document.write("d = ",d,":"); document.write(typeof(d) , "<br/ > \n");
document.write("sumA = ",sumA,":"); document.write(typeof(sumA) , "<br/ > \n");
document.write("sumB = ",sumB,":"); document.write(typeof(sumB) , "<br/ > \n");
document.write("combiA = ",combiA,":"); document.write(typeof(combiA) , "<br/ > \n");
document.write("combiB = ",combiB,":"); document.write(typeof(combiB) , "<br/ > \n");
