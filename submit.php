<?php 
include('includes/header.php'); 

// Global Form Evaluation Variable Arrays
$errors = [];
$success_data = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Data Retrieval and Basic White-Space Stripping
    $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
    $recipe  = isset($_POST['recipe']) ? trim($_POST['recipe']) : '';
    $comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

    // 2. Server-Side Structural Validation Requirements
    if (empty($name)) {
        $errors[] = "Name input field is required.";
    }

    if (empty($email)) {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please provide a structurally valid email address format.";
    }

    if (empty($recipe)) {
        $errors[] = "Recipe details cannot be submitted empty.";
    }

    // 3. Handling Valid Execution States
    if (empty($errors)) {
        // Explicitly sanitizing output elements to block potential XSS Vectors
        $success_data = [
            'name'    => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
            'email'   => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
            'recipe'  => htmlspecialchars($recipe, ENT_QUOTES, 'UTF-8'),
            'comment' => htmlspecialchars($comment, ENT_QUOTES, 'UTF-8')
        ];
    }
}
?>

<h2>Submit Your Recipe Proposal</h2>
<p style="margin-bottom: 2rem;">Contribute your favorite quick creation below to share with our active community platform.</p>

<?php if (!empty($errors)): ?>
    <div class="alert error-alert">
        <strong>Review Form Requirements:</strong>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($success_data): ?>
    <div class="alert success-alert">
        <h3>🎉 Submission Successfully Received & Sanitized!</h3>
        <p style="margin-top: 0.5rem;">Thank you, <strong><?php echo $success_data['name']; ?></strong>. Below is your verified data package summary:</p>
        <div class="receipt-box">
            <p><strong>Email Handle:</strong> <?php echo $success_data['email']; ?></p>
            <p><strong>Recipe Core Structure:</strong></p>
            <blockquote style="background: #fff; padding: 0.5rem; margin: 0.5rem 0; border-left: 3px solid var(--primary); white-space: pre-wrap;"><?php echo $success_data['recipe']; ?></blockquote>
            <?php if (!empty($success_data['comment'])): ?>
                <p><strong>Additional Remarks:</strong> <?php echo $success_data['comment']; ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<form action="submit.php" method="POST" class="recipe-form">
    <div class="form-group">
        <label for="name">Your Full Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="e.g. John Doe">
    </div>

    <div class="form-group">
        <label for="email">Primary Email Destination:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="name@domain.com">
    </div>

    <div class="form-group">
        <label for="recipe">Recipe Overview & Critical Ingredients:</label>
        <textarea id="recipe" name="recipe" rows="6" placeholder="Provide a list of necessary ingredients along with brief instructions..."><?php echo isset($_POST['recipe']) ? htmlspecialchars($_POST['recipe'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label for="comment">Additional Comments / Substitutions (Optional):</label>
        <textarea id="comment" name="comment" rows="3" placeholder="Vegetarian or budget variations go here..."><?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <button type="submit" class="btn">Transmit Recipe Details</button>
</form>

<style>
    .recipe-form {
        background-color: var(--white);
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        max-width: 700px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid var(--gray);
        border-radius: 4px;
        font-family: inherit;
        font-size: 1rem;
        transition: var(--transition);
    }

    .form-group input:focus, .form-group textarea:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }

    /* Message Boxes Styling */
    .alert {
        padding: 1.25rem;
        border-radius: 6px;
        max-width: 700px;
        margin: 0 auto 2rem auto;
    }
    .error-alert {
        background-color: #ffebee;
        color: #c62828;
        border-left: 5px solid #c62828;
    }
    .error-alert ul {
        margin-left: 1.25rem;
        margin-top: 0.5rem;
    }
    .success-alert {
        background-color: var(--primary-light);
        color: #1b5e20;
        border-left: 5px solid var(--primary);
    }
    .receipt-box {
        margin-top: 1rem;
        background: rgba(255,255,255,0.6);
        padding: 1rem;
        border-radius: 4px;
        color: var(--dark);
    }
</style>

<?php include('includes/footer.php'); ?>