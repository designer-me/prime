<header>
	
          
        <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
           <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
<?php
    $query = "SELECT * FROM category";
            $select_category = mysqli_query($connection,$query);
           
            
            
    ?>
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <?php
            while($row = mysqli_fetch_assoc($select_category)){
                $cat_title = $row['cat_title'];
                 echo "<li><a href='#'>{$cat_title}</a></li>";
                
            }
            ?>
<!--
          <li><a href="mp.html">ताज़ातरीन</a></li>
          <li> <a href="video.html">वीडियो</a>
-->
<!--
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">देश की बहस</a></li>
              <li><a href="#">खबर Cut to Cut</a></li>
              <li><a href="#">लाख टके की बात</a></li>
              <li><a href="#">खोज खबर</a></li>
              <li><a href="#">स्पीड न्यूज</a></li>
            <li><a href="#">स्पीड न्यूज</a></li>
            </ul>
-->
<!--          </li>-->
<!--
          <li><a href="boards.html">बोर्ड परिणाम</a></li>
          <li><a href="desh.html">देश</a></li>
          <li><a href="duniya.html">दुनिया</a></li>
       
            <li><a href="mp.html">मनोरंजन</a></li>
            <li><a href="mp.html">खेल</a></li>
            <li><a href="mp.html">शिक्षा</a></li>
            
              <li><a href="mp.html">मध्य प्रदेश</a></li> 
            <li><a href="u.p.html">बिहार</a></li> 
            <li><a href="photo.html">फोटोा</a></li>
            <li class="dropdown"> <a href="#">राज्य </a>
-->
<!--
               <ul class="dropdown-menu" role="menu">
                 <li><a href="mp.html">मध्य प्रदेश</a></li> 
            <li><a href="u.p.html">बिहार</a></li> 
                   
            </ul>
-->
<!--            </li>-->
<!--            <li>-->
<!--            <a href="mp.html">बिजनेस</a></li>-->
            <li><a href="Admin">Admin</a></li>
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <i class="fas fa-angle-down"></i></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="login.html">Login</a></li> 
            <li><a href="sign-u.p.html">Sign-up</a></li> 
            </ul>
            </li>
            
<!--            <li>-->
<!--            <a href="mp.html">My Account</a></li>-->
            <li>
 
                              <form class="form-inline active-cyan-4" action="./search.php" method="post">
  <input name="search" class="form-control-sm mr-3 w-75" style="padding: 5px;margin-top:5px;"  type="text" placeholder="Search"
    aria-label="Search">
  <button type="submit" value="submit" name="submit"><i class="fas fa-search" aria-hidden="true" style="padding: 10px;color:#fff;background:red;"></i></button>
</form>
            </li>
        </ul>
      </div>
           		<div class="website-header" style="background: #f1f1f1">
                <div class="logo">
                <img src="images/logo.png" class="img-fluid">
				
                </div>
                      
				<h1>खबर वही जो सही </h1>
                
				<div class="social-icons">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-google-plus-g"></i>
					<i class="fab fa-instagram"></i>
					<i class="fas fa-rss"></i>
				</div>
			</div>
    </nav>
 
  </section>
            

		</header>