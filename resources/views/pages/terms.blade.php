











@extends('layouts.app')
@section('content')



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



  .content-heading h2 {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 32px;
    line-height: 130%;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    letter-spacing: 0.75px;
    color: #0e153b;
    width: 100%;
  }

  .content-body p {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 1.3rem;
    line-height: 30px;
    text-align: center;
    letter-spacing: 1px;
    color: #0e153b;
  }

  .section-container {
      display: flex;
      flex-wrap: wrap;
      margin:2rem;
  }

  .left-div {
      flex: 1;
      padding: 10px;
      box-sizing: border-box;
  }

  .right-div {
      flex: 1;
      padding: 10px;
      box-sizing: border-box;
  }

  /* Styles for Swiper slider */
  .swiper-container {
      width: 100%;
      height: 100%;
  }

  .swiper-slide img {
      width: 100%;
       box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      height: 100%;
      object-fit: cover;
  }

  /* Content div styles */
  .content-div {
      margin-bottom: 20px;
      background-color: #fff;
      padding: 10px;
      box-sizing: border-box;
      border-left:4px solid gray;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
      .section-container {
          flex-direction: column;
      }
      .left-div,
      .right-div {
          width: 100%;
      }
  }
  /* Default border for h3 */
  .changing-header {
      border-left: 4px dotted green;
      padding-left: 10px; /* Add padding to separate text from border */
  }

  /* Red border */
  .changing-header.red-border {
      border-left-color: red;
  }
  .content-div {
      width:100%;
  }


    .section {
      background-color: #f9f9f9;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .section h2 {
      margin-top: 0;
    }

    .container1 {
      display: flex;
      flex-wrap: wrap;
      margin: 3rem;
      /* padding: 2rem; */
      justify-content: space-between;
    }

    .main-div {
      width: calc(50% - 20px);
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .item {
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    @media only screen and (max-width: 768px) {
      .main-div {
        width: 100%;
      }
    }
  </style>
















<div class="full-width-container" style="padding-top:4rem;padding-bottom:3rem;margin-top:4rem;">
  <div class="text-container" style="padding-bottom:2rem;">
    <h2 style="color:white" style="  font-family: 'Montserrat', sans-serif !important;">How it works</h2>
    <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:3rem;">
      The JAP Scholarship Program, a cornerstone initiative of The Joint Africa Project International (JAP International), stands as its premier endeavor. JAP International, a prominent international non-governmental organization, is committed to empowering African communities through various initiatives in education, healthcare, and socio-economic development.</p>

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
    <img style="background-position: center; background-size: cover; background-repeat: no-repeat; display: block; margin: auto;" src="https://st2.depositphotos.com/1003369/6500/i/450/depositphotos_65009341-stock-photo-african-american-college-student-sitting.jpg" alt="Image 1">
  </div>

  </div>





<div class="section-container" style="padding-bottom:3rem;">
   <div class="left-div">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://imgs.search.brave.com/b5q9E9vHQ93ImDbPlD7GWwMnEX58xBCRhzJJrWFDpbc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9m/cm9udC12aWV3LXlv/dW5nLWZlbWFsZS1z/dHVkZW50LXJlZC10/LXNoaXJ0LWJsYWNr/LWplYW5zLWhvbGRp/bmctY29weWJvb2st/d2hpdGVfMTQwNzI1/LTE2NjU4LmpwZz9z/aXplPTYyNiZleHQ9/anBn" alt="Image 1">
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="right-div">
        <!-- Content on the right side -->
        <div class="content-div">
            <h3 class="changing-header" style="color:#333333;margin-bottom:2rem;">Empowering African Communities: The JAP Scholarship Program</h3>
            <p>The Joint Africa Project Scholarship Program (JAP Scholarship Program), is the flagship initiative of The Joint Africa Project International (JAP International). The JAP International is a leading international non-governmental organization dedicated to empowering African communities through education, healthcare, and socio-economic development initiatives.</p>
        </div>
        <div class="content-div" style="background: #fff;color:#006400;">
            <h3 class="changing-header" style="color:#333333;margin-bottom:2rem;">Empowering Sustainable Change and Inclusivity: The Mission of JAP International</h3>
            <p style="color:#333333;">With a steadfast commitment to fostering sustainable change and promoting inclusivity, JAP International works tirelessly to create opportunities for individuals and communities to thrive and realize their full potential.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header" style="color:#333333;margin-bottom:2rem;">Nurturing Visionary Leaders: The JAP Scholarship Program</h3>
            <p>The JAP Scholarship Program, aimed at fostering the development of a new cadre of visionary leaders across Africa. This groundbreaking scholarship program is set to provide unparalleled opportunities for talented individuals to pursue their academic aspirations at esteemed institutions worldwide.</p>
        </div>
        <div class="content-div" style="background: #fff;color:#006400">
            <h3 class="changing-header" style="color:#333333;margin-bottom:2rem;">Unlocking Potential: The JAP Scholarship Program</h3>
            <p style="color:#333333;">The JAP Scholarship Program offers fully funded scholarships to outstanding students from diverse backgrounds across the continent of Africa. Recipients will have the chance to pursue their undergraduate or postgraduate studies at renowned universities in the United States, the United Kingdom, Australia, New Zealand, Canada, and China. Additionally, beneficiaries will receive comprehensive coverage for their travel expenses, ensuring seamless access to their chosen academic institutions.</p>
        </div>
    </div>
</div





<section style="background:#001F3F;" class="getting-started-section container centered-container" >
  <div class="getting-started-text text-size-lg" style="margin-top:2rem;padding-top:3rem; padding-bottom:4rem; margin-bottom:2rem;background:#001F3F;">
      <h2 style="font-weight:600;color:white; padding:1rem;" class="getting-started-text text-center text-size-lg">JAP,Scholarship <span class="havvest" style="color:green;">Portal That Works.</span></h2>
  </div>
</section>


<style>
    .section {
      padding-top: 3rem;
      padding-bottom: 3rem;
      margin-top: 3rem;
      margin-bottom: 3rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .item {
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="section">
     
      <div class="row">
        <div class="col-md-6">
          <div class="item p-3 shadow">
            <h3 style="font-weight: normal;" class="mb-3">Empowering African Communities</h3>
            <p><strong>Vision:</strong> To empower African communities through education, healthcare, and socio-economic development initiatives.</p>
            <p><strong>Mission:</strong> The JAP Scholarship Program serves as the flagship initiative of The Joint Africa Project International (JAP International), a leading international non-governmental organization dedicated to empowering African communities.</p>
          </div>
          <div class="item p-3 shadow">
            <h3 style="font-weight: normal;" class="mb-3">Nurturing Visionary Leaders</h3>
            <p><strong>Vision:</strong> To nurture visionary leaders across Africa.</p>
            <p><strong>Mission:</strong> The JAP Scholarship Program aims to foster the development of a new cadre of visionary leaders across Africa by providing unparalleled opportunities for talented individuals to pursue their academic aspirations at esteemed institutions worldwide.</p>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="item p-3 shadow">
            <h3 style="font-weight: normal;"class="mb-3">Empowering Sustainable Change and Inclusivity</h3>
            <p><strong>Vision:</strong> To foster sustainable change and promote inclusivity.</p>
            <p><strong>Mission:</strong> JAP International works tirelessly to create opportunities for individuals and communities to thrive and realize their full potential, with a steadfast commitment to fostering sustainable change and promoting inclusivity.</p>
          </div>
          <div class="item p-3 shadow b-none">
            <h3 style="font-weight: normal;" class="mb-3">Unlocking Potential</h3>
            <p><strong>Vision:</strong> To unlock the potential of outstanding students from diverse backgrounds across Africa.</p>
            <p><strong>Mission:</strong> The JAP Scholarship Program offers fully funded scholarships to outstanding students, providing them with the chance to pursue their undergraduate or postgraduate studies at renowned universities worldwide. Additionally, beneficiaries receive comprehensive coverage for their travel expenses, ensuring seamless access to their chosen academic institutions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>






      @endsection
