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

    <div class="mb-30 mt-5">
    <img class="mt-1" src="uploaded.jpg" alt="Article Image" style="max-width:700px;" />
    <h1 class="text-3xl mt-4 font-[gotham]"><strong><?php echo htmlspecialchars($articleName); ?></strong></h1>
    <p class="mt-1 mb-5 text-[19px] text-[#382a22ff] font-[gotham]"><strong>By: <?php echo htmlspecialchars($authorName); ?></strong></p>
    <p class="mt-1"><?php echo nl2br(htmlspecialchars($articleContent)); ?></p>
    </div>
    </div>
</div>









<?php
include("footer.php");

?>
</body>
</html>