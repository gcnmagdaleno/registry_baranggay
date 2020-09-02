<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST['hhhp_submitButton']) {
        case 'LOGOUT':
            echo "<script>alert('CLICKED LOGOUT');</script>";

            break;
        case 'SETTINGS':

            echo "<script>alert('CLICKED SETTINGS');</script>";

            break;
        default:
            # code...
            break;
    }
}

?>

<style type="text/css">

    .logout,#logout{
    width: 92%;
    text-align: center;
    display: block;
    background-color: #c5bef9;
    color: #242424;
    font-weight: bolder;
    font-size: 20px;
    padding: 10px;
    margin: 10px;
    }

</style>


<form method="POST" action="?" name="form_HouseHoldHeadProfile2" class="form_HouseHoldHeadProfile" id="form_HouseHoldHeadProfile" data-ajax="false" enctype="multipart/form-data">

<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <button name="hhhp_submitButton" class="logout" id="logout" value="LOGOUT BUTTON"> Logout</button>
                </li>
                <li>
                    <button name="hhhp_submitButton" class="logout" id="logout" value="SETTINGS BUTTON"> Settings</button>
                </li>


            </ul>
        </nav>

</form>
