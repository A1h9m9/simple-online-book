 <?php
    session_start();
    if (
        isset($_POST['username']) &&
        isset($_POST['password'])
    ) {
        //db connect
        include './db.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data =  '&username=' . $_POST['username'];
        if (empty($username)) {
            $em = 'username is required';
            header("Location:index.php?error=$em&$data");
            exit;
        } elseif (empty($password)) {
            $em = 'password is required';
            header("Location: index.php?error=$em&$data");
            exit;
        } else {
            $stmt = $con->prepare('SELECT username FROM users WHERE username=?');
            $stmt->execute([$username]);
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch();
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['user_id'] = $user['user_id'];
                header('Location:home.php');
                exit;
            } else {
                $em = 'password or username is required';
                header("Location:index.php?error=$em&$data");
                exit;
            }
        }
    } else {
        header('Location:index.php');
        exit;
    }
