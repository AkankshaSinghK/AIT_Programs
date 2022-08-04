var lodash = require("lodash");
var name = 123;
if (lodash.isString(name)) {
    console.log("Name is String.")
} else {
    console.log("Name is not a String.")
}
var myname = 'kusum';
console.log(lodash.upperCase(myname));
var lowername = 'KUSUM';
console.log(lodash.lowerCase(lowername));
console.log(lodash.random(0, 10));