var id = 0;

function saveText(){
    //htmlタグから変数に代入
    var text = document.getElementById("user-name").value;
    id = document.getElementById("user-id").value;

    //text + id = str
    var str = text +"["+ id +"]";

    if(id === ""){
        alert("Please write something");
        return;
    }
    
    if(text=== ""){
        alert("Please write something");
        return;
    }else{
        console.log(text);
        document.getElementById('name').innerHTML = str;
        document.getElementById("menu-1").value = 100;
    }
}

function saveId() {
    id = document.getElementById("user-id").value;
}

function ls() {
    
    var slide = document.getElementById("slider");
    
    // random 10000 ~ 99999
    function r() {
        return Math.floor(Math.random() * 90000) + 10000;
    }
    console.log(r());
    document.getElementById("menu-1").textContent = r();
    document.getElementById("menu-2").textContent = r();
    document.getElementById("menu-3").textContent = r();
    document.getElementById("menu-4").textContent = r();
    document.getElementById("menu-5").textContent = r();
}
