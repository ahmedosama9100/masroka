<html lang = "en">
    <Head>
    <meta charset ="utf-8">
    <title>CreatePost</title>
    <link rel ="stylesheet" href ="CSS/CreatePost.CSS">
    </Head>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
    </div>

<div class="Categories">
<form action="" method="post">
    <h1>
        Please fill the following proprities..</h1>
    <table>
        <tr>
            <td>1)Upload a photo for the item :</td>
            <td>
                <input type="file" name="pic"  accept="image/*" class="picture">
                <?php
                  

                ?>
             </td>
        
        </tr>
        <tr>
            <td>2)Which category does this item belong to : </td>
            <td><select name ="category" class="category">
                <option value="null">..</option>
                <option value="Phone">Phone</option>
                <option value="Wallet">Wallet</option>
                <option value="laptop">Laptop</option>
                 <option value="Pet">Pet</option>
                 <option value="Key">Key</option>
                 <option value="Jewelry">Jewelry</option>
                 <option value="Camera">Camera</option>
                </select>
               
             </td>
        </tr>
        
        <tr>
            <td>3)Does the item has specific Brand :</td>

            <td><input type="text" name="Brand" placeholder="Optional" class="brand"></td>
        </tr>
            <tr>
                <td colspan="2"><input type="Submit" name="submit" class="submit" value="Create"></td>
        <?php
        include 'classes\item.php';
        if(isset($_POST['submit']))
        {
          $obj=new itemservice;
          $obj->createitem();

 
        }

        ?>
        </tr>
</form>
        </table></div>
    
    
    
    
    
</html>