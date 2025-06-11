<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>電影時刻查詢</title>
</head>
<body>
    <h1>電影時刻查詢</h1>
    <form action="search.php" method="get">
        <label>請輸入時間（格式 HH:MM）:</label>
        <input type="time" name="time" required>
        <input type="submit" value="查詢">
    </form>
    <h2>點選電影封面查看更多資訊</h2>
    <div>

        <a href="movie.php?title=The+Matrix">
            <img src="images/the_matrix.jpg" alt="The Matrix" width="200">
        </a>
    
        <a href="movie.php?title=Inception">
            <img src="images/inception.jpg" alt="Inception" width="200">
        </a>
    
        <a href="movie.php?title=Interstellar">
            <img src="images/interstellar.jpg" alt="Interstellar" width="200">
        </a>
    
        <a href="movie.php?title=Spirited+Away">
            <img src="images/spirited_away.jpg" alt="Spirited Away" width="200">
        </a>
    
        <a href="movie.php?title=Parasite">
            <img src="images/parasite.jpg" alt="Parasite" width="200">
        </a>
    
    </div>
</body>
</html>
