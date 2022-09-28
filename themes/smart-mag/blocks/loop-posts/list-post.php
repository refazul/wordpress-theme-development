<?php

namespace Bunyad\Blocks\LoopPosts;

/**
 * Overlay Loop Post Class
 */
class ListPost extends BasePost
{
	public $id = 'list';

	public function _pre_render()
	{
		// Vertically centered content.
		if ($this->props['content_vcenter']) {
			$this->props['class_wrap_add'] = join(' ', [
				$this->props['class_wrap_add'],
				'list-post-v-center'
			]);
		}

		// Grid style on small devices.
		if (!empty($this->props['grid_on_sm'])) {
			$this->props['class_wrap_add'] = join(' ', [
				$this->props['class_wrap_add'],
				'grid-on-sm'
			]);
		}

		parent::_pre_render();
	}
}