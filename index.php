<html>
    <head>
        <title>BlogNest</title>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="style.css">
       
        
    </head>


<body>

<?php
include("navbar.php");

?>

<div class="container">
    <div class="mt-40 text-center text-[50px]"><p class="goo">Submit your article</p></div>

    <div class="mx-70 mb-50 bg-[#e8c26bff] border border-black rounded-2xl">

    <form class="font-[gotham] p-[50] pl-[100] flex flex-col shadow-2xl" action="artical.php" method="POST" enctype="multipart/form-data">
        <label class="text-[20px]">Name of your article</label>
        <input required class="bg-white border border-black rounded-xl mb-[30] py-3 pl-5" type="text" name="aname">

        <label class="text-[20px]">Name of author</label>
        <input required class="bg-white border border-black rounded-xl mb-[30] py-3 pl-5" type="text" name="auname">

        <label class="text-[20px]">Upload image</label>
        <input required class="bg-white mb-[30] p-10 border border-black rounded-xl hover:text-white hover:bg-[#d19c47ff]" type="file" name="image">

        <label class="text-[20px]">write your article here</label>
        <textarea class="bg-white border border-black rounded-xl mb-[30] pl-5 pb-20" rows="10" name="paragraph" minlength="400" required>
        </textarea>
        
        <input class="text-[20px] bg-[#f2b91dff] border border-black rounded-xl mb-[20px] mx-[320px] py-[20px] text-black hover:bg-[#fcde8bff] hover:text-black shadow-2xl" type="submit" name="submit" value="Submit">


         <input class="text-[20px] bg-[#f2794eff] border border-black rounded-xl mb-[40px] mx-[320px] py-[20px] text-white hover:bg-[#fce3c5ff] hover:text-black shadow-2xl" type="reset" name="reset" value="Reset">
        
    </form>





    </div>
</div>


<div>
   
</div>





<?php
include("footer.php");

?>
</body>
</html>