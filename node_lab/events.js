// trigger -- action -- signal -- raised
// modules : http,lodash,nodemon,color , fs
// event signals
// emit raised 
// emit and on method
const events = require('events') // imported module

var eventEmitter = new events.EventEmitter // created instance

//event
var add = function() {
    var a = 10
    var b = 20
    var c = a + b
    console.log('This is addition', c)
}

var subtract = function() {
    var a = 20
    var b = 10
    var c = a - b
    console.log('This is subtraction', c)
}

var division = function(a, b) {
    c = a / b
    console.log("Division", c)
}

eventEmitter.on('mul', function multiplication(a, b) {
    console.log('Multiplication', a * b)
})


// Assign event to the event handler
eventEmitter.on('display', add)

eventEmitter.on('sub', subtract)

//eventEmitter.on('mul', multiplication(5, 6))

eventEmitter.on('div', division)

//call event
eventEmitter.emit('display')

eventEmitter.emit('sub')

eventEmitter.emit('mul', 5, 6)

eventEmitter.emit('div', 6, 3)

// fs read file using event emitter and on (file read using events )