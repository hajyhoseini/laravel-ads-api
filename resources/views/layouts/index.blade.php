@extends('layouts.Master')
@section('content')
    <div id="preloader"><div class="loader">
            <span>web</span><span>mellat</span>
        </div></div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo"><svg class="logo-abbr" width="54" height="54" viewbox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="54" height="54" rx="27" fill="#2258BF"></rect><mask maskunits="userSpaceOnUse" x="0" y="0" width="54" height="54"><rect width="54" height="54" rx="27" fill="#2258BF"></rect></mask><g mask=""><path d="M46.1676 26.5805C46.1217 26.129 45.8612 25.7806 45.4991 25.6835L34.9748 22.8635L42.8655 9.05303C43.0565 8.72265 43.1126 8.31849 43.0178 7.96681C42.9212 7.61451 42.6881 7.35877 42.388 7.27836L31.132 4.26233C30.7287 4.15426 30.2838 4.38142 30.0263 4.82453L14.9917 30.9187C14.8007 31.2491 14.744 31.6556 14.8406 32.0078C14.9329 32.3614 15.1678 32.6176 15.4698 32.6985L21.6719 34.3604L7.46102 59.0235C7.17542 59.5193 7.20173 60.1564 7.52473 60.5342C7.64091 60.6708 7.78346 60.7617 7.93918 60.8034C8.21123 60.8763 8.51961 60.7982 8.77813 60.5688L45.7105 27.791C46.0341 27.5062 46.2127 27.0345 46.1676 26.5805Z" fill="#FFC42C"></path><path d="M43.3374 21.0401C43.2915 20.5885 43.0311 20.2402 42.669 20.1431L32.1446 17.3231L40.0354 3.51262C40.2264 3.18225 40.2825 2.77808 40.1877 2.42641C40.091 2.07411 39.858 1.81836 39.5579 1.73796L28.3019 -1.27807C27.8986 -1.38614 27.4536 -1.15898 27.1962 -0.715872L12.1615 25.3783C11.9705 25.7087 11.9138 26.1152 12.0105 26.4674C12.1028 26.821 12.3377 27.0772 12.6397 27.1581L18.8418 28.82L4.63088 53.4831C4.34528 53.9789 4.37159 54.616 4.69459 54.9938C4.81077 55.1304 4.95332 55.2213 5.10904 55.263C5.38109 55.3359 5.68947 55.2578 5.94799 55.0284L42.8804 22.2506C43.204 21.9658 43.3826 21.4941 43.3374 21.0401Z" fill="white"></path></g></svg><svg class="brand-title" width="79" height="25" viewbox="0 0 79 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.951965 24V1.60001H13.944C15.0533 1.60001 16.056 1.84535 16.952 2.33601C17.8693 2.82668 18.5946 3.50935 19.128 4.38401C19.6826 5.25868 19.96 6.29335 19.96 7.48801C19.96 8.19201 19.8213 8.86401 19.544 9.50401C19.288 10.144 18.9146 10.7093 18.424 11.2C17.9546 11.6907 17.4106 12.0853 16.792 12.384C17.5173 12.6827 18.1573 13.1093 18.712 13.664C19.288 14.2187 19.736 14.8587 20.056 15.584C20.3973 16.3093 20.568 17.088 20.568 17.92C20.568 19.136 20.28 20.2027 19.704 21.12C19.1493 22.0373 18.4026 22.752 17.464 23.264C16.5253 23.7547 15.48 24 14.328 24H0.951965ZM6.32797 19.552H12.92C13.368 19.552 13.7626 19.4453 14.104 19.232C14.4666 19.0187 14.7546 18.7307 14.968 18.368C15.1813 18.0053 15.288 17.6107 15.288 17.184C15.288 16.736 15.1813 16.3413 14.968 16C14.7546 15.6373 14.4666 15.3493 14.104 15.136C13.7626 14.9227 13.368 14.816 12.92 14.816H6.32797V19.552ZM6.32797 10.528H12.376C12.8026 10.528 13.176 10.432 13.496 10.24C13.8373 10.0267 14.104 9.76001 14.296 9.44001C14.488 9.09868 14.584 8.72535 14.584 8.32001C14.584 7.89335 14.488 7.52001 14.296 7.20001C14.104 6.85868 13.8373 6.59201 13.496 6.40001C13.176 6.18668 12.8026 6.08002 12.376 6.08002H6.32797V10.528Z" fill="#2258BF"></path><path d="M31.7027 24.384C30.0174 24.384 28.5027 24.0107 27.1587 23.264C25.8147 22.5173 24.748 21.4933 23.9587 20.192C23.1907 18.8907 22.8067 17.4293 22.8067 15.808C22.8067 14.1653 23.1907 12.704 23.9587 11.424C24.748 10.1227 25.8147 9.09868 27.1587 8.35201C28.5027 7.58401 30.0174 7.20001 31.7027 7.20001C33.3881 7.20001 34.892 7.58401 36.2147 8.35201C37.5587 9.09868 38.6147 10.1227 39.3827 11.424C40.1721 12.704 40.5667 14.1653 40.5667 15.808C40.5667 17.4293 40.1721 18.8907 39.3827 20.192C38.6147 21.4933 37.5587 22.5173 36.2147 23.264C34.8707 24.0107 33.3667 24.384 31.7027 24.384ZM31.7027 20.064C32.492 20.064 33.1747 19.872 33.7507 19.488C34.3267 19.104 34.7747 18.592 35.0947 17.952C35.4147 17.312 35.5747 16.5867 35.5747 15.776C35.5747 14.9867 35.4147 14.272 35.0947 13.632C34.7747 12.992 34.3267 12.48 33.7507 12.096C33.1747 11.712 32.492 11.52 31.7027 11.52C30.9134 11.52 30.22 11.712 29.6227 12.096C29.0467 12.48 28.5987 12.992 28.2787 13.632C27.9587 14.272 27.7987 14.9867 27.7987 15.776C27.7987 16.5867 27.9587 17.312 28.2787 17.952C28.5987 18.592 29.0467 19.104 29.6227 19.488C30.22 19.872 30.9134 20.064 31.7027 20.064Z" fill="#2258BF"></path><path d="M43.5122 24V0.640015H48.4722V24H43.5122Z" fill="#2258BF"></path><path d="M58.1532 24C56.6385 24 55.4545 23.5733 54.6012 22.72C53.7479 21.8453 53.3212 20.672 53.3212 19.2V3.58401H58.3132V18.912C58.3132 19.168 58.3985 19.392 58.5692 19.584C58.7612 19.7547 58.9852 19.84 59.2412 19.84H62.8252V24H58.1532ZM50.6332 11.648V7.58401H62.8252V11.648H50.6332Z" fill="#2258BF"></path><path d="M69.408 24C68.4906 24 67.712 23.808 67.072 23.424C66.432 23.04 65.9306 22.528 65.568 21.888C65.2053 21.248 65.024 20.5547 65.024 19.808C65.024 19.0827 65.2053 18.432 65.568 17.856C65.952 17.2587 66.464 16.7573 67.104 16.352L72.96 12.448C73.0666 12.384 73.1413 12.32 73.184 12.256C73.2266 12.1707 73.248 12.1067 73.248 12.064C73.248 11.9573 73.2053 11.872 73.12 11.808C73.0346 11.7227 72.928 11.68 72.8 11.68H65.76L65.728 7.58401H74.528C75.3813 7.58401 76.1173 7.78668 76.736 8.19201C77.376 8.57601 77.8773 9.08801 78.24 9.72801C78.624 10.368 78.816 11.0613 78.816 11.808C78.816 12.512 78.6346 13.1733 78.272 13.792C77.9306 14.3893 77.4613 14.8907 76.864 15.296L71.008 19.136C70.9226 19.2 70.8586 19.264 70.816 19.328C70.7733 19.392 70.752 19.456 70.752 19.52C70.752 19.6267 70.7946 19.7227 70.88 19.808C70.9653 19.872 71.072 19.904 71.2 19.904H78.496V24H69.408Z" fill="#2258BF"></path></svg></a><div class="nav-control"><div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div></div>
        </div>
        <div class="chatbox">
            <div class="chatbox-btn-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#notes">یادداشت</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#alerts">هشدارها</a></li>
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#chat">چت کردن</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a><div>
                                    <h6 class="mb-1">لیست چت</h6>
                                    <p class="mb-0">نمایش همه</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll " id="DZ_W_Contacts_Body"><ul class="contacts">
                                    <li class="name-first-letter">آ</li>
                                    <li class="active dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آرچی پارکر</span><p>Kalid آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آلفی میسون</span><p>طاهره 7 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آهارلی کین</span><p>سامی آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>آتان جاکوبی</span><p>نرگس 30 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">ب</li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>بشید صمیم</span><p>رشید 50 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>بردی رونان</span><p>Kalid آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جورج کارسون</span><p>طاهره 7 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">آقای</li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>دری پارکر</span><p>سامی آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>دنری هانتر</span><p>نرگس 30 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">جی</li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جک رونان</span><p>رشید 50 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جیکوب تاکر</span><p>Kalid آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جیمز لوگان</span><p>طاهره 7 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""><span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>جاشوا وستون</span><p>سامی آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">اوه</li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>الیور آکر</span><p>نرگس 30 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                    <li class="dz-chat-user"><div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""><span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>اسکار وستون</span><p>رشید 50 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                </ul></div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="#" class="dz-chat-history-back"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"></polygon><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"></rect><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "></path></g></svg></a><div>
                                    <h6 class="mb-1">چت با خیلش</h6>
                                    <p class="mb-0 text-success">برخط</p>
                                </div>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a><ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item">
                                            <i class="fa fa-user-circle text-primary me-2"></i>مشاهده نمایه</li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-users text-primary me-2"></i>به دوستان btn-close اضافه کنید</li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-plus text-primary me-2"></i>به گروه اضافه کنید</li>
                                        <li class="dropdown-item">
                                            <i class="fa fa-ban text-primary me-2"></i>مسدود کردن</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">سلام. چطوری؟<span class="msg_time">ساعت 8:40 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">سلام خالد من خوبم tnx شما چطور؟<span class="msg_time_send">8:55 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">من هم خوبم ممنون از قالب چتتون<span class="msg_time">9:00 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">خواهش میکنم<span class="msg_time_send">9:05 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">من دنبال الگوی بعدی شما هستم<span class="msg_time">9:07 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">باشه ممنون روز خوبی داشته باشی<span class="msg_time_send">ساعت 9:10 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">خداحافظ، می بینمت<span class="msg_time">9:12 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">سلام. چطوری؟<span class="msg_time">ساعت 8:40 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">سلام خالد من خوبم tnx شما چطور؟<span class="msg_time_send">8:55 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">من هم خوبم ممنون از قالب چتتون<span class="msg_time">9:00 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">خواهش میکنم<span class="msg_time_send">9:05 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">من دنبال الگوی بعدی شما هستم<span class="msg_time">9:07 صبح امروز</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">باشه ممنون روز خوبی داشته باشی<span class="msg_time_send">ساعت 9:10 صبح امروز</span>
                                    </div>
                                    <div class="img_cont_msg"><img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg"><img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""></div>
                                    <div class="msg_cotainer">خداحافظ، می بینمت<span class="msg_time">9:12 صبح امروز</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg"><div class="input-group">
                                    <textarea class="form-control" placeholder="پیام خود را تایپ کنید..."></textarea><div class="input-group-append"><button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button></div>
                                </div></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel"><div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a><div>
                                    <h6 class="mb-1">اطلاعیه ها</h6>
                                    <p class="mb-0">نمایش همه</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1"><ul class="contacts">
                                    <li class="name-first-letter">وضعیت شدید</li>
                                    <li class="active"><div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>تولد دیوید نستر</span><p class="text-primary">امروز</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">اجتماعی</li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>کمال ساده شده</span><p>جیم اسمیت در مورد وضعیت شما نظر داد</p>
                                            </div>
                                        </div></li>
                                    <li class="name-first-letter">وضعیت شدید</li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>آهارلی کین</span><p>سامی آنلاین است</p>
                                            </div>
                                        </div></li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>آتان جاکوبی</span><p>نرگس 30 دقیقه پیش رفت</p>
                                            </div>
                                        </div></li>
                                </ul></div>
                            <div class="card-footer"></div>
                        </div></div>
                    <div class="tab-pane fade" id="notes"><div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a><div>
                                    <h6 class="mb-1">یادداشت</h6>
                                    <p class="mb-0">یادداشت های جدید اضافه کنید</p>
                                </div>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2"><ul class="contacts">
                                    <li class="active"><div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>سفارش جدید ثبت شد..</span><p>10 اوت 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div></li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>یوتیوب، یک وب سایت اشتراک گذاری ویدیو..</span><p>10 اوت 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div></li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>جان فقط محصولت را بخر..</span><p>10 اوت 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div></li>
                                    <li><div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>آتان جاکوبی</span><p>10 اوت 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div></li>
                                </ul></div>
                        </div></div>
                </div>
            </div>
        </div>
        @include('layouts.components.header')

        @include('layouts.components.sidebar')
        <div class="content-body"><div class="container-fluid"></div></div>
        <div class="footer"><div class="copyright"><p>Copyright © Designed & Developed by<a href="https://www.mellatweb.com/" target="_blank">mellatweb</a>2021</p></div></div>
    </div>
@endsection
