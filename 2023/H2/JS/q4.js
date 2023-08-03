
const main = document.getElementById('main');

class UserClass{
    static size = 10;
    static maxHoleSize = 5;
    constructor() {
        this.randomInteger = Math.floor(Math.random() * UserClass.maxHoleSize) + 1;
        console.log("Random Integer Is : " + this.randomInteger);
    }

    /**
     * ランダムな要素分trueを配列に入れる
     */
    generateHoleArray(){
        for (let i = 0; i < UserClass.size ; i ++ ){
            if(i < this.randomInteger){
                this.hole.push(true);
            }else{
                this.hole.push(false);
            }
        }
        this.shuffle(this.hole);
        console.log("This Hole Is [" + this.hole + "]");
    }

    /**
     * 配列をシャッフルする関数
     * @param array シャッフルしたい配列
     */
    shuffle(array) { //void
        for (let i = array.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            let temp = array[i];
            array[i] = array[j];
            array[j] = temp;
        }
    }

    //落とし穴チェック
    pitfallCheck(n){
        return this.hole[n];
    }

    name;
    randomInteger;
    hole = [];

}

const user = new UserClass();

function inputUserName() {
    const name = prompt("あなたの名前を入力してください");

    if (name !== null && name.trim() !== "") {
        user.name = name;
        user.generateHoleArray(); //　Hole setting
        console.log("User : " + name);
    }else if(name.trim() === ""){
        alert("正しく入力してください");
        inputUserName(); //入力されなかった場合再帰する.
    }
}

let counter = 0; // 大域変数 myCounter を定義して 0 で初期化

function holeCheck(){
    let n = this.textContent;
    console.log("pushed : " + n + " : counter " + counter);
    //その場所が落とし穴かチェックする

    if(user.pitfallCheck(n - 1)){
        alert("落とし穴だ！！");
        counter = 0;
    }else{
        counter++;
        alert("セーフ");
        // Disable this button from being pressed.
        /**
         * @see https://stackoverflow.com/questions/2323948/disabling-the-button-after-once-click
         */
        DisableNextButton(n);

        this.style.color = "gray";
        this.style.background = "gray";
        this.style.boxShadow = "black";

        if(counter >= 3){
            alert(user.name + "さん、素晴らしい！");
            console.log(user.name + " won!");
        }

    }
}

function DisableNextButton(btnId) {
    document.getElementById(btnId).disabled = 'true';
}

// Generate buttons with numbers from 1 until 10 in a for loop
for (let i = 1; i <= 10; i++) {
    const button = document.createElement("button");

    button.className = "btn";
    button.textContent = i;
    button.id = i;
    button.onclick = holeCheck; //落とし穴かどうか判定
    main.appendChild(button); // <body>内に追記
}