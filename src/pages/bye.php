<?php $name = $request->get('name', 'World') ?>

Goodbye <?= htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>

