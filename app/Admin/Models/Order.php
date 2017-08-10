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
 * Class Order
 *
 * @property \App\Order $model
 */

class Order extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Заявки';
	protected $icon = 'fa fa-address-card-o';

	public function initialize()
	{
		$this->addToNavigation(600, function () {
			$count = \App\Order::where('active', '=', false)->count();
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
				AdminColumn::link('name', 'ФИО'),
				AdminColumn::text('from', 'Дата прибытия'),
				AdminColumn::text('to', 'Дата отъезда'),
				AdminColumnEditable::checkbox('active', 'Рассмотрена', 'Нет')
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
			AdminFormElement::checkbox('active', 'Рассмотрена'),
			AdminFormElement::view('admin.statement'),
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