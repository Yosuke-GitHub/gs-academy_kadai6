<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ToDoリスト</title>
  <link rel="stylesheet" href="css/style.index.css">
  <style>div{padding: 10px 0 ;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="select.php">ToDo一覧へ移動</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>新規登録</legend>
     <label><p>ToDo名</p><input type="text" name="title"></label><br>
     <!-- ↓可能なら付け加える -->
     <!-- <label>期限日<input type="text" name="email"></label><br> -->
     <label><p>内容</p><textArea name="content" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>


<!-- Main[End] -->


</body>
</html>
