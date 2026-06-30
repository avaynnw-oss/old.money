<?php
// Old Money Fashion — simple PHP page
// Page data lives in PHP arrays and is rendered into the markup below.

$pageTitle = "The Old Money Wardrobe";
$tagline   = "Quiet luxury, timeless tailoring, and heirloom watches.";

$watches = [
    [
        "name"   => "Slim Dress Watch",
        "detail" => "A thin, gold or silver case on a leather strap. Worn under the cuff, never shouting.",
        "tip"    => "Roman numerals, white dial, brown alligator strap.",
    ],
    [
        "name"   => "Steel Sports Classic",
        "detail" => "An understated steel automatic — the kind passed from father to son.",
        "tip"    => "Think integrated bracelet, no diamonds, patina earned over decades.",
    ],
    [
        "name"   => "Pocket Watch (Heirloom)",
        "detail" => "Rarely worn today, but kept as a family piece on a waistcoat chain.",
        "tip"    => "Engraved caseback, monogram, a story behind it.",
    ],
];

$styles = [
    [
        "title" => "Tailored Neutrals",
        "body"  => "Navy, camel, cream, and charcoal. Natural fabrics — wool, linen, cotton. Nothing branded, everything fitted.",
    ],
    [
        "title" => "The Layered Look",
        "body"  => "Oxford shirt, cable-knit sweater, unstructured blazer. A trench coat for the rain.",
    ],
    [
        "title" => "Quiet Accessories",
        "body"  => "Leather loafers, a silk scarf, a signet ring, and a structured leather bag — worn-in, not new.",
    ],
    [
        "title" => "For Her",
        "body"  => "Pleated skirts, silk blouses, pearl earrings, cashmere, and a classic camel coat.",
    ],
];

$principles = [
    "Buy less, buy better.",
    "Logos stay invisible.",
    "Fit beats fashion.",
    "Quality you inherit, not replace.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=EB+Garamond&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #f4f0e6;
            --ink: #2b2a25;
            --gold: #9a7b4f;
            --line: #d8cfbc;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'EB Garamond', Georgia, serif;
            background: var(--cream);
            color: var(--ink);
            line-height: 1.7;
        }
        h1, h2, h3 { font-family: 'Cormorant Garamond', Georgia, serif; font-weight: 500; }
        .wrap { max-width: 960px; margin: 0 auto; padding: 0 24px; }

        header.hero {
            text-align: center;
            padding: 90px 24px 70px;
            border-bottom: 1px solid var(--line);
        }
        header.hero .eyebrow {
            letter-spacing: 4px;
            text-transform: uppercase;
            font-size: 13px;
            color: var(--gold);
        }
        header.hero h1 {
            font-size: 56px;
            margin: 16px 0;
            letter-spacing: 1px;
        }
        header.hero p { font-size: 20px; font-style: italic; color: #6a655a; }

        section { padding: 64px 0; border-bottom: 1px solid var(--line); }
        section h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 8px;
        }
        section .sub {
            text-align: center;
            color: var(--gold);
            letter-spacing: 3px;
            text-transform: uppercase;
            font-size: 12px;
            margin-bottom: 40px;
        }

        .grid { display: grid; gap: 28px; }
        .grid.two { grid-template-columns: repeat(2, 1fr); }
        .grid.three { grid-template-columns: repeat(3, 1fr); }

        .card {
            background: #fbf9f3;
            border: 1px solid var(--line);
            padding: 28px;
        }
        .card h3 { font-size: 24px; margin-bottom: 10px; }
        .card .tip {
            margin-top: 14px;
            font-size: 15px;
            font-style: italic;
            color: var(--gold);
        }

        .principles {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 640px;
            margin: 0 auto;
            text-align: center;
        }
        .principles li {
            font-family: 'Cormorant Garamond', serif;
            font-size: 22px;
            padding: 20px;
            border: 1px solid var(--line);
        }

        footer {
            text-align: center;
            padding: 40px 24px;
            font-size: 14px;
            color: #8a8475;
        }

        @media (max-width: 720px) {
            header.hero h1 { font-size: 40px; }
            .grid.two, .grid.three, .principles { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="hero">
        <div class="wrap">
            <p class="eyebrow">Est. Tradition</p>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
            <p><?= htmlspecialchars($tagline) ?></p>
        </div>
    </header>

    <section>
        <div class="wrap">
            <h2>The Watches</h2>
            <p class="sub">Understated &middot; Heirloom &middot; Mechanical</p>
            <div class="grid three">
                <?php foreach ($watches as $w): ?>
                    <div class="card">
                        <h3><?= htmlspecialchars($w["name"]) ?></h3>
                        <p><?= htmlspecialchars($w["detail"]) ?></p>
                        <p class="tip"><?= htmlspecialchars($w["tip"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="wrap">
            <h2>Dressing Styles</h2>
            <p class="sub">Tailored &middot; Neutral &middot; Timeless</p>
            <div class="grid two">
                <?php foreach ($styles as $s): ?>
                    <div class="card">
                        <h3><?= htmlspecialchars($s["title"]) ?></h3>
                        <p><?= htmlspecialchars($s["body"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="wrap">
            <h2>The Principles</h2>
            <p class="sub">How Old Money Dresses</p>
            <ul class="principles">
                <?php foreach ($principles as $p): ?>
                    <li><?= htmlspecialchars($p) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <footer>
        <div class="wrap">
            &copy; <?= date("Y") ?> The Old Money Wardrobe &middot; Quiet luxury, well kept.
        </div>
    </footer>

</body>
</html>
