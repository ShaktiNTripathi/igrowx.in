<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="index.html" class="p-0">
                        <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>I-GrowX</h4>
                    </a>
                    <p class="mb-4">I-GrowX (Innovation–Governance, Research, Outreach, and Workforce eXcellence) is India’s leading consultancy firm specializing in Election Campaign Strategy, Advertising, Public Relations, Research, Event Management, and Professional Manpower Services including PSOs, security guards, and bouncers.</p>
                    <!-- Visitor Counter -->
                    <div class="visitor-counter">
                        <div class="counter-box">
                            <h5 class="text-white mb-2">Total Visitors</h5>
                            <div class="counter-display">
                                <span class="counter-digit" id="total-visitors">001</span>
                            </div>
                        </div>
                        <div class="counter-box">
                            <h5 class="text-white mb-2">Active Visitors</h5>
                            <div class="counter-display">
                                <span class="counter-digit" id="active-visitors">001</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="about.php"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="contact.php"><i class="fas fa-angle-right me-2"></i>Contact Us</a>
                    <a href="team.php"><i class="fas fa-angle-right me-2"></i>Teams</a>
                    <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a> -->
                    <a href="blogs.php"><i class="fas fa-angle-right me-2"></i> Blog</a>
                    <a href="service.php"><i class="fas fa-angle-right me-2"></i> Our Services </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Support</h4>
                    <a href="policy.php"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="policy"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a> -->
                    <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Support</a>
                    <a href="index.php#faq"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                    <a href="emailto:info@igrowx.in"><i class="fas fa-angle-right me-2"></i> Help</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0">Bihar , India </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0">info@igrowx.in</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0">+91 7645804158</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                        <p class="text-white mb-0">info@igrowx.in</p>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp Widget -->
<div class="whatsapp-widget" style="position: fixed; bottom: 100px; right: 20px; z-index: 1000;">
    <button class="whatsapp-btn" style="background-color: #25D366; border: none; border-radius: 50%; width: 60px; height: 60px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.3);">
        <i class="fab fa-whatsapp" style="color: white; font-size: 30px;"></i>
    </button>
    <div class="whatsapp-popup" style="display: none; position: absolute; bottom: 80px; right: 0; background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); width: 250px; padding: 15px;">
        <p style="margin: 0; font-size: 14px; color: #333;">Chat with us on WhatsApp!</p>
        <a href="https://wa.me/+917645804158" target="_blank" style="display: block; margin-top: 10px; background: #25D366; color: white; text-align: center; padding: 10px; border-radius: 5px; text-decoration: none;">Start Chat</a>
        <button class="close-popup" style="background: none; border: none; position: absolute; top: 5px; right: 5px; cursor: pointer; color: #333;">×</button>
    </div>
</div>

<script>
    // WhatsApp Widget Script
    const whatsappBtn = document.querySelector('.whatsapp-btn');
    const whatsappPopup = document.querySelector('.whatsapp-popup');
    const closePopup = document.querySelector('.close-popup');

    whatsappBtn.addEventListener('click', () => {
        whatsappPopup.style.display = whatsappPopup.style.display === 'none' ? 'block' : 'none';
    });

    closePopup.addEventListener('click', () => {
        whatsappPopup.style.display = 'none';
    });

    document.addEventListener('click', (e) => {
        if (!whatsappBtn.contains(e.target) && !whatsappPopup.contains(e.target)) {
            whatsappPopup.style.display = 'none';
        }
    });

    // Visitor Counter Script
    (function() {
        // Function to pad numbers with leading zeros
        function padNumber(num, size) {
            return String(num).padStart(size, '0');
        }

        // Total Visitors
        let totalVisitors = localStorage.getItem('totalVisitors') || 0;
        totalVisitors = parseInt(totalVisitors) + 1;
        localStorage.setItem('totalVisitors', totalVisitors);
        document.getElementById('total-visitors').textContent = padNumber(totalVisitors, 3);

        // Current Active Visitors (simulated)
        let activeVisitors = sessionStorage.getItem('activeVisitors') || 0;
        activeVisitors = parseInt(activeVisitors) + 1;
        sessionStorage.setItem('activeVisitors', activeVisitors);
        document.getElementById('active-visitors').textContent = padNumber(activeVisitors, 3);

        // Decrease active visitors when the user leaves the page
        window.addEventListener('unload', () => {
            let currentActive = sessionStorage.getItem('activeVisitors') || 1;
            currentActive = parseInt(currentActive) - 1;
            if (currentActive < 0) currentActive = 0;
            sessionStorage.setItem('activeVisitors', currentActive);
        });
    })();
</script>

<style>
    /* Ensure Font Awesome is included for WhatsApp icon */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    /* Visitor Counter Styling */
    .visitor-counter {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .counter-box {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        min-width: 120px;
        box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        animation: glow 2s ease-in-out infinite;
    }

    .counter-box h5 {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .counter-display {
        background: #1a1a1a;
        border-radius: 5px;
        padding: 10px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 24px;
        color: #00ffcc;
        letter-spacing: 2px;
    }

    .counter-digit {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        background: rgba(0, 255, 255, 0.1);
    }

    /* Glowing Animation */
    @keyframes glow {
        0% {
            box-shadow: 0 0 5px rgba(0, 255, 255, 0.3);
        }
        50% {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.7), 0 0 30px rgba(0, 255, 255, 0.3);
        }
        100% {
            box-shadow: 0 0 5px rgba(0, 255, 255, 0.3);
        }
    }
</style>