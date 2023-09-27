<!DOCTYPE html>
<html lang="en">
<head>

<?php include ("header2.html") ?>


<style>    


.wrap1 {
	display: flex;
	min-height: 60vh;
	flex-direction: column;
	max-width:auto;
  margin:auto;
}
.main1 {
	flex: 1;
	
}
@media screen and (max-width:680px){
	.main1 {flex-direction:column;}	
}
     @import url(https://fonts.googleapis.com/css?family=Open+Sans);
           body{
             background: white;
             font-family: sans-serif;
           }
           input[type=radio] {
  opacity: 0;
}

@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");

body {
    font-family: "Open Sans", sans-serif;
    color: #444;
    font-size: 1em;
}

.container {
    padding: 15px;
}

.clearfloat {
    content: "";
    display: block;
    clear: both;
}

.cards {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.cards li {
    display: inline-block;
    margin: 10px;
    padding: 20px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 25px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    font-size: 0.9em;
    transition: all 0.2s ease-in-out;
    text-align: center;
}

.cards li:after,
.cards li:before {
    content: "";
    display: block;
    clear: both;
}

.cards li img {
    display: inline-block;
    width: 100%;
    height: auto;
    max-width: 150px;
    float: left;
    border-radius: 50%;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
    transition: all 0.5s ease-in-out;
}

.cards li .details {
    float: left;
    text-align: left;
    transition: all 0.5s ease-in-out;
    text-shadow: 1px 1px rgba(0, 0, 0, 0);
    min-width: 250px;
}

.cards li .details > span,
.cards li .details > a {
    display: block;
    padding: 0 15px 0 35px;
    margin-bottom: 15px;
    text-decoration: none;
    position: relative;
}

.cards li .details > span:before,
.cards li .details > a:before {
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

.cards li .details a {
    color: rgb(87, 137, 60);
    transition: color 0.5s ease-in-out;
}

.cards li .details a:hover,
.cards li .details a:focus {
    color: lighten(rgb(87, 137, 60), 25%);
    transition: color 0.5s ease-in-out;
}

.cards li .details .name:before {
    content: "\f2c0";
}

.cards li .details .title:before {
    content: "\f2c1";
}

.cards li .details .phone:before {
    content: "\f095";
}

.cards li .details .email:before {
    content: "\f003";
}

.cards li:hover {
    background: rgba(235, 237, 189, 0.5);
    transition: all 0.2s ease-in-out;
    transform: scale(1.03);
}

.cards li:hover img {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    transition: all 0.4s ease-in-out;
}

.cards li:hover .details {
    transition: all 0.5s ease-in-out;
    text-shadow: 1px 1px darken(rgba(235, 237, 189, 1), 10%);
}

@media (max-width: 550px) {
    .cards li {
        display: block;
        width: auto;
        max-width: 200px;
        margin: 30px auto;
    }

    .cards li img,
    .cards li .details {
        float: none;
    }

    .cards li img {
        margin: 0 auto;
    }

    .cards li .details {
        margin-top: 20px;
        text-align: center;
        min-width: 0;
    }

    .cards li .details span,
    .cards li .details a {
        padding: 0;
        white-space: break-all;
        word-wrap: break-word;
    }

    .cards li .details span:before,
    .cards li .details a:before {
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
</head>
<body>
<main class="main1">
<div class="wrap1">
<div class="wrapper">
    <div class="container">
<div id="content">
      <h3 style="margin:20px; text-align: center;">Contact Us</h3>   <hr class="new">
     
</div>


	<ul class="cards">
		<li>
			<img src="assets/images/rahulk.jpg" />
			<div class="details">
				<span class="name">Dr. Rahul Kumar</span>
				<span class="title">Principal Investigator</span>
				<!--<a class="phone" href="tel:123-456-789">123-456-789</a>-->
				<a class="email" href="mailto:rahulk@bt.iit.ac.in">rahulk@bt.iit.ac.in</a>
			</div>
		</li>
		<li>
			<img src="assets/images/kunjulakshmi.jpeg">
			<div class="details">
				<span class="name">Kunjulakshmi R</span>
				<span class="title">Developer</span>
				<!--<a class="phone" href="tel:123-456-789">123-456-789</a>-->
				<a class="email" href="mailto:kunjulakshmiperumal@gmail.com">kunjulakshmiperumal@gmail.com</a>
			</div>
		</li>
	</ul>


      </div></div>
      </div></main>

</body>
<?php include ("footer.html") ?>
</html>