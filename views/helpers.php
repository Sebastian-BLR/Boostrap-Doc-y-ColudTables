<header>
    <?php   $place = 'Helpes';
            include_once __DIR__ . "/Components/navar.php"?>
</header>

<main class="container">
    <div class="mb-5">
        <h2 class="text-center my-2 text-white">Colores</h2>
        <div class="text-bg-primary p-3">Primary with contrasting color</div>
        <div class="text-bg-secondary p-3">Secondary with contrasting color</div>
        <div class="text-bg-success p-3">Success with contrasting color</div>
        <div class="text-bg-danger p-3">Danger with contrasting color</div>
        <div class="text-bg-warning p-3">Warning with contrasting color</div>
        <div class="text-bg-info p-3">Info with contrasting color</div>
        <div class="text-bg-light p-3">Light with contrasting color</div>
        <div class="text-bg-dark p-3">Dark with contrasting color</div>
    </div>

    <div class="mb-5 row g-3">
        <h2 class="text-center mb-2 text-white">Ratio y Stacks</h2>
        <div class="hstack g-3">

            <div class="ratio ratio-1x1 bg-primary me-3">
                <div>1x1</div>
            </div>
            <div class="ratio ratio-4x3 bg-secondary">
                <div>4x3</div>
            </div>

        </div>

        <div class="hstack g-3 mb-2">

            <div class="ratio ratio-16x9 bg-success me-3">
                <div>16x9</div>
            </div>
            <div class="ratio ratio-21x9 bg-danger">
                <div>21x9</div>
            </div>

        </div>

        <h2 class="mb-2 text-white text-center">Custom ratios</h2>
        <div class="hstack g-3">

            <div class="ratio ratio-4x3 bg-primary">
                <div>4x3</div>
            </div>
            <p class="mx-1 text-white">-></p>
            <div class="ratio bg-secondary" style="--bs-aspect-ratio: 50%;" >
                <div>2x1</div>
            </div>

        </div>
    </div>

</main>