
for i in {1..5}
do
  if [ ! -d "github" ];
    then
    cd ..
    echo "$(ls)" >> ./WEB/log.txt
    else 
    cd "github" 
    mkdir "test"
    break
  fi
done

cd ..
rm -rf github