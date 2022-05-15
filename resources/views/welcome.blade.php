

@extends('front_end.app')
@section('content')
@foreach ($post as $posts)
    
<section id="top-news">
    <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xm-12 col-md-12 col-lg-12">
                    <a href="#" class="top">
                        <img class="col-sm-6 col-lg-6 com-xm-12" src="images/thumbnail.jpg" alt="">
                        <div class="col-sm-6 col-lg-6 col-xm-12">
                            <h2>শিথীল লকডাউনে গণপরিবহন চলবে যেভাবে</h2>
                            <p>বাংলাদেশে করোনাভাইরাসের উর্ধ্বমুখী সংক্রমণ ঠেকাতে চলমান কঠোর বিধিনিষেধ বা লকডাউন বুধবার মধ্যরাত থেকে শিথিল করা হয়েছে। এ সময়ে স্বাস্থ্যবিধি মেনে গণপরিবহন বা গরুর হাট পরিচালনা কতটা সম্ভব হবে?</p>
                            
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="top-news-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4"  src="images/{{$posts->image}}" alt="BBC" class="col-xm-3">
                        <div class="col-sm-8"> 
                            <h2>বাংলাদেশে  এবার জেলা উপজেলার টিকাকেন্দ্রে উদগ্রীব মানুষের ভীড়</h2>
                            <span>২ ঘন্টা আগে</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <a href="#" class="col-xm-12">
                        <img class="col-xm-4" src="images/topnews2.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2>কিউবায় সরকার বিরোধী বিক্ষোবের নেপথ্য কী ?</h2>
                            <span>১৪ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/topnews3.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2>পাকিস্তানে চীনা ইন্জিনিয়ার বহনকারী বাস লক্ষ্য করে বোমা হামলা </h2>
                            <span>১৪ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/topnews4.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2> টানা চতুর্থ দিনের মতো দু’শোর বেশি মৃত্যু, কমেছে শনাক্তের হার</h2>
                            <span>১৪ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
            </div>
        
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4"  src="images/topnews5.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2>দু’ সপ্তাহ যেতে না যেতেই অনলাইন হাটে বিত্রি হলো প্রায় দুই লাখ পশু</h2>
                            <span>১৩ জুলাই 2021</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/topnews6.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2>আমেরিকানদের বিদায়ের পর আফগানিস্তানের জীবন কেমন হবে ? </h2>
                            <span>১৩ জুলাই ২০২১</span>
                    </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/topnews7.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2> পান্তা পরিবেশন করে মাস্টারশেফ অস্ট্রেলিয়ায় তৃতীয় কিশোয়ার  </h2>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div> 
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/topnews8.jpg" alt="BBC">
                        <div class="col-sm-8">  
                            <h2>আফগানিস্তানে পট পরিবর্তনের কারণে বড় ক্ষতির সামনে ভারত ?</h2>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
            </div>
            

        </div>
    </section>
    <section id="corona-virus">
        <div class="container">
            <div class="common-heading">
                <h2>করোনাভাইরাস</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a  href="#">
                        <img class="col-xm-4" src="images/covid1.jpg" alt="BBC">
                        <div class="col-sm-8">
                            <h2>কভিডের কারণে শরীলে অক্সিজেন কমে গেলে যা করতে পারেন</h2>
                            <span>২৩ জুন ২০২১</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 
                        <img class="col-xm-4" src="images/covid2.jpg" alt="BBC">
                        <div class="col-sm-8"> 
                            <h2> ব্লাক ফাঙ্গাস সংক্রমণ থেকে সুরক্ষার সাতটি উপায়</h2>
                            <span>২৫ মে ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 
                        <img class="col-xm-4" src="images/covid3.jpg" alt="BBC">
                        <div class="col-sm-8"> 
                            <h2>করোনাভাইরাসের ভারতীয় ধরনটি আসলে ঠিক কি ?</h2>
                            <span> ২৩ এপ্রির ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 
                        <img class="col-xm-4" src="images/covid4.jpg" alt="BBC">
                    <div class="col-sm-8">
                            <h2>গুরতর করোনা রুগিদের যে ১১টি পরীক্ষা করতে বলেন চিকিৎসকেরা </h2>
                            <span>৯ মে ২০২১</span>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <section id="audio">
        <div class="container">
            <div class="common-heading">
                <h2 > অডিও ও ভিডিও </h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xm-12">
                    <a href="#"> 
                        <video height="200" controls class="col-6">
                            <source src="video/video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="col-6 col-xm-12">
                            <h2>বাথটাব, ব্যালকনি  রান্নাঘর - অলিম্পিক অ্যাথলদের প্রশিক্ষণের জায়গা</h2>
                            <p>করোন লকডাউনে ঘরের মাধ্যে বসে তোমাদের সবার মেজাজ খারাপ । কিন্তু, অলিম্পিকের অ্যাথলেটের কথা একবার ভাবুন । টোকিও অলিম্পিকে জয়লাভের জন্য যাদের কঠোর অনুশীলন হচেছ ? আর সেটা করতে হচ্ছে লকডাউনের নানা সমস্যঅর মধ্যে ?</p>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row2">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 
                        
                        <video controls class="col-xm-4">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <div>  
                            <h2>বাথটাব, ব্যালকনি, রান্নাঘর - অলিম্পিক অ্যাথলদের প্রশিক্ষণের জায়গা</h2>
                            <p>করোন লকডাউনে ঘরের মাধ্যে বসে তোমাদের সবার মেজাজ খারাপ । কিন্তু, অলিম্পিকের অ্যাথলেটের কথা একবার ভাবুন । টোকিও অলিম্পিকে জয়লাভের জন্য যাদের কঠোর অনুশীলন হচেছ ? আর সেটা করতে হচ্ছে লকডাউনের নানা সমস্যঅর মধ্যে ?</p>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 
                        
                        <video controls class="col-xm-4">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <div>
                            <h2>বাথটাব, ব্যালকনি, রান্নাঘর - অলিম্পিক অ্যাথলদের প্রশিক্ষণের জায়গা</h2>
                            <p>করোন লকডাউনে ঘরের মাধ্যে বসে তোমাদের সবার মেজাজ খারাপ । কিন্তু, অলিম্পিকের অ্যাথলেটের কথা একবার ভাবুন । টোকিও অলিম্পিকে জয়লাভের জন্য যাদের কঠোর অনুশীলন হচেছ ? আর সেটা করতে হচ্ছে লকডাউনের নানা সমস্যঅর মধ্যে ?</p>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 

                        <video controls class="col-xm-4">
                            <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            
                            <div>
                                <h2>বাথটাব, ব্যালকনি, রান্নাঘর - অলিম্পিক অ্যাথলদের প্রশিক্ষণের জায়গা</h2>
                            <p>করোন লকডাউনে ঘরের মাধ্যে বসে তোমাদের সবার মেজাজ খারাপ । কিন্তু, অলিম্পিকের অ্যাথলেটের কথা একবার ভাবুন । টোকিও অলিম্পিকে জয়লাভের জন্য যাদের কঠোর অনুশীলন হচেছ ? আর সেটা করতে হচ্ছে লকডাউনের নানা সমস্যঅর মধ্যে ?</p>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xm-12">
                    <a href="#"> 

                        <video controls class="col-xm-4">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div>
                            <h2>বাথটাব, ব্যালকনি, রান্নাঘর - অলিম্পিক অ্যাথলদের প্রশিক্ষণের জায়গা</h2>
                            <p>করোন লকডাউনে ঘরের মাধ্যে বসে তোমাদের সবার মেজাজ খারাপ । কিন্তু, অলিম্পিকের অ্যাথলেটের কথা একবার ভাবুন । টোকিও অলিম্পিকে জয়লাভের জন্য যাদের কঠোর অনুশীলন হচেছ ? আর সেটা করতে হচ্ছে লকডাউনের নানা সমস্যঅর মধ্যে ?</p>
                            <span>১৩ জুলাই ২০২১</span>
                        </div>
                        
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <section id="letter">
        <div class="container">
            <div class="common-heading">
                <h2> চিঠিপত্র ও মতামত </h2>
            </div>
            <a href="#"class="row">
                <img class="col-sm-12 col-lg-6 col-xm-12" src="images/letter.jpg" alt="">
                <div class="col-sm-12 col-lg-6 col-xm-12">
                    <h2> এডিটা’র্স মেইলবক্স: মাস্টারশেফ-এ নিয়ে কিশোয়ার, নাড়ায়নগঞ্জের আগুন আর বুলিং নিয়ে প্রশ্ন </h2>
                    <p>গত সম্পাহে বাংলাদেশের অন্যতম একটি শিল্প কারখানায় আগুন লেগে 52 জনের মৃত্যু হয়েছে । খবরে অনেকেই বিচলীত ।</p>
                    <span>১৬ জুলাই ২০২১</span>
                </div>
            </a>
        </div>
    </section>
    <section id="report"> 
        <div class="container">
            <div class="common-heading">
                <h2 > বিশেষ প্রতিবেধন </h2>
            </div>
            <a href="#"class="row">
                <img class="col-sm-12 col-lg-6 col-xm-12" src="images/report.jpg" alt="">
                <div class="col-sm-12 col-lg-6 col-xm-12">
                    <h2> কোরবানির পশু বেচা কেনা অর্থনীতিতে যে কারণে গুরুত্বপূর্ণ  </h2>
                    <p>বাংলাদেশে করোনা ভাইরাসের সংক্রমণ েএবং মৃত্যু যখন ব্যাপক আকারে বেড়েই চলচে, তখন সরকার কিছুদিনের জন্য লকডাউন প্রত্যাহার করে নিয়েছেন । সরকারের তরফ ধেতে যুক্তি দেয়া হয়েছে, ঈদ-েউল-আদহায় পশু বেচা কেনা অর্থনীতির একটি খুটি । </p>
                    <span>১৬ জুলাই ২০২১</span>
                </div>
            </a>
        </div>
        
    </section>

    <section id="history"> 
        <div class="container">
            <div class="common-heading">
                <h2> ইতিহাসের সাক্ষী </h2>
            </div>
            <a href="#"class="row">
                <img class="col-sm-12 col-lg-6 col-xm-12" src="images/history.jpg" alt="">
                <div class="col-sm-12 col-lg-6 col-xm-12">
                    <h2> বিশ্বে প্রথম সফল লিঙ্গ পরিবর্তনের ইতিহাস</h2>
                    <p>১৯৫২ সালের পহেলা ডিসেম্বর। সেদিন যুক্তরাষ্ট্রের পত্রপত্রিকায় একটি খবর প্রকাশিত হয় যা সবাইকে চমকে দিয়েছিল। নিউ ইয়র্ক ডেইলি নিউজ নামের একটি পত্রিকা কিনতে পাঠকরা ভিড় করেছিল স্টলগুলোতে।  </p>
                    <span>১৬ জুলাই ২০২১</span>
                </div>
            </a>
        </div>
    </section>
    
    <section id="other"> 
        <div class="container">
            <div class="common-heading">
                <h2> অন্যান্ন খবর </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/other1.jpg" alt="">
                        <div class="col-xm-8">
                            <h2>মার্কিন কূটনীতিকনা রহস্যজনক রোগে আক্রান্ত হওয়ায় অতঙ্ক</h2>
                            <span>১৮ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/other2.jpg" alt="">
                    <div class="col-xm-8">
                            <h2>মাস্ক আর সামাজিক দূরত্বের মধ্য দিয়ে আরেকটি হজ</h2>
                            <span>১৮ জুলাই ২০২১</span>
                    </div>
                </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/other3.jpg" alt="">
                        <div class="col-xm-8">
                            <h2> পাকিস্তানে আপফগান রাষ্ট্রদূতের কণ্য অপহরনের শিকার </h2>
                            <span>১৮ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/other4.jpg" alt="">
                        <div class="col-xm-8">
                            <h2>ইভ্যালিকে কারণ দর্শানোর সুজোগ দেয়া হবে: বাণিজ্য সচিব</h2>
                            <span>১৮ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img  class="col-xm-4" src="images/other5.jpg" alt="">
                        <div class="col-xm-8">
                            <h2> গ্রাহকদের কাছ থেকে নেয়া টাকার হদিস মিলছেলা ইভ্যালির কাছে</h2>
                            <span>১7 জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img  class="col-xm-4" src="images/other6.jpg" alt="">
                        <div  class="col-xm-8">
                            <h2> কান উৎসবে এবার সেরা ছবির পুরস্কার জিতলো যে ছায়াছবিটি </h2>
                            <span>১৭ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img  class="col-xm-4" src="images/other7.jpg" alt="">
                        <div class="col-xm-8">
                            <h2> ‘স্বামী ছিল আমার কাছে ফেরেশতা, একদিন সে আমাদে দর্শণ করলো </h2>
                            <span>১৭ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/other8.jpg" alt="">
                        <div class="col-xm-8">
                            <h2> বন্দী জিহাদি ক্যাম্পেল নারী ও শিশুদের ফিরিয়ে নিল বেলজিয়াম </h2>
                            <span>১৭ জুলাই ২০২১</span>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <section  id="photo">
    <div class="container">
        <div class="common-heading">
            <h2> ফটো গ্যালারি </h2>
        </div>
        <div class="row">
            <a href="#" class="col-sm-12 col-xm-12">  
                <img src="images/photo-gallery.jpg" alt="" class="col-xm-12 col-lg-6">
                <div clss="col-sm-12 col-lg-6 col-xm-12">
                    <h2>মাস্ক আরা সামাজিক দূরত্বের মধ্য দিয়ে আরেকটি হজ্ব </h2>
                    <p> এবার হজ্বের অনুমতি দেয়া হয়েছে সৌদি আরবে বসবাস করেন  এমন 60 হাজার মুসল্লিকে  </p>
                    <span>১৯ জুলাই ২০২১</span>
                </div>
            </a>
        </div>
    </div>
    </section>

    <section id="archive">
        <div class="container">
            <div class="common-heading">
                <h2> আর্কাইভ </h2>
            </div>
            <div class="row">
                <a href="#" class="col-sm-12 col-lg-12 col-xm-12">
                    <img  src="images/health.PNG" alt="" class="col-xm-12">
                    <div class="col-sm-12 col-lg-6 col-xm-12">
                        <h2>আপনার স্বাস্থ: কী, কেন, কিভাবে ?</h2>
                        <p> বিবিসি বাংলার স্বস্থ্য সিরিজ । দৈনন্দিন জীবনে কিভাবে ভালো থাকবেন ? সুস্বাস্থ্যের জন্য টিপস । ছোটখাট শারিরীক বিপত্তীর লক্ষণ ও উপশমের উপায় ।</p>
                        <span>২৬ সেপ্টেম্বর ২০২১</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="other">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive2.jpg" alt="">
                        <div>
                            <h2> মার্কিন নির্বাচন ২০২০ </h2>
                            <span> ২৭ জানুয়ারী ২০২১ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive3.PNG" alt="">
                        <div>
                            <h2>ত্রিশে ফিনিশ ? </h2>
                            <span> 3 ডিসেম্বর ২০১০ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive4.PNG" alt="">
                        <div>
                            <h2> বিবিসি লাইভ </h2>
                            <span> 5 জানুয়ারী ২০১৭ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive5.PNG" alt="">
                        <div>
                            <h2> জঙ্গল থেকে জীবনে </h2>
                            <span> ২৪ সেপ্টেম্বর ২০১৭ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive6.PNG" alt="">
                        <div>
                            <h2> ক্রিকেট বিশ্বকাপ </h2>
                            <span> ১৯ মে ২০১৯ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#">
                        <img class="col-xm-4" src="images/archive7.PNG" alt="">
                        <div>
                            <h2> রাশিয়ান ফুটবল উৎসব </h2>
                            <span> 25 জুন ২০১৮ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href= "#">
                        <img class="col-xm-4" src="images/archive8.PNG" alt="">
                        <div>
                            <h2> সংসদ নির্বাচন ২০১৮ </h2>
                            <span> ২০ ডিসেম্বর ২০১৮ </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xm-12">
                    <a href="#" class="overlay">
                        <img class="col-xm-4" src="images/archive9.PNG" alt="">
                    <div>
                            <h2> শেখ হাসিনার সুরক্ষার </h2>
                            <span> 6 আগষ্ট ২০১৯ </span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="top_footer">
        <div class="row">
            <div class="col-4 col-xm-12">
                <a href="">
                    <span>B</span>
                    <span>B</span>
                    <span>C</span>
                    <P>NEWS </P>
                    <P>  বাংলা </P>
                </a>

            </div>
        </div>
    </section>
    <section id="footer">
        <div class="row">
            <div class="col-6 col-xm-12">
                <a href="#">বিবিসির উপর কেন আপনি আস্থা রাখতে পারেন</a>
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-xm-12">
            <div coass="col-xm-2">
                <a href="#">
                    ব্যবহারের শর্তাবলি  
                </a>
            </div>
            <div coass="col-xm-2">
                <a href="#">
                    বিবিসি সম্পর্কে
                </a>
            </div>
            </div>
            <div class="col-2 col-xm-6">
                <div coass="col-xm-2">
                    <a href="#">
                        প্রাইবেসি নীতি
                    </a>
                </div>
                <div coass="col-xm-2">
                    <a href="#">
                        কুকিস
                    </a>
                </div>
            </div>
            <div class="col-3 col-xm-12">
                <div coass="col-xm-4">
                    <a href="contact-us.html">
                        বিবিসির সঙ্গে যোগাযোগ করুন
                    </a>
                </div>
                <div coass="col-xm-4">
                    <a href="#">
                        asChoices/Do Not Sell My Info
                    </a>
                </div>
            </div>
        </div>
        <div class="row col-xm-12" >
            <span>@2021 বিবিসি | বাইরের কোন তথ্যের জন্য বিবিসি দায়বদ্ব নয় |</span>
            <a href="#"> বাইরের লিংক সম্পর্কে বিবিসির দৃষ্টিভঙ্গি পড়ুন |</a>
        </div>
    </section>
@endforeach
@endsection
