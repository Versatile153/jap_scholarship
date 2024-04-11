











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
      height: 100%;
      object-fit: cover;
  }

  /* Content div styles */
  .content-div {
      margin-bottom: 20px;
      background-color: #f0f0f0;
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
      padding: 2rem;
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
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    @media only screen and (max-width: 768px) {
      .main-div {
        width: 100%;
      }
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
        height: 100%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    /* Content div styles */
    .content-div {
        margin-bottom: 20px;
        background-color: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        box-sizing: border-box;
        border-left: 4px solid lightgray;

    }
    .content-div img {
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Horizontal offset, Vertical offset, Blur radius, Spread radius, Color */
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




  </style>
















<div class="full-width-container" style="padding-top:4rem;padding-bottom:3rem;margin-top:4rem;">
  <div class="text-container" style="padding-bottom:2rem;">
    <h2 style="color:white" style="  font-family: 'Montserrat', sans-serif !important;">
        Big Partnerships
        Bigger Impact</h2>
    <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:3rem;">
        At the JAP Scholarship Program, our commitment to collaboration underscores our belief in the power of unity and collective action to effect transformative change. By forging strategic partnerships with a diverse array of stakeholders, including leading universities, governments, community leaders, and philanthropists, we amplify our impact and advance our mission of empowering Africa's youth through education.</p>

  <style>
      @media screen and (max-width: 767px) {
          .buttonStep2Mobile {
              margin-left: 0;
              margin-right: 0;

          }
      }


  </style>

  <a href="mailto:Support@japscholarship.org?subject=Question%20about%20Havvest&body=Hello%20Havvest%20Support," style="display: block; width: 100%;">
      <button style="margin-top: 2rem; margin-left: 0; margin-right: 0; background: #309B32; width: 100%; font-family: 'Montserrat', sans-serif !important;border:none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Get IN Touch</button>
  </a>





  </div>
  <div class="video-container" style="padding-bottom:2rem;margin-right:2rem;">
    <img style="background-position: center; background-size: cover; background-repeat: no-repeat; display: block; margin: auto;" src="https://classroomclipart.com/image/static2/preview2/student-sitting-at-desk-reading-book-in-classroom-30045.jpg" alt="Image 1">
  </div>

  </div>


<section class="getting-started-section container centered-container">
    <div class="getting-started-text text-size-lg"  >
        <h2 style="font-weight:600;margin-bottom:2rem;" class="getting-started-text text-center text-size-lg">JAP Scholarship<span class="havvest" style="color:green;"> & Partnerships</span></h2>
        
        <p style="font-weight:normal;">In essence, our partnerships form the bedrock of our scholarship program, enabling us to leverage our collective strengths and resources to catalyze lasting impact and empower the next generation of African leaders. Through collaboration, we forge a brighter future for Africa—one built on the foundation of education, innovation, and inclusive development.</p>
    </div>
</section>









<div class="section-container">
    
    
    
     <div class="left-div">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://imgs.search.brave.com/EeBCfPNxvgcK2gEExg3nEjVYLp6BJWG93n7uzTfjnS8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9hdHRyYWN0aXZl/LXN0cmFpZ2h0LWJs/YWNrLWhhaXJlZC1s/YXRpbmEtd29tYW4t/cG9pbnRpbmctc2lk/ZS13aXRoLWJpZy1z/bWlsZS1sb29raW5n/LXN0cmFpZ2h0LWFo/ZWFkXzI1MjIxNC01/MzAuanBn" alt="Image 1">
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="right-div">
        <!-- Content on the right side -->
        <div class="content-div">
            <h3 class="changing-header" style="color:green;">Partnerships with Leading Universities</h3>
            <p> Our collaboration with leading universities in Africa is pivotal to the success of the JAP Scholarship Program. We partner closely with esteemed academic institutions across the continent, such as the University of Cape Town, Makerere University, and the University of Nairobi, among others. These partnerships enable us to provide our scholars with access to high-quality education and invaluable learning opportunities right within their own communities.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Government Collaborations</h3>
            <p>Collaboration with governments is essential for the sustainability and impact of our scholarship program. We engage with governments at various levels to align our efforts with national development agendas and policy priorities. By working hand-in-hand with ministries of education, youth affairs, and other relevant government bodies, we advocate for policies that promote equitable access to education and address systemic barriers faced by young people. Through dialogue, advocacy, and policy development, we strive to create an enabling environment that supports youth empowerment and ensures that our scholarship program contributes to broader national development goals.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Community Partnerships</h3>
            <p> Our partnerships with community leaders and grassroots organizations are crucial for addressing local challenges and tailoring our programs to the needs of the communities we serve. We collaborate closely with community stakeholders to understand their priorities and co-design initiatives that have a meaningful impact. By engaging directly with communities, we build trust and rapport, ensuring that our programs are culturally sensitive and responsive to local realities. Through these partnerships, we empower communities to take ownership of their development and create sustainable change from within.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Partnerships with Philanthropists and Donors</h3>
            <p> 
Our collaborations with philanthropists and donors form the cornerstone of the JAP Scholarship Program, encompassing a diverse array of individuals, NGOs, business tycoons, and other entities committed to supporting education and youth empowerment in Africa.Philanthropic support is instrumental in sustaining our scholarship program and expanding its reach. We partner with philanthropists, foundations, corporate donors, and individual contributors who share our vision and are committed to investing in the education of Africa's youth. Through strategic partnerships, we secure funding for scholarships, mentorship programs, and other resources that enable us to support talented individuals from underserved backgrounds.</p>
        </div>
    </div>



    
</div
















  <section class="getting-started-section container centered-container">
    <div class="getting-started-text text-size-lg"  >
        <h2 style="font-weight:600;" class="getting-started-text text-center text-size-lg">Why Partner With <span class="havvest" style="color:green;">JAP Scholarship</span></h2>
    </div>
</section>






<div class="section-container">

    <div class="right-div">
        <!-- Content on the right side -->
        <div class="content-div">
            <h3 class="changing-header" style="color:green;">Access to a Large and Engaged Community</h3>
            <p> Partnering with JAP Scholarship provides access to a vast and engaged community of 3.5 million individuals. This extensive network offers a unique opportunity to reach a diverse audience interested in educational and financial opportunities.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Enhanced Brand Visibility and Recognition</h3>
            <p>Collaborating with JAP Scholarship allows brands, universities, and nonprofits to enhance their visibility and recognition. By associating with a reputable organization dedicated to empowering communities through education, partners can elevate their brand profile and credibility.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Opportunity for Growth</h3>
            <p> Our scholarship program offers more than just financial support. It provides students with the opportunity to grow personally and academically by participating in various activities, networking opportunities, and mentorship programs.</p>
        </div>
        <div class="content-div">
            <h3 class="changing-header">Exclusive Educational and Financial Opportunities</h3>
            <p> Partnerships with JAP Scholarship enable brands, universities, and nonprofits to share exclusive educational and financial opportunities with the community. Whether it's scholarships, internships, or educational resources, partners can contribute to empowering individuals to pursue their academic and career goals.</p>
        </div>
    </div>



     <div class="left-div">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://imgs.search.brave.com/9k5PnfDDmOjYNbaBFcHVXhKTgTd5P-HyAJ-DWmAhvJs/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9m/ZW1hbGUtc3RhbmRp/bmctd2l0aC1mb2xk/ZXJzLWhhbmRzXzEz/MDEtMjYzMC5qcGc_/c2l6ZT02MjYmZXh0/PWpwZw" alt="Image 1">
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div





  <section style="background:#001F3F;" class="getting-started-section container centered-container" >
    <div class="getting-started-text text-size-lg" style="margin-top:2rem;padding-top:3rem; padding-bottom:4rem; margin-bottom:2rem;background:#001F3F;">
        <h2 style="font-weight:600;color:white;" class="getting-started-text text-center text-size-lg">Our <span class="havvest" style="color:green;">JAP Scholarship Programs</span></h2>
        <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:2rem; width:90%;text-align:center; font-weight:normal;">
           Our partnerships with philanthropists, NGOs, business tycoons, and other donors reflect a shared commitment to advancing education, empowering youth, and driving positive change in Africa. Together, we harness collective resources, expertise, and networks to create meaningful opportunities for talented individuals and build a brighter future for the continent.</p>

        <a  href="/scheme" style="display: flex; justify-content: center;text-decoration:none;">
            <button style="margin-top: 2rem; margin-bottom:3rem; padding:0.6rem; border-radius: 10px;
            ;color:white; background: #309B32; width: 40%; font-family: 'Montserrat', sans-serif !important; border: none;">Explore our Programs</button>
        </a>


    </div>
</section>










      @endsection
