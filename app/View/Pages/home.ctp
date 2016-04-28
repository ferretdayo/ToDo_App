<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>jQuery Mobile</title>
	<?php
        //./webroot/cssの中のフォルダ
		echo $this->Html->css('jquery.mobile-1.4.5.min.css');
        //./webroot/jsの中のフォルダ
		echo $this->Html->script('jquery-2.2.3.min.js');
		echo $this->Html->script('jquery.mobile-1.4.5.min.js');
	?>
	</head>
<body>
	<div data-role="page" data-title="jQuery Mobile TEST">
		<!-- header -->
		<div data-role="header" data-theme="b">
		<?php
            /*
                <a href="/mypage" class="ui-btn ui-btn-a ui-btn-left">MyPage</a>
                と表示される
            */
			echo $this->Html->link('MyPage','/mypage', array('class' => 'ui-btn ui-btn-a ui-btn-left'));
		?>
			<h1>ToDoアプリ</h1>
		<?php
			echo $this->Html->link('About','/help', array('class' => 'ui-btn ui-btn-a ui-btn-right'));
		?>
		</div>

		<!-- Contents -->
		<div role="main" class="ui-content">
			<h1>TO DOアプリ</h1>

			<!-- TODOの入力フォーム  -->
			<form method="post" action="./">
				<!-- TODOの入力 -->
				<div class="ui-field-contain">
					<label for="entry_comment">コメント：</label>
					<input id="entry_comment" name="entry_comment" type="text" />
				</div>
				<!-- gridで横にボタン並べる -->
				<fieldset class="ui-grid-a">
					<div class="ui-block-a">
						<input type="submit" value="TODO登録" />
					</div>
					<div class="ui-block-b">
						<input type="reset" value="入力クリア" />
					</div>
				</fieldset>
			</form>

			<!-- TODOの表示 -->
			<div>
                <?php
                    if(isset($todo))
                        echo $todo;
                ?>
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
				echo $this->Html->link('Home','/', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Mypage','/mypage', array('class' => 'ui-btn ui-btn-a'));
				echo $this->Html->link('Help','/help', array('class' => 'ui-btn ui-btn-a'));
			?>
		</div>
	</div>
</body>
</html>