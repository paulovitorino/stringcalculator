function excludeLarger(array) {
    for (var i = 0; i < array.length; i++) {
        if (array[i] > 1000) {
            array.splice(i, 1);
            i--;
        }
    }
    return array;
}

function checkForNegatives(array) {
    let negativeList = array.filter(function (value, index, arrayToBeFiltered) {
        return value < 0;
    });
    if (negativeList.length > 0) {
        throw 'Negatives not allowed: ' + negativeList;
    }
}

function sumArray(array) {
    let sum = array.reduce((a, b) => a + b, 0);
    return sum;
}

function sumString(stringValue, delimiter) {
    const array = stringValue.split(delimiter);
    //As parseInt expects 2 arguments (string, radix) to convert to a number, I had to set radix = 10
    let intArray = array.map(element => parseInt(element, 10));
    checkForNegatives(intArray);
    intArray = excludeLarger(intArray);
    return sumArray(intArray);
}

function Add(inputValue) {
    if (inputValue === '') {
        return 0;
    } else {
        let delimiter = ',';
        let brokenArray = inputValue.split('\\n');
        if (brokenArray[0].startsWith('//')) {
            delimiter = brokenArray[0].replace('//', '');
            brokenArray[0] = '';
        }
        inputValue = brokenArray.join('');
        return sumString(inputValue, delimiter);
    }
}