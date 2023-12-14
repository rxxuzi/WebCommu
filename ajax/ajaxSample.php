<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ajaxSample.html</title>
</head>
<body>
<p>ajaxSample.htmlが読み込まれた時点での時刻</p>
<h1 id="time1"></h1>
<script>
    // 後ろで定義している time()関数の呼び出し
    time();
    // time()関数の定義
    function time() {
        // Date()クラスのインスタンス now を作成
        var now = new Date();
        // ID "time1" の部分（上の <h1>〜</h1>）に時刻を表示
        document.getElementById("time1").innerHTML = now.toLocaleTimeString();
    }
</script>
<p>ボタンを押した時点でのedu3上の時刻</p>
<button>時刻取得</button>
<h1 id="time2"></h1>
<script>
    // XMLHttpRequestクラスのインスタンス x を作成
    var x = new XMLHttpRequest();
    // xのプロパティ onreadystatechange は、xのプロパティreadyStateが変わるたびに発生するイベントハンドラ
    // つまり、readyState が変わるたびにfunction()が実行される。
    x.onreadystatechange = function () {
        // インスタンス x の readystate が 4（＝DONE、操作完了）になったら
        if (x.readyState === 4) {
            // ID "time2" の部分（中ほどの <h1>〜</h1>）に時刻を表示
            document.getElementById("time2").innerHTML = x.responseText;
            // コンソールにログを出力
            console.log(x.responseText);
        }
    }
    document.querySelector('button').onclick = function () {
        // インスタンス x にURLを指定し、クライアントにする（まだ取得しない）
        // ここではedu3上の同じディレクトリにある date.php をURLとして指定している
        x.open('GET', 'date.php');
        // 上で指定されたURLに接続し、サーバーからの応答を取得する
        x.send();
    }
</script>
</body>