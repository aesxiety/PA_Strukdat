<?php
require "../util/loginSession.php";
require "../util/katalog.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/user_page_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../asset/logo.png">
    <link rel="stylesheet" href="../style/user_page_style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <style>
         *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.4s ease;;
}
/* 
nav .nav-bar {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-bar .nav-link{
    display: flex;
    align-items: center;
}
.nav-bar .nav-link li{
    margin: 0 5px;
    list-style: none;
}

.nav-bar .nav-link li a{
    position: relative;
    text-decoration: none;
    padding: 10px;
} */

/* css katalog */
.kategori{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 15% 0 15%;
}
.kategori a{
    text-align: center;
    min-width: fit-content;
    padding: 0 100px 0 100px;
}
.card-container {
    padding: 0 15% 0 15%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
  }

/* .footers {
    position: relative;
    min-height: 100vh;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
} */ */

/* responsive handphone */
/* @media screen and (max-width: 768px) {
.card-container {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
}
} */

/* Style untuk .card, img, h3, p, a, dan lainnya */


/* Login Dan Regis */

*, html {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    scroll-behavior: smooth;
}

body {
    background-color: white;
    overflow-x: hidden;

}

body.dark {
    background-color: black;
}

.fa-solid{
    color: white;
    
}
.fa-solid:hover {
    transform: scale(1.2);
    transition: 0.3s;
}


/* Navbar */

nav {
    background: linear-gradient(to right, black, #7752FE);
    display: flex;
    justify-content: space-between;
    position :fixed;
    box-shadow: 0 2px 10px ;
    width: 100%;
    text-align: center;
    z-index: 2;
}

nav ul {
    display: flex;
    align-items: center;
    gap: 1rem;
    list-style: none;
    margin-right: 50px;
}

nav div img {
    margin-left: 50px;
    width: 50px;
}

nav ul li a {
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    font-weight: 400;
    transition-duration: 300ms;
    border-bottom: 2px solid rgba(255, 255, 255, 0);
}

nav ul li a:hover {
    color: #7752FE;
    border-bottom: 2px solid #7752FE;
}

div section img {
    width: 200px;
}

/* responsive */
#nav-button {
    display: none;
}

label {
    display: none;
}


header img {
    width: 100%;
}

/* Isi */

.container{
    margin-top: -100px;
    /* margin-bottom: 100px; */
    background:url(ornamen.png);   
    background-size: cover; 
}

div img {
    width: 90%;
}

div main article img {
    margin-top: 10px;
    border-radius: 20px;
}
div main article p {
    margin-top: -5px;
    font-size: 10px;
    margin-bottom: 10px;
}

.grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    margin: 10px;
    align-items: center;
    grid-gap: 20px;
    backdrop-filter: blur(90%);

}

.grid article {
    box-shadow: 5px 0px 20px 4px #7752FE;
    border-radius: 20px;
    text-align: center;
    color: #7752FE;
    background: #7752FE(255, 192, 203, 0.434);
    transition: transform;  
}

.grid article:hover {
    transform: scale(1.1);
    transition: 0.5s;

}

/* Biodata */

.bio {
    margin-left: 5%;
    margin-top: 1%;
    margin-bottom: 50px;
}

.bio h1{
    font-size: 50px;
    color: palevioletred;
    margin-bottom: 20px;
}

.bio p{
    color: pink;
    line-height: 22px;
}

.bio a{
    background: palevioletred;
    padding: 10px 18px;
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    color: white;
    display: inline-block;
    margin: 30px 0;
    border-radius: 5px;
}

.bio a:hover {
    transform: scale(1.2);
    transition: 0.3s;
}

.biodata{
    position: relative;
    height: 500px;
    /* padding-top:100px ; */
}
.imgs {
    width: 45%;
    height: 80%;
    position: absolute;
    right: 0;
    top: 120px;
}

.imgs img{
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    transition: bottom 1s,left 1s;
}

.imgs img:hover {
    bottom: 20px;
}

/* footer */


footer {
    background-color: rgba(0, 0, 0, 0.362);
    backdrop-filter: blur(50);
    box-shadow: 0px 0px 10px 0px pink ;
    
}

.footer {
    width: 100%;
    height: 200px;
    padding: 20px 30px ;
    background:url("../asset/darkpic.png");
    background-size: cover;
}

.icon {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.icon a{
    text-decoration: none;
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.559);
    border-radius: 10%;
    text-align: center;
}

.icon a i{
    color: black;
    opacity: 100;
}

.icon a:hover {
    transform: scale(1.2);
    transition: 0.3s;
}

.footern {
    margin: 10px;
    font-size: 10px;
}

.footern ul {
    display: flex;
    justify-content: center;
}

.footern ul li{
    list-style: none;
}

.footern ul li a{
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: gray;
    margin: 0px 20px;
}

.footern ul li :hover {
    transform: scale(1.2);
    transition: 0.3s;
}

.footerb {
    display: flex;
    justify-content: center;
    color: gray;
    margin-top: 10px;
    font-size: 10px;
    flex-direction: column;
    align-items: center;
}

.footerb img {
    width: 150px;
}

@media only screen and (max-width: 736px) and (orientation:portrait) 
{
    
    /* overflow */
    nav {
        align-items: center;
    }
    
    nav .logo img {
        padding-top: 10px;
    }
    nav ul {
        position: fixed;
        top: 81px;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.334);
        max-height: 0;
        flex-direction: column;
        overflow: hidden;
    }
    
    nav li {
        display: block;
        width: 100%;
    }

    nav li:hover {
        background: darkgray;
    }

    nav a {
        width: 100%;
        display: block;
    }
    nav ul li a:hover {
        background: rgba(0, 0, 0, 0.259);
    }

    label {
        display: block;
        padding-inline-start: 0px 10px;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        right: 2%;
        color: white;
    }
    
    label:hover {
        color: #7752FE;
    }
    
    nav #nav-button:checked~ul {
        max-height: 100%;
        transition: all 1s ease-out;
    }
}

    @media only screen and (max-width: 768px) 
    {
        nav{
            justify-content: space-around;
        }
        .imgs{
            top: 0;
            right: -20px;
        } 
    }

    </style>
    <title>landing Page Ngawi</title>
</head>
<body>
    <!-- <nav>
        <div class="nav-bar">

            <div class="logo">
                <h1>ini logo</h1>
            </div>
            <ul class="nav-link">
                <li><a href=""><i class='bx bx-user' ></i></a></li>
                <li><a href="akun.php">akun</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">How To Orfer</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
            </ul>
            <div class="tema">icon</div>

        </div>
    </nav>  -->

    <!-- Bagian Navbar -->
    <nav>
        <input type="checkbox" name="" id="nav-button">
        <label for="nav-button">&#9776</label>

        <div class="logo">
                <img src="../asset/logo.png" alt=""> 
        </div>
        <ul>
            <li><a href="akun.php">Akun</a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#howto">How To Order</a></li>
            <li><a href="#about">About US</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
            <li><i id="toggleDark" class="fa-solid fa-moon"></i>
        </ul>
    </nav>
    <header class="land" id="home">
        <img src="asset/Landing.png" alt="">
    </header>


    <!-- Bagian Isi Konten -->
    <
        <form action="../util/process_message.php" method="POST" enctype="multipart/form-data">
            <h2>Contact Us</h2>
            <label for="message">Message:</label>
            <textarea id="message" name="pesan" rows="4" required></textarea>
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <input type="submit" value="Submit">
        </form>
  

        <!-- Bagian Footer -->
        <footer>
        <div class="footer" id="setting">
            <div class="icon">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footern">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footerb">
            <img src="../asset/logo.png" alt="" style="width: 50px; height: 50px;">
                <p>Copyright 2023,Designed By Kelompok PA</p>
            </div>
        </div>
        </footer>
</body>
</html>
