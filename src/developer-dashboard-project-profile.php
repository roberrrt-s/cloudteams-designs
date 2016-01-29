<?php include("partials/header.php"); ?>

<section class="page page-developer-dashboard-project-profile dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("partials/developer-dashboard-side-menu-extended.php"); ?>

				<main class="col-lg-9">
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<img class="svg" src="[[img/icons/icon-project-profile.svg]]">
								<h1 class="header-large">Project profile</h1>
								<p class="header-medium secondary">Project title</p>
							</div>
						</div>
					</header>

					<?php include("partials/developer-dashboard-project-profile-content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("partials/footer-dashboard-developer.php"); ?>