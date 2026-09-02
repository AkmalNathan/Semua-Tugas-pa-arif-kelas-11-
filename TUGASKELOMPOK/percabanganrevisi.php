<!DOCTYPE html>
<head>
    <title>Lomba Lari</title>
</head>
<body>
    <h2>Hasil Lomba Lari </h2>

    <form method="post">
        posisi Finish:
        <input type="number" name="posisi" required>
        <input type="submit" value="lihat Mendali">  
</form>

 
 <?php 
 if(isset($_POST['posisi'])){
 $posisi=$_POST ['posisi'] ;

 if($posisi == 1){
    $medali = "Mendali Emas";
 }elseif($posisi == 2){
    $medali = "Mendali Perak";
 }elseif($posisi == 3){
    $medali ="Mendali Perunggu";
 }else{
    $medali = "Tidak Mendapat Mendali";

 }

 echo "<h3> mendali yang didapat:
 $medali</h3>";
 }
 ?>

</body>
</html>