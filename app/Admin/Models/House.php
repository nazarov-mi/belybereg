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
 * Class House
 *
 * @property \App\House $model
 */

class House extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Домики';
	protected $icon = 'fa fa-home';

	public function initialize()
	{
		$this->addToNavigation(400);
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::datatables()
			->setColumns([
				AdminColumn::link('title', 'Название')
					->setWidth('150px'),
				AdminColumn::custom('Цена', function (\App\House $model) {
					return $model->price . ' руб.';
				})->setWidth('150px'),
				AdminColumn::text('persons_num', 'Количество мест')
					->setWidth('170px'),
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
			AdminFormElement::text('title', 'Название')
				->required(),
			AdminFormElement::number('price', 'Цена')
				->required()
				->setMin(0),
			AdminFormElement::number('persons_num', 'Количество мест')
				->required()
				->setMin(1),
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