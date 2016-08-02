<!-- Pop-up modal: team member add user -->
<div id="new" class="popup-team-member-add-new modal fade" role="dialog">
	<a href="#nowhere"></a>

	<div class="modal-dialog small">

		<!-- Modal content-->
		<div class="block block-fill">
			<header class="modal-header">
				<div class="vertical-align">
					<div class="middle">
						<i class="icon icon-team"></i>
						<h2 class="header-medium secondary">Invite new team member</h2>
					</div>
					<div class="close" data-dismiss="modal">
						<i class="icon icon-close"></i>
					</div>
				</div>
			</header>

			<div class="modal-body">
				<div class="row">
					<ul class="menu-subpage">
						<li id="link-to-subpage-1" class="link-to-subpage active">Manually</li>
						<li id="link-to-subpage-2" class="link-to-subpage">Address book</li>
						<li id="link-to-subpage-3" class="link-to-subpage">Search</li>
					</ul>
					<section id="subpage-1" class="subpage active">

					<fieldset class="form-group required">
						<label for="new-member-name" class="control-label header-medium secondary">New team member name </label>

						<div class="input-container">
							<input id="new-member-name" type="text" name="Name of new team member" placeholder="E.g. Rick Astley">
						</div>
					</fieldset>

					<fieldset class="form-group required">
						<label for="new-member-name" class="control-label header-medium secondary">New team member email </label>

						<div class="input-container">
							<input id="new-member-name" type="text" name="Email of new team member" placeholder="E.g. nevergonnagive@you.up">
						</div>
					</fieldset>

					<fieldset class="form-group required">
						<label for="new-member-name" class="control-label header-medium secondary">New team member role </label>

						<div class="select-dropdown">
							<i class="icon icon-arrow-down"></i>
							<select name="campaign-start-year" id="campaign-start-year" onchange="" size="1">
								<option value="" disabled="" selected="">Member role</option>
								<option value="front">Front-end Developer</option>
								<option value="back">Back-end Developer</option>
								<option value="manager">Project Manager</option>
								<option value="content">Content Manager</option>
								<option value="interaction">Interaction Designer</option>
								<option value="visual">Visual Interface Designer</option>
								<option value="marketing">Online Marketeer</option>
							</select>
						</div>
					</fieldset>

					<fieldset class="form-group form-submit">
						<a href="" data-dismiss="modal" class="btn-transparent" alt="cancel">Skip</a>
						<a href="" class="btn" alt="submit invite">Send invite</a>
					</fieldset>

					</section>
					<section id="subpage-2" class="subpage">World</section>
					<section id="subpage-3" class="subpage">!!!</section>			
				</div>
			</div>
		</div>
	</div>
</div>