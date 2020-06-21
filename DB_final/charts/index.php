<?php
session_start();
if(!isset($_SESSION['account'])) echo '<meta http-equiv=REFRESH CONTENT=0;url=../login.html>'
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="庫存管理系統">
    <meta name="author" content="DCT-WEB-GROUP-5">
    <style type="text/css">
    label {
        text-align: center;
        font-size: 20pt;
    }
    </style>
    <title>商家管理系統首頁</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right text-white" id="sidebar-wrapper">
      <div class="sidebar-heading">庫存管理系統</div>
      <div class="list-group list-group-flush">
        <a href="../goods.php" class="list-group-item list-group-item-action bg-dark text-white">商品</a>
                <a href="../supplier.php" class="list-group-item list-group-item-action bg-dark text-white">供應商</a>
                <a href="../order_form.php" class="list-group-item list-group-item-action bg-dark text-white">訂單</a>
                <a href="../employee.php" class="list-group-item list-group-item-action bg-dark text-white">員工</a>
                <a href="index.html" class="list-group-item list-group-item-action bg-dark text-white">分析報告</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">收起/展開功能表</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="../main.php">回到首頁<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            帳號資訊
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../edit_account.html">修改資料</a>
            <a class="dropdown-item" href="../logout.php">登出</a>
      </li>
  </ul>
</div>
</nav>
<!-- 內容 -->
<div class="container-fluid">
    <h1 class="mt-4">分析報告</h1>
    <div class="d-flex flex-column justify-content-left align-items-left mt-5" id="wrapper">

        <div class="form-group mx-auto" style="width: 1000px;">
            <form method="GET" id="dailyForm">
                <select id="daily-search-type">
                    <option value="c_category">商品種類</option>
                    <option value="c_name">商品名稱</option>
                 </select> <br/><br/>
                <input type="date" id="date"/>
                <input type="submit" value="查詢">
            </form>
   
           <div class="chart-container" style = "width: 1000px; height: 500px"> 
               <canvas id="dailyRevenue"></canvas>
           </div>
        </div>

        <div class="form-group mx-auto" style="width: 1000px;">
            <form method="GET" id="monthlyForm">
                <select id="search-type">
                    <option value="c_category">商品種類</option>
                    <option value="c_name">商品名稱</option>
                 </select>
                 <br/><br/>
                 <input type="date" id="start-date"/>
                 <input type="date" id="end-date"/>
                 <input type="submit" value="查詢">
             </form>
     
             <div class="chart-container" style = "width: 1000px; height: 500px">
                 <canvas id="monthlyRevenue"></canvas>
             </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
             <script src="index.js"></script>
        </div>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Menu Toggle Script -->
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
</body>

</html>