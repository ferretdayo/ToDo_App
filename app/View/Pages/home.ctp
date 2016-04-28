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
			<?php echo $this->Form->create(); ?>
				<!-- TODOの入力 -->
				<div class="ui-field-contain">
					<?php echo $this->Form->input('todo'); ?>
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
			<!--</form>-->
			<?php echo $this->Form->end(); ?>
			<!-- TODOの表示 -->
			<div>
				<table id="tbl" data-role="table" data-mode="reflow" class="ui-responsive">
					<thead>
						<tr>
							<th>id</th>
							<th>TODO</th>
							<th>作成日時</th>
							<th>削除日時</th>
							<th>Done</th>
							<th>Delete</th>
						</tr>
				<?php
                    if(isset($todolist)){
						for($i=0;$i < count($todolist);$i++){
							echo "<tr>";
							echo "<td>".$todolist[$i]["TodoList"]["id"]."</td>";
							echo "<td>".$todolist[$i]["TodoList"]["todo"]."</td>";
							echo "<td>".$todolist[$i]["TodoList"]["create_at"]."</td>";
							echo "<td>".$todolist[$i]["TodoList"]["delete_at"]."</td>";
							echo "</tr>";
						}
					}
				?>
				</table>
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