function setN(){
    const n =  prompt("整数値nを入力してください");
    console.log(n + "type : " + typeof n);
    if (n !== null && n.trim() !== "") {
        f(+n);
    }else if(n.trim() === ""){
        alert("正しく入力してください");
        setN(); //入力されなかった場合再帰する.
    }else{
        alert("正しく入力してください");
        setN();
    }
}
function f(max){
    var sum = 0;
    for (let i = 1; i <= max; i++) {
        document.write(sum + ' + ' +  i + ' = ' +  add(sum,i) + '<br>');
        sum += i;
    }
}
function add(a , b){
    return a+b;
}