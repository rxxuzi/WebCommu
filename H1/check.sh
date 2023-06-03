$dir = "./exp"
for i in {1..5}
do
    echo $i
    if [ -e $dir ]; then
        echo "File exists."
    fi
    sleep 0.5
done

echo "git cloneに成功しました!!"
echo "テスト対策用フォルダはこちらから -> .\exp"