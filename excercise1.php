<?php
//bai1
    function valid(){
        echo 'bai 1 <br>';
        $str = "book";
        $str1 = "restaurant"; 
        
        $pos = strpos($str, $str1);
        $pos1 = strpos($str1, $str);
        if ($pos === false || $pos1 === false ) 
            echo 'true';
        else 
            echo 'false';
    }
    valid();
    

?>

<!-- bai2 -->
<?php
    //ghi file
    
    $filename = "file1.txt";
    $file = fopen ($filename, "w");
    if ( $file == false ) {
        echo ("xảy ra lỗi khi mở file");
        exit();
    }
    fwrite ( $file, "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." ); 
   
    fclose ( $file ); 

    $filename1 = "file2.txt";
    $file1 = fopen ($filename1, "w");
    if ( $file1 == false ) {
        echo ("xảy ra lỗi khi mở file");
        exit();
    }
    fwrite ( $file1, "There are many variations of passages of Lorem Ipsum available, 
    but the majority have suffered alteration in some form, by injected humour, 
    or randomised words which don't look even slightly believable." ); 
    fclose ( $file1 ); 

?>


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
    echo "<br>";
                

    echo "<br>";
    $filename1 = "file2.txt";
    $file1= fopen($filename1, "r");

    if ( $file1 == false ) {
        echo ("xảy ra lỗi khi mở file");
        exit();
    }

    $filesize1 = filesize ( $filename1 );
    $filetext1 = fread ( $file1, $filesize1 );

    fclose($file1);



    //kiem tra chuoi
    echo ' <br> bai 2 <br>';
    $poss = strpos($filetext, $filetext1);
    $poss1 = strpos($filetext1, $filetext);
    if ($poss === false || $poss1 === false ) {
        echo 'Chuỗi hợp lệ. Chuỗi file1.txt bao gồm ';
        echo substr_count($filetext, '.'). ' câu';
        echo '<br> hoặc <br>';
        echo 'Chuỗi hợp lệ. Chuỗi file2.txt bao gồm ';
        echo substr_count($filetext1, '.'). ' câu';
        } else {
            echo 'Chuỗi không hợp lệ.';
            }
                

        ?>
      
