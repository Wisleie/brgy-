<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
}
body{
    display: grid;
    grid-template-columns: 300px 1fr;
    grid-template-rows: auto 95.4vh;
    grid-template-areas: 
    "nav nav"
    "aside main";
}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: skyblue;
    grid-area: nav;
    font-size: 25px;
    padding-left: 1%;
    padding-right: 1%;
    color: white;
    letter-spacing: 0cap;
}
aside{
    background-color: gray;
    grid-area: aside;
    position: relative;



}
main{
    padding: 25px;
    background-image: url(../img/1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    grid-area: main;
}
#st{
    clip-path: circle(50%);
    width: 100%;
}
.circle{
    width: 10%;
    clip-path: circle(50%);
}


.make{

    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
#acc{
    width: 100%;
    background: none;
    top: 25%;
    text-align: center;
    border: none;
}
.activate{
    background-color: skyblue;
    width: 100%;
    border-radius: .5rem;
}
#activates{
    color: skyblue;
}
.admin{
    font-size: 25px;
    margin-left: 10px;
}


.dropdown-btn{
    width: 100%;
    text-align: left;
    background: none;
    border: none;
    font: inherit;
    cursor: pointer;
}
.dropdown-btn svg{
    transition: 200ms ease;
}





#logo{
    width: 36%;
    height: 18%;
    border-radius: 50%;
    margin-top: 27px;
    margin-left: 30%;
}
.mix{
    display: flex;
    height: 10%;
    position: relative;
}
.mix:hover{
    background-color:skyblue;
    border-radius: .5rem;
    
}
#name{
    font-size: 20px;
    width: 100%;
    background: none;
    border: none;
    text-align: center;
}

.positionx{
   position: absolute;
   left: 8%;
   top: 31%;
}
.positionx span{
    font-size: 17px;
}

aside::-webkit-scrollbar{
    width: 0;
}
aside .fix{
    margin-left: 20px;
    background: none;
    width: 89%;
    height: 70%;
    gap: 15%;
    bottom: 2%;
    position: absolute;
    border-top: .1mm solid white;
    overflow-x: auto;


}
aside .fix::-webkit-scrollbar{
    width: 0;
}
aside ul{
    list-style: none;
   
}
aside ul li{
    list-style: none;
}

aside > ul > li:first-child{
    display: flex;
    justify-content: flex-end;
    margin-bottom: 16px;
    .logo{
        font-weight: 600;
    }
}
aside a, aside .dropdown-btn, aside .logo{
    border-radius: 5em;
    padding: .85em;
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
    gap: 1em;
}
aside svg{
    flex-shrink: 0;
    fill: white;
}
aside a span, aside .dropdown-btn span{
    flex-grow: 1;
}
aside a:hover, aside .dropdown-btn:hover{
    background-color:skyblue;
    border-radius: .5rem;
}
aside .sub-menu{
    display: grid;
    grid-template-rows: 0fr;
    transition: 300ms ease-in-out;


    div{
        overflow: hidden;
    }
}
aside .sub-menu.show{
    grid-template-rows: 1fr;
}
aside .sub-menu a{
    padding-left: 2em;
}
.size{
    font-size: 14px;
}
.sizes{
    margin-left: 7%;
    font-size: 14px;
}
.title{
    color: white;
}

.center{
    text-align: center;
    color: white;
}
code{
    font-size: 30px;
    font-weight: 10;
    border-bottom: .5mm solid white ;
}
nav button{
    background: none;
    border: none;
    color: white;
    display: none;
}
.add{
    border-top: .5mm solid white;
    width: 95%;
    height: 50%;
    margin-left: 2%;
    margin-top: 1%;
    color: white;
    position: relative;
    
}
#add{
    position: relative;
    width: 30%;
    height: 10%;
    background: none;
    border: none;
    margin-top: .5%;
}
#add input{
    outline: none;
    cursor: pointer;
    position: absolute;
    left: 0;
    top: 1%;
    background-color: #ffffff63;
    border-radius: .4rem;
    border: none;
    color: white;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 3%;
    border: .5mm solid rgba(255, 255, 255, 0.693);

}
#add span{
    background: none;
    color: white;
    position: absolute;
    right: 2%;
    bottom: 15%;
}
#add input::placeholder{
    color: white;
    font-size: 17px;
}
#adds{
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 2%;
    background-color: #34A353;
    border-radius: .4rem;
    border: none;
    color: white;
    width: 10%;
    height: 10%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
#adds span{
    margin-right: 2%;
}
#adds p{
    margin-left: 3%;
    margin-top: -2%;
}
#edit{
    cursor: pointer;
    position: absolute;
    right: 2%;
    top: 2%;
    background-color: #34A353;
    border-radius: .4rem;
    border: none;
    color: white;
    width: 15%;
    height: 10%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 13px;
}
#edit span{
    margin-right: 3%;
    font-size: 13px;
}
.sec{
    width: 98%;
    height: 75%;
    margin-top: -24%;
    margin-left: 2%;
    display: grid;
    grid-template-columns: auto auto auto;
    overflow-x: hidden;
    padding: 0;
    gap: 10px;
}
.sec::-webkit-scrollbar{
    width: 0;
}
.sec #blur .active{
    filter: blur(100px);
}
.card-one{
    width: 90%;
    height: 100%;
    background: linear-gradient( #1E4460 50%, #1E4460 50%, white 50%);
    border-radius: .5rem;
    display: grid;
    position: relative;   
}
.input-one{
    margin-top: 5%;
    width: 100%;
    text-align: center;
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: 700;
}
.picture{
    width: 28%;
    clip-path: circle(50%);
    margin-left: 34%;
    border: 1mm solid white;
    border-radius: 50%;
    position: absolute;
    margin-top: 15%;
    
    
    

    
}

.merge{
    width: 90%;
    margin-left: 4%;
    display: flex;
}
.merge input{
    border: none;
    background: none;
    width: 70%;
    text-align: center;
}
.box-one, .box-two, .box-three{
    text-align: center;
    font-weight: 700;
    color: #285A81;
    width: 60%;
}
.bow-three button{
    border: white;
    background: white;
    
}
.box-three .button{
    cursor: pointer;
    border: none;
    background: none;
    font-weight: 700;
    color: #285A81;
}
.box-three .button .bi{
    color: #3B7EFF;
    
}
.view-open{
    border: none;
    background: none;
    color:#285A81;
    font-weight: 700;
}
.view-open svg{
    color: #3B7EFF;
}
.box{
    border-left: .5mm solid black;
    border-right: .5mm solid black;
    color: white;
    width: 29.7%;
    height: 48%;
    position: absolute;
    bottom: 2%;
    left: 33.7%;


}
#modal{
    margin-top: 12%;
    margin-left: 300px;
    width: 77.7%;
    height: 76%;
    border: none;
    background: rgba(136, 135, 135, 0.164);
    backdrop-filter: blur(3px);    
}
#modal::-webkit-scrollbar{
    width: 0;
}
#modal .container{
    padding-top: 3%;
    margin-top: 1.5%;
    margin-left: 7%;
    width: 85%;
    height: 200%;
    background-color: white;
}
#modal .container .center h1{
    color: black;
    font-size: 30px;
}
#modal .container .center code{
    font-size: 20px;
}
#modal .container .center span{
    color: black;
    font-size: 20px;
    font-weight: 100;
}
#modal .container p{
    border-bottom: 1mm solid #B6B6B6;
    font-size: 24px;
    margin-top: 2%;
    color: #B6B6B6;
    width: 90%;
    margin-left: 5%;
}
#modal .container .two-by-two{
    margin-top: 2%;
    width: 200px;
    height: 200px;
}   
#modal .container .make .circle{
    width: 15%;
}
#modal .container .make .circle #sts{
    width: 100%;
}
#modal .container ul{
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 10%;
    list-style: none;
}
#modal .container ul li{
    margin-top: 3%;
    display: flex;
    justify-content: center;
    align-items: center;
}

#modal .container ul li span{
    font-weight: 100;
    text-align: start;
    color: black;
    font-size: 20px;
    border: none;
   
    width: 15%;
}
#modal .container ul li input{
    text-align: start;
    font-size: 20px;
    padding-left: 20px;
    width: 90%;
}
.info{
    height: 40%;
    margin-top: 3%;
    display: flex;
    padding-left: 3%;
    padding-right: 3%;
    max-height: 50%;


}
#info{
    height: 100%;
    background-color: #F2F2F2;
}
.back{
    justify-content: center;
    align-items: center;
    width: 7%;
    height: 6%;
    margin-top: .3%;
    margin-left: 88.2%;
    display: flex;
    background-color: #FF0000;
    color: white;
    border: none;
    border-radius: .3rem;
}
.editable, .add-resident{
    position: absolute;
    width: 77.8%;
    height: 73.5%;
    left: 300px;
    bottom: 0;
    display: none;
    overflow-x: hidden;
    border: transparent;
    background-color: rgba(255, 255, 255, .027);
    backdrop-filter: blur(5px);
}
.view-resident{
    border: none;
    position: absolute;
    width: 77.8%;
    height: 73.5%;
    left: 300px;
    bottom: 0;
    display: none;
    background-color: rgba(255, 255, 255, .027);
    backdrop-filter: blur(5px);
}
.back-button{
    width: 100%;
    height: 5%;
    display: flex;
    justify-content: end;
    align-items: center;
}
.back-button button{
    margin-top: 1%;
    width: 7%;
    height: 100%;
    margin-right: 4.7%;
    display: flex;
    justify-content: center;
    align-items: center ;
    color: white;
    background-color: #FF0000;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.back-button button img{
    width: 17%;
    margin-left: 3%;
}
.laman{
    width: 100%;
    margin-top: 1%;
    height: 91%;
    overflow-x: hidden;
    
}
.laman::-webkit-scrollbar{
    width: 0;
}
.editable::-webkit-scrollbar, .add-resident::-webkit-scrollbar{
    width: 0;
}
.hide{
    cursor: pointer;
}
button{
    cursor: pointer;
}
.edit-container{
    margin-top: 5%;
    margin-left: 5%;
    position: relative;
    background-color: white;
    width: 90%;
    height: 80%;
    border-radius: 1rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
    display: grid;
    grid-template-rows: 40px 1fr;
    grid-template-areas: 
    "exit"
    "info";
}   
.view-container{
    margin-left: 10%;
    position: relative;
    background-color: white;
    width: 80%;
    height: auto;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
}   
.line{
    margin-left: 2.5%;
    padding-left: 1%;
    padding-right: 1%;
    width:93%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: .5mm solid gray;
}
.cen{
    text-align: center;
    line-height: 170%;
}
.pic{
    text-align: center;
    padding-top: 2%;
    margin-bottom: 5%;

}
.pic img{
    width: 30%;
    border: 4px solid #CCCCCC;
    border-radius: 15px;    
}
.cen h1 code{
    font-size: 20px;
}
.lines ul{
    border: .5mm sold blue;
    width: 100%;
    list-style: none;
}
.lines ul li{
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.lines ul li input{
    height: 100%;
    width: 70%;
    padding-left: 3%;
    border: none;
    background: none;
}
.text{
    background-color: #F2F2F2;
    display: flex;
    justify-content: center;
}
input{
    outline: none;
}
.text span{
    color: #8D8D8D;
    margin-top: 2%;
    margin-left: 2%;
}
.text .span{
    color: #8D8D8D;
    font-size: 25px;
}
.text input{
    color: #8D8D8D;
}
.text ul{
    margin-top: 5%;
    margin-bottom: 5%;
}
.lines{
    padding-left: 1%;
    padding-right: 1%;
    width:90%;
    height: 20%;
    padding: 4% 5%;
}
.gulis{
    border-bottom: .8mm solid #B6B6B6;
}
h2{
    display: flex;
    justify-content: center;
    color: #B6B6B6;
}
.line button{
    border: none;
    background: none;
}
.cir{
    width: 13%;
    clip-path: circle(50%);
}
form{
    display: grid;
    grid-template-columns: 315px 315px 315px;
    grid-template-areas: 
    "first second third";
    height: 94%;
    padding: 2%;
    padding-top: 1%;
}
.edit-pin{
    grid-area: first;
}
#open-view{
    display: none;
}
.s{
    grid-area: second;
}
.end{
    grid-area: third;
}
#two-by-two{
    position: absolute; 
    display: none;
}
#add-per-pic{
    position: absolute; 
    display: none;
}
#pic{
    
    border: 4px solid gray;
    width: 180px;
    border-radius: 12px;
}
#add-per{
    
    border: 4px solid gray;
    width: 60%;
    border-radius: 12px;
}
#label{
    grid-area: button;
    background-color: #34A353;
    height: 6%;
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 1mm;
    font-size: 15px;
    color: white;
    margin-left: 20%;
    margin-bottom: 2%;
}   
#label img{
    width: 95%;
    margin-top: 20%;
}
.kayls{
    text-align: center;
}
form ul{
    width: 100%;
    height: 100%;
}
form ul li{
    list-style: none;
    width: 60%;
    padding-left: 20%;
    margin-bottom: 3%;

}
form ul li span{
    color: black;
    font-size: 17px;
    margin-left: 5%;
}
form ul li input, select{
    font-size: 20px;
    width: 100%;
    height: 100%;
    border: .5mm solid gray;
    background: none;
    border-radius: 5px;
    padding-left: 3%;
}
select{
    width: 105%;
}
.line p input{
    width: 11ch;
    text-transform: uppercase;
    border: none;
}
.line p, .line p input{
    font-size: 17px;
}

.buttons{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: -17%;
    height: 8%;
}
.button{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: -17%;
    height: 8%;
}
.del{
    background-color: #FF0000;
}
.cancel{
    background-color: #FFC300;
}
.canceled{
    background-color: #FF0000;
    border: none;
    margin-right: 2%;
    width: 30%;
    height: 100%;
    color: white;
    border-radius: .3rem;
    font-size: 15px;
}
.save{
    background-color: #7AB2DD;
    border: none;
    margin-right: 2%;
    width: 30%;
    height: 100%;
    color: white;
    border-radius: .3rem;
    font-size: 15px;
}
.buttons button, .button{
    border: none;
    margin-right: 2%;
    width: 30%;
    height: 100%;
    color: white;
    border-radius: .3rem;
    font-size: 15px;
}
.button button{
    border: none;
    margin-right: 2%;
    width: 25%;
    height: 100%;
    color: white;
    border-radius: .3rem;
    font-size: 15px;
}
.card-one .edit-open{
    top: 5%;
    right: 2%;
    position: absolute;
    height: 20px;
    border-radius: .8rem;
    background: none;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.edit-open .edit{
    width: 24px;
}
.edit-open p{
    font-size: 20px;
    color: white;
}
    </style>
</head>
<body>
<?php
// Database connection
$host = 'localhost';
$db = 'barangay_admin';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch residents from the database
$sql = "SELECT first_name, middle_name, last_name, gender, birthday FROM residentsinfo";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$residents = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Function to calculate age from birthday
function calculateAge($birthday) {
    $birthDate = new DateTime($birthday);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;
    return $age;
}
?>

    <nav>WELCOME BARANGAY ADMIN!</nav>
    <aside>
        <div id="one">
        <div class="circles">
            <img src="../img/nolabel.png" alt="" for="input-file" id="logo">
        </div>
        
            <input id="name" type="text" placeholder="Brgy. Nueva Victoria Admin" readonly>
           
        
        
        </div>

            <div class="fix">
                <div class="ed">
        <ul>
            <li>
                <a href="dash.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <p class="title">MENU</p>
            <li>
                <a href="officials.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z"/></svg>
                    <span>Barangay Officials & Staffs</span>
                </a>
            </li>
           
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn rotate">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                    <span>Requested Documents</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                    <ul class="sub-menu">
                        <div>
                          <li><a href="indigency.php" class="size" >Certificate of Indigency</a></li>
                          <li><a href="clearance.php" class="size" >Barangay Clearance</a></li>
                          <li><a href="business.php" class="size" >Barangay Business Permit</a></li>
                          <li><a href="id.php" class="size" >Barangay ID</a></li>
                        </div>
                    </ul>
                
            </li>

            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                    <span>Records</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                    <ul class="sub-menu show">
                        <div>
                          <li class="activate"><a href="Resident.php" class="size" >Recident Records</a></li>
                          <li><a href="blotter.php" class="size" >Blotter Records</a></li>
                          <li><a href="household.php" class="size" >Household Records</a></li>
                          <li><a href="revenue.php" class="size" >Revenue Records</a></li>
                        </div>
                    </ul>
                
            </li>



            


            <p class="title">SYSTEM</p>
            <li >
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
                    <span>Settings</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                    <ul class="sub-menu">
                        <div>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>  
                            <a href="info.php" class="sizes" >Barangay Information</a></li>
                            <li class="mix height">
                                <div class="positionx" style="color:#FFFFFF70;">
                                    <span class="material-symbols-outlined">
                                        radio_button_checked
                                        </span>                    
                                </div>  
                            <a href="chairman.php" class="sizes" >Chairmanship</a></li>
                            <li class="mix height">
                                <div class="positionx" style="color: #FFFFFF70;">
                                    <span class="material-symbols-outlined">
                                        radio_button_checked
                                        </span>                    
                                </div>
                                <a href="purok.php" class="sizes" >Purok</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="prcint.php" class="sizes" >Precint</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="bale.php" class="sizes" >Household</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="positions.php" class="sizes" >Positions</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="user.php" class="sizes" >User</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="services.php" class="sizes" >Services</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="backup.php" class="sizes" >Backup</a></li>
                          <li class="mix height">
                            <div class="positionx" style="color: #FFFFFF70;">
                                <span class="material-symbols-outlined">
                                    radio_button_checked
                                    </span>                    
                            </div>
                            <a href="logout.php" class="sizes" >Logout</a></li>
                        </div>
                    </ul>
            </li>
           
           
        </ul>                    
                </div>
            </div>


    </aside>
    <main>
        <div class="make">
            <div class="circle">
              <img id="st" src="../img/logs.jpg" alt="">  
            </div>
        

        <div class="center">
            <h1><code>Welcome to the Barangay Administrative Portal of</code><br>BARANGAY RESIDENT RECORDS</h1>
        </div>  
        <div class="circle">
            <img id="st" src="../img/logs.jpg" alt="">  
          </div>

        </div>
        

        <div class="add">
            <button id="add">
                <input type="search" placeholder="Search...">
                <span class="material-symbols-outlined">
                    search
                </span>
                    
            </button>

            <button id="adds" onclick="toggleAdd(this)" data-add="open-add" class="add-open">
                <span >
                    <img src="../img/add.png" alt="">
                    </span>
                    
                    <p>RESIDENT</p>
            </button>
        </div>

        
        <div class="sec">
    <?php if (!empty($residents)): ?>
        <?php foreach ($residents as $resident): ?>
            <div class="card-one">
                <!-- Edit Button -->
                <button onclick="toggleEdit(this)" data-modal="open-edit" class="edit-open">
                    <span>
                        <img src="../img/edit.png" alt="Edit" class="edit">
                    </span>
                </button>

                <!-- Resident's Full Name -->
                <input 
                    type="text" 
                    value="<?php echo htmlspecialchars($resident['last_name'] . ', ' . $resident['first_name'] . ' ' . $resident['middle_name']); ?>" 
                    class="input-one" 
                    readonly
                >
                <br>

                <div class="box">.</div>

                <!-- Details Section -->
                <div class="merge">
                    <div class="box-one">
                        <p class="name-one">GENDER</p>
                        <input 
                            type="text" 
                            value="<?php echo htmlspecialchars($resident['gender']); ?>" 
                            readonly
                        >
                    </div>

                    <div class="box-two">
                        <p class="name-one">AGE</p>
                        <input 
                            type="text" 
                            value="<?php echo calculateAge($resident['birthday']); ?>" 
                            readonly
                        >
                    </div>

                    <div class="box-three">
                        <!-- View Button -->
                        <button onclick="toggleView(this)" data-view="open-view" class="view-open" style="cursor: pointer;">
                            <p class="name-one">VIEW</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No residents found.</p>
    <?php endif; ?>
</div>


 



        </div>
        </div>                 


        
     <div class="editable" id="open-edit">
        <div class="edit-container">
            <div class="line">
                <p>EDIT <input type="text" oninput="increaseWidth(this)">'S INFORMATION</p>   
                <button onclick="toggleEdit(this)" class="exit"><img src="../img/exit.png" alt="" class="edits"></button>          

            </div>

            <form>
                <!-- File Input for Photo -->
                <input type="file" id="add-per-pic" accept="image/jpeg, image/jpg, image/png">

                <div class="edit-pin">
               

                    <!-- Address Fields -->
                    <div class="wanans">
                        <ul>
                        <li>
                            <span>Last Name</span>
                            <input type="text" name="last_name" id="last_name" required>
                        </li>
                        <li>
                            <span>Place of Birth</span>
                            <input type="text" name="place_of_birth" id="place_of_birth" required>
                        </li>
                            <li>
                                <span>Address</span>
                                <input type="text" name="address" id="address" required>
                            </li>
                            <li>
                                <span>House No.</span>
                                <input type="text" name="house_no" id="house_no" required>
                            </li>
                            <li>
                                <span>Purok</span>
                                <input type="text" name="purok" id="purok" required>
                            </li>
                            
                        <li>
                            <span>Occupation</span>
                            <input type="text" name="occupation" id="occupation" required>
                        </li>
                        </ul>
                    </div>
                </div>

                <!-- Personal Details -->
                <div class="s">
                    <ul class="bellows">
                        <li>
                            <span>First Name</span>
                            <input type="text" name="first_name" id="first_name" required>
                        </li>

                        <li>
                            <span>Age</span>
                            <input type="number" name="age" id="age" required>
                        </li>
                        <li>
                            <span>Civil Status</span>
                            <select name="civil_status" id="civil_status" required>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </li>
                        <li>
                            <span>Citizenship</span>
                            <input type="text" name="citizenship" id="citizenship" required>
                        </li>
                        <li>
                            <span>Precinct No.</span>
                            <input type="text" name="precinct_no" id="precinct_no" required>
                        </li>
                        <li>
                            <span>Contact Number</span>
                            <input type="text" name="contact_number" id="contact_number" required>
                        </li>
                    </ul>
                </div>

                <!-- Additional Details -->
                <div class="end">
                    <ul class="bellows">
                        <li>
                            <span>Middle Name</span>
                            <input type="text" name="middle_name" id="middle_name" required>
                        </li>
                        <li>
                            <span>Birthday</span>
                            <input type="date" name="birthday" id="birthday" required>
                        </li>
                        <li>
                            <span>Gender</span>
                            <select name="gender" id="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </li>
                        <li>
                            <span>Voters Status</span>
                            <select name="voters_status" id="voters_status" required>
                                <option value="registered">Registered</option>
                                <option value="unregistered">Unregistered</option>
                            </select>
                        </li>
                        <li>
                            <span>Email Address</span>
                            <input type="email" name="email" id="email" required>
                        </li>
                        
                    </ul>

                    <!-- Buttons -->
                    <div class="button">
            <button class="del">DELETE</button>
            <button class="cancel">CANCEL</button>
            <button class="save">SAVE</button>
        </div>   
                </div>
            </form>
        </div>
     </div>
  





     <div class="add-resident" id="open-add">
        <div class="edit-container">
            <!-- Header Section -->
            <div class="line">
                <p>ADD NEW RESIDENT</p>   
                <button onclick="toggleEdit(this)" class="hide">
                    <img src="../img/exit.png" alt="Close" class="edits">
                </button>
            </div>

            <!-- Form Section -->
            <form id="addResidentForm" method="POST" action="addresi.php">
                <!-- File Input for Photo -->
                <input type="file" id="add-per-pic" accept="image/jpeg, image/jpg, image/png">

                <div class="edit-pin">
               

                    <!-- Address Fields -->
                    <div class="wanans">
                        <ul>
                        <li>
                            <span>Last Name</span>
                            <input type="text" name="last_name" id="last_name" required>
                        </li>
                        <li>
                            <span>Place of Birth</span>
                            <input type="text" name="place_of_birth" id="place_of_birth" required>
                        </li>
                            <li>
                                <span>Address</span>
                                <input type="text" name="address" id="address" required>
                            </li>
                            <li>
                                <span>House No.</span>
                                <input type="text" name="house_no" id="house_no" required>
                            </li>
                            <li>
                                <span>Purok</span>
                                <input type="text" name="purok" id="purok" required>
                            </li>
                            
                        <li>
                            <span>Occupation</span>
                            <input type="text" name="occupation" id="occupation" required>
                        </li>
                        </ul>
                    </div>
                </div>

                <!-- Personal Details -->
                <div class="s">
                    <ul class="bellows">
                        <li>
                            <span>First Name</span>
                            <input type="text" name="first_name" id="first_name" required>
                        </li>

                        <li>
                            <span>Age</span>
                            <input type="number" name="age" id="age" required>
                        </li>
                        <li>
                            <span>Civil Status</span>
                            <select name="civil_status" id="civil_status" required>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </li>
                        <li>
                            <span>Citizenship</span>
                            <input type="text" name="citizenship" id="citizenship" required>
                        </li>
                        <li>
                            <span>Precinct No.</span>
                            <input type="text" name="precinct_no" id="precinct_no" required>
                        </li>
                        <li>
                            <span>Contact Number</span>
                            <input type="text" name="contact_number" id="contact_number" required>
                        </li>
                    </ul>
                </div>

                <!-- Additional Details -->
                <div class="end">
                    <ul class="bellows">
                        <li>
                            <span>Middle Name</span>
                            <input type="text" name="middle_name" id="middle_name" required>
                        </li>
                        <li>
                            <span>Birthday</span>
                            <input type="date" name="birthday" id="birthday" required>
                        </li>
                        <li>
                            <span>Gender</span>
                            <select name="gender" id="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </li>
                        <li>
                            <span>Voters Status</span>
                            <select name="voters_status" id="voters_status" required>
                                <option value="registered">Registered</option>
                                <option value="unregistered">Unregistered</option>
                            </select>
                        </li>
                        <li>
                            <span>Email Address</span>
                            <input type="email" name="email" id="email" required>
                        </li>
                        
                    </ul>

                    <!-- Buttons -->
                    <div class="buttons">
                        <input type="submit" class="canceled hide" id="cancelButton" value="CANCEL">
                        <input type="submit" class="save" name="save" value="SAVE" id="saveButton">
                    </div>
                </div>
            </form>
        </div>
    </div>
  





     <div class="view-resident" id="open-view">
        <div class="back-button">
            <button onclick="toogleRemove(this)" class="remove">
                <p>BACK</p>
                <img src="../img/back.png" alt="">
            </button>
        </div>
        <div class="laman">
        <div class="view-container">
            <div class="lines">
                <div class="make">
                    <div class="cir">
                      <img id="st" src="../img/logs.jpg" alt="">  
                    </div>
                
        
                <div class="cen">
                    <h1><code>Municipality of Mexico</code><br>BARANGAY NUEVA VICTORIA<br><code>Province of Pampanga</code></h1>
                </div>  
                <div class="cir">
                    <img id="st" src="../img/logs.jpg" alt="">  
                  </div>
        
                </div>
                <div class="gulis">
                    <h2>RESIDENT INFORMATION</h2>                    
                </div>  
                <ul>
                    <li>
                        <span>Name:</span>
                        <input type="text" readonly>
                    </li>
                    <li>
                        <span>Contact No.:</span>
                        <input type="text" readonly>
                    </li>
                    <li>
                        <span>Address:</span>
                        <input type="text" readonly>
                    </li>
                </ul>
                <div class="text">
                        <span class="span">
                            <p>Information</p>
                        </span>
                        <ul>
                            <li>
                                <span>Email Address:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Place of Birth:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Birthday:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Age:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Gender:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Civil Status:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Citizenship:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Occupation:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Voter's Status:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Precinct Number:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>Purok:</span>
                                <input type="text" readonly>
                            </li>
                            <li>
                                <span>house Number:</span>
                                <input type="text" readonly>
                            </li>
                        </ul>
                </div>
            </div>


        </div>            
        </div>

     </div>
  
    </main>
    <script src="../java/java.js">
       
       document.getElementById('saveButton').addEventListener('click', function () {
    const form = document.getElementById('addResidentForm');
    const formData = new FormData(form);

    fetch('addresi.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show the server's response
        form.reset(); // Clear the form
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to save resident data.');
    });
});




    </script>
</body>
</html>