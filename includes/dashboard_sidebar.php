<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: rgb(232,10, 42) !important; color:white !important;">
  <ul class="nav">
    <!--<li class="nav-item" >-->
    <!--  <a class="nav-link" href="$uri->site?>dash-board" style="color:white !important;">-->
    <!--    <i class="mdi mdi-grid-large menu-icon" style="color:white;"></i>-->
    <!--    <span class="menu-title" style="color:white !important;">Dashboard</span>-->
    <!--  </a>-->
    <!--</li>-->
    <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>dash-board" style="color:white !important;">
        <i class="mdi mdi-grid-large menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>transactions" style="color:white !important;">
        <i class="mdi mdi-file-document menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Transactions</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>send-money" style="color:white !important;">
        <i class="mdi mdi-bank-transfer menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Send Money</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>profile-setting" style="color:white !important;">
        <i class="mdi mdi-account-box menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>get-loan" style="color:white !important;">
        <i class="mdi mdi-bank menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Apply for Loans</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?=$uri->site?>crypto-wallet" style="color:white !important;">
        <i class="mdi mdi-wallet menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Wallet Address</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $uri->site ?>sign-out" style="color:white !important;">
        <i class="mdi mdi-logout menu-icon" style="color:#ffcccc !important;"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>