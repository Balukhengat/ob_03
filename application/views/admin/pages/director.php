<?php if(isset($_SESSION['adminid'])){?>
<?php $this->load->view('admin/layout/head')?>
<body class="theme-red">
    <!-- Page Loader -->
<!--     <div class="page-loader-wrapper"> -->
<!--         <div class="loader"> -->
<!--             <div class="preloader"> -->
<!--                 <div class="spinner-layer pl-red"> -->
<!--                     <div class="circle-clipper left"> -->
<!--                         <div class="circle"></div> -->
<!--                     </div> -->
<!--                     <div class="circle-clipper right"> -->
<!--                         <div class="circle"></div> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <p>Please wait...</p> -->
<!--         </div> -->
<!--     </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
   <?php $this->load->view('admin/layout/header')?>
    <section>
        <?php $this->load->view('admin/layout/leftsidebar')?>
        <?php $this->load->view('admin/layout/rightsidebar')?>
    </section>
    <?php $this->load->view('admin/pages/'.$pagename)?>
</body>
</html>
    <?php }else{
   					redirect(base_url().'index.php/Admin/login');
   					$this->session->set_flashdata('message','You need to login first');
    }?>