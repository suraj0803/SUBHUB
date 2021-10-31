<!DOCTYPE html>
<?php
session_start();
$conn= mysqli_connect('localhost','root','123456789','user_profile');

if(isset($_POST['signout'])){
	session_destroy();
}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$query=$_POST['query'];
	$subject=$_POST['subject'];
	
	$q="insert into query values('$email','$name', '$subject', '$query')";
	if(mysqli_query($conn, $q)){
		echo "<script language='javascript'>alert('Query will be resolved within some days')</script>";
	}
	else{
		echo mysqli_error($conn);
	}
}

?>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    font-family:'poppins', sans-serif;
    margin-top:5px;
    margin-bottom: 5px;
   
}

:root{
    --primary-color:#f28517
}







.background_image{
    background-image: linear-gradient(#00010cb3, #00010cb3 ), url('https://dstudio.consulting/wp-content/uploads/2020/09/digital-marketing-background-1600x700.jpg');
    width: 100%;
    height: 100vh;
    background-size: cover;
}

.background_image .navbar{
    padding: 20px, 0px;

}

.navbar .nav-item{
    margin: 0px 15px;
}

.navbar .nav-item .btn{
        width: 100%;
        height: 40px;
        background-color: rgb(42, 190, 109);
        color: white;
        border: none;
        box-shadow: 0 3px 7px 0 #314584;
        border-radius: 5px;
    font-size: 1.1rem;
    font-weight: 600;
    }


.navbar .navbar-nav .nav-link{
    color: white !important;
    font-size: 10px;
    font-weight: 800;
}

.navbar .navbar-nav .nav-link::before{
    content: '.';
    color: var(--primary-color);
    font-size: 22px;
    margin-right: 3px;
}

.navbar .navbar-nav .nav-link:hover::before{
    position: relative;
    top:-5px;
}

.hero_section .content{
    position: absolute;
    top: 70px;
}

.hero_section .heading{
    color: white !important;
    font-weight: 900;
    font-size: 67px;
}

.hero_section .txt{
    color: #a9a9a9e0;
    width: 84%;
    margin: 21px 0px 21px 0px;
}

.hero_section .btn-primary-color{
    background-color: var(--primary-color);
    border: 2px solid var(--primary-color);
    color: white;
    font-size: 15px;
    font-weight: 500;
    padding: 14px;
}
.hero_section .btn-primary-color:hover{
    background-color: var(--primary-color);
    border: 2px solid var(--primary-color);
    color: white;
    animation:pulse;
    animation-duration: 1s;
}






*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
  }
  ::selection{
    color: #000;
    background: #fff;
  }
  nav{
    position: fixed;
    background: #1b1b1b;
    width: 100%;
    padding: 10px 0;
    z-index: 12;
  }
  nav .menu{
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
  }
  .menu .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
  }
  .menu ul{
    display: inline-flex;
  }
  .menu ul li{
    list-style: none;
    margin-left: 7px;
  }
  .menu ul li:first-child{
    margin-left: 0px;
  }
  .menu ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .menu ul li a:hover{
    background: #fff;
    color: black;
  }
  
  .nav-item .btn{
    width: 100%;
    height: 40px;
    background-color: rgb(42, 190, 109);
    color: white;
    border: none;
    box-shadow: 0 3px 7px 0 #314584;
    border-radius: 5px;
font-size: 1.1rem;
font-weight: 600;
}

.background_image{
    background-image: linear-gradient(#00010cb3, #00010cb3 ), url('https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2020/10/ott-1602771365.jpg');
    height: 100vh;
    background-size: cover;
}


/* NEED */
.services_section{
    margin: 100px 100px;
}

.services_section .heading {
    font-weight: 800;
    font-size: 50px;
}

.services_cards .card{
    background: #eaeaea61;
    padding: 20px;
}

.services_cards .card:hover{
    background:var(--primary-color);
    animation: pulse 0.5s infinite;
}

.services_cards .card:hover .card_txt{
    color: white !important;
}

.services_cards .card:hover .card-title{
    color: white !important;
}

.services_cards .card .card-title{
    font-size: 20px;
    font-weight: 500;
}
.services_cards .card_txt{
    color: #000000ba;
}



/* services */
.latest{
    margin: 150px 0px;
}
.latest .card{
    background-color: linear-gradient(45deg, #dedede8f, #dedede8f);
}
.latest .card:hover{
   
    animation: pulse 0.5s;
}
.latest .card_title{
    font-weight: 500;
    font-size: 17px;
}
.latest .card-body .card_txt{
    color: #2d2d2d;
    font-size: 13px;
}
.latest .card-body{
    background-color: #ECECEC;
}
.latest .card-body hr{
    margin: 10px 0px;
    height: 0.1px;
    background: black;
    width: 24%;
}


/* contact */
.contact{
    background: rgba(0,0,0,0.1) ;
}
.contact .headind{
    font-weight: 800;
    font-size: 50px;
}
.contact form .form-control{
    background:white;
    border: 2px solid rgba(0,0,0,0.1);
    border-radius: 0;
    color: rgb(39,39,39);
}
.contact form button{
    background: var(--primary-color);
    border: 2px solid var(--primary-color);
    color: white;
    font-size: 15px;
padding: 10px 30px 10px 30px !important;
}
.contact form button:hover{
    animation: pulse 0.5s;
    background: var(--primary-color);
    border: 2px solid var(--primary-color);
}

/* WIDGETS */
.widgets_area{
    padding: 40px 0px;
    text-align: center;
    background-color: #f8f9fc;
}

.widgets_area .row{
    align-items: center;
    justify-content: center;
}

.widgets_area .row a img{
    opacity: 0.7;
    max-width: 200px;
    max-height: 150px;
}

.widgets_area .row a img:hover
{
    opacity: 1;
}


/* footer */
.footer{
    background: rgb(39,39,39);
    padding: 20px 0px;
    margin-top: 5%;
    text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.footer .links_column{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-left: 10px;
}
.footer .links .fa{
    color: var(--primary-color);
    font-size: 17px;
    border: 2px solid var(--primary-color);
    padding: 10px;
    width: 40px;
    height: 40px;
    border-radius: 100%;
   
}
.footer .links .fa:hover{
    animation: pulse 0.5s;
}




    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'overall'],
          ['SMO',     10],
          ['SEO',      19],
          ['PPG', 0],
        ]);

        var options = {
          title: 'User Overview',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time duration in months', 'SEO', 'SMO', 'PPC'],
          ['JAN',  1000,      400, 300],
          ['FEB',  1170,      460, 600],
          ['MAR',  660,       1120, 400],
          ['APR',  1030,      540, 560],
          ['MAY',  1030,      590, 390],
          ['JUNE',  1030,      600, 400],
          ['JULY',  1030,      720, 285],
          ['AUG',  1030,      800, 543],
          ['SEP',  1030,      534, 765],
          ['OCT',  1030,      563, 578],
          ['NOV',  1030,      432, 463],
          ['DEC',  1030,      245, 464]

        ]);

        var options = {
          title: 'Business Chart',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBHUB</title>

    <link href="" rel="stylesheet" type="text/css" />

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--animate-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">


  <!--font-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!--NAVIGATION-->
    <div class="background_image hero_section">
        <nav>
            <div class="menu">
              <div class="logo">
                <a href="#">SUBHUB</a>
              </div>
              <ul>
                <li><a href="">About</a></li>
                <li><a href="current.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="nav-item">
					<?php
						if(session_status()==2 && isset($_SESSION['user'])){
							echo '<form method="post"><input class="btn" type="submit" value="SIGN OUT" name="signout"></form>';
						}
						else{
							echo '<a class="" href="login.php"><input class="btn" type="submit" value="SIGN IN"></a>';
						}
                    
					?>
                  </li>
               </ul>
            </div>
          </nav>
        <div class="container">
              <div class="row">
                  <div class="col-ig-7 col-md-10 col-sm-12 col-12">
                      <div class="content">
                          <br>
                          <br>
                          <br>
                          <h1 class="heading">WHY<br>SUBHUB</h1>
                          <p class="txt">Subscriptions services are what today’s customers want, from software-as-as-service (SaaS) solutions to favorite monthly cosmetic boxes delivered to your doorstep. In accordance with this, we require subscriptions and benefits that comes with them. <br>
                            So SUBHUB provides these evergrowing needs of people and matches with their demands. Since Subscriptions are an increasingly common way to buy products and services online, they are going to be in long run for decades from now and with SUBHUB customers will be satisy with their unique approach for delivering the exceptional quality of service. With our collective experience we are always at the helm of affairs, delivering unmatched value to our clients, irrespective of the industry sector.
                        </p>
                       <a href="website.php"> <button class="btn btn-light btn-primary-color animate_animated">CREATE</button></a>
                      </div>
                  </div>
              </div>
        </div>
    </div>

<!--Need Section-->
<div class="services_section">
    <div class="container">
        <center>
            <h1 class="heading">Need Of Business<span>.</span></h1>
        </center>
        <div class="services_cards my-5">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card card-default border-0 animate_animated mb-3">
                        <div class="card-header border-0">
                            <h2 class="card-img"><img src="https://static.thenounproject.com/png/1113281-200.png" width=100 height=60></h2>
                            <h5 class="card-title">Value</h5>
                        </div>
                            <div class="card-body border-0">
                                <p class="card_txt">Consumers are always looking for goods and services that provide the best bang for their buck. This means no matter how much or how little clients want to pay, subscription-service organizations like SUBHUB have an option to provide. </p>
                           
                        </div>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card card-default border-0 animate_animated mb-3">
                        <div class="card-header border-0">
                            <h2 class="card-img"><img src="https://cdn-icons-png.flaticon.com/512/66/66490.png" width=100 height=60></h2>
                            <h5 class="card-title">Predictable revenue</h5>
                        </div>
                            <div class="card-body border-0">
                                <p class="card_txt">The subscription services creates a predictable future revenue stream. This recurring revenue can ensure the viability of  various business in times of turbulence and financial fluctuations. It also helps in keeping your business operations up and running.</p>
                           
                        </div>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card card-default border-0 animate_animated mb-3">
                        <div class="card-header border-0">
                            <h2 class="card-img"><img src="https://www.dundas.com/Content/Images/home/home2020/icons/nav/platform/Built-for-Ease-of-Use.png" width=100 height=60></h2>
                            <h5 class="card-title">Lower retention spends</h5>
                        </div>
                            <div class="card-body border-0">
                                <p class="card_txt">Since subscribers automatically buy from you on a regular basis, you don’t have to spend extra marketing dollars to target them. Also, subscribers, who pay periodically and committed to a long-term association with you, are usually less likely to churn. </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 <!--Services-->
 <div class="latest">
     <div class="container">
         <center>
           <h1 class="heading"> Services <span>.</span><br></h1>
         </center>
         <div class="my-5">
             <div class="row justify-content-center">


                <div class="col-lg-4 col-mg-6 col-sm-12 col-12">
                    <div class="card card-default border-0 animate_animated mb-3">
                        <div class="card-header border-0 p-0">
                            <img src="https://stacbiz.com/wp-content/uploads/2017/01/Budget-e1494064374353.jpg" width="100%"/>
                        </div>
                        <div class="card-body border-0 animate_animated">
                         <h5 class="card_title">Better Budgeting</h5>
                         <hr>
                         <p class="card_txt">
                           SUBHUB provides astonishing deals and offers to their customers periodically. This is the biggest reason people take the subscription services as these deals,  discount and offers attracts the customers.
                           </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-mg-6 col-sm-12 col-12">
                   <div class="card card-default border-0 animate_animated mb-3">
                       <div class="card-header border-0 p-0">
                           <img src="https://static.theprint.in/wp-content/uploads/2021/02/Untitled-1.jpg" width="100%"/>
                       </div>
                       <div class="card-body border-0 animate_animated">
                        <h5 class="card_title">Multi-Tier Opportunities</h5>
                        <hr>
                        <p class="card_txt">
                           SUBHUB gives the opportunity to customers to choose from various options for subscriptions. Anyone who feels compatible with any platform, SUBHUB gives the opportunity to choose from them and make their decision and realtionship trustworthy.
                          </p>
                       </div>
                   </div>
               </div>

               <div class="col-lg-4 col-mg-6 col-sm-12 col-12">
                   <div class="card card-default border-0 animate_animated mb-3">
                       <div class="card-header border-0 p-0">
                           <img src="https://s37564.pcdn.co/wp-content/uploads/2016/11/Payments-1568x1045.jpg.optimal.jpg" width="100%"/>
                       </div>
                       <div class="card-body border-0 animate_animated">
                        <h5 class="card_title">Easy payment and flexible choices</h5>
                        <hr>
                        <p class="card_txt">
                           With different types of customers taking subscriptions, it is the responsibility of SUBHUB to ensure that there are payment options made available that are feasible for them. With SUBHUB, one can decide how to pay for the service, whether to pay annually or quartely.
                          </p>
                       </div>
                   </div>
               </div>

               <br>

               
               <div class="col-lg-4 col-mg-6 col-sm-12 col-12">
                   <div class="card card-default border-0 animate_animated mb-3">
                       <div class="card-header border-0 p-0">
                           <img src="https://lh3.googleusercontent.com/lwZcDXiC9mRCZ9hGEMJnsy1Py51YYuqQ_9v2upxB655XKD3v86HY2K6y8v0vCGXVWw=w895-rwa" width="100%"/>
                       </div>
                       <div class="card-body border-0 animate_animated">
                        <h5 class="card_title">Support automatic payment</h5>
                        <hr>
                        <p class="card_txt">
                           With automatic payments, a recurring payment is charged without any involvement from the platforms or customers. This is not only convenient for subscribers but also beneficial to suppliers. Suppliers do not have to put effort into persuading customers to stay with them. By default, the payment mode is automatic payment. If your payment gateway does not support automatic renewal, you still have a manual renewal option, which means a subscription is suspended until the customer logs into your store and pays to renew the subscription.
                          </p>
                       </div>
                   </div>
               </div>
               

            </div>
        </div>
    </div>
</div>


 <!--contact-->
 <div class="contact">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                 <h1 class="heading">Query Form<span>.</span></h1>
                 <div class="contact_area">
                     <form method="post">
                         <div class="form-group">
                             <input placeholder="Your Name" name="name" type="text" class="form-control"/>
                         </div>
                         <div class="form-group">
                            <input placeholder="Your Email" name="email" type="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input placeholder="Subject" name="subject" type="text" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Type your query..." name="query" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-warning animate_animated">Submit</button>
                        </div>
                     </form>
                 </div>
             
             
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="https://www.irislink.com/Partners/test/Menu2018/img/Contactus-01.jpg"
                </div>
         </div>
     </div>
 </div>
</div>

 <!--brandsection-->
<br><br><br><br><br><br><br> <h1 class="heading">Trusted By<span>.</span></h1>
 <div class="widgets_area">
        
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-5">
                    
                    <a>
                        <img src="https://cdn.shopify.com/s/files/1/1192/7620/articles/Netflix_steps_into_the_eCommerce_world_by_launching_its_own_online_store_1_1600x.png?v=1623426529">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-5">
                    <a>
                        <img src="https://i.pcmag.com/imagery/reviews/02dIsBiVpmVTMeXkrKxWy0W-13..1582749138.png">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-5">
                    <a>
                        <img src="https://m.economictimes.com/thumb/msid-67534519,width-1200,height-900,resizemode-4,imgsize-41744/hotstar-agencies.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-5">
                    <a>
                        <img src="https://yt3.ggpht.com/ytc/AKedOLTnuog_vKysET-ZWv4gxQOMHocsQ8qnV6lLHinizA=s900-c-k-c0x00ffffff-no-rj">
                    </a>
                </div>
            </div>
        </div>
 </div>

<!--footer-->
<div class="footer">
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div>
                    <a class="brand">SUBHUB
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 links_column">
                <div class="links">
                    <i class="fa fa-facebook-square animate_animated"></i>
                    <i class="fa fa-instagram animate_animated"></i>
                    <i class="fa fa-twitter-square animate_animated"></i>
                </div>
                </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>

   