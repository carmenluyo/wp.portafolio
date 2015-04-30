<?php get_header(); ?>

		<div class="site-wrapper"> <!-- Body -->
	    <aside class="sidebar-fixed flex-column-center">
	      <section class="content-items-display-wrapper">
	        <div class="content-items-display">
	          <div class="content-display-close">
	            <a href="#" class="icon-cross"></a>
	          </div>
	          <?php $query = new WP_Query('showposts=5'); ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		          <article class="content-item-content p-70 p-14-xs" id="article-<?php the_ID(); ?>">
		            <div class="article-head mb-42 text-center">
		              <h5 class="article-category text-success">Project</h5>
		              <h1 class="article-title light"><?php the_title(); ?></h1>
		              <span class="article-autor"><?php the_author(); ?> | </span><em class="article-date small">2015</em>
		            </div>
		            <div class="article-body">
		              <?php the_content(); ?>
		            </div>
		          </article>
	          <?php endwhile; ?>
						<?php wp_reset_query(); ?>	
	        </div>
	      </section>
	      <div class="container-sm">
	        <div class="profile mb-ch-21">
	          <div class="profile-pic" style="background-image: url(<?php bloginfo('template_directory'); ?>/app/assets/img/profile-pic.png)"></div>
	          <nav>
	            <i class="icon-code"></i>
	          </nav>
	          <div class="profile-description">
	            <h3 class="light">I&apos;m a design-oriented fullstack JavaScript developer.</h3>
	            <p>I like to focus on: digital innovation, education, linguistics, AI, IoT and audio interfaces.</p>
	            <p>If I don&apos;t know the tools you need for your project, <strong>I&apos;m an excellent learner.</strong></p>
	          </div>
	          <nav class="profile-assets ml-ch-14 text-info">
	            <a href="#"><i class="icon-document"></i> CV <sup>EN</sup></a>
	            <a href="#"><i class="icon-document"></i> CV <sup>ES</sup></a>
	            <a href="mailto:yo@soygus.com"><i class="icon-at-sign"></i></a>
	          </nav>
	        </div>
	      </div>
	      <footer class="footer">
	        <div class="footer-head">
	          <div class="left">
	            <small>Technologies I work with:</small>
	          </div>
	          <div class="right">
	            <small>Technologies I love.</small>
	          </div>
	        </div>
	        <div class="footer-body">
	          <div class="left">
	            <div class="tech-logos">
	              <img src="<?php bloginfo('template_directory'); ?>/app/assets/img/footer_technology-logos.png" alt="Techlogos" class="ignore-srcset">
	            </div>
	          </div>
	          <div class="right">
	            <div class="tech-logos">
	              <img src="<?php bloginfo('template_directory'); ?>/app/assets/img/footer_technology-love-logos.png" alt="Techlogos" class="ignore-srcset">
	            </div>
	          </div>
	        </div>
	      </footer>
	    </aside>
	    <header class="header-fixed">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="left col-sm-6">
	            <a href="#" class="logo"><img src="<?php bloginfo('template_directory'); ?>/app/assets/img/logo_Gus-UIXDeveloper.png" alt="Gus | UIXDeveloper" class="ignore-srcset"></a>
	          </div>
	          <div class="right col-sm-6">
	            <nav>
	              <a href="#">Blog</a>
	            </nav>
	          </div>
	        </div>
	      </div>
	    </header>
	    <main class="content-items-wrapper" role="main">
	    	<?php $query = new WP_Query('showposts=5'); ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		      <a href="#article-<?php the_ID(); ?>" class="content-item">
		        <div class="content-item-pic">
		          <?php the_post_thumbnail( 'medium', array( 'class' => 'clase-opcional' ) ); ?>
		        </div>
		        <div class="content-item-meta">
		          <div class="left">
		            <h2 class="content-item-title"><?php the_title(); ?></h2>
		          </div>
		          <div class="right">
		            <small class="content-item-technologies"><?php the_excerpt(); ?></small>
		          </div>
		        </div>
		      </a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>					
	    </main>
	  </div>

<?php get_footer(); ?>