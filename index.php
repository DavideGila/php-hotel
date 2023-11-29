<?php
include __DIR__ . "/partials/header.php";

if (isset($_GET["available"])) {
    $available = $_GET["available"];

    $hotels = array_filter($hotels, fn($el) => $available === 'all' || $el['parking'] == $available);
}
?>

<main class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) {
                ?>
                    <tr>
                        <td><?php echo $hotel["name"] ?></td>
                        <td><?php echo $hotel["description"] ?></td>
                        <td><?php if ($hotel["parking"] == true) {
                                echo "Sì";
                            } else {
                                echo "No";
                            } ?></td>
                        <td><?php echo $hotel["vote"] ?></td>
                        <td><?php echo $hotel["distance_to_center"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include __DIR__ . "/partials/footer.php"
?>