<style type="text/css">

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: green;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}


/*.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}*/


/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 2;
    background: #0d340d!important;
    color: #E6E6CA;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #0d340d!important;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid red;
}

#sidebar ul p {
    color: white;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: green;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: green!important;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: green;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: calc(100% - 250px);
    padding: 40px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}

#content.active {
    width: 100%;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {

    hr{
      border: 2.5px solid rgb(24,24,24);
      border-radius: 100%;
      maxw-idth: 100%!important;
      /*height: 10px*/
      margin: 15px!important;
      align-items: center!important;
            align-content: center!important;
            text-align: center!important;

      }



    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #content {
        width: 100%;
    }
    #content.active {
        width: calc(100% - 250px);
    }
    #sidebarCollapse span {
        display: none;
    }


    body{
        padding: 0px!important;
        margin:0px!important;
    }
    .header{
        position: fixed!important;
        max-width: 100%!important;
        padding: 0px!important;
        margin:0px!important;

    }
    .divHeader{
        width: 100%!important;
        padding: 0px!important;
        margin:0px!important;
    }
    .btnHeader{
        background-color: transparent!important;
        border-color: transparent!important;
        padding: 0px!important;
        margin:0px!important;
        border-radius: 25px;
    }
    .btnHeader:hover{
        background-color: gray!important;
        border-color: transparent!important;
        padding: 0px!important;
        margin:0px!important;
    }
    .lblRBI{
        margin-top: 70px!important;
        margin-left: -20px!important;
        font-size: 25px!important;
    }
    /*#sidebar*/
    /*.btnHeader:focus{
        background-color: pink!important;
        border-color: transparent!important;
        padding: 0px!important;
        margin:0px!important;
    }*/
}


</style>

<div class="divHeader">
<nav class="header">


                    <button type="button" id="sidebarCollapse" class="btnHeader " style="margin-top: -20px;">
                        <!-- <i class="fas fa-align-left"></i> -->
                        <!-- span> -->
                            <img src="../../images/img_menu.png">
                        <!-- </span> -->
                    </button>

            </nav>

        </div>
        <p style="margin-left:2em;padding-left:2em;">
        <h3 class="lblRBI" style="font-weight: bolder;padding: 10px;margin-left: 20px;color: black;">Registry of Barangay Inhabitants   <i style="font-weight: bolder;color: rgb(52,73,96);right: 0;top: 0;float: right;">

    <?php
    // $date = date("l | M d, Y | h:i A");
    $date = date("l | M d, Y ");
        echo "$date"; ?></i></h2></p>
