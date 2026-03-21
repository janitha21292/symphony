<?php require_once 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symphony | The Ultimate Musical Instrument Encyclopedia</title>
    <meta name="description"
        content="Explore the history, sound, and craftsmanship of the world's most beautiful musical instruments. From classical strings to modern electronics.">
    <link rel="stylesheet" href="css/music_instruments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <nav>
        <div class="logo">SYMPHONY</div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#categories">Categories</a>
            <a href="#showcase">Showcase</a>
            <a href="#exploration">Exploration</a>
            <a href="#history">History</a>
            <a href="#contact">Contact</a>
            <?php if(is_logged_in()): ?>
                <a href="dashboard.php" class="text-gold">Dashboard</a>
                <a href="auth/logout.php" class="text-muted" style="color: #aaa;">Logout</a>
            <?php else: ?>
                <a href="auth/login.php" class="text-gold">Login</a>
                <a href="auth/register.php" class="btn" style="padding: 0.4rem 1rem;">Register</a>
            <?php endif; ?>
        </div>
    </nav>

    <header class="hero" id="home">
        <div class="hero-content">
            <span class="hero-tag">Excellence in Sound</span>
            <h1>The Art of Musical Craftsmanship</h1>
            <p>Journey through the evolution of sound. Discover the intricate details and histories of the instruments
                that have defined human culture for centuries.</p>
            <a href="#categories" class="btn">Explore Instruments</a>
        </div>
    </header>

    <section class="section" id="categories">
        <div class="section-header">
            <h2>Instrument Families</h2>
            <p>Classic classifications of the tools of the trade.</p>
        </div>

        <div class="category-grid">
            <div class="category-card">
                <i class="fas fa-guitar"></i>
                <h3>Strings</h3>
                <p>From the delicate resonance of the violin to the deep power of the double bass.</p>
            </div>
            <div class="category-card">
                <i class="fas fa-wind"></i>
                <h3>Woodwinds</h3>
                <p>Instruments that sing with the breath, including flutes, clarinets, and oboes.</p>
            </div>
            <div class="category-card">
                <i class="fas fa-bullhorn"></i>
                <h3>Brass</h3>
                <p>The majestic power of trumpets, trombones, and the golden French horn.</p>
            </div>
            <div class="category-card">
                <i class="fas fa-drum"></i>
                <h3>Percussion</h3>
                <p>The heartbeat of music, encompassing everything from timpani to xylophones.</p>
            </div>
            <div class="category-card">
                <i class="fas fa-keyboard"></i>
                <h3>Keyboards</h3>
                <p>The versatile range of the grand piano, organ, and modern synthesizers.</p>
            </div>
        </div>
    </section>

    <section class="section bg-deep" id="showcase">
        <div class="section-header">
            <h2>Instrument Spotlight</h2>
            <p>A closer look at the "King of Instruments".</p>
        </div>

        <div class="featured-instrument">
            <div class="featured-img">
                <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&q=80&w=2070"
                    alt="Grand Piano">
            </div>
            <div class="featured-info">
                <span class="text-gold font-weight-600">KEYBOARD FAMILY</span>
                <h3>The Steinway Grand</h3>
                <p>A masterpiece of engineering and art. The grand piano contains over 12,000 parts, each working in
                    perfect harmony to produce a range of expression unmatched by any other single instrument.</p>
                <div class="spec-grid-featured">
                    <div>
                        <h4 class="text-gold">Range</h4>
                        <p>88 Keys</p>
                    </div>
                    <div>
                        <h4 class="text-gold">Origin</h4>
                        <p>18th Century Italy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="exploration">
        <div class="section-header">
            <h2>Detailed Exploration</h2>
            <p>Uncovering the mechanics of legendary instruments.</p>
        </div>

        <div class="detail-grid">
            <!-- Profile 1: Violin -->
            <div class="instrument-profile">
                <img src="images/violin.png" alt="Violin" class="profile-img">
                <div class="profile-content">
                    <span class="serif text-gold">STRINGS</span>
                    <h3>The Stradivarius Violin</h3>
                    <p>Celebrated for its unparalleled tonal quality, the Stradivarius remains the gold standard for
                        violinists worldwide.</p>
                    <div class="spec-list">
                        <div class="spec-item"><label>Body Material</label>
                            <p>Spruce & Maple</p>
                        </div>
                        <div class="spec-item"><label>Tuning</label>
                            <p>G-D-A-E</p>
                        </div>
                        <div class="spec-item"><label>Complexity</label>
                            <p>High</p>
                        </div>
                        <div class="spec-item"><label>Era</label>
                            <p>Baroque</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile 2: Flute -->
            <div class="instrument-profile">
                <img src="images/silver flute.jpg" alt="Silver Flute" class="profile-img">
                <div class="profile-content">
                    <span class="serif text-gold">WOODWINDS</span>
                    <h3>The Concert Flute</h3>
                    <p>A masterpiece of acoustic precision, the modern silver flute offers a brilliant, agile voice for
                        soloists.</p>
                    <div class="spec-list">
                        <div class="spec-item"><label>Material</label>
                            <p>Sterling Silver</p>
                        </div>
                        <div class="spec-item"><label>Key System</label>
                            <p>Boehm System</p>
                        </div>
                        <div class="spec-item"><label>Range</label>
                            <p>3 Octaves</p>
                        </div>
                        <div class="spec-item"><label>Air Control</label>
                            <p>High</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile 3: Trumpet -->
            <div class="instrument-profile">
                <img src="images/trumpet.jpg" alt="Trumpet" class="profile-img">
                <div class="profile-content">
                    <span class="serif text-gold">BRASS</span>
                    <h3>The Bb Trumpet</h3>
                    <p>The most popular member of the brass family, known for its bright, penetrating tone in jazz and
                        classical music.</p>
                    <div class="spec-list">
                        <div class="spec-item"><label>Valves</label>
                            <p>3 Piston Valves</p>
                        </div>
                        <div class="spec-item"><label>Bell Diameter</label>
                            <p>4.5 Inches</p>
                        </div>
                        <div class="spec-item"><label>Tone</label>
                            <p>Bright / Bold</p>
                        </div>
                        <div class="spec-item"><label>Maintenance</label>
                            <p>Medium</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile 4: Cello -->
            <div class="instrument-profile">
                <img src="images/cello.webp" alt="Cello" class="profile-img">
                <div class="profile-content">
                    <span class="serif text-gold">STRINGS</span>
                    <h3>The Soloist Cello</h3>
                    <p>Capable of profound emotional depth, the cello's range most closely resembles the human tenor
                        voice.</p>
                    <div class="spec-list">
                        <div class="spec-item"><label>Size</label>
                            <p>4/4 Full Size</p>
                        </div>
                        <div class="spec-item"><label>String Type</label>
                            <p>Steel Core</p>
                        </div>
                        <div class="spec-item"><label>Volume</label>
                            <p>Rich / Deep</p>
                        </div>
                        <div class="spec-item"><label>Weight</label>
                            <p>Approx. 3kg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-deep" id="history">
        <div class="section-header">
            <h2>The Passage of Sound</h2>
            <p>Tracing the evolution of musical instruments through the ages.</p>
        </div>

        <div class="timeline">
            <div class="timeline-item left">
                <div class="timeline-content">
                    <span>ANCIENT TIMES</span>
                    <h3>The Flute of Bone</h3>
                    <p>Dating back over 40,000 years, the earliest musical instruments were crafted from bird bone and
                        mammoth ivory.</p>
                </div>
            </div>
            <div class="timeline-item right">
                <div class="timeline-content">
                    <span>16TH CENTURY</span>
                    <h3>The Violin's Birth</h3>
                    <p>Northern Italy becomes the birthplace of the modern violin family, with masters like Amati
                        perfecting the shape.</p>
                </div>
            </div>
            <div class="timeline-item left">
                <div class="timeline-content">
                    <span>1700</span>
                    <h3>The Piano-Forte</h3>
                    <p>Bartolomeo Cristofori invents the piano, allowing for dynamic expression between 'piano' (soft)
                        and 'forte' (loud).</p>
                </div>
            </div>
            <div class="timeline-item right">
                <div class="timeline-content">
                    <span>1931</span>
                    <h3>The Electric Age</h3>
                    <p>The "Frying Pan" lap steel guitar becomes the first commercially successful electric instrument,
                        changing music forever.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="section-header">
            <h2>Get in Touch</h2>
            <p>Inquire about our instrument archives or contribute your knowledge.</p>
        </div>

        <div class="contact-container">
            <form id="contact-form" action="contact.php" method="POST">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-input" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-input" placeholder="email@example.com" required>
                </div>
                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" class="form-input" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="submit-btn" name="submit_contact">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="main-footer">
        <div class="logo footer-logo">SYMPHONY</div>
        <p class="footer-desc">Dedicated to the preservation and celebration of musical history.</p>
        <div class="nav-links footer-nav-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <p class="footer-copyright">&copy; 2024 Symphony Encyclopedia. All rights reserved.</p>
    </footer>

    <script src="js/music_instruments.js"></script>
</body>

</html>
