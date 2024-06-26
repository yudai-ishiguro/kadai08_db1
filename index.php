<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>Dive Log</legend>
                <label>日付：<input type="date" name="date" required></label><br>
                <label>ポイント名：
                    <select name="pointName" required>
                        <option value="">選択してください</option>
                        <option value="point1">ポイント１</option>
                        <option value="point2">ポイント２</option>
                        <option value="point3">ポイント３</option>
                        <option value="point4">ポイント４</option>
                    </select>
                </label><br>
                <label>コメント：<br><textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <label>風向き：
                    <select name="windDirection">
                        <option value="">選択してください</option>
                        <option value="北">北</option>
                        <option value="北北東">北北東</option>
                        <option value="北東">北東</option>
                        <option value="東北東">東北東</option>
                        <option value="東">東</option>
                        <option value="東南東">東南東</option>
                        <option value="南東">南東</option>
                        <option value="南南東">南南東</option>
                        <option value="南">南</option>
                        <option value="南南西">南南西</option>
                        <option value="南西">南西</option>
                        <option value="西南西">西南西</option>
                        <option value="西">西</option>
                        <option value="西北西">西北西</option>
                        <option value="北西">北西</option>
                        <option value="北北西">北北西</option>      
                    </select>
                    </select>
                </label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
