var triangle = "#"

while(triangle.length <=7 ){
    console.log(triangle);
    triangle = triangle + "#";
}

// Optional (Adding the function)
var symbol = "%"

function fsymbol(p){
while(symbol.length <= p ){
    console.log(symbol);
    symbol = symbol + "%";
    }
}

// Or using any other symbols with this
function printTriangle(depth, symbol){
    let toPrint = symbol;
    for(let i = 0; i < depth ; i++){
        console.log(toPrint);
        toPrint += symbol;
    }
}