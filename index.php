<?php get_header(); ?>

<div class="row">
    <div class="col-xl">
      <div class="block-1">
      <h1 class="display-1 heading">zee is coding.</h1>
      <h4 class = "text-right">A space for idle musings and ravings ^.^</h4>
    </div>
  </div>

    <div class="col-xl-7 block-2">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url() ?>">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('about-me') ?>">About Me <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="<?php echo 'zhabib3.github.io' ?>">Portfolio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Archive
        </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Jan</a>
                <a class="dropdown-item" href="#">Feb</a>
                <a class="dropdown-item" href="#">Mar</a>
                <a class="dropdown-item" href="#">Apr</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Oldest</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Me</a>
            </li>
          </ul>

        </div>
      </nav>

      <div class="card" style="background-color: #CFD8DC">
        <div class="card-body">
            <h3 class="card-title" style="color: #159ca5">Hello World!</h3>
            <p class="card-text">Following the customary tradition of software engineering, I start out this Blog by a simple “Hello World!” This space will act as a log of sorts to document the trials and tribulations of navigating my way through the Computer Science world (Fun!). I’m currently starting out as a CS student at the Herbert Wertheim College of Engineering – University of Florida.

<br><br>I am intent on jotting down my reflections from ongoing side projects and (hopefully) future internships / professional experiences on this blog, mostly due to the fact that my mind buzzes around with multiple ideas and a log book might be helpful in organizing my chaotic thought process.

<br><br>So I’m looking forward to filling this space with a plethora of musings and ravings! ^-^</p>
        </div>
      </div>
      <hr>
      <hr>

      <?php while (have_posts()) {
        the_post(); ?>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?></h3>
            <h6 class="card-subtitle mb-2 text-muted"><?php the_date(); ?></h6>
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>
        <hr>
        <?php
      } ?>


    </div>
  </div>

  <?php get_footer(); ?>
