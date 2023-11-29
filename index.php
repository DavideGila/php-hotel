<?php
include __DIR__ . "/partials/header.php"
?>

<main class="container">
    <div class="row">
        <?php foreach ($hotels as $hotel) {?>
            <div>
                <?php echo $hotel["name"] ?>
                <?php echo $hotel["description"] ?>
                <?php echo $hotel["parking"] ?>
                <?php echo $hotel["vote"] ?>
                <?php echo $hotel["distance_to_center"] ?>
            </div>
        <?php } ?>
    </div>
</main>

<?php
include __DIR__ . "/partials/footer.php"
?>