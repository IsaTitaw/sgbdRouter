<form action="index.php" method="post">
    <input type="hidden" name="type" value="create">
    <input type="text" name="name" required>
    <input type="number" name="price" step="0.01" min="0">
    <input type="number" name="quantity" min="0">
    <input type="number" name="vat" min="0" max="100" step="1">

    <input type="submit">
</form>
<br>

<button class="user-btn" name="user">MANAGE USERS</button>

<section id="ajax-rsp">
</section>

<?php if($display == 'one') include 'unique_view.php'; ?>
<?php if($display == 'list') include 'table_view.php'; ?>