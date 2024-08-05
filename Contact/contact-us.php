<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./contact-us.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.1.3/esm/ionicons.min.js" />
    <link rel="shortcut icon" href="../screenshot_1674485560.png" type="image/x-icon" />
</head>

<body>
    <div class="contactUs">
        <div class="title">
            <h2 style="color: #fff">
                <i class="fa-solid fa-address-book"></i> Liên hệ
            </h2>
        </div>
        <div class="box">
            <!------ Form ------>
            <div class="contact form" style="border-radius: 20px">
                <h3 style="font-size: 45px"><strong>Liên hệ(Gửi ý kiến)</strong></h3>
                <form action="action_page.php" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Họ:*</span>
                                <input type="text" name="Họ" placeholder="VD:Trần" />
                            </div>
                            <div class="inputBox">
                                <span>Tên:*</span>
                                <input type="text" name="Tên" placeholder="VD:Nam" />
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Địa chỉ email:*</span>
                                <input type="text" name="Địa chỉ email" placeholder="VD:namtranforwork@gmail.com" />
                            </div>
                            <div class="inputBox">
                                <span>Số điện thoại:*</span>
                                <input type="text" name="Sđt" placeholder="VD:(+84) 938423897" />
                            </div>
                        </div>

                        <div class="row100">
                            <div class="input-Box">
                                <span style="
                      color: #22da22;
                      font-weight: 500;
                      margin-top: 10px;
                      margin-bottom: 5px;
                    ">Ý kiến:*</span>
                                <textarea style="width: 100%" name="ý kiến" placeholder="Viết ý kiến tại đây..."></textarea>
                            </div>
                        </div>

                        <div class="row100" style="width: 50%">
                            <div class="inputBox">
                                <input type="submit" value="Gửi" name="btn-send" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!------ Info ------>
            <div class="contact info" style="border-radius: 20px">
                <h3>Thông tin liên hệ</h3>
                <div class="infoBox">
                    <!-- Địa chỉ -->
                    <div class="contact-info">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Số 1 Đại Cồ Việt, Cầu Dền, Hai Bà Trưng,Hà Nội</p>
                    </div>
                    <!-- email -->
                    <div class="contact-info">
                        <span><i class="fa-solid fa-square-envelope"></i></span>
                        <a href="kroneorganisation@gmail.com">kroneorganisation@gmail.com
                        </a>
                    </div>
                    <!-- số điện thoại -->
                    <div class="contact-info">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+842893744190">(+84) 289 374 4190</a>
                    </div>
                    <!-- social-med links -->
                    <ul class="sci">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-discord"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!------ Map ------>
            <div class="contact map" style="border-radius: 20px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6048462922695!2d105.84898491484135!3d21.008471293846725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8abddeccaf%3A0x7bc7e1629266862f!2zMSDEkOG6oWkgQ-G7kyBWaeG7h3QsIEPhuqd1IEThu4FuLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1676138576690!5m2!1svi!2s" style="border-radius: 20px" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <div class="comeback">
        <label for=""><a href="../HOME/home.html"><strong>Quay về Trang chủ
                    <i class="fa-solid fa-right-long"></i></strong></a></label>
    </div>
</body>

</html>