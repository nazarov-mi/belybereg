<?php

namespace App\Admin\Models;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class News
 *
 * @property \App\News $model
 */

class News extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Новости';
	protected $icon = 'fa fa-newspaper-o';

	public function initialize()
	{
		$this->addToNavigation(100);
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::datatables()
			->setApply(function ($query) {
				$query->where('type', '=', 'news');
			})
			->setColumns([
				AdminColumn::link('title', 'Заголовок'),
				AdminColumn::text('desc', 'Краткое описание'),
				AdminColumn::datetime('created_at', 'Дата публикации')
					->setFormat('Y-m-d')
					->setWidth('200px'),
			])
			->paginate(20);
	}

	/**
	 * @param int $id
	 *
	 * @return FormInterface
	 */
	public function onEdit($id)
	{
		return AdminForm::panel()->addBody([
			AdminFormElement::image('picture', 'Превью'),
			AdminFormElement::text('title', 'Заголовок')
				->required(),
			AdminFormElement::text('desc', 'Краткое описание')
				->required(),
			AdminFormElement::ckeditor('content', 'Контент')
				->required(),
			AdminFormElement::hidden('type')
				->setDefaultValue('news'),
		]);
	}

	/**
	 * @return FormInterface
	 */
	public function onCreate()
	{
		return $this->onEdit(null);
	}
}
