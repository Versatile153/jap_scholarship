


@extends('layouts.app')
@section('content')



<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  .section {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .container1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .main-div {
    width: calc(50% - 20px);
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .item {
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
  }

  h3 {
    margin-top: 0;
  }

  p {
    margin-bottom: 0;
  }

  @media only screen and (max-width: 768px) {
    .main-div {
      width: 100%;
    }
      .item {
    width:100%;
  }
  }
</style>

<style>




.buttonStepMobile {
background: #3259F1;
border-radius: 6px;
color: white;
font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 28px;
letter-spacing: 0.75px;
color: #FFFFFF;
height: 44px;
width: 327px;
border-radius: 6px;
}


  .content {
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    color: #333;
    margin-bottom: 20px;
  }

  p {
    color: #666;
    line-height: 1.6;
  }
</style>




<div class="full-width-container" style="padding-top:4rem;padding-bottom:3rem;margin-top:4rem;">
    <div class="text-container" style="padding-bottom:3rem;">
      <h2 style="color:white" style="  font-family: 'Montserrat', sans-serif !important;">Explore JAP Scholarship Programs</h2>
      <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:4rem;">
        With a focus on academic excellence and leadership development, our programs offers comprehensive support, including tuition coverage, research grants, and professional mentorship.This distinguished programs is meticulously crafted to empower exceptional individuals with the means to pursue their undergraduate studies within the globe.</p>

    <style>
        @media screen and (max-width: 767px) {
            .buttonStep2Mobile {
                margin-left: 0;
                margin-right: 0;

            }
        }


    </style>

    <a href="/register" style="display: block; width: 100%;">
        <button style="margin-top: 2rem; margin-left: 0; margin-right: 0; background: #309B32; width: 100%; font-family: 'Montserrat', sans-serif !important;border:none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Create Free Account</button>
    </a>





    </div>
    <div class="video-container" style="padding-bottom:2rem;margin-right:2rem;">
      <img style="background-position: center; background-size: cover; background-repeat: no-repeat; display: block; margin: auto;" src="https://img.freepik.com/free-vector/teen-student-girl-sitting-her-school-desk_3446-510.jpg" alt="Image 1">
    </div>

    </div>


<style>
    .centered-div {
      text-align: center;
      padding: 20px;
     
    }
  </style>
<div class="container pt-5 mt-3 mb-3">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="centered-div">
          <h2>JAP Scholarship Programs</h2>
          <p style="font-size:20px;">Choose a suitable Scholarship Program below.</p>
        </div>
      </div>
    </div>
  </div>

<div class="section">
  <div class="container1">
    <div class="main-div">
      <div class="item">
        <h3>Undergraduate Overseas Scholarship Program</h3>
        <p>The Undergraduate Overseas Scholarship Program, offered by JAP Scholarship, serves as a beacon of opportunity for aspiring future leaders across Africa. This prestigious program is designed to empower talented individuals with the chance to pursue their undergraduate studies at esteemed universities abroad.</p>
                

      </div>
    </div>
    <div class="main-div">
      <div class="item">
        <h3>Undergraduate Continental Scholarship Program</h3>
        <p>The Undergraduate Continental Scholarship Program, offered by JAP Scholarship, represents an unparalleled opportunity for young leaders across Africa to embark on a transformative educational journey. This distinguished program is meticulously crafted to empower exceptional individuals with the means to pursue their undergraduate studies within the continent.</p>
       
      </div>
    </div>
    <div class="main-div">
      <div class="item">
        <h3>Postgraduate Overseas Scholarship Program</h3>
        <p>The Postgraduate Overseas Scholarship Program, offered by JAP Scholarship, epitomizes a commitment to nurturing academic excellence and fostering global leadership. Tailored for exceptional individuals seeking to pursue advanced studies abroad, this prestigious program provides unparalleled opportunities for postgraduate education at renowned international institutions.</p>
               
      </div>
    </div>
    <div class="main-div">
      <div class="item">
        <h3>Postgraduate Continental Scholarship Program</h3>
        <p>The Postgraduate Continental Scholarship Program, offered by JAP Scholarship, stands as a testament to our dedication to advancing knowledge and inspiring change across Africa. Tailored for outstanding individuals seeking to pursue postgraduate studies within the continent, this esteemed program provides a platform for scholars to deepen their expertise and contribute to the development of their communities.</p>
                
      </div>
    </div>
  </div>
</div>

 <style>
    .centered-button {
      text-align: center;
    }
    .button-container {
      width: 100%;
      margin: 2rem auto; /* Adjust the margin top and bottom as needed */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="centered-button">
          <div class="button-container">
            <a href="/apply" style="display: block;">
              <button style="background: #309B32; width: 50%; font-family: 'Montserrat', sans-serif !important; border: none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Apply Now</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="container pt-5 mt-3 mb-3">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="centered-div">
          <h2>Are you qualified?</h2>
          <p> Check if you meet the criteria for applying to the JAP Scholarship program. <a href="/rules" style="color: #309B32; font-weight: 600;">See Official Rules</a></p>
        </div>
      </div>
    </div>
  </div>







							@endsection
