<?php  
?>
  <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
          
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/logo2.png" alt="" /></a>
					<h2><?php echo $username ?></h2>
				</div>
				<div class="profile-social-dtl">
				 
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li >
                            <a class="has-arrow" href="#">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Domain Inventory</span>
								</a>
                          
                        </li>
                        <li>
                            <a class="has-arrow" href="#"><i class="icon nalika-mail icon-wrap"></i> 
                            	<span class="mini-click-non">Standard Pages</span></a>
 
                        </li>
                  
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">PBN List</span></a>
                       
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">DFY</span></a>
                             
                        </li>
                      
                        <li>
                            <a class="has-arrow" href="#" ><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non"> Articles</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="#"><span class="mini-sub-pro"> 1 </span></a></li>
                                <li><a title="View Mail" href="#"><span class="mini-sub-pro">2</span></a></li>
                                <li><a title="View Mail" href="#"><span class="mini-sub-pro">3</span></a></li>
                                
                            </ul>
                        </li>
                         
                        <li>
                            <a class="has-arrow" href="#" ><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non"> Purchasing & Site Build</span></a>
                            
                        </li>
                           <li>
                            <a class="has-arrow" href="#" ><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non"> Cancelled Orders</span></a>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>


    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo2.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                          
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                              <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                  <li> <a href="#">Dashboard </a> </li><li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail nalika-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                     </div>

                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                            <span class="admin-name"> <?php echo $username ?></span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="functions/logout.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                                                 
                                                           
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



              <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Domain Inventory    </a>
                                          
                                        </li>
                                          <li><a data-toggle="collapse" data-target="#Charts" href="#">Standard Pages   </a>
                                      
                                         
                                        </li>
                                         
                                         <li><a data-toggle="collapse" data-target="#Charts" href="#">PBN List </a>
                                           
                                        </li>
                                        
                                         <li><a data-toggle="collapse" data-target="#Charts" href="#">DFY   </a>
                                            
                                        </li>
                                         <li><a data-toggle="collapse" data-target="#Charts" href="#">Articles </a>
                                         
                                        </li>
                                           <li><a data-toggle="collapse" data-target="#Charts" href="#">Purchasing & SIte Build </a>
                                         
                                        </li> 
                                          <li><a data-toggle="collapse" data-target="#Charts" href="#">Cancelled </a>
                                         
                                        </li> 
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->