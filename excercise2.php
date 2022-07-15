
<?php
    //doc file
    echo "<br>";
    $filename = "file1.txt";
    $file = fopen($filename, "r");

    if ( $file == false ) {
        echo ("xảy ra lỗi khi mở file");
        exit();
     }

    $filesize = filesize ( $filename );
    $filetext = fread ( $file, $filesize );

    fclose($file);
    
    
    $filename1 = "file2.txt";
    $file1= fopen($filename1, "r");

    if ( $file1 == false ) {
        echo ("xảy ra lỗi khi mở file");
        exit();
    }

    $filesize1 = filesize ( $filename1 );
    $filetext1 = fread ( $file1, $filesize1 );

    fclose($file1);

?>


<?php
    function dem(){
        substr_count($filetext1, '.');
    }   
?>

<?php
    function Valid($s){
        $poss = strpos($s, $filetext);
        $poss1 = strpos($s, $filetext1);

        if ($pos === false && $pos1 === true){
            echo 'Chuỗi hợp lệ. Chuỗi file1.txt bao gồm '. dem(). ' câu';
        } 
        if ($pos1 === false && $pos === true){
            echo 'Chuỗi hợp lệ. Chuỗi file2.txt bao gồm '. dem(). ' câu';
        }
        echo 'Chuỗi không hợp lệ.';  
    }             

?>