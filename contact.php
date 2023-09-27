<!DOCTYPE html>
<html lang="en">
<?php include ("header.php") ?>
<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");

.container {
    padding: 15px;
}

.clearfloat {
    content: "";
    display: block;
    clear: both;
}

.cards1 {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.cards1 li {
    display: flex;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    margin: 10px;
    padding: 20px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 25px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    font-size: 0.9em;
    transition: all 0.2s ease-in-out;
    text-align: center;
}

.cards1 li:after,
.cards1 li:before {
    content: "";
    display: block;
    clear: both;
}

.cards1 li img {
    display: inline-block;
    width: 100%;
    height: auto;
    max-width: 150px;
    
    border-radius: 50%;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
    transition: all 0.5s ease-in-out;
}

.cards1 li .details {
    float: left;
    text-align: left;
    transition: all 0.5s ease-in-out;
    text-shadow: 1px 1px rgba(0, 0, 0, 0);
    min-width: 250px;
}

.cards1 li .details > span,
.cards1 li .details > a {
    display: block;
    padding: 0 15px 0 35px;
    margin-bottom: 15px;
    text-decoration: none;
    position: relative;
}

.cards1 li .details > span:before,
.cards1 li .details > a:before {
    display: inline-block;
    font: normal normal normal 13px/1 FontAwesome;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 15px;
    width: 15px;
    text-align: center;
    color: #444;
}

.cards1 li .details a {
    color: rgb(87, 137, 60);
    transition: color 0.5s ease-in-out;
}

.cards1 li .details a:hover,
.cards1 li .details a:focus {
    color: lighten(rgb(87, 137, 60), 25%);
    transition: color 0.5s ease-in-out;
}

.cards1 li .details .name:before {
    content: "\f2c0";
}

.cards1 li .details .title:before {
    content: "\f2c1";
}

.cards1 li .details .phone:before {
    content: "\f095";
}

.cards1 li .details .email:before {
    content: "\f003";
}

.cards1 li:hover {
    background: rgba(235, 237, 189, 0.5);
    transition: all 0.2s ease-in-out;
    transform: scale(1.03);
}

.cards1 li:hover img {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    transition: all 0.4s ease-in-out;
}

.cards1 li:hover .details {
    transition: all 0.5s ease-in-out;
    text-shadow: 1px 1px darken(rgba(235, 237, 189, 1), 10%);
}

.cards1 {
  display: flex;
  justify-content: space-between;
  list-style: none;
  padding: 0;
  height: 300px;
  width: 1000px;
}

.card2 { /* Updated class name to card2 */
  flex: 0 0 calc(50% - 10px);
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.card2 .title {
  font-size: 14px; /* Adjust the font size to your preference */
}
.card2 img { /* Updated class name to card2 */
  max-width: 100%;
}


@media (max-width: 550px) {
    .cards1 li {
        display: block;
        width: auto;
        max-width: 200px;
        margin: 30px auto;
    }


    .cards1 li img,
    .cards1 li .details {
        float: none;
    }

    .cards1 li img {
        margin: 0 auto;
    }

    .cards1 li .details {
        margin-top: 20px;
        text-align: center;
        min-width: 0;
    }

    .cards1 li .details span,
    .cards1 li .details a {
        padding: 0;
        white-space: break-all;
        word-wrap: break-word;
    }

    .cards1 li .details span:before,
    .cards1 li .details a:before {
        display: none;
    }
}
.wrap1 {
        display: flex;
        min-height: 70vh;
        flex-direction: column;
        max-width: auto;
        margin:auto;
    }
    .main1 {
        flex: 1;
        /*display:flex;*/
    }
</style>

    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Get in</span> touch</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        Personal info
                    </a>
                    <!--<a href="#" data-filter=".advertising">
                        CV
                    </a>--->
                    <a href="#" data-filter=".branding">
                        References
                    </a>

                </div>
                <div class="portfolio-container"> 
                    
                    <div class="col-lg-8 new">
                    <div class="portfolio-item">
  

                    
        
        <div class="container">
        <div class="card2">
           
            
                
                
                <!--<img src="assets/imgs/avatar.jpg" alt="" class="brand-img">-->
                <ul class="mt40 info list-unstyled">
                   <!--<li><span>Birthdate</span> : 09/13/1996</li>-->
                   <li><span>Email</span> : kunjulakshmiperumal@gmail.com</li>
                    <!--<li><span>Phone</span> : + (123) 456-7890</li>
                    <li><span>Skype</span> : John_Doe </li>-->
                    <li><span>Address</span> :  Kerala, India</li>
                    <li><span>CV</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
          
           
</div>
        </div>
   
                                
                    </div></div>
              
                 

                    <div class="col-md-6 col-lg-4 advertising"> 

                    </div>
                   
                
                
               
                 
                    <div class="container branding">
                    <div class="portfolio-item">
  <div class="container">
    <div class="row">
      <ul class="cards1">
        <li class="card2"> <!-- Updated class name to card2 -->
          <img src="assets/imgs/rahul.jpg" />
          <div class="details">
            <span class="name"><a href="https://sites.google.com/view/rahulklab/home" target="_blank">Dr Rahul Kumar</a></span>
            <span class="title">Assistant Professor, Dept of Biotechnology, IIT Hyderabad</span>
            <!--<a class="phone" href="tel:123-456-789">123-456-789</a>-->
            <a class="email" href="mailto:rahulk@bt.iit.ac.in">rahulk@bt.iit.ac.in</a>
          </div>
        </li>
        <li class="card2"> <!-- Updated class name to card2 -->
          <img src="assets/imgs/Bhavana.jpg">
          <div class="details">
            <span class="name"><a href="https://sites.google.com/iiserbpr.ac.in/btlab/home" target="_blank">Dr Bhavana Tiwari</a></span>
            <span class="title">DBT Wellcome Trust Fellow, IISER Berhampur</span>
            <!--<a class="phone" href="tel:123-456-789">123-456-789</a>-->
            <a class="email" href="mailto:btiwari@iiserbpr.ac.in">btiwari@iiserbpr.ac.in</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

    

                                <!--<div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>-->
                            </div>
                        </div>                                                     
                    </div> 
             
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->

    <?php include ("footer.php") ?>