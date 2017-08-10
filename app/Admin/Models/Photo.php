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
 * Class Photo
 *
 * @property \App\Photo $model
 */

class Photo extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Фотографии';
	protected $icon = 'fa fa-picture-o';

	public function initialize()
	{
		$this->addToNavigation(300);
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::datatables()
			->setColumns([
				AdminColumn::link('title', 'Заголовок'),
				AdminColumn::image('src', 'Фотография'),
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
			AdminFormElement::text('title', 'Заголовок')
				->required(),
			AdminFormElement::image('src', 'Фотография')
				->required(),
			AdminFormElement::text('desc', 'Описание'),
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
