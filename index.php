<!DOCTYPE html>
<html lang="en">
<?php include ("header.php") ?>
    <div class="container-fluid">
        <div id="about" class="row about-section">

            <div class="col-lg-4 about-card">
                
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                <div class="flex-container">
                <!--<div class="circle-image-container">
                    <img src="assets/imgs/avatar.jpg" alt="Your Image" class="circle-image">
                </div>-->
                <div class="text-container">
                <h5 class="mb-3">A BS MS graduate with a major in Biological Sciences</h5>
                <p class="mt-20">I have graduated from the Indian Insititute of Science Education and Research, Berhampur in July 2023. Coming
                    from an inter disciplinary background, I am more inclined towards bioinformatics especially in the genomics part. I am a part of the
                    Computational Genomics and Transcriptomics lab at Indian Institute of Technology, Hyderabad
                </p>
                <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
                </div>
                </div>
            </div>
           
           
            
          
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Database development</h6>
                        <p class="subtitle"> exercitat Repellendus,  corrupt.</p>
                        <hr>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Bioinformatics</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Python programming</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Machine learning</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Relevant Courseworks</h3>
                <span class="line mb-5"></span>
                <?php
$statements = array(
    "Genetics",
    "Bioinformatics",
    "Structural Biology",
    "Biochemistry",
    "Comparative Evolutionary Genomics",
    "Molecular Cell Biology",
    "Stem Cell Biology",
    "Microbiology",
    "Cancer Biology"
);
?>

    <ul>
        <?php foreach ($statements as $statement) : ?>
            <li><?php echo $statement; ?></li>
        <?php endforeach; ?>
    </ul>
                <!--<div class="row">
                    <div class="col-10 ml-auto mr-3">
                        <h6>Database development</h6>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                     
                        <hr>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-10 ml-auto mr-3">
                        <h6>Bioinformatics</h6>
                       
                        <hr>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-10 ml-auto mr-3">
                        <h6>Python programming</h6>
                        
                        <hr>
                    </div>
                </div>
                <div class="row">
        
                    <div class="col-10 ml-auto mr-3">
                        <h6>Machine learning</h6>
                        
                        <hr>
                    </div>
                </div>-->
            </div>
        </div>
    </div>



    <!--<section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Packs</span> Pricing</h1>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Free</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">0</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">5 <span class="text-muted">Project</span></li>
                            <li class="list-item">1GB <span class="text-muted">Storage</span></li>
                            <li class="list-item"><span class="text-muted">No Domain</span></li>
                            <li class="list-item">1 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Basic</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">10</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">50 <span class="text-muted">Project</span></li>
                            <li class="list-item">10GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">1<span class="text-muted">Domain</span></li>
                            <li class="list-item">5 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center price-card-requried mb-4">
                        <h3 class="price-card-title">Exclusive</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">25</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">150 <span class="text-muted">Project</span></li>
                            <li class="list-item">15GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">5<span class="text-muted"> Domain</span></li>
                            <li class="list-item">15<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Pro</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">99</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">500 <span class="text-muted">Project</span></li>
                            <li class="list-item">1000GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">10<span class="text-muted"> Domain</span></li>
                            <li class="list-item">Unlimite<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <!--<section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        New
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>                         
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>    
                        </div>              
                    </div> 
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>

                    <div class="col-md-6 col-lg-4 advertising"> 
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                           <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                           <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 advertising new"> 
                        <div class="portfolio-item">
                            <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                                
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                    
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                      
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div> 
            </div>  
        </div>            
    </section>
   End of portfolio section -->



    <!--<div class="section contact" id="contact">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="">
                            <div class="form-group">
                                <input  class="form-control" type="text" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id=" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="form-control btn btn-primary" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>

        </div>
    </div>-->
    <?php include ("footer.php") ?>
    


</body>
</html>
