<footer class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>GET IN TOUCH</h4>
                <p>+91 123456789</p>
                <p>Company@gmail.com</p>
                <p>Company, 123 Street D Block, 4th Floor</p>
            </div>
            <div class="footer-column">
                <h4>QUICK LINKS</h4>
                <p><a href="#">Home</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Services</a></p>
                <p><a href="#">Contact Us</a></p>
            </div>
            <div class="footer-column">
                <h4>OUR FLEET</h4>
                <p>Luxury Car</p>
                <p>Sedans</p>
                <p>Vans</p>
                <p>Minivans</p>

            </div>
            <div class="footer-column">
                <h4>POPULAR ROUTES</h4>
                <p>Pune To Nasik</p>
                <p>Pune To Mahabaleshwar</p>
                <p>Pune To Panchgani</p>
                <p>Pune To Goa</p>
            </div>


            <div class="footer-column footer-brand">
                <div class="logo"><img src="bootstrap/images/footer-logo.png" alt=""></div>
                <p>We are company name (Car Rentals), an online cab booking aggregator</p>
                <div class="social-icons">
                    <a href="#">📘</a>
                    <a href="#">🐦</a>
                    <a href="#">▶️</a>
                    <a href="#">📸</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2024 Developed By Snowfinch Consulting Group</p>
            <div class="policy-links">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </footer>







    <script>
        const tabButtons = document.querySelectorAll('.tab-btn');
        const fromInput = document.getElementById('fromInput');
        const toInput = document.getElementById('toInput');

        const placeholders = {
            oneway: { from: "Enter Pickup City", to: "Enter Drop City" },
            roundtrip: { from: "Roundtrip From", to: "Roundtrip To" },
            local: { from: "Local Pickup", to: "Local Drop" },
            airport: { from: "Airport Pickup", to: "Airport Drop" }
        };

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                tabButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const type = btn.getAttribute('data-type');
                fromInput.placeholder = placeholders[type].from;
                toInput.placeholder = placeholders[type].to;
            });
        });
    </script>

</body>

</html>