# String Calculator
[![This Project was made with Javascript.](https://img.shields.io/badge/Made%20with-JavaScript-%23F7df1e?style=plastic&logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript) [![This Project was made with PHP.](https://img.shields.io/badge/Made%20with-PHP-777BB4?style=plastic&logo=php&logoColor=white)](https://www.php.net/) [![This Project was made with CSS3.](https://img.shields.io/badge/Made%20with-CSS3-1572B6?style=plastic&logo=css3)](https://www.w3.org/) [![This Project was made with HTML5.](https://img.shields.io/badge/Made%20with-HTML5-E34F26?style=plastic&logo=html5)](https://www.w3.org/) [![This Project was made for 7Shifts.](https://img.shields.io/badge/Made%20for-7Shifts-orange?style=plastic&logo=%22./src/assets/images/logo.svg%22)](https://www.7shifts.com/)
[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/latest/active.svg)](https://www.repostatus.org/#active)

## About
A simple String calculator for Technical Interview at 7Shifts with a method: `int Add(string numbers)`
- The numbers in the string are separated by a comma by default or any other multiple delimiter(s) of arbitrary length defined correctly as shown below in test examples.
- Empty strings return 0.
- The return type is an integer.
- Add method handles new lines and throws an exception for negative numbers listing the number(s) that caused the exception.
- Numbers larger than 1000 are ignored.

## Tests Cases
|Test Case ID|Test Scenario|Test Steps|Test Data|Expected Results|Actual Results|Pass/Fail|
|--|--|--|--|--|--|--|
|TU01|Tested *question 1.b* (Empty strings return 0)|Press <kbd>**Add**</kbd> buttom|input=`void`|`0`|As Expected|Pass|
|TU02|Tested comma separated strings|1. Enter input; 2.Press <kbd>**Add**</kbd>|input="2,66,7,4,6"|`85`|As Expected|Pass|
|TU03|Tested *question 2* (new-line handling before and after delimiter(s))|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="1`\n`,2,3,1,`\n`2,4"|`13`|As Expected|Pass|
|TU04|Tested *question 3* (custom-delimiter `*` support)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//*`\n`1*4*10*100"|`115`|As Expected|Pass|
|TU05|Tested *question 3* (custom-delimiter `%` support)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//%`\n`1%4%10%100%1000"|`1115`|As Expected|Pass|
|TU06|Tested *question 4* (negative number exception throws listing the number(s) that caused the exception)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//ç`\n`-1ç4ç-10ç-100ç1000"|`throw exception: “Negatives not allowed: -1,-10,-100”` and list the number(s) that caused the exception.|As Expected|Pass|
|TU07|Tested *Bonus question 1* (Numbers larger than 1000 should be ignored)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//>`\n`1>3>1001>2100>1000"|`1004`|As Expected|Pass|
|TU08|Tested *Bonus question 2* (Delimiters can be arbitrary length)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//&&&&`\n`1&&&&3&&&&201&&&&102&&&&1000"|`1307`|As Expected|Pass|
|TU09|Tested *Bonus question 3* (Allow for multiple delimiters)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//&,$,@,#`\n`1@3&201$102#400"|`707`|As Expected|Pass|
|TU10|Tested *Bonus question 4* (Combine test cases **TU08** and **TU09**)|1.Enter input; 2.Press <kbd>**Add**</kbd>|input="//&&,$,@%!,***`\n`1@%!3&&301$202***500"|`1007`|As Expected|Pass|