export function shuffle( array ) {
    for (let i = array.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

export function pickRandom( array ){
    return array[ Math.floor( Math.random() * array.length ) ];
}

export function randomInt( min, max ) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
