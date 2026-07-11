<?php include('includes/header.php'); ?>

<h2>Meal Decision Guide</h2>
<p style="margin-bottom: 2rem;">Compare nutrient counts and prep steps across recipes instantly to line up perfectly with your schedule.</p>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Recipe Name</th>
                <th>Prep Time</th>
                <th>Calories</th>
                <th>Protein Target</th>
                <th>Dietary Classification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Avocado Power Toast</strong></td>
                <td>10 mins</td>
                <td>320 kcal</td>
                <td>12g</td>
                <td><span class="diet-tag vegetarian">Vegetarian</span></td>
            </tr>
            <tr>
                <td><strong>One-Pan Lemon Chicken</strong></td>
                <td>25 mins</td>
                <td>450 kcal</td>
                <td>38g</td>
                <td><span class="diet-tag low-carb">High Protein</span></td>
            </tr>
            <tr>
                <td><strong>High-Protein Berry Oats</strong></td>
                <td>12 mins</td>
                <td>380 kcal</td>
                <td>22g</td>
                <td><span class="diet-tag vegetarian">Vegetarian</span></td>
            </tr>
            <tr>
                <td><strong>Spiced Chickpea Salad Bowl</strong></td>
                <td>15 mins</td>
                <td>410 kcal</td>
                <td>14g</td>
                <td><span class="diet-tag budget">Budget-Friendly</span></td>
            </tr>
        </tbody>
    </table>
</div>

<style>
    /* Responsive Overflow Wrapper prevents table blowout on mobile screens */
    .table-container {
        width: 100%;
        overflow-x: auto;
        background-color: var(--white);
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 600px;
        text-align: left;
    }

    th, td {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid var(--gray);
    }

    th {
        background-color: var(--primary);
        color: var(--white);
        font-weight: 600;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .diet-tag {
        font-size: 0.8rem;
        padding: 0.2rem 0.5rem;
        border-radius: 4px;
        font-weight: bold;
    }
    .vegetarian { background-color: #c8e6c9; color: #1b5e20; }
    .low-carb { background-color: #ffe0b2; color: #e65100; }
    .budget { background-color: #b3e5fc; color: #01579b; }
</style>

<?php include('includes/footer.php'); ?>