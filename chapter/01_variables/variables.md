# Variables

It store value of any data type

### Rules for naming variable

- Must start with $
- first letter after $ can start with underscore (\_) or character [a-zA-Z]
- other letters can be number and character
- PHP variables are case-sensitive i.e $message not equal $MESSAGE or $Message

### Variable naming conventions

- Pascal case involves capitalizing first letter of each word e.g $HelloWorld
- Camel case involves using lowercase for the first word e.g $isMarried 
- Snake and kebab: using underscore (_) or dash (-) to differentiate each word e.g $has_job

P.S: php does not support the use of dash to seperate variable name

e.g

'''

<?php 
    $name = "Idris";
    $_user1Score =  20;
?>

'''

## Comment 

Comment help provide meaningful information that will help to you and other developer quickly in the future.

It has two categories:
- Single-line comment: it's placed at the end of the line or at the current block. you can use ```#``` or ```//```
- Multi-line comment: 