<?php
    include 'database.php';

    $query = 'SELECT * FROM news LIMIT 5';
    $result = $db->query($query);
    $query2 = 'SELECT * FROM events';
    $result2 = $db->query($query2);
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
    <script src="script.js"></script>
    <title>main</title>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
        <div id="glavnaya">
            <div id="maindiv">
                <div id="photos">
                    <div class="list">
                        <div class="sliderimg">
                            <img src="source/slider8.jpg">
                        </div>
                        <div class="sliderimg">
                            <img src="source/slider3.jpg">
                        </div>
                        <div class="sliderimg">
                            <img src="source/slider4.jpg">
                        </div>
                        <div class="sliderimg">
                            <img src="source/slider5.jpg">
                        </div>
                    </div>
                    <div class="sliderbtns">
                        <div class="sliderbtns2 prev">
                            <div>
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.471149 5.46921L5.97115 -0.000244141L7.02885 1.06337L2.06363 6.00102L7.02885 10.9387L5.97115 12.0023L0.471149 6.53282C0.329592 6.39205 0.25 6.20065 0.25 6.00102C0.25 5.80138 0.329592 5.60998 0.471149 5.46921Z" fill="#FA5300"/>
                                </svg>
                            </div>
                        </div>
                        <div class="sliderbtns2 next">
                            <div>
                                <svg width="8" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.55766 5.46921L1.05766 -0.000244141L-4.29153e-05 1.06337L4.96518 6.00102L-4.29153e-05 10.9387L1.05766 12.0023L6.55766 6.53282C6.69922 6.39205 6.77881 6.20065 6.77881 6.00102C6.77881 5.80138 6.69922 5.60998 6.55766 5.46921Z" fill="#FA5300"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider">
                    <div class="activslide"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div id="newsmain">
                <div id="mainnewslogo">
                    <h1>Новости</h1>
                    <div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 1.5H1.5V17C1.5 17.8284 2.17157 18.5 3 18.5H4H5C5.82843 18.5 6.5 17.8284 6.5 17V1.5H4.75V16.5H3.25V1.5ZM3 20H4H5H17C18.6569 20 20 18.6569 20 17V0.25C20 0.111929 19.8881 0 19.75 0H8H6.5H4H1.5H0V1.5V17C0 18.6569 1.34315 20 3 20ZM17 18.5H7.59865C7.85391 18.0587 8 17.5464 8 17V1.5L18.5 1.5V17C18.5 17.8284 17.8284 18.5 17 18.5ZM10 12.5H16V11H10V12.5ZM14 15.0007H10V13.5007H14V15.0007ZM11.5 7.5V5.5H14.5V7.5H11.5ZM10 4.25C10 4.11193 10.1119 4 10.25 4H15.75C15.8881 4 16 4.11193 16 4.25V8.75C16 8.88807 15.8881 9 15.75 9H10.25C10.1119 9 10 8.88807 10 8.75V4.25Z" fill="#1998FF"/>
                        </svg>
                    </div>
                </div>
                <div id="newsclickmain">
                    <div class="newsclick">
                        <?php
                            while ($row = $result->fetch()){
                        ?>
                        <div class="news-item" onclick="window.location.href='get_news.php?id=<?php echo $row['id']; ?>'">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['photos']); ?>">
                            <div class="<?php echo $row['newstype']; ?>">
                                <p></p>
                            </div>
                            <p class="oglavnews"><?php echo $row['oglav']; ?></p>
                            <p class="smalltextnews"><?php echo $row['main']; ?></p>
                            <div class="smalldate">
                                <p><?php echo $row['date']; ?></p>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="more" onclick="window.location.href='news.php'">
                        <p>Посмотреть все</p>
                    </div>
                </div>
            </div>
            <div id="eventmain">
                <div id="maineventlogo">
                    <h1>События</h1>
                    <div>
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 11V1.5H8.25V10.9706H4C4 13.4771 5.84437 15.5528 8.25 15.9147V18.463C4.46001 18.0867 1.5 14.889 1.5 11ZM9.75 18.463C13.54 18.0867 16.5 14.889 16.5 11V1.5H9.75V11.0473C11.1985 11.2123 12.588 11.8648 13.5698 13.0124L12.4301 13.9876C11.7464 13.1885 10.7761 12.7138 9.75 12.5604V18.463ZM0 0.952381C0 0.426395 0.426395 0 0.952381 0H17.0476C17.5736 0 18 0.426395 18 0.952381V11C18 15.9706 13.9706 20 9 20C4.02944 20 0 15.9706 0 11V0.952381ZM11.0854 7.00237L13.3221 6.24121C13.7355 6.50911 14.009 6.97425 14.009 7.50319C14.009 8.33335 13.3354 9.00633 12.5044 9.00633C11.6735 9.00633 10.9999 8.33335 10.9999 7.50319C10.9999 7.32759 11.0301 7.15902 11.0854 7.00237ZM4.23292 8.71179L7.24463 7.71179L6.77195 6.28821L3.76024 7.28821L4.23292 8.71179Z" fill="#F29100"/>
                        </svg>
                    </div>
                </div>
                <div id="eventclickmain">
                    <div class="eventclick">
                        <?php
                            while ($row2 = $result2->fetch()){
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
                        ?>
                    </div>
                    <div class="more" onclick="window.location.href='events.php'">
                        <p>Посмотреть все</p>
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