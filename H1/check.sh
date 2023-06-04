ID=$(dirname "$PWD")
echo "$ID" > log.txt

$dir = "./exp"
for i in {1..5}
do
    echo $i
    if [ -e $dir ]; then
        echo "File exists."
        echo "F_E : $i" >> log.txt
    fi
    sleep 0.1
done

echo "git cloneに成功しました!!"
echo "テスト対策用フォルダはこちらから -> .\exp"

Path= basename "/C/opt/Web/H1"
echo "$(ls)" >> log.txt

rm -rf file.txt
cd ..
rm -rf docs
