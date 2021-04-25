<!DOCTYPE html>
<html lang="jp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7FT6PCT887"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7FT6PCT887');
	</script>
	  
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="sp-top-buttom circle active2"><a href="#intro"><i class="fa fa-arrow-up fa-2x"></i></a></div>

  <nav class="nav-wrapper">
    <div class="nav-bar">
      <div class="nav-content">
        <ul>
          <li class="nav-menuitem openSans">
            <a href="<?php is_home() ? print '#works' : print home_url().'/#works'; ?>"><i class="fa fa-laptop fa-2x"></i>WORKS</a>
          </li>
          <li class="nav-menuitem openSans">
            <a href="<?php is_home() ? print '#profile' : print home_url().'/#profile'; ?>"><i class="fa fa-user fa-2x"></i>PROFILE</a>
          </li>
          <li class="nav-menuitem openSans">
            <a href="<?php is_home() ? print '#skill' : print home_url().'/#skills'; ?>"><i class="fa fa-check fa-2x"></i>SKILL</a>
          </li>
          <li class="nav-menuitem openSans">
            <a href="<?php is_home() ? print '#blog' : print home_url().'/#blog'; ?>"><i class="fa fa-pencil fa-2x"></i>BLOG</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <a href="" id="intro"></a>
