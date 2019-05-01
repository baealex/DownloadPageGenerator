<?php include 'dbconfig.php'?>
<?php
extract($_POST);

if($pw == $pws) {
    $stmt = $pdo->prepare('INSERT INTO USERINFO VALUES(:email,:pw);');
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_NUMBER_INT);
    $pw = filter_input(INPUT_GET, 'pw', FILTER_SANITIZE_NUMBER_INT);
    $stmt->bindParam(':email', $id, PDO::PARAM_INT);
    $stmt->bindParam(':pw', $pw, PDO::PARAM_INT);
    $stmt->execute();
    echo "<script>alert('회원가입 완료! 환영합니다!')</script>"; 
}
else {
    echo "<script>alert('비밀번호가 일치하지 않습니다 :(')</script>"; 
}
?>