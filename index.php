<!DOCTYPE html>
<html>
<head>
    <title>Welcome - TANJ</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f5f5f5;
            margin:0;
            padding:0;
        }

        .header{
            background:#2c3e50;
            color:white;
            padding:80px 20px;
            text-align:center;
        }

        .header h1{
            margin:0;
            font-size:42px;
            font-weight:300;
        }

        .header p{
            font-size:16px;
            margin-top:15px;
            opacity:0.8;
        }

        .container{
            max-width:800px;
            margin:0 auto;
            padding:60px 20px;
        }

        .features{
            display:flex;
            justify-content:space-between;
            gap:30px;
            margin:50px 0;
        }

        .feature{
            flex:1;
            background:white;
            padding:25px;
            border-radius:8px;
            text-align:center;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
        }

        .feature h3{
            color:#2c3e50;
            margin-top:0;
            font-size:18px;
            font-weight:500;
        }

        .feature p{
            color:#666;
            font-size:14px;
            line-height:1.5;
        }

        .cta{
            text-align:center;
            margin:50px 0;
        }

        .cta-buttons{
            display:flex;
            justify-content:center;
            gap:20px;
        }

        .cta a{
            text-decoration:none;
            display:inline-block;
        }

        .cta .login-btn{
            background:#2c3e50;
            color:white;
            border:none;
            padding:15px 35px;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        .cta .register-btn{
            background:white;
            color:#2c3e50;
            border:2px solid #2c3e50;
            padding:13px 33px;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        .cta .login-btn:hover{
            background:#34495e;
        }

        .cta .register-btn:hover{
            background:#ecf0f1;
        }

        .footer{
            text-align:center;
            padding:25px;
            background:#2c3e50;
            color:white;
            margin-top:60px;
            font-size:14px;
        }

        @media (max-width: 768px) {
            .features{
                flex-direction:column;
            }
            .cta-buttons{
                flex-direction:column;
            }
            .header h1{
                font-size:32px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to TANJ</h1>
    <p>Your Secure User Management System</p>
</div>

<div class="container">

<div class="features">
    <div class="feature">
        <h3>Secure Authentication</h3>
        <p>Advanced security features to protect your data and user information.</p>
    </div>
    <div class="feature">
        <h3>User Management</h3>
        <p>Easy-to-use admin panel for managing users and permissions.</p>
    </div>
    <div class="feature">
        <h3>Fast Performance</h3>
        <p>Lightweight and efficient system built for optimal performance.</p>
    </div>
</div>

<div class="cta">
    <div class="cta-buttons">
        <a href="login.php">
            <button class="login-btn">Login</button>
        </a>
        <a href="register.php">
            <button class="register-btn">Create Account</button>
        </a>
    </div>
</div>

<div class="footer">
    Jefferson Tan - TANJ User Management System
</div>

</div>

</body>
</html>
