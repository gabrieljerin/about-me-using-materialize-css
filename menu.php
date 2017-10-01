<!--TOP NAV-->
<div class="navbar-fixed">
    <nav class="top-nav nav-background">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down horizontal-menu-cls">
                    <li><a onclick="goTop(this)">An Overview</a></li>
                    <li><a href="#skill">Technical Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#">Qualifications</a></li>
                    <li><a href="#">Hobbies</a></li>
                </ul>
                <ul class="side-nav side-nav-cls" id="mobile-demo">
                    <li><a onclick="goTop(this)">An Overview</a></li>
                    <li><a href="#skill">Technical Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#">Qualifications</a></li>
                    <li><a href="#">Hobbies</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="row">
    <div class="col s3 s3-width">
        <!--SIDE NAV-->
        <ul id="slide-out" class="side-nav nav-background fixed">
            <li><div class="user-view">
                    <div class="background">
                        <img src="image/mat1.jpg" class="nav-background-img">
                    </div>
                    <a><img class="circle materialboxed" src="image/myself.jpeg"></a>
                    <a><span class="white-text name">Alex Oommen</span></a>
                    <a><span class="white-text email">jerin_alex@hotmail.com</span></a>
                </div></li>
            <li><a class="subheader"><i class="fa fa-address-card" aria-hidden="true"></i>Address</a></li>
            <li><div class="divider"></div></li>
            <div class="address">
                <p>VELLAVIL HOUSE, MADAPPALLY P.O</p>
                <p>CHANGANACHERRY, KOTTAYAM</p>
                <p>KERALA, INDIA</p>
                <p>PIN-686546</p>
                <p>PHONE: 9656332581</p>
            </div>
            <div class="download-cls">
                <button type="button" class="btn waves-effect waves-light blue"><i class="material-icons right">file_download</i>Download CV</button>
            </div>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    <div class="col s9 s9-width">
        <div class="slider-margin">
            <?php require_once './masterpage.php'; ?>
        </div>
    </div>
</div>