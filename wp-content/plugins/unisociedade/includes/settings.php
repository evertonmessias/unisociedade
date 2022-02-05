<?php
//Settings *************************************************
function home_page_html()
{ ?>
	<div class="settings-unisociedade">
		<h1 class="title">Configurações da Pagina Inicial</h1>
		<hr>
		<form method="post" action="options.php">
			<?php settings_fields('home_option_grupo'); ?>			

			<!-- Name ********************************** -->
			<label>
				<h3 class="title">Titulo do Site: </h3>
				<input type="text" id="home_input_1" name="home_input_1" value="<?php echo get_option('home_input_1'); ?>" />
			</label>			

			<br><br><!-- Logo *************************************** -->
			<hr>

			<?php
			$image2 = get_option('home_input_2'); ?>
			<h3 class="title">Logo:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(1,2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="home_input_2" id="home_input_2" value="<?php echo $image2; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image2; ?>" target="_blank"><img style="height:30px" id="preview_home_input_2" alt="preview" title="preview" src="<?php echo $image2; ?>" /></a></td>
				</tr>
			</table>
			<span>(Ideal size: 300x300 px)</span>
			

			<br><br><!-- Slides *************************************** -->
			<hr>

			<h3 class="title">Slides:</h3>

			<?php
			$image31 = get_option('home_input_31'); ?>
			<h3>Slide 1:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(1,31);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="home_input_31" id="home_input_31" value="<?php echo $image31; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image31; ?>" target="_blank"><img style="height:30px" id="preview_home_input_31" alt="preview" title="preview" src="<?php echo $image31; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Titulo do Slide</div>
					</td>
					<td><input type="text" id="home_input_32" name="home_input_32" value="<?php echo get_option('home_input_32'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL do Botão</div>
					</td>
					<td><input type="text" id="home_input_33" name="home_input_33" value="<?php echo get_option('home_input_33'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image41 = get_option('home_input_41'); ?>
			<h3>Slide 2:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(1,41);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="home_input_41" id="home_input_41" value="<?php echo $image41; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image41; ?>" target="_blank"><img style="height:30px" id="preview_home_input_41" alt="preview" title="preview" src="<?php echo $image41; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Titulo do Slide</div>
					</td>
					<td><input type="text" id="home_input_42" name="home_input_42" value="<?php echo get_option('home_input_42'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL do Botão</div>
					</td>
					<td><input type="text" id="home_input_43" name="home_input_43" value="<?php echo get_option('home_input_43'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image51 = get_option('home_input_51'); ?>
			<h3>Slide 3:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(1,51);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="home_input_51" id="home_input_51" value="<?php echo $image51; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image51; ?>" target="_blank"><img style="height:30px" id="preview_home_input_51" alt="preview" title="preview" src="<?php echo $image51; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Titulo do Slide</div>
					</td>
					<td><input type="text" id="home_input_52" name="home_input_52" value="<?php echo get_option('home_input_52'); ?>" /></td>
				</tr>				
				<tr>
					<td>
						<div>URL do Botão</div>
					</td>
					<td><input type="text" id="home_input_53" name="home_input_53" value="<?php echo get_option('home_input_53'); ?>" /></td>
				</tr>
			</table><br>

			<br><span>(<b>Slide</b>; Ideal size: 1920x680 px)</span>			

			<br><br><!-- Fone *************************************** -->
			<hr>

			<label>
				<h3 class="title">Fone: </h3><input type="text" id="home_input_6" name="home_input_6" value="<?php echo get_option('home_input_6'); ?>" />
			</label>
			<br><span>(+00 00 00000-0000)</span>

			<br><br><!-- E-Mail *************************************** -->
			<hr>

			<label>
				<h3 class="title">EMail: </h3><input type="email" id="home_input_7" name="home_input_7" value="<?php echo get_option('home_input_7'); ?>" />
			</label>
			<br><span>(somente um)</span>					
			
			<br><br><!-- Endereço *************************************** -->
			<hr>

			<label>
				<h3 class="title">Endereço: </h3><input type="email" id="home_input_8" name="home_input_8" value="<?php echo get_option('home_input_8'); ?>" />
			</label>							
			
			<br><br><!-- *************************************** -->
			<hr>	

			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

function home_options_page()
{
	add_submenu_page('options-general.php', 'Pagina Inicial', 'Pagina Inicial', 'edit_posts', 'home_page', 'home_page_html',0);
}
add_action('admin_menu', 'home_options_page');



//************************ DB Fields

function home_settings1()
{
	add_option('home_input_1');
	register_setting('home_option_grupo', 'home_input_1');
}
add_action('admin_init', 'home_settings1');

function home_settings2()
{
	add_option('home_input_2');
	register_setting('home_option_grupo', 'home_input_2');
}
add_action('admin_init', 'home_settings2');

function home_settings31()
{
	add_option('home_input_31');
	register_setting('home_option_grupo', 'home_input_31');
}
add_action('admin_init', 'home_settings31');

function home_settings32()
{
	add_option('home_input_32');
	register_setting('home_option_grupo', 'home_input_32');
}
add_action('admin_init', 'home_settings32');

function home_settings33()
{
	add_option('home_input_33');
	register_setting('home_option_grupo', 'home_input_33');
}
add_action('admin_init', 'home_settings33');

function home_settings41()
{
	add_option('home_input_41');
	register_setting('home_option_grupo', 'home_input_41');
}
add_action('admin_init', 'home_settings41');

function home_settings42()
{
	add_option('home_input_42');
	register_setting('home_option_grupo', 'home_input_42');
}
add_action('admin_init', 'home_settings42');

function home_settings43()
{
	add_option('home_input_43');
	register_setting('home_option_grupo', 'home_input_43');
}
add_action('admin_init', 'home_settings43');

function home_settings51()
{
	add_option('home_input_51');
	register_setting('home_option_grupo', 'home_input_51');
}
add_action('admin_init', 'home_settings51');

function home_settings52()
{
	add_option('home_input_52');
	register_setting('home_option_grupo', 'home_input_52');
}
add_action('admin_init', 'home_settings52');

function home_settings53()
{
	add_option('home_input_53');
	register_setting('home_option_grupo', 'home_input_53');
}
add_action('admin_init', 'home_settings53');

function home_settings6()
{
	add_option('home_input_6');
	register_setting('home_option_grupo', 'home_input_6');
}
add_action('admin_init', 'home_settings6');

function home_settings7()
{
	add_option('home_input_7');
	register_setting('home_option_grupo', 'home_input_7');
}
add_action('admin_init', 'home_settings7');

function home_settings8()
{
	add_option('home_input_8');
	register_setting('home_option_grupo', 'home_input_8');
}
add_action('admin_init', 'home_settings8');