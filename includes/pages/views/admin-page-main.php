<div class="wrap">
	<h1><?php echo get_admin_page_title();?></h1>

	<div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <div id="postbox-container-1" class="postbox-container">
                
				<div class="postbox" id="donate-notice">
                	<h2 class="hndle" style="cursor:auto;"><span><?php _e( 'Gostou? Ajude a melhorar!', 'wp-admin-style-ui' ); ?></span></h2>	
                	<div class="inside">
                		<p>
                		<?php 
                		_e(
                			'Estamos sempre querendo melhorar nossos códigos, para melhor auxiliar aqueles que pretendem 
                			ter uma referência de como integrar seu plugin ou tema com o estilo de administração do WordPress. 
                			Você também pode ajudar, faça uma doação de qualquer valor, assim você estará nos 
                			incentivando a continuar desenvolvendo. Não esqueça que você também poderá nos dar dicas, de como, 
                			e onde melhorar.',
                			'wp-admin-style-ui'
                		);
                		?>
                		</p>

                		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="MHY43DDT9C7M4">
							<input type="image" src="<?php echo wpasui_get_paypal_donate_link();?>" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
						</form>
                	</div>
                </div> <!-- Donate Box -->
			
                <div class="postbox" id="bugs-notice">
                	<h2 class="hndle" style="cursor:auto;"><span><?php _e( 'Bugs?', 'wp-admin-style-ui' ); ?></span></h2>	
                	<div class="inside">
                		<p>
                		<?php 
                		_e(
                			'Achou algum bug, ou, gostaria de dar alguma sugestão ou ideia. Informe para gente, 
                			ficaremos muito feliz em receber sua mensagem.',
                			'wp-admin-style-ui'
                		);
                		?>
                		</p>

						<a class="github-button" href="https://github.com/iiandrade/wp-admin-style-ui/issues" data-style="mega" aria-label="Issue iiandrade/wp-admin-style-ui on GitHub">Issue</a>
						<script async defer src="https://buttons.github.io/buttons.js"></script>

                	</div>
                </div> <!-- Donate Box -->

            </div>

            <div id="postbox-container-2" class="postbox-container">
				
				<div class="postbox" id="elements-list">
					<h2 class="hndle" style="cursor:auto;"><span><?php _e( 'Iniciando com os elementos ...', 'wp-admin-style-ui' ); ?></span></h2>
					<div class="inside">
						
						<p>
						<?php
						_e(
							'Agora nós vamos listar para você quais os elementos que o WordPress está usando atualmente, nós te daremos também alguns 
							ajudantes para copiar alguns trecho de códigos, caso tenha a necessidade. O que nós queremos aqui é ajudar você dá melhor forma possível.',
							'wp-admin-style-ui'
						);
						?>
						</p>
						
						
						<div id="elements" class="accordion-container">
						<?php
						/**
						 * Elements
						 * 
						 * @author Italo Izaac
						 * @since 1.0
						 */
						do_action( 'wpas_ui-add_element_page' );
						?>
						</div>

					</div>
				</div>

            </div>

        </div> <!-- #post-body -->

    </div> <!-- #poststuff -->

</div>