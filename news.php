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
    <div id="newsbig">
        <div id="bignewslogo">
            <h1>Новости</h1>
            <div>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 1.5H1.5V17C1.5 17.8284 2.17157 18.5 3 18.5H4H5C5.82843 18.5 6.5 17.8284 6.5 17V1.5H4.75V16.5H3.25V1.5ZM3 20H4H5H17C18.6569 20 20 18.6569 20 17V0.25C20 0.111929 19.8881 0 19.75 0H8H6.5H4H1.5H0V1.5V17C0 18.6569 1.34315 20 3 20ZM17 18.5H7.59865C7.85391 18.0587 8 17.5464 8 17V1.5L18.5 1.5V17C18.5 17.8284 17.8284 18.5 17 18.5ZM10 12.5H16V11H10V12.5ZM14 15.0007H10V13.5007H14V15.0007ZM11.5 7.5V5.5H14.5V7.5H11.5ZM10 4.25C10 4.11193 10.1119 4 10.25 4H15.75C15.8881 4 16 4.11193 16 4.25V8.75C16 8.88807 15.8881 9 15.75 9H10.25C10.1119 9 10 8.88807 10 8.75V4.25Z" fill="#1998FF"/>
                </svg>
            </div>
        </div>
        <div id="bignewsmain">
            <div class="newsclick">
                <?php
                    $query = 'SELECT * FROM news LIMIT 5';
                    $result = $db->query($query);
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
            <div class="newsclick">
                <?php
                    $query = 'SELECT * FROM news LIMIT 5 OFFSET 5';
                    $result = $db->query($query);
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
