<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet adoption website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <style>
        .login-btn{
            Color : white;
            font-size : 2rem;
            border-radius: .5rem;
            padding:.5rem 1.5rem;
        }
        .login-btn:hover{
            background:blue;
            color:white;
        }
        .logout-btn{
            Color : white;
            font-size : 2rem;
            border-radius: .5rem;
            padding:.5rem 1.5rem;
        }
        .logout-btn:hover{
            background:red;
            color:white;
        }
        .search{
            padding:1rem;
            border:1px solid rgba(0,0,0,.3);
            background-color: white;
        }
        
        </style>
</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-adoption"></i>adoptme</a>

        <form action="./search.php" class="search-box-container" method="">
            <input type="search" name='search' id="search-box" placeholder="Search for pets..." required>
            <button type=”submit” for="search-box" class="fas fa-search search"></button>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#deal">ABOUT US</a>
            <a href="#posts">EXPLORE</a>
            <a href="#contact">CONTACT US</a>
            <?php
              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
              {
            echo '<a href="bttadd.php">ADD PETS</a>';
        }
        ?>
<?php
     $json = file_get_contents('./Json/context.json');

     //Decode JSON
     $json_data = json_decode($json,true);
     

$username = trim($json_data["context"]["Admin"]);
//echo $username;

if(isset($_SESSION['username']) && $_SESSION['username'] === $username){
   echo '<a href="adminqu.php">ADMIN</a>';
  
}

?>
        </nav>
        </nav>

        <div class="icons">
            
            <?php
              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
              {
                echo '<a href="./logout.php" id=""  class="logout-btn">Logout</a>';
                echo '<a href="#"><div id="like-btn" class="fas fa-user-circle"></div></a>';
                echo '      <div class="heart">
                <div class="box">
                    
                    
                    <div class="content">
                        <h3>'.$_SESSION["name"].'</h3>
                        <h3>'.$_SESSION["username"].'</h3>
                         <a href=""><h3>My posts</h3></a>
                        
                        
                    </div>
                </div>
                
            </div>';
              }else{
               echo '<a href="./login_form.php" id=" "  class="login-btn">Login</a>';
              }
              ?>
               
        </div>

  



        
    </div>
    

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home" id="home">

    <div class="image">
        <img src="images/Presentation3.jpg">
    </div>
    
</div><br><br><br><br><br><br><br>

<!-- home section ends -->

<!-- banner section starts  -->



<!-- banner section ends -->



<!-- explore section starts  -->

<section class="posts" id="posts">

    <h1 class="heading">pets for <span>you</span></h1>

    <div class="box-container">

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="">
            <img src="images/tony.jfif" alt=""><a>
            <h3>Tony</h3>
            
            
            <div class="discpn">
                <span>adult   .</span>
                <span>mumbai </span>
            </div>
            <a href="#" class="btn">adopt </a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="">
            <img src="images/tank.jfif" alt=""><a>
            <h3>Tank</h3>
            
            
            <div class="discpn">
                <span>adult   .</span>
                <span>mumbai </span>
            </div>
            <a href="#" class="btn">adopt </a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="">
            <img src="images/boswell.jfif" alt=""><a>
            <h3>Boswell</h3>
            
            
            <div class="discpn">
                <span>adult   .</span>
                <span>mumbai </span>
            </div>
            <a href="#" class="btn">adopt</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="">
            <img src="images/sadie.jfif" alt=""><a>
            <h3>Sadie</h3>
            
            
            <div class="discpn">
                <span>adult   .</span>
                <span>mumbai </span>
            </div>
            <a href="#" class="btn">adopt</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="">
            <img src="images/simon.jfif" alt=""><a>
            <h3>Simon</h3>
            
            
            <div class="discpn">
                <span>adult    .</span>
                <span>mumbai </span>
            </div>
            <a href="" class="btn">adopt</a>
        </div>

        <div class="box">
           
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="vpost.php">
            <img src="images/lila.jfif" alt=""></a>
            <h3>Lila</h3>
            
            
            <div class="discpn">
                <span>adult    .</span>
                <span>mumbai </span>
            </div>
            <a href="vpost.php" class="btn"> adopt</a>
        </div>

        <div class="box">
            
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <a href="vpost.php">
            <img src="images/simone.jfif" alt=""></a>
            <h3>Simone</h3>
            
            
            <div class="discpn">
                <span>adult   .</span>
                <span>mumbai </span>
            </div>
            <a href="#" class="btn">adopt</a>
        </div>

    <?php
        require_once "./config.php";

        $sql = "SELECT id, first_name, last_name, img,Age_group,State,Pet_Name FROM pet_posts";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
             echo ' <div class="box">
            
             <div class="icons">
                 <a href="#" class="fas fa-heart"></a>
                 <a href="#" class="fas fa-share"></a>
                 <a href="#" class="fas fa-eye"></a>
             </div>
             <a href="">
             <img src="./images/posts/'.$row["img"].'" alt="'.$row["Pet_Name"].'"><a>
             <h3>'.$row["Pet_Name"].'</h3>
             
             
             <div class="discpn">
                 <span>'.$row["Age_group"].' .</span>
                 <span>'.$row["State"].'</span>
             </div>';
            
             if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
             {
                echo '<a href="./vpost.php?page='.$row["id"].'" class="btn">Adopt</a>';
             }else{
                echo '<a href="./login_form.php" class="btn">Adopt</a>';
             }   
        
         echo '</div>';
        
        
          }
        } 
        $conn->close();

       
?>
<!-- // .(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)?'<a href="#" class="btn">adopt</a>':'<a href="./index.html" class="btn">adopt</a>'.' -->
        <!-- <a href="#" class="btn">adopt</a> -->
    </div>

</section>

<!-- explore section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">Food for <span>pets</span></h1>

    <div class="box-container">

        <div class="box">
            
            
            <img src="images/pedigree.jpg" alt="">
            <p>Pedigree Adult Dry Dog Food, Chicken & Vegetables, 3kg Pack</p>
            <a href="https://www.amazon.in/Pedigree-Adult-Food-Chicken-Vegetables/dp/B00LHS8I3A/ref=sr_1_7?keywords=Pet+Food&qid=1643048495&sr=8-7" class="btn">buy from amazon</a>
        </div>
        <div class="box"><br><br>
            <img src="images/chappy.jpg" alt=""><br><br><br>
            <p>Chappi Puppy Dry Pellet Dog Food, Chicken & Milk, 8 kg</p>
            
            <a href="https://www.amazon.in/Chappi-Puppy-Food-Chicken-Milk/dp/B08R162JZC/ref=sr_1_4_sspa?keywords=Pet%2BFood&qid=1643091137&sr=8-4-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFRTU5LUldGRDMzVE0mZW5jcnlwdGVkSWQ9QTAyNjk1MzQxQk8ySldVS1dSUkhCJmVuY3J5cHRlZEFkSWQ9QTAxNTAxODcxSENCQVFIRDBYVzRSJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ&th=1" class="btn">buy from amazon</a>
        </div>
        <div class="box"><br><br>
            <img src="images/purepet.jpg" alt=""><br><br><br>
            <p>Purepet Tuna and Salmon Adult Cat,Dry,7 kg</p><br><br>
            
            <a href="https://www.amazon.in/Purepet-Tuna-Salmon-Adult-Cat/dp/B07B2X17FG/ref=sxin_14?adgrpid=65751424784&cv_ct_cx=cat+food%27&ext_vrnc=hi&gclid=Cj0KCQiAubmPBhCyARIsAJWNpiPDZlAnKthGyhzeWwQXyvdx0WhqROhIu_KpIgjNlb5YWRbXFeYkKwIaAqhcEALw_wcB&hvadid=294145041064&hvdev=c&hvlocphy=9303196&hvnetw=g&hvqmt=e&hvrand=5800488642593170951&hvtargid=kwd-348626812541&hydadcr=29624_1809132&keywords=cat+food%27&pd_rd_i=B07B2X17FG&pd_rd_r=b4dc2ece-f9ba-4d31-a566-2fff418ffb8d&pd_rd_w=JWAVb&pd_rd_wg=n7Rl7&pf_rd_p=9fcf7fd6-b4b5-451a-8539-a9cd09f94598&pf_rd_r=4FF8V2RR14C15JS9T4A8&qid=1643092111&sr=1-1-571618a2-1e9e-49c4-ae7e-d71a2ef34bdd" class="btn">buy from amazon</a>
        </div>
        <div class="box"><br><br>
            <img src="images/drools.jpg" alt=""><br><br><br>
            <p>Drools Kitten Dry Cat Food, Ocean Fish - 4kg (3kg + 1kg Free Food Inside)</p>
            
            <a href="https://www.amazon.in/Drools-Ocean-Kitten-Inside-Limited/dp/B01MRI3DXA/ref=sr_1_20?adgrpid=65751424784&ext_vrnc=hi&gclid=Cj0KCQiAubmPBhCyARIsAJWNpiPDZlAnKthGyhzeWwQXyvdx0WhqROhIu_KpIgjNlb5YWRbXFeYkKwIaAqhcEALw_wcB&hvadid=294145041064&hvdev=c&hvlocphy=9303196&hvnetw=g&hvqmt=e&hvrand=5800488642593170951&hvtargid=kwd-348626812541&hydadcr=29624_1809132&keywords=cat+food%27&qid=1643092111&sr=8-20" class="btn">buy from amazon</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">adoptme</h3>
        <p>Adoptme is an online, searchable database of animals who need homes. It is a platform for pet lovers where they can adopt pets and sell pets for free which is situated in India. Organizations maintain their own home pages and available-pet databases.</p>

    </div>

</section>

<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Querry</span> us </h1>

    
    <form action="./query.php" method="post">

        <div class="inputBox">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="inputBox">
            <input type="number" name="number" placeholder="Number" required>
            <input type="text" name="subject" placeholder="Subject" required>
        </div>

        <textarea placeholder="Message" name="msg" id="" cols="30" rows="10" required></textarea>

        <input type="submit" value="Send message" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>subscribe us for latest updates</h3>

    <form action="./subscriber.php" method="post">
        <input class="box" name="sub_email" type="email" placeholder="Enter your email" required>
        <input type="submit" value="Subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-adoption"></i>Adoptme</a>
            <p>Adoptme is an online, searchable database of animals who need homes. It is a platform for pet lovers where they can adopt pets and sell pets for free which is situated in India. Organizations maintain their own home pages and available-pet databases.</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">france</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#home">home</a>
                <a href="#deal">About us</a>
                <a href="#posts">explore</a>
                <a href="#contact">contact us</a>
                <a href="#">contact</a>
            </div>
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <span>we are developer</span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->



















<!-- custom js file link  -->
<script src="script.js"></script>
    
</body>
</html>