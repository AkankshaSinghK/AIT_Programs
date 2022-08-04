function sc(choice) {
    switch (choice) {
        case 'add':
            console.log(add(3, 4));
            break;
        case 'sub':
            console.log(sub(3, 4));
            break;
        case 'mul':
            console.log(mul(3, 4));
            break;

    }

}

function add(a, b) {
    return a + b;
}

function sub(a, b) { return a - b; }

function mul(a, b) { return a * b; }

function div(a, b) { return a / b; }