function reverse(num) {
    rev = 0
    while (num > 0) {
        rev = rev * 10 + num % 10
        num = Math.floor(num / 10)
    }
    return rev
}
console.log(reverse(3012))