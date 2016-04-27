<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>jQuery Mobile</title>

		<?php
			echo $this->Html->script('jquery-2.2.3.min.js');
		?>
		<script>
			$(document).on('mobileinit', function() {
			  $.mobile.toolbar.prototype.options.addBackBtn = true;
			  $.mobile.toolbar.prototype.options.backBtnText = '戻る';
			  $.mobile.toolbar.prototype.options.backBtnTheme = 'a';
			});
		</script>
		<?php
			echo $this->Html->css('jquery.mobile-1.4.5.min.css');
			echo $this->Html->script('jquery.mobile-1.4.5.min.js');
		?>
	</head>
	<body>
		<div data-role="page" data-title="jQuery Mobile TEST">
			<!-- header -->
			<div data-role="header" data-theme="b" data-add-back-btn="true">
				<h1>マイページ</h1>
			</div>

			<!-- Contents -->
			<div role="main" class="ui-content">
				MyPage
			</div>

			<!-- footer
				data-position="fixed" : 下に固定
				data-fullscreen="true"　:　動かしているときはFooterが消える
				data-id="common_navi"　：　永続ツールバー(遷移中も表示される)
			-->
			<div data-role="footer" data-position="fixed" data-fullscreen="true" class="ui-bar" data-id="common_navi">
			<?php
				echo $this->Html->link('Home','/pages/home', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Mypage','/pages/mypage', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Help','/pages/help', array('class' => 'ui-btn ui-btn-a'));
			?>
			</div>
		</div>
	</body>
</html>