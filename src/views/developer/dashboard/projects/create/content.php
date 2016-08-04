<form id="create-project">
	<article class="block-line large">
		<div class="content form-section">
			<fieldset>
				<label for="name-project" class="header-medium secondary">Name</label>

				<div class="input-container">
					<input id="name-project" type="text" name="Name of project" placeholder="Project title">
				</div>
			</fieldset>

			<fieldset>
				<label for="description-project" class="header-medium secondary">Description</label>

				<div class="input-container">
					<textarea id="description-project" rows="5" placeholder="Project description"></textarea>
				</div>
			</fieldset>

			<fieldset>

				<label for="category-project" class="header-medium secondary">Category</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="category-project" id="category-project" onchange="" size="1">
						<option value="" disabled="" selected="">Select category</option>
						<option value="Art">Art</option>
						<option value="Business">Business</option>
						<option value="Design">Design</option>
						<option value="Film">Film</option>
						<option value="Food">Food</option>
						<option value="Games">Games</option>
						<option value="Journalism">Journalism</option>
						<option value="Music">Music</option>
						<option value="Photography">Photography</option>
						<option value="Publishing">Publishing</option>
						<option value="Technology">Technology</option>
						<option value="Sport">Sport</option>
					</select>
				</div>
			</fieldset>

			<fieldset>

				<label for="type-project" class="header-medium secondary">Type</label>

				<div class="select-dropdown">
					<i class="icon icon-arrow-down"></i>
					<select name="type-project" id="type-project" onchange="" size="1">
						<option value="" disabled="" selected="">Select a type</option>
						<option value="App">App</option>
						<option value="Web Application">Web Application</option>
						<option value="Utility Software">Utility Software</option>
						<option value="System Software">System Software</option>
					</select>
				</div>
			</fieldset>

		</div>
	</article>
</form>