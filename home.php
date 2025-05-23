<html>
    <head>
        <style>
            nav{
    overflow:hidden;
    background-color: #ff992c;
    border-radius:25px;
}

.logo{
    position:relative;
    left:43px;
    width:70%;
    height:20%;
}
nav a:hover{
    background-color: #e68a00;
}

nav a{
    display:block;
    text-align:center;
    text-decoration:none;
    padding:11px 20px;
    color:white;

}
.bigcont{
    display:flex;
    justify-content: center;
}

.sub{
    width:50%;

}
section{
    width:100%;                         /padding madlilla bekar 10px or 20px kodlak/
    background-color:#f2f2f2;
}
aside{
    background-color:rgb(255, 203, 99);
    width:27%;
    padding:20px;

}
figure{
    margin:0;
}
a{
    list-style-image:none;
    text-decoration:none;
}
.sub{
    width:100%;
}

header{
    padding:20px;
    text-align:center;
}

footer{
    background-color: #ff992c; 
    padding:2px;             /padding madlak/
    text-align:center;
}



.order{
    display:flex;
    justify-content: center;
    border:20px red;
}


figure {
    position: relative;
}

figure .ordernow {
    position: absolute;
    border:2px solid #e68a00;
    border-radius:5px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color:transparent;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    backdrop-filter: blur(15px);
}

figure a:hover {
    background-color: #e68a00;
}

figure .admin
{
    position: absolute;
    top:25px;
    left:875px;
    height:20px;
    width:50px;
    /* background-color: white; */
    border-radius:20px;
}

figure .admin:hover{
    background-color: transparent;
}
        </style>
        <title>HOTEL</title>
        
    </head>
    <body>

        <div class="bigcont">
            <aside class="left">
                <img class="logo" src="bcalogo.png" alt="">
                <br>
                <br>
                <hr>
                <br>

                <nav>
                   
                    <a href="menu.html">BROWSE</a>
                    <a href="contact.html">CONTACT</a>
                    <a href="about.html">ABOUT US</a>
                    <a href="login.php">LOGOUT</a>
                </nav>
            <br/><br/><hr><br/>
            <p>&copy;2024 Granth Bhandaar All Rights Reserved
                Design By Pawandas, Sudeep, Karthik.</p>
            <br>
            <hr>
            </aside>
            <div class="sub">
                <section id="home">
                    <figure>

                        <a href="admin.html" class="admin">

                            <img src="admin.png">
                        </a>
                        <a href="menu.html" class="ordernow">Ordernow</a>
                        <img src="home.jpg" style="width:100%">
                        </a>
                    </figure>
                </section>
            </div>
        </div>

 
        <footer>
            <p>&copy;2024 Granth Bhandaar All Rights Reserved
                Design By Pawandas, Sudeep, Karthik.</p>
        </footer>
    </body>
</html>
