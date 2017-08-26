<?php
//Добавление комментариев в базу данных
function submitDbComment($sql, $basa, $commentDate) {
			$prep = $basa->prepare($sql);
			$_POST['comment'] = $basa->quote($_POST['comment']); 
			$prep->bindValue(':article_id', $_POST['article_id'], PDO::PARAM_STR);
			$prep->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
			$prep->bindValue(':login', $_SESSION['login'], PDO::PARAM_INT);
			$prep->bindValue(':comment_date', $commentDate, PDO::PARAM_STR);
			$arr = $prep->execute(); 
			return $arr;
}