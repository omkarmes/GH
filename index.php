<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Hospital</title>
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/banner.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>

    <div class="header-strip">
        <div class="logo">
            <a href="index.php">
                <img src="Img/main_logo.png" alt="Hospital Logo">
            </a>
        </div>        
    </div>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="specialities.php">Specialities</a>
        <a href="facilities.php">Facilities</a>
        <a href="contact.php">Contact Us</a>
    </div>

    <div class="banner">
        <img class="banner-image" src="Banner/b1.jpg" alt="Banner 1">
        <img class="banner-image" src="Banner/b2.jpg" alt="Banner 2">

        <button class="banner-btn prev">&#10094;</button>   
        <button class="banner-btn next">&#10095;</button>

        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <script src="Script/banner.js"></script>

    <footer>
        <div class="footer-container">
        <div class="footer-left">
            <img src="Img/footer_logo.png" alt="Gandhi Hospital Logo" class="footer-logo">
            <p>Gandhi Hospital is a leading multi-specialty hospital in Panvel, offering advanced medical care and expert healthcare services. Your health, our priority!</p>
            <p>📞 <a href="tel:+919090142020">+91-9090 14 2020</a> | 
                <a href="tel:+919090152020">+91-9090 15 2020</a> | 
                <a href="tel:+919090162020">+91-9090 16 2020</a></p>
            <p>✉ <a href="mailto:gandhihospital@gmail.com">gandhihospital@gmail.com</a></p>
            <p>✉ <a href="mailto:drpramodgandhi.com">drpramodgandhi.com</a></p>
            <p>✉ <a href="mailto:panveldiagnosticcentre.com">panveldiagnosticcentre.com</a></p>
            <p>📍 Panvel, Raigad, Maharashtra</p>
        </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Cardiology</a></li>
                    <li><a href="#">Neurology</a></li>
                    <li><a href="#">Orthopedics</a></li>
                    <li><a href="#">Emergency Care</a></li>
                    <li><a href="#">Surgery</a></li>
                    <li><a href="#">Diagnostics</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h3>Facilities</h3>
                <ul>
                    <li><a href="#">ICU & Emergency</a></li>
                    <li><a href="#">MRI & CT Scan</a></li>
                    <li><a href="#">Ambulance Service</a></li>
                    <li><a href="#">Physiotherapy</a></li>
                    <li><a href="#">Cashless TPA</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h3>Find Us</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8533926761815!2d73.795071774928!3d18.520430306748026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfbfd3a5a5e3%3A0x2b2e7e7955f4a5c!2sGandhi%20Hospital!5e0!3m2!1sen!2sin!4v1707239173984!5m2!1sen!2sin" 
                    width="100%" 
                    height="250" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p>📍 Gandhi Hospital, Panvel, Raigad</p>
                <p>🕒 Open 24 Hours</p>
                <p>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Gandhi+Hospital+Panvel" target="_blank" style="color: rgb(239, 239, 245); text-decoration: underline;">
                        📍 Get Directions from Your Location
                    </a>
                </p>
            </div>
            
            
        </div>

        <div class="footer-bottom">
            <p>© 2025 Gandhi Hospital. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
