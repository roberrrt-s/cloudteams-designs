<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-project-blog dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-blog.svg]]">
								<h1 class="header-large">Blog</h1>
								<p class="header-medium secondary">Project title</p>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>3</span></p>
								<p class="project-counter">Blogposts</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-blog-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-dashboard-developer.php"); ?>