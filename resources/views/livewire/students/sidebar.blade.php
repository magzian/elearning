<div>
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div class="logo-icon">
            <img src= " {{asset('dashboard/assets/images/logo-icon.png')}} " class="logo-img" alt="">
          </div>
          <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Maxton</h5>
          </div>
          <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
          </div>
        </div>
        <div class="sidebar-nav">
            <!--navigation-->
            <ul class="metismenu" id="sidenav">
              <li>
                <a href="/student/dashboard" wire:navigate>
                  <div class="parent-icon"><i class="material-icons-outlined">home</i>
                  </div>
                  <div class="menu-title">Dashboard</div>
                </a>
              </li>
              <li>
                <a href="{{ route('my-courses') }}" wire:navigate>
                  <div class="material-symbols-outlined">
                    menu_book
                  </div>
                  <div class="menu-title">Courses</div>
                </a>
              </li>
              <li>
                <a href="/assignment" wire:navigate>
                  <div class="material-symbols-outlined">
                    article
                    </div>
                  <div class="menu-title">Assignments</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    topic
                    </div>
                  <div class="menu-title">Results</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    notifications
                    </div>
                  <div class="menu-title">Notifications</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    style
                    </div>
                  <div class="menu-title">Resources</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    mail
                    </div>
                  <div class="menu-title">Messages</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    person
                </div>
                  <div class="menu-title">Profile</div>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <div class="material-symbols-outlined">
                    logout
                    </div>
                  <div class="menu-title">Log out</div>
                </a>
              </li>
             </ul>
            <!--end navigation-->
        </div>
      </aside>
</div>
