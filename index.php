<?php
include "includes/db.php";
?>
<?php
include "includes/header.php";
?>
	<?php
include "includes/navigation.php";
?>	

		<main>
	<?php
include "includes/topnews.php";
?>	

            <br>
            	<?php
include "includes/trending.php";
?>	
      
		<section class="News">
            <div class="container">
                    <h2 class="widget-title"><span>खास खबर </span></h2>
         
            <div class="row no-padding">
                       <?php
                $query="SELECT * FROM news LIMIT 2";
                $select_all_news_query=mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($select_all_news_query)){
                    $news_title =$row['news_title'];
                 $news_editor =$row['news_editor'];
                 $news_date =$row['news_date'];
                 $news_image =$row['news_image'];
                 $news_content =$row['news_content']; 
                $news_image =$row['news_image']; 
          
               ?>
          
                
              
               <div class="col-md-4">
                 <a href="u.p.html">
                   <img src="images/<?php echo $news_image; ?>" style="width:100%; ">
                     <p><?php echo $news_title?></p>
<!--                                 <p>रिया चक्रवती ने SC में दाखिल याचिका में कहा, बिहार की जगह मुंबई में हो जांचा</p> -->
                   </a>
                </div>   
                <?php    }?>
<!--
             <div class="col-md-4">
                 <a href="u.p.html">
                   <img src="images/new-project-3-13.jpg" style="width:100%; height: auto">
                                 <p>जो सुशांत के साथ हुआ बॉलीवुड के कुछ लो मेरे साथ भी चाहते थे : शेखर सुमन
</p> 
                   </a>
                      <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                </div> 
-->

                <div class="col-md-4 hover-zoomin">
                    <div class="packet_check">
                    <h3><strong>नौकरी</strong></h3>
                     <ul class="packet">
                         <li><a href="u.p.html"><strong>Naukri: NIRDPR में इन पदों के लिए निकली बंपर वैकेंसी, जानें सबकुछ</strong></a></li>  
                     <li><a href="u.p.html"><strong>Sarkari Naukri : रेलवे में इन पदों पर निकली वैकेंसी, जल्द करें आवेदन</strong></a></li>     
                          <li><a href="u.p.html"><strong>Sarkari Naukri : सिर्फ इंटरव्यू देकर AIIMS में पाएं नौकरी</strong></a></li>  
                   
                    
                     </ul>
                        <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
          
                </div>
                </div>
                </div>
              
                </div>
          
            
            </section>
		      <section class="adds">
            <div class="container">
                  <div class="row">
                <div class="col-md-8">
                      <img src="images/adds.jpg" style="width:100%; height: auto">
                      </div>
                      <div class="col-md-4 hover-zoomin">
                    <div class="packet_check">
                    <h3><strong>आज का राशिफल</strong></h3>
                     <ul class="packet">  
                           <li><a href="u.p.html"><strong>जानिए कैसा रहेगा आज आपका दिन, पढ़िए 30 जुलाई का राशिफल</strong></a></li>  
                    
                     </ul>
                          <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
          
                </div>
                      </div></div>
                  </div>
            </section>
            <section class="trending_news2">
                   
            <div class="container">
<!--                <h2 class="widget-title"><span>ਤਾਜ਼ਾ ਖਬਰਾਂ</span></h2>-->
                <div class="row">
                   
                <div class="col-md-4">
                    <h4><strong>देश</strong></h4>
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/priyanka-gandhi-damage-controll-22.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p> प्रियंका गांधी वाड्रा ने खाली किया सरकारी बंगला, लोधी रोड से गुरुग्राम हुईं शिफ्ट</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                    </div>
               <div class="col-md-4">
                    <h4><strong>स्पेशल</strong></h4>
                    <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                     

                         <img src="images/jrdtata-27.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"><p> भारत के पहले पायलट और Air India के पहले चेयरमैन JRD Tata का आज है जन्मदिन, जानें उनके जीवन से जुड़े दिलचस्प किस्से</p>
                           
                        </div>
                        </div></div></a>
                    </div>
                 <div class="col-md-4">
                    <h4><strong>साइंस-टेक</strong></h4>
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
              <img src="images/digital-transactions-71.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"><p>प्कारोबार के डिजिटलाइजेशन से 216 अरब डॉलर बढ़ेगी जीडीपी, टेक्नोलॉजी ने निभाई अहम भूमिका</p>
                        </div>
                         </div></div></a>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                     <a href="u.p.html">  
                         <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/corona-covid-13.jpg" width="100%" height="200px" class="img-thumbnail" ></div>
                        <div class="col-md-8"><p> कोरोना वायरस इस डिवाइस से डर कर भाग जाएगा, घर, ऑफिस, मॉल, होटल होंगे सुरक्षित</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                         </div></div></a>
                    </div>
               <div class="col-md-4">
                    <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                         <img src="images/kargil-vijay-diwas-25.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> Kargil Vijay Diwas: मरते-मरते भी पाकिस्तानियों को छठी का दूध याद दिला गए भारतीय जाबांजि</p>
                        </div>
                        </div></div></a>
                    </div>
                 <div class="col-md-4">
                     <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
    <img src="images/pubg-40.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p>PUBG समेत 47 चीनी एप और किए गए प्रतिबंधित, मोदी सरकार की चीन पर दूसरी डिजिटल स्ट्राइक</p>
                        </div>
                           </div></div></a>  
                    </div>
                </div> <div class="row">
                <div class="col-md-4">
                       <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/rafale-hammer-75.jpg" width="100%" height="200px;" class="img-thumbnail"></div>
                        <div class="col-md-8"><p> अंबाला में राफेल के स्वागत की तैयारी शुरू, एयरबेस का 3 किमी एरिया नो ड्रोन जोन घोषित
                               </p></div>
                        
                           </div></div></a>
                      <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
               <div class="col-md-4">
                       <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/azimpremji-86.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> Happy Birthday Azim Premji: आम-ओ-ख़ास से प्रेम कर बनते ही गए अज़ीम</p>
                           
                        </div>
                           </div></div></a>
                    <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                 <div class="col-md-4">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/corona-virus-n-38.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> कोविड-19 के प्रसार का पता लगाने में फिटबिट डिवाइस ऐसे करेगा मदद <br></p></div>
                           </div></div></a>
                     <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                </div>
                </div>
            </section>   
        	   
            <section class="trending_news3">
                   
            <div class="container">
              
                <div class="row">
                <div class="col-md-8">
                      <h2><strong>खेल</strong></h2>
                    <div class="sports">
                     <div class="row">
                    <div class="col-md-6">
                         <div class="sports_3">
                               <a href="u.p.html"><img src="images/5-62-400x224.jpg" width="100%" height="310px"></a>
                       <strong> <p><a href="u.p.html">विदेशी कोचों का अनुबंध बढ़ा  </a></p></strong>
                        </div>
                    </div> 
                       
                <div class="col-md-6">
                        <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                      <a href="u.p.html"><img src="images/14-53-400x224.jpg" width="100%" > </a>
                    </div>
                    <div class="col-md-7"><a href="u.p.html"><strong> <p><a href="u.p.html">गंभीर बोले- धोनी जब तक फिट और फार्म में उन्हें खेलते रहना चाहिएाी</a></p></strong></a></div>
                     </div>
                  
                    </div>    
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                         <a href="u.p.html"><img src="images/4-64-400x224.jpg" width="100%" > </a>
                    </div>
                        <div class="col-md-7"><strong> <a href="u.p.html"><p><a href="#">कोरोनावायरस के कारण स्थगित हुए ये खेल</a></p></a></strong></div>
                     </div>
                  
                    </div> 
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                         <a href="u.p.html"><img src="images/13-55-400x224.jpg" width="100%" > </a>
                    </div>
                        <div class="col-md-7"><strong> <a href="u.p.html"><p>लीजेंड ऑफ चेस टूर्नामेंट में आनंद की लगातार पांचवीं पराजय ी</p></a></strong></div>
                     </div>
                  
                    </div> 
                    </div>
          
        
                </div>
                                 <div class="row">
                   <div class="col-md-6">   
              
                      <div class="sports_2">
                    <div class="row">
                        <a href="u.p.html">
                     <div class="col-md-5">
                      <img src="images/3-70-400x224.jpg" width="100%" > 
                    </div>
                         <div class="col-md-7"><strong> <a href="u.p.html"><p>मेसी को स्पेनिश लीग में मिला गोल्डन बूट</p></a></strong></div></a>
                  
                     </div>
                  
                    </div> 
                    </div>
                    <div class="col-md-6">
                  
                      <div class="sports_2">
                    <div class="row">
                        <a href="u.p.html">
                     <div class="col-md-5">
                      <img src="images/12-51-400x224.jpg" width="100%" > 
                    </div>
                            <div class="col-md-7"><strong> <a href="u.p.html"><p>पीसीबी बोला- 10 क्रिकेटरों के कोरोना संक्रमित होने पर इंग्लैंड दौरे पर जाने का फैसला लेना मुश्किल था</p></a></strong></div></a>
                     
                     </div>
                  
                    </div> 
         
                    </div>
                   
          
        
                </div>
                    </div>
                      <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                    <div class="side">
                           <div class="col-md-4">
                     <h2><strong>गैजेट्स</strong></h2>
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/google-office-86.jpg" width="100%" >
                        </div>
                        <div class="col-md-8"><p>गूगल पिक्सल 4A 3 अगस्त को होगा लॉन्च, कीमत 29 हजार से शुरू, जानें क्या है फीचर्स<br></p></div>
                           </div></div></a>
                    </div>      
                    <div class="col-md-4">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/huawei-76.jpg" width="100%">
                        </div>
                        <div class="col-md-8"><p>हुवावे के 5जी उपकरण में सुरक्षा जोखिम नहीं : एलजी यूप्लस</p></div>
                           </div></div></a>
                    </div>       
                    <div class="col-md-4">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/oneplus-phone-73.jpg" width="100%">
                        </div>
                        <div class="col-md-8"><p>OnePlus 8T और OnePlus 8T Pro इस बड़ी खासियत के साथ हो सकता है लॉन्चा</p></div>
                           </div></div></a>
                    </div>     
                    <div class="col-md-4">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/dell-77.jpg" width="100%">
                        </div>
                        <div class="col-md-8"><p>Dell ने भारत में 2020 गेमिंग लैपटॉप से हटाया पर्दा, जानें कीमत</p></div>
                           </div></div></a>
                          <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                    
                    </div>
           
               
                  
                </div>
                 

                </div>
            </section> 
              <section class="trending_video">
                   
            <div class="container">
                <h2 class="widget-title"><span>NN SPORTS</span></h2>
             <div class="row">
                   <div class="col-md-4">
                       <a href="video.html">
                       <div class="video_card">
                         <a href="video.html">      
                          
                            
               <iframe width="100%" height="" src="https://www.youtube.com/embed/vS1tzo-x-_M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </a>
                       <p><strong>2:30<a href="video.html">|  Flood 2020 : नेपाल से लकर भारत कर बाढ़ और बारिश का सितम, देखें हैरान करने वाली तस्वीरें</a></strong></p>
                       </div>
                       </a>
                  
                    </div>     
                       <div class="col-md-4">
                       <a href="video.html">
                    
                       <div class="video_card">
                                   <a href="video.html"> 
                        <iframe width="100%" height="" src="https://www.youtube.com/embed/hT6pe_tPxCs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                       <p><strong>1:16<a href="video.html">|  Uttar Pradesh: अयोध्या में भूमि पूजन को यादगार बनाने की चल रही है तैयारी</a></strong></p>
                       </div>
                       </a>
                  
                    </div>   
                <div class="col-md-4">
                       <a href="video.html">
                       <div class="video_card">
                                   <a href="video.html"> 
                               <iframe width="100%" height="" src="https://www.youtube.com/embed/hT6pe_tPxCs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                       <p><strong>02:37<a href="video.html">| Uttar Pradesh: राम मंदिर के लिए पत्थरों को तराशने के काम में आई तेजी, देखें ग्राउंड रिपोर्ट</a></strong></p>
                       </div>
                       </a>
                  
                    </div>
          
        
                </div>

                </div>
            </section>  
         <section class="adds">
            <div class="container">
                  <div class="row text-center">
                <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                   <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                </div>
                      </div></section>
            <section class="trending_news4">
                   
            <div class="container">
                <h2 class="widget-title"><span>ऑफबीट</span></h2>
                <div class="row">
                   <div class="col-md-4">
                   <a href="u.p.html">    
                       <div class="sports_card">
                         <img src="images/chicken-74.jpg" class="img-fluid">
                       <p>मुर्गा लूटने के चक्कर में कोरोना, बाढ़, सावन सब भूल गए लोग, 1800 मुर्गों से भरा ट्रक मिनटों में हो गया खाली <br>
                          </p>
                            <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                       </div>
                       </a>
                    </div>     
                    <div class="col-md-4">
                        <a href="u.p.html">
                       <div class="sports_card">
                         <img src="images/dead-72.jpg" class="img-fluid">
                       <p>बेटे के उग्र स्वभाव से परेशान हो पिता ने करवाई हत्या, 2 लाख में भाड़े पर लाया था बदमाश
                            </p>
                         
                             <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                     
                       </div>
                        </a>
                    </div>     
                    <div class="col-md-4">
                        <a href="u.p.html">
                       <div class="sports_card">
                         <img src="images/kidnapping-49.jpg" class="img-fluid">
                       <p>लड़की ने अपहरण का नाटक कर मां-बाप से मांगे 1 करोड़, आगे का वाकया कर देगा हैरान
                            </p>
                           <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                        
                       </div>
                        </a>
                    </div>
         
        
                </div>

                </div>
            </section>
           <section class="video_3">
                   
            <div class="container">
              
                <div class="row">
                      <h2><strong>मध्य प्रदेश वीडियो</strong></h2>
               
                     <div class="row">
                    <div class="col-md-6">
                  
                               <a href="video.html">       
                                   
                         <iframe width="100%" height="500" src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                            <strong> <p><a href="video.html"><span style="color: darkgoldenrod">08:33</span> | हिंदुस्तान के खिलाफ पाकिस्तान की नापाक साजिश 'डिकोड', कश्मीरियों को उकसाने का डेंजरेस प्लान</a></p></strong>
                       
                    </div> 
                       
                <div class="col-md-6">
                        <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                            <a href="video.html">       
                                   
                          <iframe width="100%"src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                        <div class="col-md-7"><strong> <p><a href="video.html"><span style="color: darkgoldenrod">06:01</span> | जनेऊ एक संस्कार है, किसी ने उन्हें भारतीय संस्कृति से जोड़ा है तो इसमें गलत क्या है?</a></p></strong></div>
                     </div>
                  
                    </div>    
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                             <a href="video.html">       
                                   
                         <iframe width="100%" src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                        <div class="col-md-7"><strong><p><a href="video.html"><span style="color: darkgoldenrod">05:25 </span>|चंद्रशेखर आजाद-भगत सिंह जैसे क्रांतिकारियों को जाति के बंधन में नहीं रखना चाहिए: विवेक श्रीवास्‍तवट</a></p></strong></div>
                     </div>
                  
                    </div> 
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                          <a href="video.html">       
                                   
                         <iframe width="100%"  src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                        <div class="col-md-7"><strong> <a href="video.html"><p><span style="color: darkgoldenrod">02:23</span> |ब्राह्मणों के खिलाफ गलत सोच वालों को देश से निकाल देना चाहिए : शुभ्रस्थाी</p></a></strong></div>
                     </div>
                  
                    </div> 
                    </div>
          
        
                </div>
                                 <div class="row">
                   <div class="col-md-6">   
              
                      <div class="sports_2">
                    <div class="row">
                        <a href="newspage.html">
                     <div class="col-md-5">
                                     <a href="video.html">       
                                   
                     <iframe width="100%"  src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                            <div class="col-md-7"><strong> <a href="video.html"><p><span style="color: darkgoldenrod">15:28</span> | Lakh Take ki baat: देखिए कुदरत का सबसे खौफनाक चेहरा, यह देखकर सहम जाएंगे आप</p></a></strong></div></a>
                  
                     </div>
                  
                    </div> 
                    </div>
                    <div class="col-md-6">
                  
                      <div class="sports_2">
                    <div class="row">
                        <a href="newspage.html">
                     <div class="col-md-5">
                              <a href="video.html">       
                   <iframe width="100%"  src="https://www.youtube.com/embed/Jl5U4ltVKkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                    </div>
                            <div class="col-md-7"><strong> <a href="video.html"><p><span style="color: darkgoldenrod">02:53</span> | ब्राह्मणों के खिलाफ गलत सोच वालों को देश से निकाल देना चाहिए : शुभ्रस्था</p></a></strong></div></a>
                     
                     </div>
                  
                    </div> 
         
                    </div>
                   
          
        
                </div>
                      <a href="video.html" class="btn btn-danger bkd_btn" style="float: right">View More >></a>
                 
             
               
                  
                </div>
                 

                </div>
            </section>
               <section class="trending_news2">
                   
            <div class="container">
<!--                <h2 class="widget-title"><span>ਤਾਜ਼ਾ ਖਬਰਾਂ</span></h2>-->
       
                <div class="row">
               <div class="col-md-8">
                    <div class="row">
                             <div class="col-md-6">
                   
                       <h4><strong>क्राइम</strong></h4>
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/looted-crime-64.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p>घर में घुस बदमाशों ने मचाया तांडव, परिवार को बंधक बनाकर पीटा और फिर लूट लिया सारा सामान</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                    
                 
                    </div>               
                        <div class="col-md-6">
                   
                       <h4><strong>वायरल</strong></h4>
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/bolero-45.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p>सड़क किनारे खड़े युवक को मारने आ रही थी जेसीबी, भगवान ने महिंद्रा बोलेरो को भेज बचाई जान!</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                    
                 
                    </div>
                   </div>            
                   <div class="row">
                             <div class="col-md-6">
                   
                      
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/plant-14.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p>लखनऊ के पॉश इलाके में पौधा चोरी करने के लिए कार लेकर आया था चोर, CCTV में कैद हुई अजीबो-गरीब वारदात</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                    
                 <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>               
                        <div class="col-md-6">
                   
                     
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/harbhajan-singh-ians-21.jpeg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p>हरभजन सिंह का बिजली बिल देखकर आप भी चौंक जाएंगे, बोले- क्‍या पूरे मोहल्‍ले का भेज दिया</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                         <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                 
                    </div>
                   </div>
                    
                    </div>  
      

                              <div class="col-md-4">
                    
                    <h4><strong>Poll</strong></h4>
                        <h3><strong>क्या प्रधानमंत्री का अयोध्या जाना धर्मनिरपेक्षता के खिलाफ है? (वोटिंग सिर्फ रात 10 बजे तक)</strong></h3>
                   <form action="#">
  <input type="radio" id="हां" name="हां" value="हां">
  <label for="हां"> हां</label><br>
  <input type="radio" id="नहीं" name="नहीं" value="नहीं">
  <label for="नहीं">नहीं</label><br>
  <input type="radio" id="कह नहीं सकते" name="कह नहीं सकते" value="कह नहीं सकते">
  <label for="कह नहीं सकते">कह नहीं सकते</label>

</form>
                        <a href="#" class="btn btn-primary">Vote</a>
                    </div>
                </div>
                </div>
            </section>  
                  <section class="adds">
            <div class="container">
                  <div class="row">
                <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                   <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                <div class="col-md-4">
                      <img src="images/add1.jpg">
                      </div>
                </div>
                      </div></section>
                    <section class="trending_news3">
                   
            <div class="container">
              
                <div class="row">
             
                      <h2><strong>मनोरंजन</strong></h2>
                    <hr>
                     <div class="row">
                    <div class="col-md-6">
                               <a href="u.p.html"><img src="images/7-65-400x224.jpg" width="100%" > </a>
                        <strong> <a href="u.p.html"><p>अपने पिता और नशीरुद्धीन शाह की राय पर गौर करते हैं रणदीप हुड्डा, कहा बाकी मायने नहीं रखते</p></a></strong>
                      
                    </div> 
                       
                <div class="col-md-6">
                        <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                      <a href="u.p.html"><img src="images/10-55-400x224.jpg" width="100%" > </a>
                    </div>
                    <div class="col-md-7"><a href="u.p.html"><strong> <p><a href="u.p.html">प्रभास स्टारर फिल्म के लिए दीपिका को दिए जा रहे 20 करोड़ रुपये</a></p></strong></a></div>
                     </div>
                  
                    </div>    
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                         <a href="u.p.html"><img src="images/6-64-400x224.jpg" width="100%" > </a>
                    </div>
                        <div class="col-md-7"><strong> <a href="u.p.html"><p><a href="#">उर्वशी रौतेला ने बॉलीवुड के मिथक को तोड़ा</a></p></a></strong></div>
                     </div>
                  
                    </div> 
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                      
                            <a href="u.p.html"><img src="images/9-59-400x224.jpg" width="100%" ></a>
                    </div>
                        <div class="col-md-7">
                                <strong> <p><a href="u.p.html">इस बार खतरों के खिलाड़ी में होस्ट नहीं करेंगे रोहित शेट्टी</a></p></strong>
                        </div>
                     </div>
                  
                    </div> 
                    </div>
          
        
                </div>
                                 <div class="row">
                   <div class="col-md-6">   
              
                      <div class="sports_2">
                    <div class="row">
                        <a href="u.p.html">
                     <div class="col-md-5">
                      <img src="images/kumkum-61.jpg" width="100%" > 
                    </div>
                         <div class="col-md-7"><strong> <a href="u.p.html"><p>मशहूर अभिनेत्री कुमकुम का 86 साल की उम्र में निधन, लंबे समय से थीं बीमार</p></a></strong></div></a>
                  
                     </div>
                  
                    </div> 
                    </div>
                    <div class="col-md-6">
                  
                      <div class="sports_2">
                    <div class="row">
                        <a href="u.p.html">
                     <div class="col-md-5">
                      <img src="images/8-63-400x224.jpg" width="100%" > 
                    </div>
                            <div class="col-md-7"><strong> <a href="u.p.html"><p>बेटियों को खेत जोतते देख पसीजे सोनू सूद, बोले- इनको पढ़ने दें बैल मैं भेजता हूं&nbsp;/p></a></strong></div></a>
                     
                     </div>
                  
                    </div> 
         
                    </div>
                   
          
        
                </div>
                    </div>
              
               
                  
                </div>
                 

         
            </section> 
                            <section class="trending_video">
                   
            <div class="container">
                <h2 class="widget-title"><span>NN BOLLYWOOD</span></h2>
                <div class="row">
                   <div class="col-md-4">
                       <a href="video.html">
                       <div class="video_card">
                         <a href="video.html">      
                             <video controls="controls" width="100%" height="" controls>
                            
                 <source src="images/comp_01.mp4" type="video/mp4">
                 <source src="images/comp_01.mp4" type="video/ogg">
      
                             </video></a>
                       <p><strong>02:40<a href="video.html">| Entertainment: Hina Khan ने स्लो मोशन से जीता दिल</a></strong></p>
                       </div>
                       </a>
                  
                    </div>     
                       <div class="col-md-4">
                       <a href="video.html">
                    
                       <div class="video_card">
                                   <a href="video.html"> 
                                <video controls="controls" width="100%" height="" controls>
                            
                 <source src="images/comp_01.mp4" type="video/mp4">
                 <source src="images/comp_01.mp4" type="video/ogg">
      
                                       </video></a>
                       <p><strong>13:14<a href="video.html">| Entertainment: मुंबई पहुंचकर क्‍यों परेशान हो गईं Ratan Raajputh</a></strong></p>
                       </div>
                       </a>
                  
                    </div>   
                <div class="col-md-4">
                       <a href="video.html">
                       <div class="video_card">
                                   <a href="video.html"> 
                                <video controls="controls" width="100%" height="" controls>
                            
                 <source src="images/comp_01.mp4" type="video/mp4">
                 <source src="images/comp_01.mp4" type="video/ogg">
      
                                       </video></a>
                       <p><strong>02:29<a href="video.html">|  Entertainment: सुशांत सिंह सुसाइड केस में महेश भट्ट से पूछताछ, देखें वीडियो</a></strong></p>
                       </div>
                       </a>
                  
                    </div>
          
        
                </div>

                </div>
            </section>  
                          <section class="video_3">
                   
            <div class="container">
              
                <div class="row">
                      <h2><strong>फोटो</strong></h2>
               
                     <div class="row">
                    <div class="col-md-6">
                  
                               <a href="photo.html">       
                                <img src="images/823-kirti-senon-birthday.jpg" width="100%" height="500px">   
                           </a><br>
                            <strong> <p><a href="photo.html">PICS : क्‍यूट कृति सेनन की ग्‍लैमरस तस्‍वीरों को देख मंत्रमुग्‍ध हो जाएंगे आप</a></p></strong>
                       
                    </div> 
                       
                <div class="col-md-6">
                        <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                            <a href="photo.html">       
                                   
                   <img src="images/684-himesh.jpg" width="100%" height="auto">
                           </a>
                    </div>
                        <div class="col-md-7"><strong> <p><a href="photo.html">PICS : 'आप का सुरूर' से बाॅलीवुड में इतिहास रचने वाले हिमेश रेशमिया का देखें Style Statement</a></p></strong></div>
                     </div>
                  
                    </div>    
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                             <a href="video.html">       
                                   
                    <img src="images/865-manyata.jpg" width="100%" height="auto"></a>
                    </div>
                        <div class="col-md-7"><strong><p><a href="photo.html">Photo: मान्यता दत्त की देखें अनदेखी तस्वीरें, यकीन नहीं कर पाएंगे वो जुड़वा बच्चों की मां हैं</a></p></strong></div>
                     </div>
                  
                    </div> 
                      <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                          <a href="photo.html">       
                                   
                  <img src="images/592-rakulpreet1.jpg" width="100%" height="auto">  
                         </a>
                    </div>
                        <div class="col-md-7"><strong> <a href="video.html"><p>PICS : यूं ही नहीं ग्‍लैमरस हैं रकुल प्रीत सिंह, योगा-फंक्‍शनल ट्रेनिंग से पाई है फिटनेस</p></a></strong></div>
                     </div>
                  
                    </div>        
                    <div class="sports_1">
                    <div class="row">
                    
                     <div class="col-md-5">
                          <a href="photo.html">       
                                   
               <img src="images/589-mugdha-godse13.jpg" width="100%" height="auto"> </a>
                    </div>
                        <div class="col-md-7"><strong> <a href="video.html"><p>PICS : मुग्‍धा गोडसे की इन तस्‍वीरों को देखकर मुग्‍ध हो जाएंगे आप, कल मनाएंगी जन्‍मदिन</p></a></strong></div>
                     </div>
                  
                    </div> 
                         </div>
                </div>

                </div>
                      <a href="video.html" class="btn btn-danger bkd_btn" style="float: right">View More >></a>
                 
             
               
                  
                </div>
                 


            </section> 
                      <section class="trending_news3">
                   
            <div class="container">
              
                <div class="row">
                <div class="col-md-6">
                      <h2><strong>शिक्षा</strong></h2>
                    <div class="education">
                     <div class="row">
                    <div class="col-md-12">
                    
                               <a href="u.p.html"><img src="images/cbse-board-results-61.jpg" width="100%" height="auto" ></a>
                     
                       <strong><p><a href="u.p.html">Rajasthan 10th Board Result: आज जारी होगा राजस्थान 10वीं बोर्ड का रिजल्ट, ऐसे कर सकते हैं चेक</a></p></strong> 
                        <hr>
                        <div class="row">
                        <div class="col-md-4">
                            <img src="images/cbse-board-exams-corona-lockdown-60.jpg" width="100%" height="auto">
                            </div>
                            <div class="col-md-8">
                            <strong><p><a href="result.php">MP Board Result 2020: MP 12वीं बोर्ड रिजल्ट जारी, ऐसे करें चेक</a></p></strong>
                            </div>
                        </div>
                    </div> 
          
        
                </div>
                    </div>
                      <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                         <div class="col-md-6">
                               <h2><strong>लाइफ़स्टाइल</strong></h2>
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/rakhigifts-95.jpg" width="100%" height="auto">
                        </div>
                        <div class="col-md-8"><p>Rakhi 2020: दूर रहकर ऐसे बिखेरे अपनी बहन के चेहरे पर मुस्कान, दें ये राखी गिफ्ट</p></div>
                           </div></div></a>
                    </div>      
                    <div class="col-md-6">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/glamour-look-48.jpg" width="100%" height="auto">
                        </div>
                        <div class="col-md-8"><p>Beauty Tips: इन उपायों को अपनाकर पाएं हेल्दी और खूबसूरत होंठ</p></div>
                           </div></div></a>
                 
                    </div>
                  <div class="col-md-6">
                   
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/saree-41.jpg" width="100%" height="auto" >
                        </div>
                        <div class="col-md-8"><p>Fashion Tips: इन शहरों से खरीदें बेहतरीन Handloom Sarees <br></p></div>
                           </div></div></a>
                    </div>      
                    <div class="col-md-6">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/barsat-29.jpg" width="100%" height="auto">
                        </div>
                        <div class="col-md-8"><p>बारिश में ऐसे रखें अपनी स्किन का ख्याल, रहें बला सी खूबसूरत</p></div>
                           </div></div></a>
                    </div>       
                    <div class="col-md-6">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/menhair-86.jpg" width="100%" height="auto">
                        </div>
                        <div class="col-md-8"><p>पुरुष इन उपायों को अपनाकर ऐसे कर सकते हैं अपने बालों की देखभाला</p></div>
                           </div></div></a>
                                 <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>     
               
               
                  
                </div>
                 

                </div>
            </section> 
           <section class="duniya">
                   
            <div class="container">
                <h2>दुनिया</h2>
            
                <div class="row">
                   <div class="col-md-3">
                   <a href="u.p.html">    
                       <div class="sports_card">
                         <img src="images/trump-xi-25.jpg" width="100%">
                           <div class="para">
                                <p>ह्यूस्टन स्थित चीनी वाणिज्य दूतावास में घुसे अमेरिकी एजेंट, चीन बौखलाया
                          </p>
                            <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                           </div>
                  
                       </div>
                       </a>
                    </div>     
                <div class="col-md-3">
                   <a href="u.p.html">    
                       <div class="sports_card">
                         <img src="images/america-vs-china-19.jpg" width="100%">
                           <div class="para">
                                <p>अमेरिका ने चीनी वाणिज्य दूतावास पर किया कब्जा तो चीन ने भी चली यह चाल
                          </p>
                            <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                           </div>
                  
                       </div>
                       </a>
                    </div>    
               <div class="col-md-3">
                   <a href="u.p.html">    
                       <div class="sports_card">
                         <img src="images/canada-73.jpg" width="100%">
                           <div class="para">
                                <p>कनाडा में भी उठी चीन के खिलाफ आवाज, वाणिज्य दूतावास के पास जमकर हुआ प्रदर्शन
                          </p>
                            <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                           </div>
                  
                       </div>
                       </a>
                    </div>      
                    <div class="col-md-3">
                   <a href="u.p.html">    
                       <div class="sports_card">
                         <img src="images/covid-19-ians-60.jpg" width="100%">
                           <div class="para">
                                <p>अमेरिका ने चीनी वाणिज्य दूतावास पर किया कब्जा तो चीन ने भी चली यह चाल
                          </p>
                            <a href="u.p.html" class="btn btn-danger bkd_btn">Read More >></a>
                           </div>
                  
                       </div>
                       </a>
                    </div> 
         
        
                </div>

                </div>
            </section>
             <section class="adds">
            <div class="container">
                  <div class="row">
                <div class="col-md-12">
                      <img src="images/adds.jpg" width="100%">
                      </div>
                  </div>
                  </div>
            </section>
            <section class="trending_news2">
                   
            <div class="container">
<!--                <h2 class="widget-title"><span>ਤਾਜ਼ਾ ਖਬਰਾਂ</span></h2>-->
                <div class="row">
                   
                <div class="col-md-4">
                    <h4><strong>युटिलिटीज़</strong></h4>
                      <a href="u.p.html"> <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/irctc-sbi-rupay-credit-card-69.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"> <p>ट्रेन टिकट बुक करने पर नहीं देना पड़ेगा चार्ज, इतनी बार मुफ्त में उठा सकेंगे प्रीमियम लाउंज का फायदा</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                          </div></div></a>
                    </div>
               <div class="col-md-4">
                    <h4><strong>धर्म-कर्म</strong></h4>
                    <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                     

                         <img src="images/rakhikatha-48.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"><p>जानें रक्षाबंधन मनाने के पीछे की कहानी और इसका महत्व</p>
                           
                        </div>
                        </div></div></a>
                    </div>
                 <div class="col-md-4">
                    <h4><strong>कारोबार</strong></h4>
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
              <img src="images/7th-pay-commission2-99.jpg" width="100%" height="200px" class="img-thumbnail"></div>
                        <div class="col-md-8"><p>मोदी सरकार ने कोविड महामारी के दौरान सेवानिवृत्त होने वाले कर्मचारियों को दी ये बड़ी राहत</p>
                        </div>
                         </div></div></a>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                     <a href="u.p.html">  
                         <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/railway-02-19.jpg" width="100%" height="200px" class="img-thumbnail" ></div>
                        <div class="col-md-8"><p> क्या आप जानते हैं ट्रेन के आखिरी डिब्बे में क्रॉस का निशान क्यों बना होता है, यहां जानिए सबकुछ</p>
<!--                            <a href="u.p.html" class="btn">Read More >></a>-->
                        </div>
                         </div></div></a>
                    </div>
               <div class="col-md-4">
                    <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                         <img src="images/sawan-31.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> Sawan 2020: सावन का चौथा सोमवार आज, भूलकर भी न करें ये काम</p>
                        </div>
                        </div></div></a>
                    </div>
                 <div class="col-md-4">
                     <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
    <img src="images/jewellery-ians-73.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p>ज्वैलर्स के लिए बड़ी खबर, अब अगले साल 1 जून से लागू होगा यह नियम</p>
                        </div>
                           </div></div></a>  
                    </div>
                </div> <div class="row">
                <div class="col-md-4">
                       <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/post-office-1-70.jpg" width="100%" height="200px;" class="img-thumbnail"></div>
                        <div class="col-md-8"><p> गांव के पोस्ट ऑफिस में भी खोल सकेंगे पब्लिक प्रॉविडेंट फंड अकाउंट 
                               </p></div>
                        
                           </div></div></a>
                      <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
               <div class="col-md-4">
                       <a href="u.p.html"><div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/bakraid1-51.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> Bakrid 2020: इस बार दूर रहकर ऐसे मनाएं अपनों के साथ बकरीद का त्यौहार</p>
                           
                        </div>
                           </div></div></a>
                    <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                 <div class="col-md-4">
                     <a href="u.p.html">  <div class="trending_box">
                    <div class="row">
                    <div class="col-md-4">
            <img src="images/crop-ians-78.jpg" width="100%" height="200px" class="img-thumbnail" >
                        </div>
                        <div class="col-md-8"><p> चंबल के बीहड़ में बहेगी विकास की बयार, वीरान भूमि में लहलहाएगी फसलें <br></p></div>
                           </div></div></a>
                     <a href="u.p.html" class="btn btn-danger bkd_btn" style="float: right">Read More >></a>
                    </div>
                </div>
                </div>
            </section>   
        	   <section class="last_section">
            <div class="container">
                   <div class="row">
                     

                       <div class="col-md-6">
                                <h2>ऑटो</h2>
                            <div class="auto_section">
                           <div class="row">
                                <div class"auto">
                           <div class="col-md-6">
                               <img src="images/hyundai-creta-100.jpg" width="100%" height="auto">
                               <p>Hyundai की नई CRETA की बंपर डिमांड, अब तक 55 हजार ग्राहक करा चुके हैं बुकिंग</p>
                               </div>   </div>
                            <div class="col-md-6">
                               <div class="auto_list">
                                <ul>
                                    <li>घरेलू, निर्यात बाजार में दोपहिया वाहन की बिक्री में हो रहा है सुधार: Bajaj Auto</li>
                                    <li>मर्सिडीज-बेंज को उम्‍मीद, त्योहारी मौसम में बिक्री में आएगी तेजी </li>
                                    <li>कोरोना वायरस महामारी से जून तिमाही में यात्री वाहनों के निर्यात पर पड़ा बुरा असर</li>
                                </ul>
                                </div>
                               </div></div></div>
                         
                      </div>  
                        
                    <div class="col-md-6">
                       <h2>हेल्थ</h2>
                         <div class="auto_section">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-5">
                                <img src="images/sleep-97.jpg" width="100%" height="auto" class="img-thumbnail">
                                </div>
                                <div class="col-md-7">
                                <p><a href="u.p.html"><strong>slनींद न आना इन बीमारियों का हो सकता है लक्षण, जानें क्या है कारण</strong></a></p>
                                </div>
                            </div>
                            </div>
                          <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-5">
                                <img src="images/delhi-corona-test-21.jpg" width="100%" height="auto" class="img-thumbnail">
                                </div>
                                <div class="col-md-7">
                                <p><a href="u.p.html"><strong>कान में भी पहुंच सकता है कोरोना वायरस, रिसर्च में हुआ चौंकाने वाला खुलासा</strong></a></p>
                                </div>
                            </div>
                            </div>
                             </div></div>
                    </div>    
                       <div class="col-md-6">
                      
                         <div class="auto_section">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-5">
                                <img src="images/coronavirussymptoms-46.jpg" width="100%" height="auto" class="img-thumbnail">
                                </div>
                                <div class="col-md-7">
                                <p><a href="u.p.html"><strong>कोरोना वायरस: 26 प्रतिशत लोगों में दिख रहे हैं यह सामान्य से लक्षण</strong></a></p>
                                </div>
                            </div>
                            </div>
                          <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-5">
                                <img src="images/kadha-46.jpg" width="100%" height="auto" class="img-thumbnail">
                                </div>
                                <div class="col-md-7">
                                <p><a href="u.p.html"><strong>मानसून और कोरोना काल में ऐसे करें अपनी इम्यूनिटी को बूस्ट, आजमाएं ये टिप्स</strong></a></p>
                                </div>
                            </div>
                            </div>
                             </div></div>
                    </div>
                     
                
                </div></div>
            </section>
		</main>
			
<?php
include "includes/footer.php";
?>