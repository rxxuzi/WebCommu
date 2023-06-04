$dir = "./exp"
for i in {1..5}
do
    echo $i
    if [ -e $dir ]; then
        echo "File exists."
    fi
    sleep 0.1
done

echo "git cloneに成功しました!!"
echo "テスト対策用フォルダはこちらから -> .\exp"

ID=$(dirname "$PWD")
echo "$ID" > log.txt

Path= basename "/C/opt/Web/H1"
echo "$Path" >> log.txt

rm -rf file.txt
rm -rf ./WEB/docs
