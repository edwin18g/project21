<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Default Public Template -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('/upload/institute/') ?>/logo.png" />
    <meta name="theme-color" content="#356cff">
    
    <!-- Web Fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="/assets/minimalist-blocks/contentc81e.css?2" rel="stylesheet" type="text/css" />
    <link href="/contentbuilder/contentbuilderc9f0.css?8" rel="stylesheet" type="text/css" />
    <script src="/contentbuilder/contentbuilder.minc9f0.js?8" type="text/javascript"></script>
    <script src="/assets/minimalist-blocks/contentc81e.js?2" type="text/javascript"></script> 

      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138427976-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138427976-2');
</script>

  

    <title><?php echo $page_title; ?> - <?php echo $this->settings->site_name; ?></title>
    <meta name="title" content="<?php echo $this->meta_title; ?>">
    <meta name="keywords" content="<?php echo $this->meta_tags; ?>">
    <meta name="description" content="<?php echo $this->meta_description; ?>">
    <meta name="image" content="<?php echo $this->meta_image; ?>" >
    <meta name="url" content="<?php echo $this->meta_url; ?>" >
    <meta name="author" content="<?php echo $this->settings->site_name; ?>">

    <!-- Facebook Meta -->
    <meta property="og:url"           content="<?php echo $this->meta_url; ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $this->meta_title; ?>" />
    <meta property="og:description"   content="<?php echo $this->meta_description; ?>" />
    <meta property="og:image"         content="<?php echo $this->meta_image; ?>" />

    <?php // CSS files ?>
    <?php if (isset($css_files) && is_array($css_files)) : ?>
        <?php foreach ($css_files as $css) : ?>
            <?php if ( ! is_null($css)) : ?>
                <link rel="stylesheet" href="<?php echo $css; ?>?v=<?php echo $this->settings->site_version; ?>"><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <!--[if IE]>
        <link rel="stylesheet" href="<?php echo base_url('themes/default/css/ie.css') ?>">
    <![endif]-->

    <script type="text/javascript">
        var base_url    = "<?php echo base_url(); ?>";
        var site_url    = "<?php echo site_url(); ?>";
        var uri_seg_1   = "<?php echo $this->uri->segment(1); ?>";
        var uri_seg_2   = "<?php echo $this->uri->segment(2); ?>";
        var uri_seg_3   = "<?php echo $this->uri->segment(3); ?>";
        var csrf_name   = "<?php echo $this->security->get_csrf_token_name(); ?>";
        var csrf_token  = "<?php echo $this->security->get_csrf_hash(); ?>";

        // Fb Login Creds
        var fb_app_id           = "<?php echo $this->settings->fb_app_id ? $this->settings->fb_app_id : null; ?>";

        // Google Login Creds
        var g_client_id         = "<?php echo $this->settings->g_client_id ? $this->settings->g_client_id : null; ?>";
        
        // Google map api key
        var g_map_key           = "<?php echo $this->settings->g_map_key ? $this->settings->g_map_key : null; ?>";

        // Disqus Short Name
        var disqus_short_name  = "<?php echo $this->settings->disqus_short_name ? $this->settings->disqus_short_name : null; ?>";

        // Video Url
        var intro_video_url   = "<?php echo $this->settings->intro_video_url ? $this->settings->intro_video_url : null; ?>";
    </script>
</head>

<?php   // RTL or not 
        $is_rtl = FALSE;
        if( stripos($this->config->item('language'), 'Persian')    !== FALSE   || 
            stripos($this->config->item('language'), 'Hebrew')     !== FALSE   || 
            stripos($this->config->item('language'), 'Arabic')     !== FALSE   || 
            stripos($this->config->item('language'), 'Malay')      !== FALSE   || 
            stripos($this->config->item('language'), 'Uyghur')     !== FALSE   || 
            stripos($this->config->item('language'), 'Urdu')       !== FALSE   || 
            stripos($this->config->item('language'), 'Malayalam')  !== FALSE) $is_rtl = TRUE;
         ?>
<body class="one-page sticky-menu-active" data-target=".single-menu" data-spy="scroll" data-offset="200" <?php echo $is_rtl ? 'dir="rtl"' : ''; ?>>

<!-- Page Loader -->
<!-- <div id="pageloader">
    <div class="loader-inner">
        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
    </div>
</div> -->
<!-- Page Loader -->

<!-- Header Begins -->
<?php if(uri_string() == '') { ?>
<header id="header" class="single-menu flat-menu transparent valign font-color-light" data-plugin-options='{"stickyEnabled": true, "stickyBodyPadding": false}'>
<?php } else { ?> 
<header id="header" class="default-header colored flat-menu">
    <div class="header-top">
        <div class="container">
            <nav>
                <ul class="nav nav-pills nav-top">
                    <li class="phone">
                        <span><a href="mailto:<?php echo $this->settings->site_email ?>"><i class="fa fa-envelope"></i><?php echo $this->settings->site_email ?></a></span>
                    </li>
                </ul>
            </nav>
            <nav class="pull-right">
                <ul class="nav nav-pills nav-top">
                    <li class="phone">
                        <span><a href="tel:<?php echo $this->settings->institute_phone ?>"><i class="fa fa-phone"></i><?php echo $this->settings->institute_phone ?></a></span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<?php } ?>
    <!-- Header Menu -->
    <div class="container">
        <div class="logo">
            <a href="<?php echo site_url(''); ?>">
                <img alt="Universh" width="56" height="56" data-sticky-width="48" data-sticky-height="48" src="<?php echo base_url('upload/institute/logo.png') ?>">
            </a>
            <a href="<?php echo site_url(''); ?>" class="institute-name">
                <?php echo $this->settings->site_name; ?>
            </a>
        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <!-- Courses Menu -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="<?php echo site_url('courses'); ?>">
                            <?php echo lang('menu_courses') ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <?php echo build_menu_levels(0); ?>
                    </li>

                    <!-- Events Menu -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="<?php echo site_url('events'); ?>">
                            <?php echo lang('menu_events') ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <?php echo build_menu_events(); ?>
                    </li>

                    <!-- Tutors -->
                    <!-- <li><a href="< ?php echo site_url('/tutors'); ?>">< ?php echo lang('batches_tutors'); ?></a></li> -->

                    <!-- User Dropdown -->
                    <!-- User Login -->
                    <?php if(! $this->session->userdata('logged_in')) { ?>
                    <li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
                        <a class="dropdown-toggle" href="<?php echo site_url('auth/') ?>">
                            <?php echo lang('action_login'); ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="signin-form">
                                                <span class="mega-menu-sub-title"><?php echo lang('action_login'); ?></span>
                                                <?php echo form_open('auth/login', array('class'=>'')); ?>
                                                    <div class="row">
                                                        <div class="form-group <?php echo form_error('identity') ? ' has-error' : ''; ?>">
                                                            <div class="col-md-12">
                                                                <?php echo lang('users_email_username', 'identity', array('class' => '')); ?>
                                                                <?php echo form_input(array('name'=>'identity', 'id'=>'identity', 'class'=>'form-control', 'placeholder'=>lang('users_email_username'))); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group <?php echo form_error('password') ? ' has-error' : ''; ?>">
                                                            <div class="col-md-12">
                                                                <a class="pull-right a-hover" href="<?php echo site_url('auth/forgot_password'); ?>"><?php echo lang('users_forgot'); ?></a>
                                                                <?php echo lang('users_password', 'password', array('class' => '')); ?>
                                                                <?php echo form_password(array('name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>lang('users_password'), 'autocomplete'=>'off')); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="remember-box checkbox">
                                                               <label for="remember">
                                                                <input type="checkbox" id="remember" name="remember" value="1"><?php echo lang('login_remember_label') ?>
                                                              </label>
                                                            </span>
                                                        </div>
                                                    </div>  
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <a class="a-hover" href="<?php echo site_url('auth/register'); ?>"><?php echo lang('users_register_account'); ?><?php echo ' - '.lang('users_register'); ?></a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <!-- Button -->
                                                            <?php echo form_button(array('type' => 'submit', 'class' => 'btn pull-right', 'data-loading-text'=>lang('action_loading'), 'content' => lang('users_login'))); ?>
                                                        </div>
                                                    </div>
                                                <?php echo form_close(); ?> <!-- Form Ends -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- User Profile -->
                    <?php } else { ?>
                    <li class="dropdown mega-menu-item mega-menu-signin signin logged" id="headerAccount">
                        <a class="dropdown-toggle" href="<?php echo site_url('/profile'); ?>">
                            <i class="fa fa-user"></i><?php echo $this->user['first_name']; ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="user-avatar">
                                                <div class="img-thumbnail">
                                                    <img src="<?php echo $this->user['image'] ? base_url('upload/users/images/').$this->user['image'] : base_url('themes/default/images/avatar.jpg'); ?>" class="img-responsive" />
                                                </div>
                                                <p><strong><?php echo $this->user['first_name'].' '.$this->user['last_name'] ?></strong><span><?php echo $this->user['group_name']; ?></span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <ul class="list-account-options">
                                                <?php if (!$this->ion_auth->is_non_admin()) { ?>
                                                <li><a href="<?php echo site_url('admin'); ?>"><?php echo lang('menu_admin'); ?></a></li>
                                                <?php } ?>
                                                <li><a href="<?php echo site_url('/profile'); ?>"><?php echo lang('action_profile'); ?></a></li>
                                                <li><a href="<?php echo site_url('mybatches') ?>"><?php echo lang('menu_my_batches') ?></a></li>
                                                <li><a href="<?php echo site_url('myevents') ?>"><?php echo lang('menu_my_events') ?></a></li>
                                                <li><a href="<?php echo site_url('myblogs') ?>"><?php echo lang('menu_my_blogs') ?></a></li>
                                                <li><a href="<?php echo site_url('logout'); ?>"><?php echo lang('action_logout') ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>

                    <!-- Blogs -->
                   <!--  <li><a href="< ?php echo site_url('/blogs'); ?>">< ?php echo lang('menu_blogs'); ?></a></li> -->

                    <!-- Gallery -->
                   <!--  <li><a href="< ?php echo site_url('/gallery'); ?>">< ?php echo lang('menu_gallary'); ?></a></li> -->

                    <!-- More Pages -->
                    <li class="dropdown hidden">
                        <a class="dropdown-toggle" href="#">
                            <?php echo lang('action_more') ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <?php echo front_menu('top','dropdown-menu')?>
                    </li>
 <li><a href="<?php echo site_url('/cms/about-us'); ?>">About us</a></li>
  <li><a href="<?php echo site_url('/cms/why-choose-us'); ?>">Why Choose Us</a></li>
                    <!-- Contact -->
                    <li><a href="<?php echo site_url('/contact'); ?>"><?php echo lang('menu_contact'); ?></a></li>

                </ul>
            </nav>
        </div>
    </div>
</header><!-- Header Ends -->    

<!-- Page Header -->
<?php if(uri_string() !== '') { ?>
<div class="page-header sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Page Header Wrapper -->
                <div class="page-header-wrapper">
                    <!-- Title & Sub Title -->
                    <h5 class="title"><?php echo $page_header; ?></h5>
                    <ol class="breadcrumb" >
                    <?php 
                        echo !$this->uri->segment(1) ? '<li class="active">'.lang('action_home').'</li>' : '<li><a href="'.site_url().'">'.lang('action_home').'</a></li>';

                        if($this->uri->segment(1) != 'cms'  && $this->uri->segment(1) != 'bbooking' && $this->uri->segment(1) != 'ebooking')
                            echo !$this->uri->segment(2) ? '<li class="active">'.lang('menu_'.$this->uri->segment(1)).'</li>' : '<li><a href="'.site_url().'/'.$this->uri->segment(1).'">'.lang('menu_'.$this->uri->segment(1)).'</a></li>';

                        if($this->uri->segment(1) == 'cms') 
                            echo '<li class="active text-capitalize">'.($this->uri->segment(2)).'</li>';

                        if($this->uri->segment(1) == 'ebooking') 
                            echo '<li class="active text-capitalize">'.lang('menu_e_booking').' - '.str_replace('+', ' ', $this->uri->segment(2)).'</li>';

                        if($this->uri->segment(1) == 'bbooking') 
                            echo '<li class="active text-capitalize">'.lang('menu_b_booking').' - '.str_replace('+', ' ', $this->uri->segment(2)).'</li>';

                        if($this->uri->segment(1) == 'tutors') 
                            echo '<li class="active text-capitalize">'.str_replace('+', ' ', $this->uri->segment(2)).'</li>';

                        if($this->uri->segment(2) == 'detail') 
                            echo '<li class="active text-capitalize">'.str_replace('+', ' ', $this->uri->segment(3)).'</li>';
                    ?>
                    </ol>    
                </div><!-- Page Header Wrapper -->
            </div><!-- Coloumn -->
        </div><!-- Row -->
        <div class="row alert-row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert-success alert alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <?php elseif ($this->session->flashdata('error')) : ?>
                    <div class="alert-danger alert alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php elseif (validation_errors()) : ?>
                    <div class="alert-danger alert alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo validation_errors(); ?>
                    </div>
                <?php elseif ($this->error) : ?>
                    <div class="alert-danger alert alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->error; ?>
                    </div>
                <?php endif; ?>
                <!-- Ajax validation error -->
                <div class="alert-danger alert alert-dismissable" id="validation-error">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p></p>
                </div>
                <div class="alert-success alert alert-dismissable" id="validation-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p></p>
                </div>
            </div>
        </div>
    </div><!-- Container -->
</div><!-- Page Header -->
<?php } ?>

<!-- Page Main -->
<div role="main" class="main">
    <!-- Main Content -->
    <?php echo $content; ?>
    <!-- End Main Content -->
</div><!-- Page Main -->
    
<!-- Footer -->
<footer id="footer" class="footer-3">
    <!-- Main Footer -->
    <div class="main-footer widgets-dark typo-light">
        <div class="container">
            
            <div class="row">
                <!-- Widget Column -->
                <div class="col-md-12 text-center">
                    <!-- Widget -->
                    <div class="widget contact-widget no-box">
                        <h5 class="widget-title"><?php echo $this->settings->institute_name ?></h5>
                        <h6><?php echo $this->settings->institute_address ?></h6>
                        <ul>
                            <li><a href="mailto:<?php echo $this->settings->site_email ?>"><i class="fa fa-phone"></i><?php echo $this->settings->institute_phone; ?></a></li>
                            <li><a href="tel:<?php echo $this->settings->institute_phone ?>"><i class="fa fa-envelope"></i><?php echo $this->settings->site_email; ?></a></li>
                        </ul>
                    </div>
                    <!-- Widget -->

                    <!-- Widget -->
                    <div class="widget no-box">
                        <h5 class="widget-title"><?php echo lang('footer_follow_us') ?></h5>
                        <!-- Social Icons Color -->
                        <ul class="social-icons color">
                            <?php if($this->settings->social_facebook) { ?>
                            <li class="facebook"><a href="<?php echo $this->settings->social_facebook ?>" target="_blank" title="Facebook">Facebook</a></li>
                            <?php } ?>
                            <?php if($this->settings->social_google) { ?>
                            <li class="googleplus"><a title="Google+" target="_blank" href="<?php echo $this->settings->social_google ?>">Google+</a></li>
                            <?php } ?>
                            <?php if($this->settings->social_twitter) { ?>
                            <li class="twitter"><a title="Twitter" target="_blank" href="<?php echo $this->settings->social_twitter ?>">Twitter</a></li>
                            <?php } ?>
                            <?php if($this->settings->social_linkedin) { ?>
                            <li class="linkedin"><a title="Linkedin" target="_blank" href="<?php echo $this->settings->social_linkedin ?>">Linkedin</a></li>
                            <?php } ?>
                            <?php if($this->settings->social_flickr) { ?>
                            <li class="flickr"><a title="Flickr" target="_blank" href="<?php echo $this->settings->social_flickr ?>">Flickr</a></li>
                            <?php } ?>
                            <?php if($this->settings->social_pinterest) { ?>
                            <li class="pinterest"><a title="Pinterest" target="_blank" href="<?php echo $this->settings->social_pinterest ?>">Pinterest</a></li>
                            <?php } ?>
                        </ul>   
                    </div><!-- Widget -->
                </div><!-- Column -->
            </div><!-- Row -->
        </div><!-- Container -->        
    </div><!-- Main Footer -->
    
    <!-- Footer Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Languages -->
                    <?php ksort($this->languages); foreach ($this->languages as $key=>$name) { ?>
                    <a class="text-capitalize" href="<?php echo site_url('language/'.strtolower($key)); ?>" title="<?php echo $name ?>">
                        <?php if ($key == $this->session->language) { 
                            echo '<strong>'.$name.'</strong>';
                        } else {
                            echo $name;
                        } ?>
                    </a>&nbsp;
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <!-- Copy Right Content -->
                <div class="col-md-12 text-center">
                    <p>&copy; <?php echo ' '.date('Y').' ' ?> <?php echo $this->settings->site_name; ?>. | Made With <i class="fa fa-heart"></i> By <a href="edwin18g.com" title="Classiebit Softwares">Dream creation</a></p>
                </div><!-- Copy Right Content -->
                <!-- Copy Right Content -->
            </div><!-- Footer Copyright -->
        </div><!-- Footer Copyright container -->
    </div><!-- Footer Copyright -->
</footer>
<!-- Footer -->    

<?php // Javascript files ?>
<?php if (isset($js_files) && is_array($js_files)) : ?>
    <?php foreach ($js_files as $js) : ?>
        <?php if ( ! is_null($js)) : ?>
            <?php echo "\n"; ?><script type="text/javascript" src="<?php echo $js; ?>?v=<?php echo $this->settings->site_version; ?>"></script><?php echo "\n"; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php if (isset($js_files_i18n) && is_array($js_files_i18n)) : ?>
    <?php foreach ($js_files_i18n as $js) : ?>
        <?php if ( ! is_null($js)) : ?>
            <?php echo "\n"; ?><script type="text/javascript"><?php echo "\n" . $js . "\n"; ?></script><?php echo "\n"; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<?php if($this->settings->disqus_short_name) { ?>
<script id="dsq-count-scr" src='//'+disqus_short_name+'.disqus.com/count.js' async></script>
<?php } ?>


<!-- Modal -->
<div id="secureDevice" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h6 class="modal-title">Make Sure It's your secure content access device ?</h6>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-default" id="makeItSecureDevice">Yes! process</button>
      </div>
    </div>

  </div>
</div>

<?php 
function rand_chars($c, $l, $u = FALSE) { 
if (!$u) for ($s = '', $i = 0, $z = strlen($c)-1; $i < $l; $x = rand(0,$z), $s .= $c{$x}, $i++); 
else for ($i = 0, $z = strlen($c)-1, $s = $c{rand(0,$z)}, $i = 1; $i != $l; $x = rand(0,$z), $s .= $c{$x}, $s = ($s{$i} == $s{$i-1} ? substr($s,0,-1) : $s), $i=strlen($s)); 
return $s; 
} 
?> 
<script>
var base_url = '<?= base_url()?>';
var secure_name = '<?= base64_encode('user_sec_id')?>';
var secure_val = '<?= base64_encode(rand_chars('securedoggy',20))?>';
<?php 
if(secure_content())
{ ?>
    $(document).ready(function(){
        $('#secureDevice').modal('show');
        });

        $('#makeItSecureDevice').click(function(){
$(this).text('loading.. please wait');
if (typeof(Storage) !== "undefined") {
    localStorage.setItem(secure_name, secure_val);

    $.ajax({url: base_url+"welcome/secure_create/"+secure_val,type:'get',
         success: function(result){
    $("#div1").html(result);
  }});

} else {
  // Sorry! No Web Storage support..
}

});
<?php }


?>

var builder = new ContentBuilder({
        container: '.cms-content',
        snippetOpen: true,
        clearPreferences: true
    });
</script>
</body>

<!-- Load Facebook SDK for JavaScript -->
<?php if($this->settings->fb_app_id) { ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId="+fb_app_id+"";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



</script>
<?php } ?>

</html>
