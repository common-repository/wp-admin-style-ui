<div class="wrap wpasui-wrap">
	<h1><?php echo get_admin_page_title();?></h1>
	

	<div id="dashboard-widgets-wrap">
		<div id="dashboard-widgets" class="metabox-holder">
			
			<div class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox" id="bugs-notice">
	                	<h2 class="hndle" style="cursor:auto;"><span><?php _e( 'Entenda como funciona', 'wp-admin-style-ui' ); ?></span></h2>	
	                	<div class="inside">
	
							<!-- INIT ACCORDIONS -->
							<ul class="accordion-container"> 		
								
								<!-- 1 - Introdução -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('1 - Introdução', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<?php
										_e(
											'No WordPress há duas maneiras de se criar um botão, uma delas é utilizando as funções de ajuda do próprio WordPress, 
											a outra é utilizando as classes que o WordPress importa no carregamento da <strong>administração</strong>. Aqui nós iremos 
											trabalhar e entender as duas formas. Então, mãos a obra!',
											'wp-admin-style-ui'
										);
										?>
									</div><!-- .menu-item-settings-->
								</li>
								
								<!-- 2 - Criando botão: Utilizando funções de ajuda. -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('2 - Criando botão: Utilizando funções de ajuda.', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<?php
										_e(
											'Primeiramente vamos estudar como criar um botão do WordPress usando sua função de ajuda. Abaixo você consegui ver quais variações são possíveis fazer com a ajuda do WordPress:',
											'wp-admin-style-ui'
										);
										?>
											
										<div class="wpasui-buttons-examples">
										<?php
										/**
										 * Submit button
										 */
										submit_button( __( 'Exemplo 1', 'wp-admin-style-ui'), 'small primary' );
										submit_button( __( 'Exemplo 1.2', 'wp-admin-style-ui') );
										submit_button( __( 'Exemplo 1.3', 'wp-admin-style-ui'), 'large primary' );
										submit_button( __( 'Exemplo 2', 'wp-admin-style-ui'), 'small secondary' );
										submit_button( __( 'Exemplo 2.2', 'wp-admin-style-ui'), 'secondary' );
										submit_button( __( 'Exemplo 2.3', 'wp-admin-style-ui'), 'large secondary' );
										?>
										</div>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 2.1 - Primeiros botões. -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('2.1 - Primeiros botões.', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p>
										<?php
										_e(
											'Ao finalizar esta etapa, você já está sabendo como implementar um botão no Wordpress, então siga em frente.',
											'wp-admin-style-ui'
										);
										?>
										</p>

										<p>
										<?php
										_e(
											'No WordPress há uma função <code>submit_button();</code> que é utilizada para auxiliar na criação de botões, esta função aceita 
											<strong>5 argumentos</strong>, porém nenhum deles é obrigatório, caso não seja informado nenhum, automáticamente irá assumir os valores padrões.',
											'wp-admin-style-ui'
										);
										?>
										</p>
								
										<p>
										<?php
										_e(
											'Os botões da etapa acima, foi criado da seguinte forma.',
											'wp-admin-style-ui'
										);
										?>
										</p>
										
										<p>
										<?php _e('Exemplo 1: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 1', 'wp-admin-style-ui');?>', 'small primary' );
										?&gt;
										</code>
										</p>

										<p>
										<?php _e('Exemplo 1.2: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 1.2', 'wp-admin-style-ui');?>' );
										?&gt;
										</code>
										</p>

										<p>
										<?php _e('Exemplo 1.3: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 1.3', 'wp-admin-style-ui');?>', 'large primary' );
										?&gt;
										</code>
										</p>

										<p>
										<?php _e('Exemplo 2: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 2', 'wp-admin-style-ui');?>', 'small secondary' );
										?&gt;
										</code>
										</p>

										<p>
										<?php _e('Exemplo 2.2: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 2.2', 'wp-admin-style-ui');?>', 'secondary' );
										?&gt;
										</code>
										</p>

										<p>
										<?php _e('Exemplo 2.3: ', 'wp-admin-style-ui');?>
										<code>
										&lt;?php 
										submit_button( '<?php _e('Exemplo 2.3', 'wp-admin-style-ui');?>', 'large secondary' );
										?&gt;
										</code>
										</p>

										<p>
										<?php
										_e(
											'Os principais argumentos que nos interessa neste momento é apenas o <strong>primeiro</strong> e <strong>segundo</strong>. 
											Porque são eles que exibirão o <i>texto</i> e <i>tipo</i> de botão que queremos.',
											'wp-admin-style-ui'
										);
										?>	
										</p>
									</div><!-- .menu-item-settings-->
								</li>
								
								<!-- 2.2 - Argumentos da Função. -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('2.2 - Argumentos da Função.', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p>
										<?php
										_e(
											'Vamos entender melhor sobre os <strong>dois</strong> argumentos que nos interessa.',
											'wp-admin-style-ui'
										);
										?>	
										</p>

										<p>
										<u><?php _e('Primeiro argumento: ', 'wp-admin-style-ui');?></u>
										<code>$text</code> -
										<?php
										_e(
											'Este argumento é quem vai dizer qual vai ser o texto do nosso botão.',
											'wp-admin-style-ui'
										);
										?>
										</p>

										<p>
										<u><?php _e('Segundo argumento: ', 'wp-admin-style-ui');?></u>
										<code>$type</code> -
										<?php
										_e(
											'Este aqui é quem diz, qual tipo de botão queremos. que na verdade este argumento é uma ou mais classes HTML, sendo separadas por um espaço ou pode ser também uma matriz.',
											'wp-admin-style-ui'
										);
										?>
										</p>

										<p>
										<?php
										_e(
											'Os valores aceito e que fazem efeito de css para o WordPress são: <code>primary</code>, <code>secondary</code>, <code>large</code>, <code>small</code>. Mas você pode ficar a vontade para adicionar alguma classe personalizada.',
											'wp-admin-style-ui'
										);
										?>
										</p>

									</div><!-- .menu-item-settings-->
								</li>		
								
								<!-- 2.3 - Finalizando -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('2.3 - Finalizando.', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										
										<p>
										<?php
										_e(
											'Agora que você já sabe como criar um botão utilizando a função de ajuda do WordPress, vamos passar para proxima etapa, mas antes eu vou te deixar uma dica.',
											'wp-admin-style-ui'
										);
										?>	
										</p>

										<p>
										<?php
										_e(
											'Você pode entender melhor como funciona a função citada acima, acessando a documentação oficial do WordPress. Clique no link abaixo.',
											'wp-admin-style-ui'
										);
										?>	
										</p>

										<p>
											<a href="https://codex.wordpress.org/Function_Reference/submit_button" target="_blank">https://codex.wordpress.org/Function_Reference/submit_button</a>
										</p>

									</div><!-- .menu-item-settings-->
								</li>		

								<!-- 3 - Botões diretamente no HTML -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('3 - Botões diretamente no HTML.', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										
										<p>
										<?php
										_e(
											'Essa é uma dica simples, você já aprendeu a criar o botão com a função do Wordpress, agora você pode criar um botão aplicando as classes estudadas na tag html do elemento que você quer.',
											'wp-admin-style-ui'
										);
										?>	
										</p>

										<p>
										<?php
										_e(
											'Vou te mostrar como eu costumo trabalhar quando eu não utilizo a ajuda do WordPress, segue abaixo um trecho do código.',
											'wp-admin-style-ui'
										);
										?>	
										</p>

										<p><code>&lt;a href="#" class="button button-small button-primary"&gt;<?php _e('Exemplo 1', 'wp-admin-style-ui');?>&lt;/a&gt;</code></p>
										<p><code>&lt;a href="#" class="button button-primary"&gt;<?php _e('Exemplo 1.2', 'wp-admin-style-ui');?>&lt;/a&gt;</code></p>
										<p><code>&lt;a href="#" class="button button-large button-primary"&gt;<?php _e('Exemplo 1.3', 'wp-admin-style-ui');?>&lt;/a&gt;</code></p>

									</div><!-- .menu-item-settings-->
								</li>

							 </ul>
							<!-- END ACCORDIONS -->

	                	</div>
	                </div> <!-- Donate Box -->
				</div>
			</div>

			<div class="postbox-container">
				
				<div class="meta-box-sortables">
					<div class="postbox" id="bugs-notice">
	                	<h2 class="hndle" style="cursor:auto;"><span><?php _e( 'Acesso rápido', 'wp-admin-style-ui' ); ?></span></h2>	
	                	<div class="inside">
							
							<p style="text-decoration: underline;">
								<?php _e( 'Clique no botão desejado para copiar o código.' ); ?>
							</p>
							
							<h2 style="font-weight:bold;"><?php _e( 'Botões com WordPress', 'wp-admin-style-ui' );?></h2 style="font-weight:bold;">

							<p>
								<button class="button button-primary copyClipboard" data-clipboard-target="#default-button-code"><?php _e('Botão padrão', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="default-button-code">submit_button( '<?php _e('Botão padrão', 'wp-admin-style-ui');?>' );</code>
							</p>

							<p>
								<button class="button button-secondary copyClipboard" data-clipboard-target="#secondary-button-code"><?php _e('Botão secundário', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="secondary-button-code">submit_button( '<?php _e('Botão secundário', 'wp-admin-style-ui');?>', 'secondary' );</code>
							</p>

							<p>
								<button class="button button-primary button-small copyClipboard" data-clipboard-target="#small-default-button-code"><?php _e('Botão padrão pequeno', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="small-default-button-code">submit_button( '<?php _e('Botão padrão pequeno', 'wp-admin-style-ui');?>', 'small primary' );</code>
							</p>

							<p>
								<button class="button button-secondary button-small copyClipboard" data-clipboard-target="#small-secondary-button-code"><?php _e('Botão secundário pequeno', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="small-secondary-button-code">submit_button( '<?php _e('Botão secundário pequeno', 'wp-admin-style-ui');?>', 'small secondary' );</code>
							</p>

							<p>
								<button class="button button-primary button-large copyClipboard" data-clipboard-target="#large-default-button-code"><?php _e('Botão padrão grande', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="large-default-button-code">submit_button( '<?php _e('Botão padrão grande', 'wp-admin-style-ui');?>', 'large primary' );</code>
							</p>

							<p>
								<button class="button button-secondary button-large copyClipboard" data-clipboard-target="#large-secondary-button-code"><?php _e('Botão secundário grande', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="large-secondary-button-code">submit_button( '<?php _e('Botão secundário grande', 'wp-admin-style-ui');?>', 'large secondary' );</code>
							</p>

							<h2 style="font-weight:bold;"><?php _e( 'Botões com classes HTML', 'wp-admin-style-ui' );?></h2 style="font-weight:bold;">
							
							<p>
								<button class="button button-primary copyClipboard" data-clipboard-target="#default-button-code-html"><?php _e('Botão padrão', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="default-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-primary">%s</button>', __('Botão padrão', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

							<p>
								<button class="button button-secondary copyClipboard" data-clipboard-target="#secondary-button-code-html"><?php _e('Botão secundário', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="secondary-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-secondary">%s</button>', __('Botão secundário', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

							<p>
								<button class="button button-primary button-small copyClipboard" data-clipboard-target="#small-default-button-code-html"><?php _e('Botão padrão pequeno', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="small-default-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-primary button-small">%s</button>', __('Botão padrão pequeno', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

							<p>
								<button class="button button-secondary button-small copyClipboard" data-clipboard-target="#small-secondary-button-code-html"><?php _e('Botão secundário pequeno', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="small-secondary-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-secondary button-small">%s</button>', __('Botão secundário pequeno', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

							<p>
								<button class="button button-primary button-large copyClipboard" data-clipboard-target="#large-default-button-code-html"><?php _e('Botão padrão grande', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="large-default-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-primary button-large">%s</button>', __('Botão padrão grande', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

							<p>
								<button class="button button-secondary button-large copyClipboard" data-clipboard-target="#large-secondary-button-code-html"><?php _e('Botão secundário grande', 'wp-admin-style-ui');?></button>
								<br class="clear" />
								<code id="large-secondary-button-code-html">
									<?php echo esc_html( sprintf( '<button class="button button-secondary button-large">%s</button>', __('Botão secundário grande', 'wp-admin-style-ui') ) ); ?>
								</code>
							</p>

	                	</div>
	                </div> <!-- Donate Box -->
				</div>

			</div>

		</div>
	</div>

</div>