 <section class="team-single-content section-padding" style="padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12 col-md-12">
                        <div class="row member panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">
                           <div class="panel-heading"></div>
                            <div class="col col-sm-2" id="upic">
                                <div class="member-pic">
                                    <img src="images/team-s2/img-5.jpg" style="width: 140px;height: 140px;" alt class="img img-responsive img-circle">
                                </div>
                            </div>
                            <div class="col col-sm-10" id="udetails">
                                <div class="member-details">
                                    <h3>{{ Auth::user()->name }} <span style="font-size: 16px;"><a href="/user/edit"><i class="fa fa-edit"></i>  Edit Profile</a></span></h3>
                                    <span>@  {{ Auth::user()->username }}</span>
                                    <p>Hasib has over 15 years of consulting experience in the US, Europe, Japan, and across the Asia Pacific region. He advises clients on strategy formulation, strategic M&amp;A, turnaround &amp; restructuring, market and channel development improvement issues.</p>
                                     <div class="row">
                                      <div class="col col-md-6">
                                        <ul class="member-info">
                                         
                                            <li><i class="fa fa-envelope"></i> {{ Auth::user()->email }}</li>
                                            <li><i class="fa fa-phone"></i> <b>Plan : </b> Freemium &nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-level-up"></i>  Upgrade Plan</a></span></li>
                                            <li><i class="fa fa-clock-o"></i> Member Since <b>{{ Auth::user()->created_at->toFormattedDateString() }} </b></li>
                                           
                                        </ul>
                                       </div> 
                                       <div class="col col-md-6">
                                        <ul class="member-info">
                                         
                                            <li><i class="fa fa-user"></i> <b>Leaderboard Rank :</b> 3 </li>
                                            <li><i class="fa fa-tasks"></i> <b>Points :</b> 2018</li>
                                            <li><i class="fa fa-money"></i> <b>Coins :</b> 23 &nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-shopping-cart"></i>  Buy Coins</a> &nbsp;|&nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-bank"></i>  Redeem Coins</a></span></span></li>
                                           
                                        </ul>
                                       </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                
             </div>
        </section>