<?php 
include('includes/header.php'); 

// Central Recipe Database Array
$recipes = [
    [
        "id" => 1,
        "title" => "Avocado Power Toast",
        "time" => "10 mins",
        "difficulty" => "Easy",
        "calories" => "320 kcal",
        "protein" => "12g",
        "ingredients" => "Whole grain bread, Avocado, Egg, Chili flakes, Salt.",
        "tips" => "Top with hemp seeds or pumpkin seeds for extra crunch and healthy fats."
    ],
    [
        "id" => 2,
        "title" => "One-Pan Lemon Herb Chicken",
        "time" => "25 mins",
        "difficulty" => "Medium",
        "calories" => "450 kcal",
        "protein" => "38g",
        "ingredients" => "Chicken breast, Broccoli florets, Lemon juice, Olive oil, Garlic.",
        "tips" => "Chop vegetables into equal sizes so everything roasts evenly at the same time."
    ],
    [
        "id" => 3,
        "title" => "High-Protein Berry Oatmeal",
        "time" => "12 mins",
        "difficulty" => "Easy",
        "calories" => "380 kcal",
        "protein" => "22g",
        "ingredients" => "Rolled oats, Whey or plant protein powder, Mixed berries, Almond milk.",
        "tips" => "Stir the protein powder into your liquid before heating to prevent clumping."
    ],
    [
        "id" => 4,
        "title" => "Spiced Chickpea Salad Bowl",
        "time" => "15 mins",
        "difficulty" => "Easy",
        "calories" => "410 kcal",
        "protein" => "14g",
        "ingredients" => "Canned chickpeas, Cucumber, Tomato, Feta cheese, Tahini dressing.",
        "tips" => "Rinse chickpeas thoroughly under cold water to eliminate excess sodium."
    ]
];
?>

<h2>Our Recipe Collection</h2>
<p style="margin-bottom: 2rem;">Hover or tap on any card below to dynamically reveal preparation ingredients and expert culinary tips.</p>

<div class="recipe-grid">
    <?php foreach ($recipes as $recipe): ?>
        <div class="recipe-card" tabindex="0">
            <div class="card-front">
                <span class="badge"><?php echo $recipe['difficulty']; ?></span>
                <h3><?php echo $recipe['title']; ?></h3>
                <div class="meta-info">
                    <span>⏱️ <?php echo $recipe['time']; ?></span>
                    <span>🔥 <?php echo $recipe['calories']; ?></span>
                    <span>💪 Protein: <?php echo $recipe['protein']; ?></span>
                </div>
                <div class="action-hint">View Ingredients & Tips &rarr;</div>
            </div>
            <div class="card-back">
                <h4>Ingredients Preview</h4>
                <p><?php echo $recipe['ingredients']; ?></p>
                <h4 style="margin-top: 1rem;">Pro Cooking Tip</h4>
                <p class="tip-text"><?php echo $recipe['tips']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<style>
    /* CSS Grid Layout for Cards */
    .recipe-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2.5rem;
    }

    /* CSS-Only Interactive Flip Card Engine */
    .recipe-card {
        background-color: transparent;
        height: 320px;
        perspective: 1000px;
        cursor: pointer;
        position: relative;
    }

    .card-front, .card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-front {
        background-color: var(--white);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-bottom: 5px solid var(--primary);
    }

    .card-back {
        background-color: var(--primary-light);
        color: var(--dark);
        transform: rotateY(180deg);
        overflow-y: auto;
        border-top: 5px solid var(--primary);
    }

    /* Flip States via Hover & Focus for Mobile Accessibility */
    .recipe-card:hover .card-front, .recipe-card:focus .card-front {
        transform: rotateY(-180deg);
    }

    .recipe-card:hover .card-back, .recipe-card:focus .card-back {
        transform: rotateY(0deg);
    }

    .badge {
        background-color: var(--accent);
        color: var(--white);
        padding: 0.25rem 0.6rem;
        font-size: 0.8rem;
        border-radius: 20px;
        align-self: flex-start;
        font-weight: bold;
    }

    .meta-info {
        margin: 1rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
        font-size: 0.95rem;
    }

    .action-hint {
        font-size: 0.85rem;
        color: var(--primary);
        font-weight: bold;
        text-align: right;
    }

    .tip-text {
        font-style: italic;
        font-size: 0.9rem;
        color: #37474f;
    }
</style>

<?php include('includes/footer.php'); ?>