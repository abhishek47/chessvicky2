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
                                    <p>{{ empty(Auth::user()->profile->bio) ? 'Bio not added!' : Auth::user()->profile->bio }}</p>
                                     <div class="row">
                                      <div class="col col-md-6">
                                        <ul class="member-info">
                                         
                                            <li><i class="fa fa-envelope"></i> {{ Auth::user()->email }}</li>
                                            <li><i class="fa fa-phone"></i>
                                               <b>Plan : </b> {{ Auth::user()->profile->plan ? 'Premium' : 'Freemium' }} &nbsp;
                                               @if(Auth::user()->plan == 0) 
                                                   <span style="font-size: 14px;">
                                                       <a href="/user/upgrade"><i class="fa fa-level-up"></i>  Upgrade Plan</a>
                                                   </span>
                                               @endif
                                             </li>
                                            <li><i class="fa fa-clock-o"></i> Member Since <b>{{ Auth::user()->created_at->toFormattedDateString() }} </b></li>
                                           
                                        </ul>
                                       </div> 
                                       <div class="col col-md-6">
                                        <ul class="member-info">
                                         
                                            <li><i class="fa fa-user"></i> <b>Leaderboard Rank :</b> {{ Auth::user()->profile->rank }} </li>
                                            <li><i class="fa fa-tasks"></i> <b>Points :</b> {{ Auth::user()->profile->points }}</li>
                                            <li><i class="fa fa-money"></i> <b>Coins :</b> {{ Auth::user()->profile->coins }} &nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-shopping-cart"></i>  Buy Coins</a> &nbsp;|&nbsp; <span style="font-size: 14px;"><a href="/user/upgrade"><i class="fa fa-bank"></i>  Redeem Coins</a></span></span></li>
                                           
                                        </ul>
                                       </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                
             </div>
        </section>