<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include 'view/head.html'?>
    <title>Subscribe Me!</title>
</head>
<body>
    <div class="container">
    <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <h1 class="main-title">BaeJino</h1>
            <form>
                <input class="form-control" placeholder="E-Mail"><br>
                <input class="form-control" placeholder="Password" type="password"><br>
                <button class="btn">Sign in</button>
                <button class="btn" onclick="location.href='/signup/'" type="button">Sign up</button>
            </form>
        </div>
    <div class="col-md-4"></div>
    <div>
    <?php include 'view/footer.html'?>
</body>
</html>