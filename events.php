<?php
    include 'database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>index</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>
<main>
    <div id="eventbig">
        <div id="bigeventlogo">
            <h1>События</h1>
            <div class="svgdiv">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 11V1.5H8.25V10.9706H4C4 13.4771 5.84437 15.5528 8.25 15.9147V18.463C4.46001 18.0867 1.5 14.889 1.5 11ZM9.75 18.463C13.54 18.0867 16.5 14.889 16.5 11V1.5H9.75V11.0473C11.1985 11.2123 12.588 11.8648 13.5698 13.0124L12.4301 13.9876C11.7464 13.1885 10.7761 12.7138 9.75 12.5604V18.463ZM0 0.952381C0 0.426395 0.426395 0 0.952381 0H17.0476C17.5736 0 18 0.426395 18 0.952381V11C18 15.9706 13.9706 20 9 20C4.02944 20 0 15.9706 0 11V0.952381ZM11.0854 7.00237L13.3221 6.24121C13.7355 6.50911 14.009 6.97425 14.009 7.50319C14.009 8.33335 13.3354 9.00633 12.5044 9.00633C11.6735 9.00633 10.9999 8.33335 10.9999 7.50319C10.9999 7.32759 11.0301 7.15902 11.0854 7.00237ZM4.23292 8.71179L7.24463 7.71179L6.77195 6.28821L3.76024 7.28821L4.23292 8.71179Z" fill="#F29100"/>
                </svg>
            </div>
        </div>
        <div id="bigeventmain">
            <div id="eventclickmain">
                <div class="eventclick">
                    <?php
                        $query2 = 'SELECT * FROM events';
                        $result2 = $db->query($query2);
                        while ($row2 = $result2->fetch()){
                            if ($row2['dateout'] == ''){
                    ?>
                        <div class="activevent" onclick="window.location.href='get_events.php?id=<?php echo $row2['id']; ?>'">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row2['photos']); ?>">
                            <p id="oglavevents"><?php echo $row2['oglav']; ?></p>
                            <div class="smalldate">
                                <p><?php echo $row2['date-in']; ?> -- <?php echo $row2['date-out']; ?></p>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
                <hr>
                <h1 class="dateoutext">Прошедшие события</h1>
                <div class="eventclick">
                    <?php
                        $query2 = 'SELECT * FROM events';
                        $result2 = $db->query($query2);
                        while ($row2 = $result2->fetch()){
                            if ($row2['dateout'] != ''){
                    ?>
                        <div class="activevent" onclick="window.location.href='get_events.php?id=<?php echo $row2['id']; ?>'">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row2['photos']); ?>">
                            <p id="oglavevents"><?php echo $row2['oglav']; ?></p>
                            <div class="smalldate">
                                <p><?php echo $row2['date-in']; ?> -- <?php echo $row2['date-out']; ?></p>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="numbers">
            <div class="back">
                <div class="svgdiv">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.471149 5.46945L5.97115 0L7.02885 1.06361L2.06363 6.00126L7.02885 10.9389L5.97115 12.0025L0.471149 6.53306C0.329592 6.39229 0.25 6.2009 0.25 6.00126C0.25 5.80162 0.329592 5.61023 0.471149 5.46945Z" fill="#858FA3"/>
                    </svg>
                </div>
            </div>
            <div class="page">
                <p>1</p>
            </div>
            <div class="forward">
                <div class="svgdiv">
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55766 5.46945L1.05766 0L-4.29153e-05 1.06361L4.96518 6.00126L-4.29153e-05 10.9389L1.05766 12.0025L6.55766 6.53306C6.69922 6.39229 6.77881 6.2009 6.77881 6.00126C6.77881 5.80162 6.69922 5.61023 6.55766 5.46945Z" fill="#858FA3"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
</body>
</html>
