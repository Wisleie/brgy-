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
    grid-template-rows: auto 95.5vh;
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
.rotate svg:last-child{
    rotate: -180deg;
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
    #active button{
    margin-left: 4px;
    background-color: #DC0505;
    color: white;
    border:  none;
    width: 90%;
    height: 50%;
    cursor: pointer;
    border-radius: 1mm;
}
#action button{
    background-color: #3B7EFF;
    border: none;
    color: white;
    border:  none;
    margin-left: 15%;
    width: 70%;
    height: 90%;
    cursor: pointer;
    border-radius: 1mm;

}
input{
    width: 100%;
    text-align: center;
    border: none; 
    outline: none;
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
.add p{
    margin-top: 1%;
    font-weight: 700;
}
.contents{
    background-color: white;
    width: 100%;
    height: auto;
    border-radius: 5px;
              
}
main-three{
    bottom: 1.5%;
    left: 345px;
    background: none;
    width: 69%;
    height: 64%;
    gap: 15%;
    position: fixed;
    padding: 10px;
    background-color: #F0F0F0;
    overflow-x: auto;
    border-radius: 5px;
}
table{
    width: 100%;
    height: auto;
    overflow-y: hidden;
}
.th{
    width: 5.5%;
    text-align: center;

}
.thr-title{
    width: 14%;
    text-align: center;

}
.three-title{
    width: 5%;
    text-align: center;

}
#add{
    position: absolute;
    right: 0;
    top: 1%;
    background-color: #ffffff63;
    border-radius: .4rem;
    border: none;
    color: white;
    width: 30%;
    height: 10%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    border: .5mm solid rgba(255, 255, 255, 0.693);
    padding-left: 10px;
    padding-right: 10px;
}
#add input{
    height: 100%;
    font-size: 17px;
    background: none;
    border: none;
    color: white;
    text-align:start;
}
#add input::placeholder{
    color: white;
    font-size: 17px;
}




/* X-Small devices (portrait phones, less than 576px)
 No media query for `xs` since this is the default in Bootstrap

// Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) { }

/* Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) {}

/* Large devices (desktops, 992px and up)*/
@media (min-width: 992px) {  }

/* X-Large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) { }

/* XX-Large devices (larger desktops, 1400px and up)*/
@media (min-width: 1400px) {  }
</style>
</head>
<body>
    <nav>WELCOME BARANGAY ADMIN!</nav>
    <aside>

            <img id="logo" src="../img/1.jpg" alt="">
            <input id="name" type="text" placeholder="Brgy. Nueva Victoria Admin" readonly>
            
            
            <br>


            <div class="fix">
                <div class="ed">
        <ul>
            <li style="margin-top: 2%; margin-bottom: 2%;">
                <a href="dash.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <p class="title">MENU</p>
            <li style="margin-top: 2%; margin-bottom: 2%;">
                <a href="officials.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z"/></svg>
                    <span>Barangay Officials & Staffs</span>
                </a>
            </li>
           
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn rotate" >
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                    <span>Requested Documents</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                    <ul class="sub-menu show">
                        <div>
                          <li><a href="indigency.php" class="size" >Certificate of Indigency</a></li>
                          <li><a href="clearance.php" class="size" >Barangay Clearance</a></li>
                          <li class="activate"><a href="business.php" class="size" >Barangay Business Permit</a></li>
                          <li><a href="id.php" class="size" >Barangay ID</a></li>
                        </div>
                    </ul>
                
            </li>

            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
                    <span>Records</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>
                    <ul class="sub-menu">
                        <div>
                          <li><a href="Resident.php" class="size" >Recident Records</a></li>
                          <li><a href="blotter.php" class="size" >Blotter Records</a></li>
                          <li><a href="household.php" class="size" >Household Records</a></li>
                          <li><a href="revenue.php" class="size" >Revenue Records</a></li>
                        </div>
                    </ul>
                
            </li>



            


            <p style="margin-top: 2%;" class="title">SYSTEM</p>
            <li >
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                   <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg>
                    <span>Settings</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
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
            <h1><code>Welcome to the Barangay Administrative Portal of</code><br>BARANGAY BUSINESS PERMIT</h1>
        </div>  
        <div class="circle">
            <img id="st" src="../img/logs.jpg" alt="">  
          </div>

        </div>
        

        <div class="add">
            <p>LIST OF REQUESTED PERMIT</p>

            <button id="add">
                <input type="text" placeholder="Search...">
                <span class="material-symbols-outlined">
                    search
                    </span>
                    
            </button>
        </div>
        <main-three>
            <div class="contents">
                <table>
                    <thead>
                        <tr>
                        <th class="three-title">ID</th>
                        <th class="thr-title">NAME</th>
                        <th class="thr-title">DELIVERY DATE</th>
                        <th class="thr-title">PURPOSE</th>
                        <th class="thr-title">DATE REQUESTED</th>
                        <th class="thr-title">DELIVERY FEE</th>
                        <th class="thr-title">TRACING CODE</th>
                        <th class="th">STATUS</th>
                        <th class="th">ACTION</th>                       
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" readonly placeholder="1"></td>
                            <td><input type="text" readonly placeholder="Riana Ashley A. Calipi"></td>
                            <td><input type="text" readonly placeholder="November 10, 2025"></td>
                            <td><input type="text" readonly placeholder="Manlalaki"></td>
                            <td><input type="text" readonly placeholder="November 10, 2024"></td>
                            <td><input type="text" readonly placeholder="1,000,000,000.00"></td>
                            <td><input type="text" readonly placeholder="8743755786785"></td>
                            <td id="active"><button>Active</button></td>
                            <td id="action"><button >Action</button></td>
                        </tr>
                        <tr>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td><input type="text" readonly></td>
                            <td id="active"><button>Active</button></td>
                            <td id="action"><button >Action</button></td>
                        </tr>

         
     
    
                    </tbody>
                </table>
            </div>            
        </main-three>

    
    
    
     
         
    </main>
    <script src="../java/java.js"></script>
</body>
</html>