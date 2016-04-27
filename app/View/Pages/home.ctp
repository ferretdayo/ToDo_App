<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>jQuery Mobile</title>
	<?php
		echo $this->Html->css('jquery.mobile-1.4.5.min.css');
		echo $this->Html->script('jquery-2.2.3.min.js');
		echo $this->Html->script('jquery.mobile-1.4.5.min.js');
	?>
	</head>
<body>
	<div data-role="page" data-title="jQuery Mobile TEST">
		<!-- header -->
		<div data-role="header" data-theme="b">
		<?php
			echo $this->Html->link('MyPage','/pages/mypage', array('class' => 'ui-btn ui-btn-a ui-btn-left'));
		?>
			<h1>ToDoアプリ</h1>
		<?php
			echo $this->Html->link('About','/HelpPage/help', array('class' => 'ui-btn ui-btn-a ui-btn-right'));
		?>
		</div>

		<!-- Contents -->
		<div role="main" class="ui-content">
			<h1>TO DOアプリ</h1>

			<!-- TODOの入力フォーム  -->
			<form>
				<!-- TODOの入力 -->
				<div class="ui-field-contain">
					<label for="entry_comment">コメント：</label>
					<input id="entry_comment" name="entry_comment" type="text" />
				</div>
				<fieldset class="ui-grid-a">
					<div class="ui-block-a">
						<input type="button" value="TODO登録" />
					</div>
					<div class="ui-block-b">
						<input type="reset" value="入力クリア" />
					</div>
				</fieldset>
			</form>

			<!-- TODOの表示 -->
			<div>

			</div>

		</div>

		<!-- footer
				data-position="fixed" : 下に固定
				data-fullscreen="true"　:　動かしているときはFooterが消える
				data-id="common_navi"　：　永続ツールバー(遷移中も表示される)
			-->
		<div data-role="footer" data-position="fixed" data-fullscreen="true"
			class="ui-bar" data-id="common_navi">
			<?php
				echo $this->Html->link('Home','/pages/home', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Mypage','/pages/mypage', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Help','/pages/help', array('class' => 'ui-btn ui-btn-a'));
			?>
		</div>
	</div>
</body>
</html>