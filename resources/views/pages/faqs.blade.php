


@extends('layouts.app')
@section('content')







    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .faq-container {
            max-width:100%;
            margin-top: 4rem;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .faq-question {
            margin-bottom: 10px;
            cursor: pointer;
            text-align: center;
        }

        .faq-answer {
            text-align: center;
            display: none;
            margin-bottom: 20px;
        }

        .faq-answer.active {
            display: block;
        }

        @media (max-width: 600px) {
            .faq-container {
                padding: 10px;
            }
        }
    </style>


<div class="full-width-container" style="padding-top:4rem;padding-bottom:3rem;margin-top:4rem;">
    <div class="text-container" style="padding-bottom:3rem;">
      <h2 style="color:white" style="  font-family: 'Montserrat', sans-serif !important;">Frequently Asked Questions</h2>
      <p style="color:white;font-family: 'Montserrat', sans-serif !important; margin-top:4rem;">
        The JAP Scholarship Program, a cornerstone initiative of The Joint Africa Project International (JAP International), stands as its premier endeavor. JAP International, a prominent international non-governmental organization, is committed to empowering African communities through various initiatives in education, healthcare, and socio-economic development. Below are some of the frequently asked questions</p>

    <style>
        @media screen and (max-width: 767px) {
            .buttonStep2Mobile {
                margin-left: 0;
                margin-right: 0;

            }
        }


    </style>

    <a href="mailto:support@japscholarship.org"  style="display: block; width: 100%;">
        <button style="margin-top: 2rem; margin-left: 0; margin-right: 0; background: #309B32; width: 100%; font-family: 'Montserrat', sans-serif !important;border:none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Mail us for more</button>
    </a>





    </div>
    <div class="video-container">
      <img style="background-position: center; background-size: cover; background-repeat: no-repeat; display: block; margin: auto;" src="https://img.freepik.com/premium-vector/tired-student-sitting-school-desk-isolated-transparent-background_764382-479.jpg" alt="Image 1">
    </div>

    </div>




<div class="faq-container">
    <div class="faq-question" onclick="toggleAnswer('faq1')">What is the "Undergraduate Overseas Scholarship Program"?</div>
    <div class="faq-answer" id="faq1">The "Undergraduate Overseas Scholarship Program" offers students the opportunity to pursue their undergraduate studies in a foreign country.</div>

    <div class="faq-question" onclick="toggleAnswer('faq2')">How much is the scholarship amount?</div>
    <div class="faq-answer" id="faq2">The scholarship amount varies, and specific details can be found in the scholarship program details provided by JAP Scholarship.</div>
<!-- Existing FAQs -->

<div class="faq-question" onclick="toggleAnswer('faq3')">Who is eligible to apply for the scholarship?</div>
<div class="faq-answer" id="faq3">Eligibility criteria may vary. Generally, students with outstanding academic achievements and a passion for pursuing studies abroad are encouraged to apply. Check the specific eligibility requirements provided by JAP Scholarship.</div>

<div class="faq-question" onclick="toggleAnswer('faq4')">How do I apply for the scholarship?</div>
<div class="faq-answer" id="faq4">To apply for the scholarship, visit the official JAP Scholarship website and follow the application instructions. Ensure that you provide all required documents and information as per the application guidelines.</div>

<div class="faq-question" onclick="toggleAnswer('faq5')">When is the application deadline?</div>
<div class="faq-answer" id="faq5">The application deadline for the scholarship may vary each year. It is important to check the official JAP Scholarship website or contact their support for the most up-to-date information regarding application deadlines.</div>

<div class="faq-question" onclick="toggleAnswer('faq6')">Is there an interview process for the scholarship?</div>
<div class="faq-answer" id="faq6">Yes, some scholarship programs may involve an interview process as part of the selection criteria. Prepare for the interview by reviewing your application, understanding the scholarship's goals, and being ready to discuss your academic achievements and aspirations.</div>

<!-- Add more FAQs as needed -->

    <!-- Add more FAQs as needed -->

</div>

<script>
    function toggleAnswer(faqId) {
        const answer = document.getElementById(faqId);
        answer.classList.toggle('active');
    }
</script>



								</div><!-- sections container -->
							</div><!-- page wrapper -->
							@endsection
