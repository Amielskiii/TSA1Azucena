<!DOCTYPE html>
<html>
<head>
<title>Admin Account</title>

<style>

body{
    font-family:Arial, Helvetica, sans-serif;
    background:#f2f2f2;
    margin:0;
    padding:0;
    min-height:100vh;
    display:flex;
    flex-direction:column;
}

.header{
    background:#2c3e50;
    color:white;
    padding:20px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header .logo{
    font-size:24px;
    font-weight:bold;
    margin:0;
}

.header .logo span{
    color:#3498db;
}

.header .nav{
    display:flex;
    gap:20px;
}

.header .nav a{
    color:white;
    text-decoration:none;
    font-size:14px;
    opacity:0.9;
}

.header .nav a:hover{
    opacity:1;
}

.container{
    max-width:1000px;
    margin:0 auto;
    padding:40px 20px;
    flex:1;
}

.admin-panel{
    background:white;
    border-radius:10px;
    padding:30px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.top h1{
    margin:0;
    font-size:24px;
    color:#2c3e50;
}

.menu{
    display:flex;
    gap:15px;
}

.menu a{
    color:#2c3e50;
    text-decoration:none;
    font-size:14px;
}

.menu a:hover{
    text-decoration:underline;
}

.profile{
    display:flex;
    justify-content:space-between;
    margin-top:25px;
    gap:30px;
}

.left{
    flex:1;
}

.left h3{
    margin-bottom:5px;
    color:#2c3e50;
}

.left p{
    margin:5px 0;
    color:#666;
}

.right{
    width:200px;
    text-align:center;
}

.right img{
    width:150px;
    height:150px;
    border:2px solid #ddd;
    border-radius:10px;
    object-fit:cover;
    margin-bottom:10px;
}

.right input{
    margin-top:10px;
}

hr{
    margin:25px 0;
}

.reset table{
    width:100%;
}

.reset td{
    padding:10px;
}

.reset input{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:4px;
    box-sizing:border-box;
}

.reset input:focus{
    outline:none;
    border-color:#2c3e50;
}

.submit{
    text-align:center;
    margin-top:20px;
}

.submit button{
    width:200px;
    padding:12px;
    font-size:16px;
    background:#2c3e50;
    color:white;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

.submit button:hover{
    background:#34495e;
}

.footer{
    text-align:center;
    padding:20px;
    background:#333;
    color:white;
    width:100%;
    box-sizing:border-box;
    margin-top:auto;
}

</style>

</head>

<body>

<div class="header">
    <div class="logo">
        TANJ <span>User Management</span>
    </div>
    <div class="nav">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('auth/logout') ?>">Logout</a>
    </div>
</div>

<div class="container">
    <div class="admin-panel">
        <div class="top">
            <h1>Admin Account</h1>
            <div class="menu">
                <a href="<?= base_url('admin/view_records') ?>">View Records</a>
            </div>
        </div>

        <div class="profile">

        <div class="left">

        <h3>Welcome</h3>

        <p>Username(admin)</p>

        <b>Userlevel:</b>

        <p><?= $user->userlevel ?></p>

        <b>Email:</b>

        <p><?= $user->email ?></p>

        </div>

        <div class="right">

        <?php if($user->image): ?>
            <img src="<?= base_url('images/' . $user->image) ?>" alt="Profile Image">
        <?php else: ?>
            <img src="https://via.placeholder.com/150" alt="No Image">
        <?php endif; ?>

        <form enctype="multipart/form-data">
        <input type="file" name="image">
        </form>

        </div>

        </div>


    </div>
</div>

<div class="footer">
© Jefferson Tan - TANJ User Management System
</div>

</body>
</html>