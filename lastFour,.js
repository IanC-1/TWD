function sumHighestFour(arr) {

    arr = arr.sort((a, b) => a - b);

    const lastFour = arr.splice(arr.length - 4, 4);

    console.log(lastFour);

    let countTotal = 0;

    for (i = 0; i < 4; i++) {
        countTotal += parseInt(lastFour[i]);
    }

    return countTotal;
}

const total = sumHighestFour([2, 6, 8, 3, 9, 12, 52, 21, 16, 78, 94, 5, 1, 6, 8, 104]);

console.log(total);