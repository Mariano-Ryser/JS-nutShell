function runScript(input, output) {

    switch (input) {
        case 0:
            console.log("case 0");
            tryCatchExample1(output);
        break;

        case 1:
            console.log("case 1");
            tryCatchThrowExample1(output);
        break;

    
        default:
            console.log("Switch Error");
        break;
    }
}



function tryCatchExample1(target) {
    try {
        abracadabra();
    } catch(error) {
        target.previousElementSibling.previousElementSibling.innerHTML = error;
    }
}

function tryCatchThrowExample1(target) {
    let x = 13;
    try {
        if(x<100) throw "x is smaller then 100"
        } catch(error) {
        target.previousElementSibling.previousElementSibling.innerHTML = error;
    }
}


function reset(input, output) {
    
    output.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = ""
    /*console.log(output.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML);*/
}