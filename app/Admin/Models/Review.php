<?php

namespace App\Admin\Models;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Review
 *
 * @property \App\Review $model
 */

class Review extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Отзывы';
	protected $icon = 'fa fa-file-text-o';

	public function initialize()
	{
		$this->addToNavigation(500, function () {
			$count = \App\Review::where('active', '=', false)->count();
			return ($count > 0 ? $count : 'нет');
		});
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::datatables()
			->setColumns([
				AdminColumn::link('author', 'Автор')
					->setWidth('150px'),
				AdminColumn::text('content', 'Отзыв'),
				AdminColumnEditable::checkbox('active', 'Одобрен', 'Нет')
					->setHtmlAttribute('class', 'text-center')
					->setWidth('150px'),
				AdminColumn::datetime('created_at', 'Дата поступления')
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
			AdminFormElement::checkbox('active', 'Одобрен'),
			AdminFormElement::text('author', 'Автор')
				->required(),
			AdminFormElement::textarea('content', 'Отзыв')
				->required(),
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