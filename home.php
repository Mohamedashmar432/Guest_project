<?php session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trackvest</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" href="home.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <header>
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <img src="Assets/Images/WhatsApp Image 2025-05-16 at 19.07.48_c81669d4.jpg" alt="TrackVest Logo">
                </div>
                <h1>TrackVest</h1>
            </div>
            
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Markets</a></li>
                    <li><a href="#">Analysis</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <!-- <li><a href="#">Contact</a></li> -->
                </ul>
            </nav>
            
            <div class="user-actions">
                <button class="icon-button"><a href="contact.html">
                    <i class="fas fa-envelope"></i>
                </a></button>
                <button class="icon-button">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="theme-toggle" id="themeToggle">&#9788;</button>
                <button id="profileButton" class="profile-button">
                    <img src="Assets/Images/pexels-moose-photos-170195-1036623.jpg" alt="Profile">
                </button>
                <span style="color: white;" class="user-name">Sarah Wilhem</span>
            </div>
            <div id="profileDropdown" class="dropdown">
        <div class="dropdown-header">
            <div class="user-info">
                <img class="user-avatar" src="Assets/Images/pexels-moose-photos-170195-1036623.jpg" alt="Sarah Wilhem">
                <div>
                    <div class="user-name">Sarah Wilhem</div>
                    <div class="user-email">sarah.wilhem@gmail.com</div>
                </div>
            </div>
        </div>

        <div class="dropdown-section">
            <div class="section-title">Account</div>
            <div class="dropdown-item">
                <span class="icon icon-user"></span>
                <span>Edit profile</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-shield"></span>
                <span>Security</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-bell"></span>
                <span>Notifications</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-lock"></span>
                <span>Privacy</span>
            </div>
        </div>

        <div class="dropdown-section">
            <div class="section-title">Support & Pro Version</div>
            <div class="dropdown-item">
                <span class="icon icon-credit-card"></span>
                <span>Upgrade to Pro</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-help"></span>
                <span>Help & Support</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-file"></span>
                <span>Terms and Policies</span>
            </div>
        </div>

        <div class="dropdown-section">
            <div class="section-title">Cache & cellular</div>
            <div class="dropdown-item">
                <span class="icon icon-trash"></span>
                <span>Free up space</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-save"></span>
                <span>Data Saver</span>
            </div>
            <div class="dropdown-item">
                <span class="icon icon-logout"></span>
                <span>Log out</span>
            </div>
        </div>
    </div>
            
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <div class="mobile-menu" id="mobile-menu">
            <div class="container">
                <ul style="list-style: none;">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Markets</a></li>
                    <li><a href="#">Analysis</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <!-- <li><a href="#">Contact</a></li> -->
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-background">
                <img style="width: 100%; height: fit-content;" src="Assets/Images/istockphoto-1369016721-612x612.jpg" alt="Investment background" class="hero-image">
            </div>
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Welcome to TrackVest!</h1>
                </div>
                <div class="hero-device">
                    <img src="Assets/Images/unsplash_sK-ziQvKGsk.png" alt="Investment stats on phone" class="device-image">
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="portfolio-section">
                    <div class="portfolio-card">
                        <div class="card-header">
                            <h2>Trending Stocks</h2>
                            <button class="refresh-button">
                                Refresh <i class="fas fa-sync"></i>
                            </button>
                        </div>
                        <ul class="trending-list">
                            <li class="trending-item">
                                <div class="item-info">
                                    <div class="item-icon gold-icon">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <div class="item-details">
                                        <span class="item-name">GOLD</span>
                                        <span class="item-description">The most purchased in the last week</span>
                                    </div>
                                </div>
                                <span class="item-price">235.93 $</span>
                            </li>
                            <li class="trending-item">
                                <div class="item-info">
                                    <div class="item-icon amzn-icon">
                                        <i class="fab fa-amazon"></i>
                                    </div>
                                    <div class="item-details">
                                        <span class="item-name">AMZN</span>
                                        <span class="item-description">The most added to watchlists</span>
                                    </div>
                                </div>
                                <span class="item-price">173.69 $</span>
                            </li>
                            <li class="trending-item">
                                <div class="item-info">
                                    <div class="item-icon btc-icon">
                                        <i class="fab fa-bitcoin"></i>
                                    </div>
                                    <div class="item-details">
                                        <span class="item-name">BTC</span>
                                        <span class="item-description">Unprecedented trend analysis</span>
                                    </div>
                                </div>
                                <span class="item-price">73,888 $</span>
                            </li>
                        </ul>
                    </div>

                    <div class="portfolio-value">
                        <div class="value-label">Your total asset portfolio</div>
                        <div class="value-amount">
                            € 2,340,560 <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>

            <section class="what-to-buy">
                <div class="section-header">
                    <h2 class="section-title">What's to buy</h2>
                    <a href="#" class="see-all">See All <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="stock-grid">
                    <div class="stock-card one">
                        <div class="stock-symbol">AAPL</div>
                        <div class="stock-price">$185.73</div>
                    </div>
                    <div class="stock-card two">
                        <div class="stock-symbol">TSLA</div>
                        <div class="stock-price">$195.52</div>
                    </div>
                    <div class="stock-card three">
                        <div class="stock-symbol">FB</div>
                        <div class="stock-price">$487.63</div>
                    </div>
                    <div class="stock-card four">
                        <div class="stock-symbol">MSFT</div>
                        <div class="stock-price">$325.14</div>
                    </div>
                    <div class="stock-card five">
                        <div class="stock-symbol">NVDA</div>
                        <div class="stock-price">$678.69</div>
                    </div>
                    <div class="stock-card six">
                        <div class="stock-symbol">JD</div>
                        <div class="stock-price">$36.87</div>
                    </div>
                    <div class="stock-card seven">
                        <div class="stock-symbol">NFLX</div>
                        <div class="stock-price">$610.17</div>
                    </div>
                    <div class="stock-card eight">
                        <div class="stock-symbol">SHOP</div>
                        <div class="stock-price">$102.27</div>
                    </div>
                    <div class="stock-card nine">
                        <div class="stock-symbol">ABT</div>
                        <div class="stock-price">$109.67</div>
                    </div>
                    <!-- <div class="stock-card">
                        <div class="stock-symbol">INTC</div>
                        <div class="stock-price">$43.86</div>
                    </div> -->
                    <div class="stock-card ten">
                        <div class="stock-symbol">AMD</div>
                        <div class="stock-price">$169.56</div>
                    </div>
                </div>
            </section>

            <section class="news-section">
                <div class="news-header">
                    <i class="far fa-newspaper"></i>
                    <h2>Today's News</h2>
                </div>
                <div class="news-grid">
                    <div class="news-item">
                        <h3 class="news-title">
                            <i class="fas fa-arrow-up"></i>
                            US Markets Close Higher
                        </h3>
                        <p class="news-description">
                            Following a strong Q2 GDP release of 3.3%, which surprised to the 
                            upside, the S&P 500 gained 0.53% while Nasdaq rose by 1.04%.
                        </p>
                        <div class="news-time">2 hours ago</div>
                    </div>
                    <div class="news-item">
                        <h3 class="news-title">
                            <i class="fas fa-chart-line"></i>
                            European Markets Show Strength
                        </h3>
                        <p class="news-description">
                            European indices hit all-time highs, especially boosted by recent gains 
                            in the luxury goods sector.
                        </p>
                        <div class="news-time">5 hours ago</div>
                    </div>
                    <div class="news-item">
                        <h3 class="news-title">
                            <i class="fas fa-cloud-rain"></i>
                            Oil Demand Forecast Adjusted
                        </h3>
                        <p class="news-description">
                            The IEA reduced its 2024 oil demand growth forecast for the third consecutive month, 
                            now expecting an increase of only 1.1 million bpd, citing economic weakness.
                        </p>
                        <div class="news-time">8 hours ago</div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        // Get DOM elements
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        // Toggle dropdown visibility
        profileButton.addEventListener('click', function() {
            profileDropdown.classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.remove('show');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        profileDropdown.addEventListener('click', function(event) {
            event.stopPropagation();
        });

        // Handle dropdown item clicks (for demonstration)
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                console.log('Clicked: ' + this.querySelector('span:last-child').textContent);
                // Add functionality for each menu item here
            });
        });
    </script>
  <script src="home.js"></script>

</body>
</html>
