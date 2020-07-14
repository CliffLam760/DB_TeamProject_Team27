<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
<meta charset="UTF-8">
</head>

<body>
    <div class="topnav">
        <a <?php if($curr_page == "index.php") echo 'class="active"'?>
           href="index.php">home</a>
        <a <?php if($curr_page == "overseas.php") echo 'class="active"'?>
           href="overseas.php">overseas</a>
        <a <?php if($curr_page == "male_female.php") echo 'class="active"'?>
           href="male_female.php">male/female</a>
    </div>
</body>
