<?php
if(isset($_POST["password"],$_POST["email"])&&
$_POST["password"]=="b231210560"&&
$_POST["email"]=="cahmedzade37@gmail.com"
){
    
    echo '<script>alert("HOS GELDINIZ B231210560 kullanicisi")</script>';
    echo '<script>window.location.href = "hakkimda.html";</script>';
}
else{
 echo "yanlish sifre veya email lutfen tekrar deneyiniz...";
 echo '<a href="Kayitol.html">Geri don</a>';
 echo '<style>a:hover{color:red }</style>';
}


?>
