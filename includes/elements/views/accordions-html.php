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
										<p><?php
										_e(
											'É muito fácil trabalhar com accordions no WordPress, tudo que iremos precisar é de algumas linhas de códigos html e javascript e um pouquinho de <strong>PHP</strong>.',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'Uma lista <i>accordion</i> do WordPress é como esta que você está vendo, onde todos os conteúdos são ocultos, e clicando em algum item da lista, irá aparecer com os elementos que você desejar.',
											'wp-admin-style-ui'
										);
										?></p>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 2 - Primeiro passo -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('2 - Primeiro Passo', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p><?php
										_e(
											'Tudo que iremos precisar é criar uma estrutura HTML básica para que o WordPress entenda que o que estamos tentando fazer é uma lista em accordion.',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'Tudo que você precisa fazer, é instanciar uma classe em um elemento com o nome de <code>.accordion-container</code>. Geralmente usa-se o elemento de lista, então o elemento deverá ficar parecido com isto: <code>&lt;ul class="accordion-container"&gt;&lt;/ul&gt;</code>.',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'É dentro desse elemento que deverá ficar toda sua estrutura de lista.',
											'wp-admin-style-ui'
										);
										?></p>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 3 - Seguindo em Frente -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('3 - Seguindo em Frente', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p><?php
										_e(
											'Agora que já iniciamos, podemos continuar a montar a nossa estrutura. Tudo que você vai precisar fazer, é apenas aplicar algumas classe aos items de sua lista. Vamos lá.',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'O items de sua lista, precisarão ter duas classes, são elas: <code>.menu-item</code> e <code>.accordion-section</code>. Então os items de sua lista deverão ficar assim:<br /><code>&lt;li class=&quot;menu-item accordion-section&quot;&gt;&lt;/li&gt;</code>',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'É dentro desse item que você vai definir um conteúdo e um cabeçalho para o item de seu accordion, então siga para o próximo passo.',
											'wp-admin-style-ui'
										);
										?></p>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 4 - Cabeçalho -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('4 - Cabeçalho do Item', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p><?php
										_e(
											'A estrutura do cabeçalho pode parecer um pouco complexa mais é super simples. Então não se assuste com tantos elementos.',
											'wp-admin-style-ui'
										);
										?></p>

										<code>
											&lt;div class=&quot;menu-item-bar&quot;&gt;
											<br />
											&nbsp;&nbsp;&lt;div class=&quot;menu-item-handle accordion-section-title&quot;&gt;
											<br />
											&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;item-title&quot;&gt;
											<br />
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;menu-item-title&quot;&gt;<?php echo __( '{{ Titulo Aqui }}', 'wp-admin-style-ui' ); ?>&lt;/span&gt;
											<br />
											&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;
											<br />
											&nbsp;&nbsp;&lt;/div&gt;
											<br />&lt;/div&gt;
										</code>

										<p><?php
										_e(
											'Apesar de parecer complexo, é super simples, não? Agora vamos passar para parte do conteúdo.',
											'wp-admin-style-ui'
										);
										?></p>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 5 - O conteúdo -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('5 - O Conteúdo', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p><?php
										_e(
											'Para aplicar o conteúdo, é ainda mais simples. Veja no código seguinte:',
											'wp-admin-style-ui'
										);
										?></p>

										<code>
											&lt;div class=&quot;menu-item-settings accordion-section-content&quot;&gt;&lt;/div&gt;
										</code>

										<p><?php
										_e(
											'Dentro desse elemento você colocar todo conteúdo que ficará escondito até o usuário clicar no titulo do elemento.',
											'wp-admin-style-ui'
										);
										?></p>
									</div><!-- .menu-item-settings-->
								</li>

								<!-- 6 - Finalizando -->
								<li class="menu-item accordion-section" style="border-bottom:0;">
									<div class="menu-item-bar">
										<div class="menu-item-handle accordion-section-title" style="cursor:pointer;width:auto;">
											<span class="item-title">
												<span class="menu-item-title"><?php _e('6 - Finalizando', 'wp-admin-style-ui');?></span>
											</span>
										</div>
									</div>

									<div class="menu-item-settings accordion-section-content" style="display:none;cursor:auto;width:auto;">
										<p><?php
										_e(
											'Se tudo que você fez anteriormente, não funcionar, é por que ainda falta alguma coisa, e eu vou te dar uma dica importante.',
											'wp-admin-style-ui'
										);
										?></p>

										<p><?php
										_e(
											'Na maioria das vezes, você precisar enfileirar o arquivo que faz toda a função do <i>accordion</i> para isso, utiliza-se o <strong>PHP</strong>. Para isso utilizando a linha abaixo.',
											'wp-admin-style-ui'
										);
										?></p>

										<code>
											&lt;?php wp_enqueue_script('accordion'); ?&gt;
										</code>

										<p><?php
										_e(
											'De modo mais básico, essa linha deve ser colocada no seu arquivo <code>functions.php</code> se você estiver desenvolvendo um tema, ou no seu arquivo de plugin se o caso for o desenvolvimento de plugin. Consulte a documentação abaixo:',
											'wp-admin-style-ui'
										);
										?></p>

										<p><a href="https://developer.wordpress.org/reference/functions/wp_enqueue_script/" taget="_blank">https://developer.wordpress.org/reference/functions/wp_enqueue_script/</a></p>

										<p><?php
										_e(
											'Se você estiver com muita pressa, copie o código do lado direito da tela, e cole onde você achar necessário.',
											'wp-admin-style-ui'
										);
										?></p>
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
	                		
							<div ace-editor="true" ace-readonly="true" ace-mode="html" id="example-code" class="make-ace-editor"><?php echo $example;?></div>

							<button class="button button-primary copyClipboard" data-clipboard-target="#example-code>textarea" style="margin-top:5px"><?php echo __('Copiar código', 'wp-admin-style-ui');?></button>

	                	</div>
	                </div> <!-- Donate Box -->
				</div>

			</div>

		</div>
	</div>

</div>