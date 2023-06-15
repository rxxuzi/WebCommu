function saveText(){
    var text = document.getElementById("textbox").value;
    var filename = "fromJavaScript.log";
    
    //show text in alert
    alert("saved");

    console.log(text);
    document.getElementById('name').innerHTML = text;

}