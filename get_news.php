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
    <div id="pagenews">
        <?php
        if (isset($_GET['id'])) {
            $news_id = $_GET['id'];

            // Получаем данные по конкретной новости
            $query = "SELECT * FROM news WHERE id = ?";
            $stmt = $db->prepare($query);
            $stmt->execute([$news_id]);
            $row = $stmt->fetch();

            if ($row) {
                // Отображаем новость
                echo "<div id='infonews'>
                <div class='backbtn' onclick=\"window.location.href='news.php'\">
                    <div class='svgdiv'>
                        <svg width='8' height='12' viewBox='0 0 8 12' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M0.471149 5.46921L5.97115 -0.000244141L7.02885 1.06337L2.06363 6.00102L7.02885 10.9387L5.97115 12.0023L0.471149 6.53282C0.329592 6.39205 0.25 6.20065 0.25 6.00102C0.25 5.80138 0.329592 5.60998 0.471149 5.46921Z' fill='#445371'/>
                        </svg>
                    </div>
                    <p>Все новости</p>
                </div>
                <p id='oglav'>{$row['oglav']}</p>
                <div id='datenews'>
                    <div class='{$row['newstype']}'>
                        <p></p>
                    </div>
                    <p id='date'>{$row['date']}</p>
                </div>
                <div id='newsphoto'>
                    <img src='data:image/jpeg;base64," . base64_encode($row['photos']) . "'>
                </div>
            </div>
            <div id='textnews'>
                <p id='oglav2'>{$row['oglav']}</p>
                <p>{$row['bigtext']}</p>
                <p>{$row['contacts']}</p>
                <p id='hashtag'>{$row['hashtags']}</p>
            </div>";
            } else {
                echo "<p>Новость не найдена.</p>";
            }
        } else {
            echo "<p>ID новости не указан.</p>";
        }
        ?>
        <div id="morenews">
            <div id="morenewslogo">
                <h1>Другие новости</h1>
                <div class="svgdiv">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 1.5H1.5V17C1.5 17.8284 2.17157 18.5 3 18.5H4H5C5.82843 18.5 6.5 17.8284 6.5 17V1.5H4.75V16.5H3.25V1.5ZM3 20H4H5H17C18.6569 20 20 18.6569 20 17V0.25C20 0.111929 19.8881 0 19.75 0H8H6.5H4H1.5H0V1.5V17C0 18.6569 1.34315 20 3 20ZM17 18.5H7.59865C7.85391 18.0587 8 17.5464 8 17V1.5L18.5 1.5V17C18.5 17.8284 17.8284 18.5 17 18.5ZM10 12.5H16V11H10V12.5ZM14 15.0007H10V13.5007H14V15.0007ZM11.5 7.5V5.5H14.5V7.5H11.5ZM10 4.25C10 4.11193 10.1119 4 10.25 4H15.75C15.8881 4 16 4.11193 16 4.25V8.75C16 8.88807 15.8881 9 15.75 9H10.25C10.1119 9 10 8.88807 10 8.75V4.25Z" fill="#1998FF"/>
                    </svg>
                </div>
            </div>
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
            <div class="more" onclick="window.location.href='news.php'">
                <p>Посмотреть все</p>
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
