<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links/link.php'; ?>
    <?php include 'css/style.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity=
  "sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul style="list-style-type:none;"class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" >home <span class="sr-only">(current)</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="main_header">
  <div class = "row w-100 h-100">
   <div class = "col-lg-5 col-md-5 col-12 order-lg-1 order-2">
    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
      <img src="images/unity1.jpg" width="300" height="300">
    </div>
   </div>
   <div class = "col-lg-7 col-md-7 col-12 order-lg-2 order-1">
    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
      <h1>Let's Stay Safe & Fight Together Against Cor <span class = "covid_animate"><img 
      src="images/covid1.jpg" width="100" height="100">
      </span>na Virus</h1>
    </div>
   </div>

     </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<<<corona latest updates<>>>>>>>>>>>>>>>>>>>>> -->

<section class="covid_update containerr-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered  table-striped text-center" id = "tbval">
      <tr>
        <th>country_region</th>
        <th>population</th>
        <th>confirmed</th>
        <th>deaths</th>
        <th>recovered</th>
        <th>active</th>
        <th>people_tested</th>
      </tr>
    </table>
  </div>
</section>

<!-- about section -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
<div class="section_header text-center mb-5 mt-4">
  <h1>About Covid-19</h1>
</div>
<div class="row pt-5">
  <div class="col-lg-5 col-md-6 col-12 ml-5">
    <img src="images/About_covid.jpg" alt="">
  </div> 
  <div class="col-lg-6 col-md-6 col-12">
<h2>What is Covid-19 (Corona-Virus</h2>
<p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.

Most people infected with the virus will experience mild to moderate respiratory illness and
recover without requiring special treatment. However, some will become seriously ill and require
medical attention. Older people and those with underlying medical conditions like cardiovascular
disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness.
 Anyone can get sick with COVID-19 and become seriously ill or die at any age. </p>

 <p>Coronaviruses (CoV) are a large family of viruses that cause illness
   ranging from the common cold to more severe diseases. Find out more 
   about this novel coronavirus (nCoV) that has not been previously identified in humans.</p>
  </div> 
</div>
</div> 
<!-- symptoms -->
<div class="container-fluid  pt-5 pb-5 " id="sympid">
<div class="section_header text-center mb-5 mt-4">
  <h1>Coronavirus symptoms</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cough.jpg" class="img-fluid" width="120" height="120">
      <figcaption>cough</figcaption>
      </figure>
    </div>
    
    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/fever.jpg" class="img-fluid" width="120" height="120">
      <figcaption>fever</figcaption>
      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/headache.jpg" class="img-fluid" width="120" height="120">
      <figcaption>headache</figcaption>
      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/cold.jpg" class="img-fluid" width="120" height="120">
      <figcaption>cold</figcaption>
      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/tired.jpg" class="img-fluid" width="120" height="120">
      <figcaption>tiredness</figcaption>
      </figure>
    </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
      <figure class="text-center">
        <img src="images/breathing.jpg" class="img-fluid" width="120" height="120">
      <figcaption>difficulty in breathing</figcaption>
      </figure>
    </div>
  </div>
</div>
</div>

<!-- covid preventions -->

<div class="container-fluid sub-section pt-5 pb-5 " id="preventid">
<div class="section_header text-center mb-5 mt-4">
  <h1>6 Steps Prevention Against coronavirus</h1>
</div>
<div class="cobtainer">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
    <figure class="text-center">
        <img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p>wash your hands regularly for 20 seconds, with
        soap and water or alcohol based rub.
      </p>
    </div>

  </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
    <figure class="text-center">
        <img src="images/mask1.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p>Cover your nose and mouth with mask while going out.
      </p>
    </div>

  </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <figure class="text-center">
        <img src="images/distance.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p>Avoid close contact with people who are unwell.
      </p>
    </div>

  </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
    <figure class="text-center">
        <img src="images/home.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p>Stay home and self-isolate from others in the household 
        if you feel unwell.
      </p>
    </div>

  </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
    <figure class="text-center">
        <img src="images/news.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p>Stay informed by watching news & follow the 
        recommended practices.
      </p>
    </div>

  </div>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
    <figure class="text-center">
        <img src="images/fever1.jpg" class="img-fluid" width="90" height="90">
   
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <p> If you have fever,coughand difficulty in breathing seek 
        medical care early.
      </p>
    </div>

  </div>
</div>

</div>


</div>

<!-- contact us asap -->

<div class="container-fluid  pt-5 pb-5 " id="contactid">
<div class="section_header text-center mb-5 mt-4">
  <h1>6 Steps Prevention Against coronavirus</h1>
</div>
</div>
<div class="container">
  <div class="row">
  <div class="col-lg-4 offset-lg-2 col-12 ">
  <form>
  <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control"  name="username"
     placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email"
     placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control"  name="mobile"
     placeholder="mobile" autocomplete="off" required>
  </div>
  

  <div class="form-group">
    <label >Select Symptoms</label><br>
<div class="custom-control custom-checkbox
custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id
="customcheckbox1" name="coronasym[]" value="cold">
<label class="custom-control-label" for="customcheckbox1">cold</label>
</div>

<div class="custom-control custom-checkbox
custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id
="customcheckbox2" name="coronasym[]" value="fever">
<label class="custom-control-label" for="customcheckbox2">fever</label>
</div>

<div class="custom-control custom-checkbox
custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id
="customcheckbox3" name="coronasym[]" value="breathe">
<label class="custom-control-label" for="customcheckbox3">difficulty in breathe</label>
</div>

<div class="custom-control custom-checkbox
custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id
="customcheckbox4" name="coronasym[]" value="tired">
<label class="custom-control-label" for="customcheckbox4">feeling weak</label>
</div>

</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div>
   </div>
  </div>

  <!-- top cursor -->
  <!-- <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div> -->

  <!-- footer -->

  <footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
      <p>copyright</p>
    </div>
  </footer>

  <script type="text/javascript">

    $('.count').counterUp({
      delay:10,
      time: 3000
    })

    mybutton = document.getElementById("myBtn");

  //   when the user scrolls down 20px from the top of the document,show thw button.

    window.onscroll = function(){scrollFunction()};
    function scrollFunction(){
      if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
   {
    mybutton.style.display = "block";
   }else{
    mybutton.style.display = "none";
   }
  }

  //   when the user clicks on the button, scroll to the top of the document.

    function topFunction(){
      document.body.scrollTop = 0; // safari
      document.documentElement.scrollTop = 0; //chrome,firefox
    }

    // for API fetching .

    function fetch(){
      $.get("https://mahabub81.github.io/covid-19-api/api/v1/countries.json",

                function (data){
                  console.log(data['states'].length);
                }
      )
              }
//                   var tbval = document.getElementById('tbval');
//                   for(var i = 1; i<(data['states'].length); i++){
//                     var x = tbval.insertRow();
//                     x.insertCell(0);
// // to fill the table data from 0th cell.
//                     tbval.rows[i].cells[0].innerHTML = data['states'][i]['country_region'];
//                     // first we enter the COuntries array then inside it we enter the start 
//                     // index of array (index array) and then will show the data of the country one by one.
//                     tbval.rows[i].cells[0].style.background = '#7a4a91';
//                     tbval.rows[i].cells[0].style.color = '#fff';
                   		

//                     x.insertCell(1);
//                     tbval.rows[i].cells[1].innerHTML = data['states'][i]['population'];
//                     tbval.rows[i].cells[1].style.background = '#808080';

//                     x.insertCell(2);
//                     tbval.rows[i].cells[2].innerHTML = data['states'][i]['confirmed'];
//                     tbval.rows[i].cells[2].style.background = '#90EE90';

//                     x.insertCell(3);
//                     tbval.rows[i].cells[3].innerHTML = data['states'][i]['deaths'];
//                     tbval.rows[i].cells[3].style.background = '#808080';

//                     x.insertCell(4);
//                     tbval.rows[i].cells[4].innerHTML = data['states'][i]['recovered'];
//                     tbval.rows[i].cells[4].style.background = '#808080';

//                     x.insertCell(5);
//                     tbval.rows[i].cells[5].innerHTML = data['states'][i]['active'];
//                     tbval.rows[i].cells[5].style.background = '#808080';


//                     x.insertCell(6);
//                     tbval.rows[i].cells[6].innerHTML = data['states'][i-1]['people_tested'];
//                     tbval.rows[i].cells[6].style.background = '#808080';

                   

    //               }
    //             }
                              
    //   );
    // }
  </script>
</body>
</html>
