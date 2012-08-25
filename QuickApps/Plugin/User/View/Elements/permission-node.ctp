<?php
	$class = !$depth ? "class=\"app-{$data['title']}\"" : '';
	$return = "<span title=\"" . addslashes(__t($data['description'])) . "\" {$class}>" . __t($data['title']) . "</span>";

	if (!$hasChildren && $depth == 2) {
		$return .= " <a href=\"\" onclick=\"edit_aco({$data['id']}); return false;\">" . $this->Html->image('/user/img/key.png') . "</a>";
	} elseif (is_string($data['id']) && strpos($data['id'], '.') !== false && $data['parent_id']) {
		$return .= " <a href=\"\" onclick=\"edit_aco('{$data['id']}'); return false;\">" . $this->Html->image('/user/img/key.png') . "</a>";
	}

	echo $return;