<?php

//  working with filesystem
// $dir = scandir(__DIR__);

// var_dump(is_dir($dir));

// create new dir
// mkdir('foo');

// remove director
// rmdir('foo');

//  get file size
// filesize('file.txt');

// read file line by line
$filename = 'file.txt';

// $file = fopen($filename, 'r');

// while($line = fgets($file) !== false){
//     echo $line . PHP_EOL;
// }

// fclose($file);


// write file 
// fwrite()

// file_get_contents();
// file_put_content();


// if(file_exists($filename)){

//     $newConten = '<h3>Where does it come from?</h3>
//     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>';

//     if(file_put_contents($filename, $newConten)){
//         echo "Content updated";
//     }

//     $content = file_get_contents($filename);

    

//     echo $content;

// }else{
    
//     $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

//     // create/update file
//     if(file_put_contents($filename, $content)){
//         echo "Content saved";
//     }
// }



?>

<form action="" method="post"></form>