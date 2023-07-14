var won = "you won";
var lost = "you lost";
var tie = "you tied";

function result(jankenUser){
    var jenkenComputer = Math.floor(Math.random() * 3) ;
    console.log(jenkenComputer);
    if (jenkenComputer === jankenUser){
        return won;
    }else if((jenkenComputer  + 1 )% 3 === jankenUser){
        return lost;
    }else{
        return tie;
    }

}