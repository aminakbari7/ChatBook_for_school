<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title> وبسایت رسمی چت بوک </title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

    <style>
        *{
            font-family:Arabic Typesetting, serif; !important;
        }
    </style>
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg" style="margin-top:-5px ! important">
            <img  style="border-radius: 90px;width:5%;margin-bottom:5px" src="images/logo.jpeg">
            <div class="container">
                <div style="margin-left: 15px">
                    <a href="{{ route('register') }}" class="btn custom-btn d-lg-none ms-auto me-4">ثبت نام</a>                         </li>
                </div>

                <a class="btn custom-btn d-lg-none ms-auto me-4" href="{{ route('login') }}" >ورود</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <div style="margin-left: 15px">
                            <a href="{{ route('dashboard') }}" class="btn custom-btn d-lg-block d-none"><b style="font-size:20px;"> پنل من</b></a>
                              </li>
                        </div>
                        @else
                        <li class="nav-item" >
                            <a class="btn custom-btn d-lg-block d-none" href="{{ route('login') }}" ><b style="font-size:20px;">ورود</b></a>
                        </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <div style="margin-left: 15px">
                                <a href="{{ route('register') }}" class="btn custom-btn d-lg-block d-none"><b style="font-size:20px;">ثبت نام</b></a>
                                  </li>
                            </div>
                                @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>

        </nav>
        <section dir="rtl" class="about-section section-padding" id="section_2" style="margin-top:-5px ! important">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center" style="margin-right:80px ! important">
                        <div class="services-info">
                            <h2 class="text-white mb-4 align-items-center" style="margin-top: 80px;text-algin:center ! important;color:rgb(2, 144, 82) ! important">به چت بوک خوش آمدید</h2>

                            <p  class="text-white" style="font-size:30px;" >سامانه چت بوک محیطی  کاملا بومی  برای دسترسی معلم ها و والدین با یکدیگر است

                            </p>

                            <h6  class="text-white mt-4"> چه کسانی می توانند از سامانه استفاده کنند؟</h6>

                            <p class="text-white">
                                تمامی والدین و معلم های عزیز می توانند جهت سهولت از پروسه ی آموزش کودکان از مزایای سامانه استفاده کنند.
                            </p>

                            <h6 class="text-white mt-4" > </h6>

                            <p class="text-white">ابتدا در سایت ثبت نام کرده و منتظر تایید ادمین باشید</p>
                        </div>
                    </div>


            </div>
        </section>
    </main>



<!-- یک قدم قبل فوتر -->
<footer dir="rtl" class="site-footer" style="background-image: url('images/b4.png') ! important">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3" style="margin-top:60px ;font-size:30px;margin-left:100px">
  اهداف چت بوک                </h5>

            </div>

            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3" style="margin-top:60px;font-size:30px;margin-left:100px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none"><path opacity="0.4" d="M45 90C69.8528 90 90 69.8528 90 45C90 20.1472 69.8528 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8528 20.1472 90 45 90Z" fill="#50CCFB"></path><path d="M25.4841 26.3486C27.1893 28.0421 28.8117 29.6171 30.3749 31.2513C31.0617 31.9618 31.5592 32.0684 32.3763 31.3223C33.2384 30.4681 34.4046 29.9912 35.6182 29.9968C36.8319 30.0023 37.9937 30.4898 38.8479 31.3519C39.7022 32.2141 40.1791 33.3802 40.1735 34.5939C40.168 35.8076 39.6804 36.9694 38.8183 37.8236C38.1078 38.5697 38.1907 39.0789 38.8183 39.7421C40.4644 41.3407 42.0631 42.975 43.721 44.6328L38.9841 49.3697C35.4315 47.3921 32.7079 47.4987 30.4697 49.6894C28.2316 51.8802 28.0302 54.6394 30.0078 58.3815L25.3538 63.0354L24.5487 62.242L10.3381 48.0315C8.18286 45.8763 8.18286 43.5197 10.3381 41.3644L24.5487 27.1539L25.4841 26.3486Z" fill="#5433FA"></path><path d="M45.0832 43.4486L40.4175 38.7828C42.4188 35.0999 42.2648 32.3407 39.9556 30.1026C37.6464 27.8644 34.9582 27.8052 31.4292 29.7828L26.6924 25.117L27.474 24.3354L41.6845 10.1249C43.8516 7.95778 46.2082 7.94594 48.3516 10.1249L62.5622 24.3354L63.3319 25.0933L59.9214 28.492C59.4122 29.0131 58.9148 29.5578 58.37 30.0433C57.6358 30.6946 57.6476 31.2275 58.37 31.9617C59.1753 32.7747 59.6445 33.8613 59.684 35.0049C59.7235 36.1485 59.3305 37.2649 58.5832 38.1315C58.1787 38.6011 57.6837 38.9844 57.1278 39.2586C56.572 39.5329 55.9666 39.6924 55.3478 39.7278C54.729 39.7632 54.1094 39.6736 53.5259 39.4645C52.9424 39.2553 52.4071 38.9308 51.9517 38.5104C50.9806 37.6341 50.7674 37.6341 49.9147 38.5104L45.0832 43.4486Z" fill="#5433FA"></path><path d="M63.2965 64.2198L62.5386 64.9658L48.3281 79.1764C46.1254 81.3671 43.7926 81.3671 41.59 79.1764L26.6807 64.2672C26.8938 64.0067 27.0833 63.7698 27.2846 63.5685C28.7412 62.1119 30.1742 60.6435 31.6544 59.2106C31.7961 59.1112 31.9118 58.9791 31.9917 58.8255C32.0715 58.672 32.1133 58.5014 32.1133 58.3283C32.1133 58.1553 32.0715 57.9847 31.9917 57.8311C31.9118 57.6776 31.7961 57.5455 31.6544 57.4461C31.2268 57.0223 30.8867 56.5185 30.6538 55.9633C30.4209 55.4081 30.2995 54.8125 30.2968 54.2105C30.294 53.6084 30.4099 53.0117 30.6378 52.4544C30.8656 51.8971 31.201 51.3902 31.6248 50.9625C32.0486 50.5349 32.5523 50.1949 33.1075 49.962C33.6627 49.729 34.2584 49.6077 34.8604 49.605C35.4625 49.6022 36.0592 49.7181 36.6165 49.9459C37.1738 50.1738 37.6807 50.5092 38.1083 50.933C38.8189 51.608 39.2926 51.5014 39.9439 50.8619C41.5426 49.2159 43.1768 47.6053 44.8584 45.9355L49.5953 50.6724C49.0055 51.3934 48.5784 52.2333 48.3434 53.1347C48.1083 54.0361 48.0708 54.9776 48.2334 55.8948C48.4586 57.2625 49.1387 58.5142 50.1637 59.4474C52.4018 61.5198 55.1728 61.579 58.536 59.625L63.2965 64.2198Z" fill="#5433FA"></path><path d="M46.2676 44.704L51.0044 39.9672C51.7581 40.573 52.6351 41.0068 53.5741 41.2379C54.513 41.4691 55.4911 41.4921 56.4399 41.3054C57.7786 41.0239 58.9887 40.3129 59.886 39.2804C61.8518 37.0304 61.8873 34.2475 59.886 30.9909L64.5517 26.3369C64.8122 26.5738 65.0728 26.7869 65.3096 27.0238L79.5202 41.2343C81.6399 43.3422 81.6517 45.7225 79.5202 47.8185L65.2149 62.2777L64.4807 63.0001L59.7439 58.2633C58.5597 57.079 58.5597 57.079 57.3755 58.1566C56.4869 58.751 55.4192 59.0179 54.3554 58.9114C53.2916 58.8049 52.2981 58.3317 51.5449 57.5729C50.7918 56.8142 50.326 55.8171 50.2274 54.7526C50.1288 53.6881 50.4035 52.6224 51.0044 51.7382C52.0465 50.554 52.0466 50.554 50.9097 49.3698L46.2676 44.704Z" fill="#EF5181"></path><path d="M50.2341 59.3527C49.2092 58.4195 48.5291 57.1678 48.3039 55.8001C48.1413 54.8829 48.1788 53.9414 48.4139 53.0401C48.6489 52.1387 49.0759 51.2988 49.6657 50.5778L45.0117 45.9238V80.7396C45.6507 80.7027 46.2762 80.5393 46.8515 80.2588C47.4268 79.9782 47.9406 79.5862 48.3631 79.1054L62.5737 64.8948L63.3316 64.1488C61.7092 62.5382 60.1697 60.9988 58.5947 59.4119C55.2434 61.4843 52.4723 61.4251 50.2341 59.3527Z" fill="#3725BE"></path><path d="M62.5614 24.4066L48.3509 10.1961C47.9342 9.72323 47.4274 9.33823 46.8601 9.06372C46.2927 8.7892 45.6763 8.63069 45.0469 8.59741V43.4487L49.9021 38.5934C50.814 37.6816 50.968 37.6816 51.9391 38.5934C52.3945 39.0139 52.9298 39.3383 53.5133 39.5475C54.0968 39.7566 54.7163 39.8462 55.3351 39.8108C55.9539 39.7755 56.5594 39.6159 57.1152 39.3417C57.6711 39.0674 58.166 38.6841 58.5706 38.2145C59.3178 37.3479 59.7109 36.2315 59.6714 35.0879C59.6319 33.9444 59.1626 32.8577 58.3574 32.0448C57.6705 31.3224 57.6587 30.7777 58.3574 30.1264C58.9021 29.6408 59.3996 29.0961 59.9088 28.575L63.3193 25.1764L62.5614 24.4066Z" fill="#3725BE"></path></svg>								</span>

                </h5>
                <p class="text-white d-flex mt-3 mb-2" style="font-size:25px;margin-left:120px; text-align: justify;
                text-justify: inter-word;"> تعامل والدین در محیطی آموزشی و ارتباط با معلم ها  و مطلع شدن از آخرین تغییرات آموزشی</p>
            </div>


            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3" style="margin-top:60px;font-size:30px;margin-left:100px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none"><path opacity="0.4" d="M45 90C69.8528 90 90 69.8528 90 45C90 20.1472 69.8528 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8528 20.1472 90 45 90Z" fill="#50CCFB"></path><mask id="mask0_4301_155544" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="90" height="90"><path d="M45 90C69.8528 90 90 69.8528 90 45C90 20.1472 69.8528 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8528 20.1472 90 45 90Z" fill="#50CCFB"></path></mask><g mask="url(#mask0_4301_155544)"><path d="M64.2312 74.3196V65.509L67.4523 60.8037C68.5871 59.1453 69.1936 57.1861 69.1931 55.1809V30.4783H29.2852V60.192H41.7075V75.5077H64.3852" fill="#F9A58B"></path><path d="M31.9619 46.3939L69.1935 45.0764V43.9707H31.9619V46.3939Z" fill="#E2847D"></path><path d="M79.0339 43.9706H15.7971L2.36816 35.8422L15.7971 27.7139H79.0339C79.7186 27.7139 80.3753 27.9841 80.8594 28.465C81.3435 28.9459 81.6155 29.5981 81.6155 30.2782V41.4062C81.6155 41.743 81.5487 42.0764 81.419 42.3875C81.2892 42.6987 81.0991 42.9814 80.8594 43.2195C80.6197 43.4576 80.3351 43.6465 80.0218 43.7754C79.7086 43.9042 79.373 43.9706 79.0339 43.9706Z" fill="#EEEAE7"></path><path d="M79.0337 43.9706H15.7969V27.7139H79.0337C79.7184 27.7139 80.3751 27.9841 80.8592 28.465C81.3433 28.9459 81.6153 29.5981 81.6153 30.2782V41.4062C81.6153 41.743 81.5485 42.0764 81.4188 42.3875C81.289 42.6987 81.0989 42.9814 80.8592 43.2195C80.6195 43.4576 80.3349 43.6465 80.0216 43.7754C79.7084 43.9042 79.3728 43.9706 79.0337 43.9706Z" fill="#FFDE43"></path><path d="M8.81099 39.736V31.937L3.29253 35.2895C3.19695 35.3472 3.11795 35.4284 3.06312 35.5252C3.00829 35.6221 2.97949 35.7313 2.97949 35.8424C2.97949 35.9535 3.00829 36.0627 3.06312 36.1596C3.11795 36.2564 3.19695 36.3376 3.29253 36.3953L8.81099 39.736Z" fill="#00347B"></path><path d="M75.8484 27.7139H71.6562V43.9706H75.8484V27.7139Z" fill="#EEEAE7"></path><path d="M75.7891 27.7139H78.9864C79.6711 27.7139 80.3277 27.984 80.8119 28.465C81.296 28.9459 81.568 29.5981 81.568 30.2782V41.4062C81.568 42.0863 81.296 42.7386 80.8119 43.2195C80.3277 43.7004 79.6711 43.9706 78.9864 43.9706H75.7891V27.7139Z" fill="#56ED78"></path><path d="M75.8486 35.8425V43.9709H79.0342C79.7188 43.9709 80.3755 43.7007 80.8596 43.2198C81.3438 42.7389 81.6157 42.0866 81.6157 41.4065V35.8425H75.8486Z" fill="#00CB76"></path><path d="M71.6561 35.8425H15.7969V43.9709H71.6561V35.8425Z" fill="#FF9E22"></path><path opacity="0.18" d="M3.36315 35.8424H15.7974V43.9707L3.22105 36.3482C3.16814 36.3184 3.1268 36.2719 3.1036 36.2161C3.08039 36.1602 3.0767 36.0983 3.09304 36.0401C3.10939 35.9819 3.14484 35.9309 3.1938 35.895C3.24276 35.8592 3.30236 35.8407 3.36315 35.8424Z" fill="#726863"></path><g opacity="0.18"><path opacity="0.18" d="M43.4368 13.469C42.7634 13.469 42.0966 13.6007 41.4745 13.8567C40.8524 14.1127 40.2872 14.4879 39.811 14.9608C39.3349 15.4338 38.9571 15.9953 38.6994 16.6133C38.4418 17.2312 38.3091 17.8935 38.3091 18.5624V23.0913C38.2458 21.7812 37.6773 20.5456 36.7215 19.6407C35.7657 18.7358 34.496 18.231 33.1756 18.231C31.8553 18.231 30.5855 18.7358 29.6297 19.6407C28.6739 20.5456 28.1054 21.7812 28.0421 23.0913V38.7598C28.0087 39.4501 28.1167 40.1399 28.3596 40.7874C28.6026 41.435 28.9753 42.0268 29.4552 42.527C29.9352 43.0273 30.5125 43.4255 31.152 43.6976C31.7915 43.9697 32.4799 44.11 33.1756 44.11C33.8713 44.11 34.5597 43.9697 35.1992 43.6976C35.8387 43.4255 36.416 43.0273 36.896 42.527C37.3759 42.0268 37.7486 41.435 37.9915 40.7874C38.2345 40.1399 38.3425 39.4501 38.3091 38.7598V34.231C38.3725 35.541 38.941 36.7766 39.8968 37.6815C40.8526 38.5864 42.1223 39.0912 43.4427 39.0912C44.7631 39.0912 46.0328 38.5864 46.9886 37.6815C47.9444 36.7766 48.5129 35.541 48.5763 34.231V18.5624C48.5732 17.2105 48.0303 15.915 47.0668 14.9601C46.1033 14.0052 44.7978 13.469 43.4368 13.469Z" fill="#726863"></path><path opacity="0.18" d="M63.8647 21.4915C63.1903 21.4899 62.5222 21.6205 61.8988 21.8758C61.2753 22.1311 60.7086 22.506 60.2312 22.9792C59.7538 23.4523 59.375 24.0143 59.1166 24.633C58.8582 25.2518 58.7252 25.9151 58.7252 26.5849V21.5856C58.6618 20.2755 58.0933 19.0399 57.1375 18.135C56.1817 17.2301 54.912 16.7253 53.5916 16.7253C52.2713 16.7253 51.0015 17.2301 50.0457 18.135C49.09 19.0399 48.5214 20.2755 48.4581 21.5856V37.2776C48.4247 37.9679 48.5327 38.6577 48.7757 39.3053C49.0186 39.9528 49.3914 40.5446 49.8713 41.0449C50.3513 41.5451 50.9285 41.9434 51.568 42.2155C52.2075 42.4876 52.896 42.6279 53.5916 42.6279C54.2873 42.6279 54.9758 42.4876 55.6153 42.2155C56.2548 41.9434 56.832 41.5451 57.312 41.0449C57.7919 40.5446 58.1647 39.9528 58.4076 39.3053C58.6506 38.6577 58.7585 37.9679 58.7252 37.2776V36.1013C58.7252 36.7712 58.8582 37.4345 59.1166 38.0532C59.375 38.672 59.7538 39.234 60.2312 39.7071C60.7086 40.1802 61.2753 40.5552 61.8988 40.8105C62.5222 41.0657 63.1903 41.1963 63.8647 41.1948C65.2246 41.1948 66.5288 40.6581 67.4904 39.7029C68.4521 38.7477 68.9923 37.4522 68.9923 36.1013V26.6084C68.9954 25.9376 68.8651 25.2727 68.6088 24.6521C68.3525 24.0314 67.9753 23.4671 67.4988 22.9916C67.0224 22.5161 66.4561 22.1389 65.8324 21.8814C65.2088 21.624 64.54 21.4914 63.8647 21.4915Z" fill="#726863"></path></g><path d="M33.241 16.5388H33.2292C30.3973 16.5388 28.1016 18.8192 28.1016 21.6323V37.3126C28.1016 40.1256 30.3973 42.406 33.2292 42.406H33.241C36.0729 42.406 38.3687 40.1256 38.3687 37.3126V21.6323C38.3687 18.8192 36.0729 16.5388 33.241 16.5388Z" fill="#FFCBBC"></path><path d="M43.5076 11.9983H43.4958C40.6639 11.9983 38.3682 14.2787 38.3682 17.0917V32.772C38.3682 35.5851 40.6639 37.8655 43.4958 37.8655H43.5076C46.3395 37.8655 48.6353 35.5851 48.6353 32.772V17.0917C48.6353 14.2787 46.3395 11.9983 43.5076 11.9983Z" fill="#FFCBBC"></path><path d="M53.7987 14.7861H53.7868C50.9549 14.7861 48.6592 17.0665 48.6592 19.8796V35.5599C48.6592 38.3729 50.9549 40.6533 53.7868 40.6533H53.7987C56.6306 40.6533 58.9263 38.3729 58.9263 35.5599V19.8796C58.9263 17.0665 56.6306 14.7861 53.7987 14.7861Z" fill="#FFCBBC"></path><path d="M64.0662 19.7856H64.0544C61.2225 19.7856 58.9268 22.0661 58.9268 24.8791V34.372C58.9268 37.185 61.2225 39.4654 64.0544 39.4654H64.0662C66.8981 39.4654 69.1939 37.185 69.1939 34.372V24.8791C69.1939 22.0661 66.8981 19.7856 64.0662 19.7856Z" fill="#FFCBBC"></path><path d="M29.1429 72.4492V65.603L26.218 62.6975C23.5725 60.0605 22.0828 56.4921 22.0732 52.7693V35.9833C22.0732 33.9991 22.8667 32.0962 24.2792 30.6932C25.6916 29.2902 27.6073 28.502 29.6048 28.502H43.2824C44.6455 28.502 45.9527 29.0398 46.9166 29.9972C47.8804 30.9546 48.4219 32.2532 48.4219 33.6072C48.4219 34.277 48.2889 34.9403 48.0305 35.5591C47.772 36.1778 47.3933 36.7398 46.9159 37.2129C46.4385 37.6861 45.8718 38.061 45.2483 38.3163C44.6248 38.5715 43.9568 38.7021 43.2824 38.7006H31.9732V46.3819C35.7652 46.3851 39.4007 47.8836 42.0809 50.5481C44.7611 53.2126 46.2667 56.8252 46.2667 60.5919V73.5314H29.1429V72.4492Z" fill="#FFDDCE"></path><path d="M65.6406 72.4492H26.8814C25.5602 72.4492 24.4893 73.5131 24.4893 74.8254V87.6237C24.4893 88.936 25.5602 89.9999 26.8814 89.9999H65.6406C66.9617 89.9999 68.0327 88.936 68.0327 87.6237V74.8254C68.0327 73.5131 66.9617 72.4492 65.6406 72.4492Z" fill="#5322FF"></path><path opacity="0.05" d="M79.0342 27.714H69.1934V24.8791C69.13 23.569 68.5615 22.3334 67.6057 21.4285C66.65 20.5236 65.3802 20.0189 64.0598 20.0189C62.7395 20.0189 61.4698 20.5236 60.514 21.4285C59.5582 22.3334 58.9897 23.569 58.9263 24.8791V19.8797C58.863 18.5697 58.2944 17.3341 57.3387 16.4292C56.3829 15.5243 55.1131 15.0195 53.7927 15.0195C52.4724 15.0195 51.2026 15.5243 50.2468 16.4292C49.2911 17.3341 48.7225 18.5697 48.6592 19.8797V20.1621C48.6659 20.1931 48.6659 20.2252 48.6592 20.2562L48.4697 89.9882H65.6408C66.2689 89.9882 66.8713 89.7404 67.3155 89.2992C67.7596 88.858 68.0092 88.2596 68.0092 87.6356V74.8255C68.0092 74.2015 67.7596 73.6032 67.3155 73.162C66.8713 72.7208 66.2689 72.4729 65.6408 72.4729H64.2316V65.5091L67.4527 60.8038C68.5874 59.1453 69.1939 57.1862 69.1934 55.181V44.0177H79.0342C79.7189 44.0177 80.3755 43.7476 80.8597 43.2667C81.3438 42.7858 81.6158 42.1335 81.6158 41.4534V30.3254C81.6221 29.9847 81.56 29.6462 81.433 29.3297C81.3061 29.0131 81.1169 28.7248 80.8766 28.4817C80.6362 28.2385 80.3495 28.0454 80.0332 27.9136C79.7168 27.7818 79.3772 27.714 79.0342 27.714Z" fill="#333232"></path></g></svg>								</span>

                </h5>
                <p class="text-white d-flex mt-3 mb-2" style="font-size:25px;margin-left:120px; text-align: justify;
                text-justify: inter-word;"> برگزاری دوره ای مجازی برای والدین برای بهبود فرآیند آموزش کودک </p>
            </div>
            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3" style="margin-top:60px;font-size:30px;margin-left:100px; text-align: justify;
                text-justify: inter-word;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none"><path opacity="0.4" d="M45 90C69.8528 90 90 69.8528 90 45C90 20.1472 69.8528 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8528 20.1472 90 45 90Z" fill="#50CCFB"></path><mask id="mask0_4301_155573" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="90" height="90"><path d="M45 90C69.8528 90 90 69.8528 90 45C90 20.1472 69.8528 0 45 0C20.1472 0 0 20.1472 0 45C0 69.8528 20.1472 90 45 90Z" fill="#50CCFB"></path></mask><g mask="url(#mask0_4301_155573)"><path d="M48.4338 93.1856H61.9102C63.8523 93.1856 64.5036 92.5225 64.5273 90.5567C64.5273 85.7488 64.3733 69.2409 65.1549 64.5041C65.8546 59.7739 67.2598 55.1754 69.3233 50.8619C71.75 46.3655 73.0465 41.3462 73.101 36.2369C72.9753 29.396 70.2684 22.8555 65.5229 17.9266C60.7775 12.9977 54.3443 10.0447 47.5131 9.6597C40.6819 9.27469 33.9577 11.4861 28.6884 15.8506C23.4192 20.2151 19.9946 26.4101 19.101 33.1935C18.6747 36.1896 19.101 39.3277 17.751 42.1579C16.401 44.9882 14.8141 47.8777 13.3338 50.7435C12.9075 51.5724 12.422 52.3777 12.0668 53.2304C11.8917 53.5662 11.8024 53.9402 11.8068 54.3189C11.8112 54.6977 11.9092 55.0695 12.0921 55.4012C12.2749 55.733 12.5369 56.0143 12.8548 56.2202C13.1727 56.4262 13.5367 56.5504 13.9141 56.5817C15.1672 56.7339 16.4305 56.7853 17.6918 56.7356C18.5918 56.7356 18.876 56.9606 18.876 57.9198C18.8049 60.7264 18.876 63.533 18.876 66.3396C18.8164 67.1615 18.934 67.9866 19.2208 68.7592C19.5077 69.5317 19.9572 70.2336 20.5388 70.8174C21.1203 71.4013 21.8205 71.8534 22.5919 72.1432C23.3633 72.4331 24.1881 72.5539 25.0102 72.4975C27.1181 72.4975 29.2259 72.4975 31.322 72.4975C32.1628 72.4975 32.5063 72.6514 32.4234 73.5514C32.3523 75.233 32.4234 88.6146 32.4234 90.308C32.4234 92.6764 33.0155 93.2329 35.301 93.2329L48.4338 93.1856Z" fill="#4C28ED"></path><path d="M49.807 9.91201C48.7381 9.77938 47.6629 9.70426 46.5859 9.68701V90.6633H64.586V90.5804C64.586 85.7725 64.432 69.2646 65.2136 64.5278C65.8923 59.7927 67.2774 55.1862 69.3228 50.862C71.7495 46.3656 73.046 41.3463 73.1004 36.237C72.9667 29.8006 70.5515 23.6207 66.2853 18.7993C62.0191 13.9779 56.1794 10.8283 49.807 9.91201Z" fill="#3725BE"></path><path d="M44.6447 20.0842C41.0521 20.4843 37.6758 22.0028 34.9927 24.4251C32.3095 26.8474 30.455 30.0513 29.6908 33.5844C28.9266 37.1176 29.2913 40.8016 30.7336 44.1162C32.1759 47.4309 34.6228 50.2088 37.7289 52.0579C38.1404 52.3022 38.482 52.6485 38.7205 53.0634C38.9591 53.4783 39.0865 53.9477 39.0907 54.4263C39.0907 54.464 39.1057 54.5001 39.1324 54.5268C39.159 54.5534 39.1952 54.5684 39.2329 54.5684H54C54.0186 54.5684 54.0371 54.5647 54.0543 54.5576C54.0716 54.5504 54.0872 54.54 54.1004 54.5268C54.1136 54.5136 54.1241 54.4979 54.1312 54.4807C54.1384 54.4634 54.1421 54.445 54.1421 54.4263C54.1486 53.9468 54.2784 53.4771 54.519 53.0623C54.7596 52.6476 55.1029 52.3017 55.5158 52.0579C58.9107 50.0322 61.5076 46.9027 62.8727 43.1925C64.2377 39.4823 64.2882 35.416 63.0156 31.673C61.743 27.9301 59.2244 24.7372 55.8807 22.6279C52.5371 20.5187 48.5708 19.6207 44.6447 20.0842Z" fill="#FFCE00"></path><path d="M48.9081 65.9487H44.1713C43.8702 65.9487 43.572 65.8892 43.2939 65.7736C43.0158 65.658 42.7633 65.4887 42.551 65.2752C42.3386 65.0617 42.1705 64.8083 42.0564 64.5296C41.9422 64.251 41.8842 63.9525 41.8858 63.6514V63.4856C41.8858 63.4416 41.9033 63.3994 41.9343 63.3683C41.9654 63.3372 42.0075 63.3198 42.0515 63.3198H51.2174C51.2613 63.3198 51.3035 63.3372 51.3346 63.3683C51.3657 63.3994 51.3831 63.4416 51.3831 63.4856C51.3831 63.81 51.319 64.1313 51.1945 64.431C51.07 64.7306 50.8875 65.0026 50.6575 65.2315C50.4275 65.4604 50.1546 65.6416 49.8544 65.7646C49.5542 65.8877 49.2326 65.9503 48.9081 65.9487Z" fill="#B0B7BF"></path><path d="M39.0908 54.6514V60.5724C39.0908 60.9363 39.1625 61.2966 39.3018 61.6328C39.4411 61.969 39.6452 62.2745 39.9025 62.5318C40.1598 62.7891 40.4653 62.9933 40.8015 63.1325C41.1377 63.2718 41.498 63.3434 41.8619 63.3434H51.3356C52.0705 63.3434 52.7753 63.0515 53.295 62.5318C53.8147 62.0121 54.1067 61.3074 54.1067 60.5724V54.6514C54.1067 54.6137 54.0917 54.5775 54.065 54.5508C54.0384 54.5242 54.0023 54.5093 53.9646 54.5093H39.233C39.1953 54.5093 39.1591 54.5242 39.1325 54.5508C39.1058 54.5775 39.0908 54.6137 39.0908 54.6514Z" fill="#D3DDEC"></path><path d="M39.0908 54.6514V60.5724C39.0908 60.9363 39.1625 61.2966 39.3018 61.6328C39.4411 61.969 39.6452 62.2745 39.9025 62.5318C40.1598 62.7891 40.4653 62.9933 40.8015 63.1325C41.1377 63.2718 41.498 63.3434 41.8619 63.3434H51.3356C52.0705 63.3434 52.7753 63.0515 53.295 62.5318C53.8147 62.0121 54.1067 61.3074 54.1067 60.5724V54.6514C54.1067 54.6137 54.0917 54.5775 54.065 54.5508C54.0384 54.5242 54.0023 54.5093 53.9646 54.5093H39.233C39.1953 54.5093 39.1591 54.5242 39.1325 54.5508C39.1058 54.5775 39.0908 54.6137 39.0908 54.6514Z" fill="#D3DDEC"></path><path d="M46.6221 19.9775V54.5802H53.9997C54.0374 54.5802 54.0735 54.5652 54.1001 54.5386C54.1268 54.5119 54.1418 54.4758 54.1418 54.4381C54.1483 53.9586 54.2781 53.4889 54.5187 53.0741C54.7593 52.6594 55.1026 52.3135 55.5155 52.0697C58.7471 50.1236 61.2524 47.1726 62.6483 43.668C64.0443 40.1635 64.254 36.2982 63.2455 32.6632C62.2371 29.0281 60.0659 25.8234 57.0639 23.539C54.0619 21.2545 50.3944 20.0161 46.6221 20.0131V19.9775Z" fill="#FFBB00"></path><path d="M54.1422 60.5961V54.6751C54.1422 54.6564 54.1385 54.6379 54.1313 54.6207C54.1242 54.6035 54.1137 54.5878 54.1006 54.5746C54.0874 54.5614 54.0717 54.5509 54.0544 54.5438C54.0372 54.5367 54.0187 54.533 54.0001 54.533H46.5869V63.3909H51.3238C51.6936 63.3972 52.0611 63.3294 52.4043 63.1915C52.7476 63.0536 53.0597 62.8484 53.3224 62.5879C53.5851 62.3274 53.7929 62.017 53.9337 61.6749C54.0745 61.3329 54.1454 60.966 54.1422 60.5961Z" fill="#B0B7BF"></path><path d="M61.3895 21.0908L62.6329 23.6014C62.6769 23.6913 62.7419 23.7694 62.8222 23.8292C62.9025 23.8889 62.996 23.9285 63.0948 23.9448L65.8777 24.3474C65.9923 24.3631 66.1002 24.4108 66.189 24.4849C66.2778 24.5591 66.3439 24.6567 66.3798 24.7667C66.4156 24.8767 66.4197 24.9947 66.3917 25.1069C66.3636 25.2191 66.3045 25.3212 66.2211 25.4014L64.2079 27.3672C64.1364 27.4368 64.0828 27.5227 64.0519 27.6176C64.0209 27.7125 64.0136 27.8135 64.0303 27.9119L64.504 30.683C64.5248 30.7973 64.5129 30.9151 64.4696 31.0229C64.4263 31.1307 64.3533 31.224 64.2592 31.2922C64.1651 31.3603 64.0536 31.4004 63.9377 31.4078C63.8217 31.4153 63.706 31.3898 63.604 31.3343L61.1172 30.0317C61.0276 29.985 60.9281 29.9606 60.827 29.9606C60.726 29.9606 60.6265 29.985 60.5369 30.0317L58.0619 31.3343C57.9598 31.3898 57.8442 31.4153 57.7282 31.4078C57.6123 31.4004 57.5008 31.3603 57.4067 31.2922C57.3126 31.224 57.2397 31.1307 57.1963 31.0229C57.153 30.9151 57.141 30.7973 57.1619 30.683L57.6356 27.9119C57.6498 27.8126 57.6401 27.7113 57.6071 27.6165C57.5741 27.5217 57.5189 27.4362 57.4461 27.3672L55.4448 25.4014C55.3614 25.3212 55.3023 25.2191 55.2742 25.1069C55.2462 24.9947 55.2503 24.8767 55.2862 24.7667C55.322 24.6567 55.3881 24.5591 55.4769 24.4849C55.5657 24.4108 55.6736 24.3631 55.7882 24.3474L58.5592 23.9448C58.6598 23.9294 58.7553 23.8902 58.8376 23.8305C58.92 23.7707 58.987 23.6922 59.0329 23.6014L60.2763 21.0908C60.3262 20.9854 60.4051 20.8964 60.5036 20.834C60.6021 20.7716 60.7163 20.7385 60.833 20.7385C60.9496 20.7385 61.0638 20.7716 61.1623 20.834C61.2609 20.8964 61.3396 20.9854 61.3895 21.0908Z" fill="white"></path><path d="M39.6357 58.0026L53.8463 56.4631" stroke="#E4EFE8" stroke-miterlimit="10" stroke-linecap="round"></path><path d="M39.6357 60.2881L53.8463 58.7368" stroke="#E4EFE8" stroke-miterlimit="10" stroke-linecap="round"></path></g></svg>								</span>

                </h5>
                <p class="text-white d-flex mt-3 mb-2" style="font-size:25px;margin-left:120px; text-align: justify;
                text-justify: inter-word;"> آماده سازی ذهنی کودکان برای استفاده از پیام رسان ها  و شبکه های اجتماعی بومی </p>
            </div>

        </div>
    </div>


</footer>
<!-- فوتر آخر -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3"></h5>
                    <ul class="site-footer-links" style="margin-top:60px;;margin-left:100px">
                        <li class="site-footer-link-item">
                            <a href="#" class="social-icon-link" >
                                <span class="bi-pinterest"></span>
                            </a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-apple"></span>
                            </a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-twitter"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3" style="margin-top:60px ;font-size:30px;margin-left:100px"> راه ارتباطی با ما</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link" style="font-size:25px;margin-left:100px">
                            021-800-0760
                        </a>
                    </p>

                    <p class="text-white d-flex" >
                        <a href="mailto:hello@company.com" class="site-footer-link" style="font-size:25px;margin-left:100px">
                            admin@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3" style="margin-top:60px;font-size:30px;margin-left:100px">آدرس</h5>

                    <p class="text-white d-flex mt-3 mb-2" style="font-size:25px;margin-left:100px">  تهران-بلوار آزادی </p>
                    </a>
                </div>
            </div>
        </div>


</footer>

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

<SCRIPT >
    function showdate() {
        week= new Array("يكشنبه","دوشنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه","شنبه")
        months = new Array("فروردين","ارديبهشت","خرداد","تير","مرداد","شهريور","مهر","آبان","آذر","دی","بهمن","اسفند");
        a = new Date();
        d= a.getDay();
        day= a.getDate();
        month = a.getMonth()+1;
        year= a.getYear()-100;

        year = (year== 0)?2000:year;
        (year<1000)? (year += 2000):true;

        year -= ( (month < 3) || ((month == 3) && (day < 21)) )? 622:621;

        switch (month) {
            case 1: (day<21)? (month=10, day+=10):(month=11, day-=20); break;
            case 2: (day<20)? (month=11, day+=11):(month=12, day-=19); break;
            case 3: (day<21)? (month=12, day+=9):(month=1, day-=20);   break;
            case 4: (day<21)? (month=1, day+=11):(month=2, day-=20);   break;
            case 5:
            case 6: (day<22)? (month-=3, day+=10):(month-=2, day-=21); break;
            case 7:
            case 8:
            case 9: (day<23)? (month-=3, day+=9):(month-=2, day-=22);  break;
            case 10:(day<23)? (month=7, day+=8):(month=8, day-=22);    break;
            case 11:
            case 12:(day<22)? (month-=3, day+=9):(month-=2, day-=21);  break;
           default:  	break;
        }
    document.write(week[d]+" "+day+" "+months[month-1]+" "+ year);
    }
    </SCRIPT>



</html>
