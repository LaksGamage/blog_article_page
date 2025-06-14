<?php
move_uploaded_file($_FILES['image']['tmp_name'], 'uploaded.jpg');

$articleName = $_POST['aname'];
$authorName = $_POST['auname'];
$articleContent = $_POST['paragraph'];
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <meta charset="UTF-8" />
  <title><?php echo htmlspecialchars($articleName); ?></title>
</head>


<body>

<?php
include("navbar.php");

?>
<div class="container mt-20 mb-50">
    <div class="mx-90 px-10 border border-black bg-[#fac989ff] justify-center items-center shadow-2xl"> 

    <div class="mb-30 mt-5 mx-[10px]">
    <center><img class="mt-1" src="uploaded.jpg" alt="Article Image" style="max-width:700px;" /></center>
    <h1 class="text-3xl mt-4 font-[gotham]"><strong><?php echo htmlspecialchars($articleName); ?></strong></h1>
    <p class="mt-1 mb-5 text-[19px] text-[#382a22ff] font-[gotham]"><strong>By: <?php echo htmlspecialchars($authorName); ?></strong></p>
   
    <div class="flex mb-5 stroke-black border border-gray-500 border rounded-3xl">
    
    <a href=""><img class="mx-5" src="images/h.png" width="22px" hight="22px"></a>
    <a href=""><img class="mx-5" src="images/l.png" width="22px" hight="22px"></a>
    <a href=""><img class="mx-5" src="images/com.png" width="22px" hight="22px"></a>
    
    </div>  

    <div class="flex justify-end mb-5">
      <p class="fo">share this post</p>
      <a href=""><img class="mx-3" src="images/fa.png" width="22px" hight="22px"></a>
      <a href=""><img class="mx-3" src="images/link.png" width="22px" hight="22px"></a>
      <a href=""><img class="mx-3" src="images/tw.png" width="22px" hight="22px"></a>
      
    </div>
    
    
    <p class="fo mt-1"><?php echo nl2br(htmlspecialchars($articleContent)); ?></p>
    </div>
    </div>
</div>



<div class="container mt-20 mb-50">
    <div class="mx-90 px-10 border border-[#ebebebff]  justify-center items-center shadow-2xl"> 
      <form>
       <label class="fo text-[25px] ">Comments</label><br>
        <textarea class="bg-white border border-black rounded-xl mb-[30] pl-5 pb-20 pr-135" rows="10" name="" >
        </textarea> <br>

        <div class="flex justify-between"> 
        <div>
        <input required class="bg-white border border-black rounded-xl mb-[30] py-3 pl-5" type="text" name="" value="Name">

        
        <input required class="bg-white border border-black rounded-xl mb-[30] py-3 pl-5" type="email" name="" value="email">
        </div>
        <input class=" bg-[#f0a030ff] text-[20px] bg-[#f2b91dff] border border-black rounded-xl mb-[20px] py-2 px-5 hover:bg-[#fcde8bff] hover:text-black" type="submit" name="" value="Post">
        </div>
        </form>
    </div>
</div>









<?php
include("footer.php");

?>
</body>
</html>