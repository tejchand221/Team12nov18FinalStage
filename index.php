<?php
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Brisbane Study Center</title>
</head>
<body onLoad="run_first()">
<div id="banner" 
		style="background-image: url('images/brisbane.png'); background-size: 100% 100%;">
        <h1 class="text-center display-1 font-weight-bold text-white" >Brisbane Study Center</h1>
    </div>
	<?php include("include/nav.inc") ?>
    <div class="container">
    	<div class="row">
        	<div class="col">
        		<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #ffffff solid thick">
                        <h1>PTE</h1>

                        <p>PTE Academic is the world's leading computer-based test of English for study abroad and immigration.

PTE Academic offers fast, flexible English testing. Candidates can schedule their test as little as twenty-four hours in advance, and typically receive their results within five business days. PTE Academic offers flexible testing locations, with test centres in over 50 countries worldwide.

PTE Academic is accepted by thousands of academic programs worldwide, including prestigious institutions such as Harvard Business School, INSEAD and Yale University.

PTE Academic is also accepted for visa applications

Results in five business days
Schedule tests up to 24 hours in advance
Accepted by thousands of universities and colleges worldwide
Approved for Australian visa applications</p>
                        <h2>ABOUT THE TEST</h2>
                        <p>To complete a PTE Academic test, you will need to attend a secure Pearson test center. You will use a computer and headset to listen to, read and respond to questions.

During the three-hour test session, there are three main parts to the test: speaking and writing (together), listening and reading. There is also an optional 10-minute break between the reading and listening parts. During the test, you will find twenty different question formats, ranging from multiple choice through to essay writing and interpreting information.

PTE Academic assesses real-life, academic English, so you will hear excerpts from lectures and view graphs and charts. You will hear a range of accents in the test, from British and American to non-native speakers, so you will be exposed to the type of accents you will encounter in everyday life.</p>

                        
            	</div>
        	</div>
            <div class="col">
            	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #FFFFFF solid thick">
                        <h1>IELTS</h1>

                        <p>The International English Language Testing System,or IELTS is an international standardized test of English language proficiency for non-native English language speakers. It is jointly managed by the British Council, IDP: IELTS Australia and Cambridge Assessment English and was established in 1989. IELTS is one of the major English-language tests in the world, others being the TOEFL, TOEIC, PTE:A, and OPI/OPIc.

IELTS is accepted by most Australian, British, Canadian and New Zealand academic institutions, by over 3,000 academic institutions in the United States, and by various professional organisations across the world.

IELTS is the only Secure English Language Test approved by UK Visas and Immigration (UKVI) for visa customers applying both outside and inside the UK. It also meets requirements for immigration to Australia, where TOEFL and Pearson Test of English Academic are also accepted, and New Zealand. In Canada, IELTS, TEF, or CELPIP are accepted by the immigration authority.
  <p style="display: none;" id="expand-s">
No minimum score is required to pass the test. An IELTS result or Test Report Form is issued to all test takers with a score from "band 1" ("non-user") to "band 9" ("expert user") and each institution sets a different threshold. There is also a "band 0" score for those who did not attempt the test. Institutions are advised not to consider a report older than two years to be valid, unless the user proves that they have worked to maintain their level.

In 2017, over 3 million tests were taken in more than 140 countries, up from 2 million tests in 2012, 1.7 million tests in 2011 and 1.4 million tests in 2009. In 2007, IELTS administered more than one million tests in a single 12-month period for the first time ever, making it the world's most popular English language test for higher education and immigration </p><a id="expand-p-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-p-click', 'expand-s', 'block')">Read more ...</a>

                        <h2>TEST FORMAT</h2>
                        <p>There are two types of the IELTS test:  IELTS Academic and IELTS General Training. Listening and Speaking are the same for both tests, but the subject matter of the Reading and Writing components differs depending on which test you take.

The Listening, Reading and Writing components of all IELTS tests are completed on the same day, with no breaks in between them.

The Speaking component, however, can be completed up to a week before or after the other tests. Your test centre will advise.

The total test time is 2 hours and 45 minutes.</p>

                       

                       
                        </p>
            	</div>
            </div>
        </div>
    </div>
	
	<div id="footer" class="bg-secondary mt-3">
        <h3 class="text-center font-weight-bold text-white">Brisbane Study Center</h3>
    </div>
</body>
</html>