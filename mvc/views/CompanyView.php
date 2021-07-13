<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/company.css">
    <script src="https://kit.fontawesome.com/9b7bd019f1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <main class="main">
        <main>
            <div id="main-content">
                <div class="main-content-div" id="basic-info-div">
                    <div id="background-avatar">
                        <img src="resources/images/img-29.jpg">
                    </div>

                    <div id="main-avatar">
                        <img src="resources/images/img-40.jpg">
                        <a class="edit-company" href=""><i class="fas fa-pencil-alt"></i></a>
                    </div>


                    <div id="info">
                        <div id="company-info">
                            <h1>Sun Asterisk</h1>
                            <p>For a better world</p>
                            <span>Ha Noi</span>
                            <span>Followers</span>
                            <span>1000 Employees</span>
                        </div>
                    </div>

                    <div id="basic-info-follow" @click="${this.handleToggleModal}" class="add-job">
                        Delete Profile
                    </div>

                    <div id="basic-info-nav">
                        <div><a href="#">Home</a></div>
                        <div><a href="#about">About</a></div>
                        <div><a href="#post">Posts</a></div>
                    </div>
                </div>

                <div class="main-content-div" id="about">
                    <h2>About</h2>
                    <div id="about__detail">
                        <div id="about__detail__overview">
                            <h3>Overview</h3>
                            <div>Quality in higher education is not a simple one-dimensional
                                notion about academic quality. In view of the varied needs
                                and expectations of stakeholders, quality in higher education
                                can be said to be a multi-dimensional concept which should embrace
                                all its functions and activities. It is related to teaching and
                                academic programs, research and scholarship, staffing, students,
                                buildings, facilities, equipment, services to the community and
                                the academic environment.</div>

                        </div>
                        <div id="about__detail__specified">
                            <div class="about__detail__specified__tag">
                                Website
                            </div>
                            <div class="about__detail__specified__content">
                                <a href="">http://acb.com</a>
                            </div>

                            <div class="about__detail__specified__tag">
                                Industry
                            </div>
                            <div class="about__detail__specified__content">
                                Technology
                            </div>

                            <div class="about__detail__specified__tag">
                                Company size
                            </div>
                            <div class="about__detail__specified__content">
                                1000 employees
                            </div>

                            <div class="about__detail__specified__tag">
                                Type
                            </div>
                            <div class="about__detail__specified__content">
                                Government
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content-div" id="post">
                    <h2>Jobs</h2>
                    <div id="page-post">

                    </div>
                </div>
        </main>

        <div class="main__content ads">
            <div class="quote" style="margin-top: -8%">
                <img src="resources/images/background_footer.jpeg" style="height: 100%;width: 100%; border-radius: 10px;">
            </div>
            <div class="suggest">
                <h3 Companies class="suggest__title">Companies</h3>

                <a class="suggest__link" href="">
                    <div class="suggest__info">
                        <img class="suggest__info__avatar" src="resources/images/img-40.jpg">
                        <h4 class="suggest__info__name">FPT Software</h4>
                    </div>
                </a>

                <a class="suggest__link" href="">
                    <div class="suggest__info">
                        <img class="suggest__info__avatar" src="resources/images/img-40.jpg">
                        <h4 class="suggest__info__name">FPT Software</h4>
                    </div>
                </a>
            </div>

            <div class="web__info">
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Complaint Handling</a>
                <a href="#">Term & Conditions</a>
                <a href="#">Help Center</a>
                <a href="#">Advertising</a>
            </div>
        </div>
    </main>
</body>

</html>