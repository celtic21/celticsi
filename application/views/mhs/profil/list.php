  <div class="row">
              <div class="col-12 col-sm-12 col-lg-7">
                <div class="card author-box card-primary">
                  <div class="card-body">
                    <div class="author-box-left">
                      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <a href="#"><?php echo $this->session->userdata('MhsNama'); ?></a>
                      </div>
                      <div class="author-box-job"><?php echo $this->session->userdata('MhsNim'); ?></div>
                      <div class="author-box-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                      </div>
                      <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Follow Hasan On</div></div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                      <div class="float-right mt-sm-0 mt-3">
                        <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-danger">
                  <div class="card-header">
                    <h4>Users</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="owl-carousel owl-theme" id="users-carousel">
                      <div>
                        <div class="user-item">
                          <img alt="image" src="../assets/img/avatar/avatar-1.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Hasan Basri</div>
                            <div class="text-job text-muted">Web Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user1 followed');" data-unfollow-action="alert('user1 unfollowed');">Follow</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="../assets/img/avatar/avatar-2.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Kusnaedi</div>
                            <div class="text-job text-muted">Mobile Developer</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user2 followed');" data-unfollow-action="alert('user2 unfollowed');">Follow</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="../assets/img/avatar/avatar-3.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Bagus Dwi Cahya</div>
                            <div class="text-job text-muted">UI Designer</div>
                            <div class="user-cta">
                              <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="../assets/img/avatar/avatar-4.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Wildan Ahdian</div>
                            <div class="text-job text-muted">Project Manager</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="user-item">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="img-fluid">
                          <div class="user-details">
                            <div class="user-name">Deden Febriansyah</div>
                            <div class="text-job text-muted">IT Support</div>
                            <div class="user-cta">
                              <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name">Hasan Basri <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                  </div>
                  <div class="card-footer text-center pt-0">
                    <div class="font-weight-bold mb-2 text-small">Follow Hasan On</div>
                    <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-github">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
                <div class="card mt-4">
                  <div class="card-header">
                    <h4>Authors</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-1.png" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">
                          <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i class="fas fa-wrench"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-2.png" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                          <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-3.png" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                          <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                          <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-5.png" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                          <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i class="fas fa-wrench"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                          <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-1.png" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                          <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></div>
                        </div>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item">
                          <img alt="image" src="../assets/img/avatar/avatar-2.png" class="img-fluid" data-toggle="tooltip" title="Ryan">
                          <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              