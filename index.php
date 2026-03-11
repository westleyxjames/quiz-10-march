<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Win - Play Smart. Earn Rewards</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="nav-brand">
                    <a href="index.html">Easy Win</a>
                </div>
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="nav-menu" id="navMenu">
                    <a href="index.html" class="nav-link active">Home</a>
                    <a href="how-it-works.html" class="nav-link">How It Works</a>
                    <a href="challenges.html" class="nav-link">Challenges</a>
                    <a href="rewards.html" class="nav-link">Rewards</a>
                    <a href="about.html" class="nav-link">About</a>
                    <a href="contact.html" class="nav-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="bg-gradient"></div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content fade-in-left">
                    <div class="badge">
                        <span>Knowledge unlocks rewards</span>
                    </div>
                    <h1 class="hero-title gradient-text">Play Smart. Earn Rewards.</h1>
                    <p class="hero-description">
                        Participate in interactive quizzes, complete challenges, and unlock assured rewards — no fees, no risk, just fun.
                    </p>
                    <div class="hero-buttons">
                        <a href="challenges.html" class="btn btn-primary">
                            Start Playing
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="rewards.html" class="btn btn-secondary">
                            Explore Rewards
                        </a>
                    </div>
                </div>
                <div class="hero-visual fade-in-right">
                    <div class="hero-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1737505599159-5ffc1dcbc08f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxicmFpbiUyMG5ldXJhbCUyMG5ldHdvcmslMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc2OTUzODQ4MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Brain network" />
                        <div class="image-overlay"></div>
                    </div>
                    <div class="floating-blob blob-1"></div>
                    <div class="floating-blob blob-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Why Choose Easy Win?</h2>
                <p class="section-description">Experience the future of knowledge-based rewards</p>
            </div>
            <div class="highlights-grid">
                <div class="card highlight-card fade-in-up" style="animation-delay: 0.1s">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 7h-9M14 17H5M17 12h4M4 12h8"/>
                        </svg>
                    </div>
                    <h3>100% Free Participation</h3>
                    <p>No payments, no deposits. Just pure knowledge-based fun.</p>
                </div>
                <div class="card highlight-card fade-in-up" style="animation-delay: 0.2s">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>No Payments or Deposits</h3>
                    <p>Zero financial risk. Your wallet stays safe.</p>
                </div>
                <div class="card highlight-card fade-in-up" style="animation-delay: 0.3s">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <h3>Rewards for Every Completed Quiz</h3>
                    <p>Every challenge completed earns you rewards.</p>
                </div>
                <div class="card highlight-card fade-in-up" style="animation-delay: 0.4s">
                    <div class="card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <h3>Transparent & Skill-Based System</h3>
                    <p>Fair play with clear rules. No hidden surprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">How It Works</h2>
                <p class="section-description">Three simple steps to start earning rewards</p>
            </div>
            <div class="steps-grid">
                <div class="step-card fade-in-up" style="animation-delay: 0.1s">
                    <div class="step-icon-wrapper gradient-primary">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 16v-4M12 8h.01"/>
                        </svg>
                        <div class="step-number">01</div>
                    </div>
                    <h3>Choose Your Challenge</h3>
                    <p>Browse through our diverse quiz categories and select a challenge that interests you.</p>
                </div>
                <div class="step-card fade-in-up" style="animation-delay: 0.2s">
                    <div class="step-icon-wrapper gradient-secondary">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        <div class="step-number">02</div>
                    </div>
                    <h3>Answer Questions</h3>
                    <p>Take your time and answer questions at your own pace. No time pressure, just knowledge.</p>
                </div>
                <div class="step-card fade-in-up" style="animation-delay: 0.3s">
                    <div class="step-icon-wrapper gradient-accent">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22M18 2H6v7a6 6 0 0 0 12 0V2z"/>
                        </svg>
                        <div class="step-number">03</div>
                    </div>
                    <h3>Complete & Earn</h3>
                    <p>Finish the quiz and instantly unlock your rewards. Every completion counts!</p>
                </div>
            </div>
            <div class="text-center" style="margin-top: 3rem;">
                <a href="how-it-works.html" class="btn btn-outline">
                    View Detailed Guide
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- How to Play Section -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">How to Play Quizzes</h2>
                <p class="section-description">A step-by-step guide to getting started</p>
            </div>
            <div class="play-steps-container">
                <div class="play-step fade-in-left" style="animation-delay: 0.1s">
                    <div class="play-step-number">1</div>
                    <div>
                        <h3>Sign Up Free</h3>
                        <p>Create your account in seconds. No credit card required, ever.</p>
                    </div>
                </div>
                <div class="play-step fade-in-left" style="animation-delay: 0.2s">
                    <div class="play-step-number">2</div>
                    <div>
                        <h3>Select a Quiz</h3>
                        <p>Pick from various categories: GK, Tech, Sports, Entertainment, and more.</p>
                    </div>
                </div>
                <div class="play-step fade-in-left" style="animation-delay: 0.3s">
                    <div class="play-step-number">3</div>
                    <div>
                        <h3>Answer Questions</h3>
                        <p>Read each question carefully and select your answer. Take your time!</p>
                    </div>
                </div>
                <div class="play-step fade-in-left" style="animation-delay: 0.4s">
                    <div class="play-step-number">4</div>
                    <div>
                        <h3>Track Progress</h3>
                        <p>See your score update in real-time as you progress through the quiz.</p>
                    </div>
                </div>
                <div class="play-step fade-in-left" style="animation-delay: 0.5s">
                    <div class="play-step-number">5</div>
                    <div>
                        <h3>Claim Rewards</h3>
                        <p>Once completed, your rewards are instantly credited to your account.</p>
                    </div>
                </div>
            </div>
            <div class="cta-box">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="5 3 19 12 5 21 5 3"/>
                </svg>
                <h3>Ready to Start?</h3>
                <p>Jump into your first quiz challenge and experience the fun of learning while earning!</p>
                <a href="challenges.html" class="btn btn-primary">
                    Browse Challenges
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Latest from Our Blog</h2>
                <p class="section-description">Tips, strategies, and insights to enhance your quiz experience</p>
            </div>
            <div class="blog-grid">
                <article class="blog-card fade-in-up" style="animation-delay: 0.1s">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1572061486732-b528a9b293a3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Knowledge learning">
                        <span class="blog-category">Strategy</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Jan 25, 2026
                            </span>
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                5 min read
                            </span>
                        </div>
                        <h3>10 Tips to Master General Knowledge Quizzes</h3>
                        <p>Discover proven strategies to improve your quiz performance and earn more rewards consistently.</p>
                        <div class="blog-author">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <span>Sarah Johnson</span>
                        </div>
                    </div>
                </article>
                <article class="blog-card fade-in-up" style="animation-delay: 0.2s">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1652077859695-de2851a95620?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Quiz questions">
                        <span class="blog-category">Education</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Jan 22, 2026
                            </span>
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                8 min read
                            </span>
                        </div>
                        <h3>How Quiz Platforms Are Revolutionizing Learning</h3>
                        <p>Explore how interactive quizzes make learning fun and rewarding, backed by educational psychology.</p>
                        <div class="blog-author">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <span>Michael Chen</span>
                        </div>
                    </div>
                </article>
                <article class="blog-card fade-in-up" style="animation-delay: 0.3s">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1638342863994-ae4eee256688?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800" alt="Blog writing">
                        <span class="blog-category">Rewards</span>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6"/>
                                    <line x1="8" y1="2" x2="8" y2="6"/>
                                    <line x1="3" y1="10" x2="21" y2="10"/>
                                </svg>
                                Jan 20, 2026
                            </span>
                            <span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                6 min read
                            </span>
                        </div>
                        <h3>Maximizing Your Reward Points: A Complete Guide</h3>
                        <p>Learn the best practices for accumulating points and making the most of your rewards.</p>
                        <div class="blog-author">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <span>Emily Rodriguez</span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-center" style="margin-top: 3rem;">
                <button class="btn btn-outline">
                    View All Articles
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container">
            <div class="final-cta">
                <h2 class="gradient-text">Ready to Get Started?</h2>
                <p>Join thousands of players earning rewards through knowledge</p>
                <a href="challenges.html" class="btn btn-primary">
                    Start Your First Challenge
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>Easy Win</h3>
                    <p>Knowledge unlocks rewards. Play smart, earn rewards.</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Platform</h4>
                        <a href="how-it-works.html">How It Works</a>
                        <a href="challenges.html">Challenges</a>
                        <a href="rewards.html">Rewards</a>
                    </div>
                    <div class="footer-column">
                        <h4>Company</h4>
                        <a href="about.html">About Us</a>
                        <a href="contact.html">Contact</a>
                    </div>
                    <div class="footer-column">
                        <h4>Legal</h4>
                        <a href="terms.html">Terms & Conditions</a>
                        <a href="privacy.html">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Easy Win. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
