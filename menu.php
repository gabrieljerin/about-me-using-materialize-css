<!--TOP NAV-->
<div class="navbar-fixed">
    <nav class="top-nav nav-background">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-render" class="button-collapse blue-grey-text"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a onclick="goTop(this)">An Overview</a></li>
                    <li><a href="#skill">Technical Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#scan">Organisational Scan</a></li>
                    <li><a href="#qualification">Qualifications</a></li>
                    <li><a href="#footer">Stay Connected</a></li>
                </ul>
                <ul class="side-nav side-nav-cls" id="mobile-render">
                    <li><a onclick="goTop(this)">An Overview</a></li>
                    <li><a href="#skill">Technical Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#scan">Organisational Scan</a></li>
                    <li><a href="#qualification">Qualifications</a></li>
                    <li><a href="#footer">Stay Connected</a></li>
                    <li><a href="./resume/Resume_Alex.pdf" class="btn waves-effect waves-light blue hide download-btn-sm-d"><i class="material-icons right download-btn-sm-d">file_download</i>Download CV</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="row">
    <div class="col s3 s3-width">
        <!--SIDE NAV-->
        <ul id="slide-out" class="side-nav nav-background fixed responsive-cls">
            <li><div class="user-view">
                    <div class="background">
                        <img src="image/scott-webb-195100.jpg" class="nav-background-img">
                    </div>
                    <a><img class="circle" src="image/_20171005_203257.JPG"></a>
                    <a><span class="user-color-cls name"><b>Alex Oommen</b></span></a>
                    <a><span class="user-color-cls email"><b>jerin_alex@hotmail.com</b></span></a>
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
                <a id="downloadBtn" href="./resume/Resume_Alex.pdf" class="btn waves-effect waves-light blue"><i class="material-icons right">file_download</i>Download CV</a>
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