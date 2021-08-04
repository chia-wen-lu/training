<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">

    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="/index.php/PostController"><h3><span class="badge bg-danger">首頁</span></h3></a>
        <a class="nav-link" href="/HighSchool/Postcontroller/admission"><h3><span class="badge bg-secondary">返回</span></h3></a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

</body>

</html>