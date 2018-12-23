<html lang = "en">
    <Head>
    <meta charset ="utf-8">
    <title>Category</title>
    <link rel ="stylesheet" href ="CSS/CategoryPage.CSS">
    </Head>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
    <div class="createPost">
        <a href="createpost.php" ><input type="submit" class="button1" value="Create Post"/></a>
<form action="" method="post">
        <input type="text" name="search" class="searchBar" placeholder="Search with a keyword">
         <input type="submit" name="searchb" class="button2" value="Search">
        </form>
        </div>
    </div>
    <div class="Wall">
    </div>

    <?php
    include 'classes/Post.php';
        $opost = new Post_Services();

        if(isset($_POST['Camera']))
        {
            $opost->Set_Category( 'Camera');
        }
        if(isset($_POST['Jewerly']))
        {
            $opost->Set_Category( 'Jewerly');
        }
        if(isset($_POST['Key']))
        {
            $opost->Set_Category( 'Key');
        }
        if(isset($_POST['Phone']))
        {

            $opost->Set_Category( "Phone");
        }
        if(isset($_POST['Laptop']))
        {
            $opost->Set_Category( 'Laptop');
        }
        if(isset($_POST['Wallet']))
        {
            $opost->Set_Category( 'Wallet');
        }
        if(isset($_POST['Pet']))
        {
            $opost->Set_Category(  'Pet');
        }
        $opost->View(true);

    ?>
    
    
    
</html>