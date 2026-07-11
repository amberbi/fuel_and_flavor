<?php include('includes/header.php'); ?>

<section class="hero">
    <h1>Quick & Healthy Meals For Busy Lifestyles</h1>
    <p>Discover nutritional, budget-friendly meal solutions engineered to fit your demanding schedule perfectly.</p>
    <a href="recipes.php" class="btn">Explore Recipes</a>
</section>

<section class="features-grid">
    <div class="feature-card">
        <h3>⚡ Ultra Quick</h3>
        <p>Every single curated choice is systematically structured to prepare in 30 minutes or less.</p>
    </div>
    <div class="feature-card">
        <h3>🥑 Nutritionally Balanced</h3>
        <p>Perfect macro allocations to keep your focus sharp and your energy levels consistently elevated.</p>
    </div>
    <div class="feature-card">
        <h3>💰 Budget Engineered</h3>
        <p>Smart ingredient selection focused on minimizing grocery overhead for busy students.</p>
    </div>
</section>

<style>
    .hero {
        background: linear-gradient(135deg, var(--primary-light), #c8e6c9);
        padding: 4rem 2rem;
        text-align: center;
        border-radius: 8px;
        margin-bottom: 3rem;
    }
    .hero h1 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    .hero p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 1.5rem auto;
    }
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }
    .feature-card {
        background-color: var(--white);
        padding: 2rem;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        border-top: 4px solid var(--primary);
    }
    .feature-card h3 {
        margin-bottom: 0.75rem;
        color: var(--primary);
    }
</style>

<?php include('includes/footer.php'); ?>