<!DOCTYPE html>
<!-- coded-by-bilal & pooja -->
<html lang="en">
<head>
    <title>COVI-TRACKER</title>
    <?php include 'links.php'?>
    <?php include 'style.php'?>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navStyle p-3">
  <a class="navbar-brand pl-5" href="#">COVI-TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Preventation</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>

  </div>
</nav>
<!-- main-header-section -->
<div class="main-header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="img/allTogether.jpg" alt="" width="300" height="300">
        
        </div>
     </div>
     <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Againest Cor<span class="cor-anm"><img src="img/corona.png" alt="" width="80" height="80"></span>na Virus</h1>
        </div>
     </div>
  </div>

</div>

<!-- latest updates -->
<section class="corona-update">
   <div class="mb-3">
     <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
   </div>
   <div class="d-flex justify-content-around align-items-center">
    <div>
      <h1 class="count">42343</h1>
      <p>total cases</p>
    </div>
    <div>
      <h1 class="count">42343</h1>
      <p>total cases</p>
    </div>
    <div>
      <h1 class="count">42343</h1>
      <p>total cases</p>
    </div>
    <div>
      <h1 class="count">42343</h1>
      <p>total cases</p>
    </div>
   </div>
</section>

<!-- about-section -->

<div class="container-fluid sub-section pt-5 pb-5 " id="about">
     <div class="section-header text-center mt-4 mb-5">
         <h1>About Covid-19</h1>
     </div>
     <div class="row pt-5">
         <div class="col-lg-5 col-md-6 col-12">
              <img src="img/covid-info.jpg" class="img-fluid">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
            <h2>What is Covid-19?</h2>
            <p>Coronavirus disease (COVID-19) 
               is an infectious disease caused by a newly
               discovered coronavirus.Most people who fall sick with COVID-19 will 
               experience mild to moderate symptoms and recover without special treatment.</p>
            <p>The virus that causes COVID-19 is mainly transmitted through droplets generated 
               when an infected person coughs, sneezes, or exhales. These droplets are too heavy 
               to hang in the air, and quickly fall on floors or surfaces.
               You can be infected by breathing in the virus if you are within close 
               proximity of someone who has COVID-19, or by touching a contaminated surface
               and then your eyes, nose or mouth.</p>
         </div>
     </div>
</div>

<!-- symptoms-section -->

<div class="container-fluid  pt-5 pb-5 " id="symptoms">
     <div class="section-header text-center mt-4 mb-5">
         <h1>Corona-Virus Symptoms</h1>
     </div>
     <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
             <img src="img/coughs.jpg" alt="" class="img-fluid" height="120" width="120">
             <figcaption>cough</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
             <figure class="text-center">
             <img src="img/runny-nose.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>runny Nose</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5 ">
             <figure class="text-center">
             <img src="img/feve-r.png" alt="" class="img-fluid" height="170" width="120">
             <figcaption>fever</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
             <figure class="text-center">
             <img src="img/cold.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>cold</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
             <figure class="text-center">
             <img src="img/tired.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>tiredness</figcaption>
             </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
             <figure class="text-center">
             <img src="img/braath.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>difficulty breathing</figcaption>
             </figure>
           </div>

         
         </div>
     </div>
 </div> 

 <!-- contact-sectiom -->

 <div class="container-fluid sub-section pt-5 pb-5 " id="contact">
     <div class="section-header text-center mt-4 mb-5 text-uppercase">
         <h1>Contact ASAP</h1>
     </div>
    <div class="container">
       <div class="row">

         <div class="col-lg-8 offset-lg-2 col-12">
             <form>
                <div class="form-group">
                   <label>username</label>
                   <input type="text" class="form-control" name="username" 
                   placeholder="name" autocomplete="off" required>
                </div>
                <div class="form-group">
                   <label>Email</label>
                   <input type="email" class="form-control" name="email"  
                   placeholder="name@example.com" autocomplete="off" required>
                </div>
                <div class="form-group">
                   <label>mobile</label>
                   <input type="number" maxlength="10" class="form-control" name="mobile"  
                   placeholder="mobile" autocomplete="off" required>
                </div>
                <div class="form-group">

                 <label>Select Symptoms</label><br>

                    <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                         <input type="checkbox" name="coronsym[]" id="customcheckbox1" 
                            class="custom-control-input" value="cold"> 
                         <label class="custom-control-label" for="customcheckbox1">Cold
                          </label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                         <input type="checkbox" name="coronsym[]" id="customcheckbox2" 
                            class="custom-control-input" value="fever"> 
                         <label class="custom-control-label" for="customcheckbox2">Fever
                          </label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                         <input type="checkbox" name="coronsym[]" id="customcheckbox3" 
                            class="custom-control-input" value="breath"> 
                         <label class="custom-control-label" for="customcheckbox3">Difficulty in breath
                          </label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                         <input type="checkbox" name="coronsym[]" id="customcheckbox4" 
                            class="custom-control-input" value="tired"> 
                         <label class="custom-control-label" for="customcheckbox4">Filling weak
                          </label>
                    </div>
                </div>
                <div class="form-group">
                   <label>Example textarea</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </div>
       </div>
    </div>
 </div> 

<!-- top-cursor -->

<div class="container scrolltop float-right pr-5">
   <i class="fa fa-arrow-up" onclick="top()" id="topbtn"></i>
 
</div>


 <!-- footer-section -->

 <footer class="mt-5">
   <div class="footer-style text-white text-center container-fluid">
     <p>Copyright by Bilal & Pooja</p>
   </div>
 </footer>   

 <script type="text/javascript">

  $('.count').counterUp({
     delay:10,
     time:3000
  });

  topbutton = document.getElementById('topbtn');

  window.onscroll = function(){scrollfunc()};

      function scrollfunc(){
        if (document.body.scrollTop > 100  || document.documentElement.scrollTop > 100){
          topbutton.style.display = "block";
        }else{
          topbutton.style.display = "none";
        }

      }

    function top(){
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }  
    
   </script>
</body>
</html>