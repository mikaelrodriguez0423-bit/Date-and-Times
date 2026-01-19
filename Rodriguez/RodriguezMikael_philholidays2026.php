<?php

date_default_timezone_set("Asia/Manila"); 

$currentTime = date('H:i:s');

$laTime = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
$psTime = new DateTime('now', new DateTimeZone('Antarctica/South_Pole'));
$tTime = new DateTime('now', new DateTimeZone('Asia/Tokyo'));

$laTimeStr = $laTime->format('H:i:s');
$psTimeStr = $psTime->format('H:i:s');
$tTimeStr = $tTime->format('H:i:s');

$nationalHolidays = [
    ["name" => "New Year's Day", "date" => "2026-01-01", "image" => "img/N1.jpg"],
    ["name" => "Labor Day", "date" => "2026-05-01", "image" => "img/N2.jpg"],
    ["name" => "Independence Day", "date" => "2026-06-12", "image" => "img/N3.jpg"],
    ["name" => "National Heroes Day", "date" => "2026-08-31", "image" => "img/N4.jpg"],
    ["name" => "Christmas Day", "date" => "2026-12-25", "image" => "img/N5.jpg"],
    ["name" => "Rizal Day", "date" => "2026-12-30", "image" => "img/N6.jpg"],
];

$pampangHolidays = [
    ["name" => "Mabalacat City Founding Anniversary", "date" => "2026-02-02", "image" => "img/L1.jpg"],
    ["name" => "Bacolor Pampanga Day", "date" => "2026-02-10", "image" => "img/L2.jpeg"],
    ["name" => "Jose Abad Santos Day", "date" => "2026-05-07", "image" => "img/L3.jpg"],
    ["name" => "Mt. Pinatubo Eruption Anniversary", "date" => "2026-06-15", "image" => "img/L4.jpg"],
    ["name" => "Porac Binulu Festival", "date" => "2026-11-15", "image" => "img/L5.jpg"],
    ["name" => "Aldo Ning Kapampangan", "date" => "2026-12-11", "image" => "img/L6.jpg"]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHILIPPINE HOLIDAYS 2026</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <div>
        <h1>PHILIPPINE HOLIDAYS 2026</h1>
    </div>
    <p id="current-time">Current Time: <?php echo $currentTime; ?></p>
    </header>

    <main>
        <section class="holiday-section">
            <h2>National Holidays</h2>
            <div class="holiday-grid">
                <?php foreach ($nationalHolidays as $holiday): ?>
                    <div class="holiday-card">
                        <img src="<?php echo $holiday['image']; ?>" alt="<?php echo $holiday['name']; ?>">
                        <h3><?php echo $holiday['name']; ?></h3>
                        <p><?php echo date('F j, Y', strtotime($holiday['date'])); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="holiday-section">
            <h2>Local Holidays (Pampanga)</h2>
            <div class="holiday-grid">
                <?php foreach ($pampangHolidays as $holiday): ?>
                    <div class="holiday-card">
                        <img src="<?php echo $holiday['image']; ?>" alt="<?php echo $holiday['name']; ?>">
                        <h3><?php echo $holiday['name']; ?></h3>
                        <p><?php echo date('F j, Y', strtotime($holiday['date'])); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-timezones">
            <div><strong>Los Angeles:</strong> <?php echo $laTimeStr; ?></div>
            <div><strong>South Pole:</strong> <?php echo $psTimeStr; ?></div>
            <div><strong>Tokyo:</strong> <?php echo $tTimeStr; ?></div>
        </div>
        <p>Created by Mikael Sheeray Rodriguez</p>
    </footer>
</body>
</html>
