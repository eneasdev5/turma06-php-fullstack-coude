<?php 

var_dump(5 >= 10 && 10 !== "dez" || 1 === 1); // true
var_dump(5 >= -10 && 10 === "one" || 1 === "1"); // false
var_dump(5 >= 5 && [] !== [] || 1 === 1); // true
var_dump(50 >= 10 && count([1]) === 1 || 1 !== 1); // true
