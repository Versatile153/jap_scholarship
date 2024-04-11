@extends('layouts.app')
@section('content')




<div class="full-width-container" style="padding-top:4rem;padding-bottom:3rem;margin-top:4rem;">
    <div class="text-container" style="padding-bottom:3rem;">
      <h2 style="color:white" style="  font-family: 'Montserrat', sans-serif !important;">Got A Question About JAP?</h2>
      <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:4rem;">Here are some common questions about JAP Scholarship and how it works. If you don't find the answer you're looking for, feel free to contact us by clicking on the contact button below.</p>

    <style>
        @media screen and (max-width: 767px) {
            .buttonStep2Mobile {
                margin-left: 0;
                margin-right: 0;

            }
        }


    </style>

    <a href="mailto:support@japscholarship.org"  style="display: block; width: 100%;">
        <button style="margin-top: 2rem; margin-left: 0; margin-right: 0; background: #309B32; width: 100%; font-family: 'Montserrat', sans-serif !important;border:none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Contact Us</button>
    </a>





    </div>
    <div class="video-container">
      <img style="background-position: center; background-size: cover; background-repeat: no-repeat; display: block; margin: auto;" src="https://media.istockphoto.com/id/1160660821/photo/african-american-male-doing-homework.jpg?s=612x612&w=0&k=20&c=lEB11raS40n2vQtdPeIkVS11xj1XuSpdFYYPf1agrhw=" alt="Image 1">
    </div>

    </div>



    <section class="faq-section pt-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-group">
                        <h3 style="font-size: 18px;">Can I use JAP Scholarship to find scholarships for schools outside of the United States?</h3>
                        <p style="font-size: 16px;">At this time, JAP Scholarship only supports scholarships for students that are currently studying or are planning on studying in the United States.</p>
                        <h3 style="font-size: 18px;">As an international student, can I use JAP Scholarship to find scholarships for schools in the United States?</h3>
                        <p style="font-size: 16px;">Yes! When filling out your profile, make sure to select ‘No’ under the ‘U.S. Citizen’ parameter.</p>
                        <h3 style="font-size: 18px;">Can I find scholarships for Associate’s degrees? Bachelor’s degrees? Graduate degrees?</h3>
                        <p style="font-size: 16px;">Yes, to all of the above!</p>
                        <h3 style="font-size: 18px;">What is the minimum grade level I need to be in order to use JAP Scholarship?</h3>
                        <p style="font-size: 16px;">Students can start using JAP Scholarship as early as 9th grade.</p>
                        <h3 style="font-size: 18px;">Can JAP Scholarship help me find scholarships for high school or middle school?</h3>
                        <p style="font-size: 16px;">Nope, JAP Scholarship only matches students with scholarships for post-secondary and above.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-group">
                        <h3 style="font-size: 18px;">How do I apply for a scholarship?</h3>
                        <p style="font-size: 16px;">Once you find a scholarship that you’re interested in, select it, and click ‘Apply Here’. You’ll be taken to the scholarship’s website, where you can find instructions about how to apply to the scholarship and the scholarship’s application.</p>
                        <h3 style="font-size: 18px;">Are there scholarships for non-traditional students or adult learners?</h3>
                        <p style="font-size: 16px;">Yes! Non-traditional students and adult learners can get matched with hundreds of scholarship opportunities on Scholly, as long as the student is pursuing a degree-granting program. JAP Scholarship does not have any age requirement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <p style="font-weight: normal;">With a focus on academic excellence and leadership development, our programs offers comprehensive support, including tuition coverage, research grants, and professional mentorship.This distinguished programs is meticulously crafted to empower exceptional individuals with the means to pursue their undergraduate studies within the globe.</p>

    <a href="/scheme" style="display: block; text-align: center;color:white;">
    <button style="margin-top: 2rem; background: #309B32; width: auto; font-family: 'Montserrat', sans-serif !important; border: none; padding: 8px 40px;color:white; border-radius: 10px;
">
        Explore
    </button>
</a>

            </div>
          </div>
        </div>
      </div>



												 @endsection
