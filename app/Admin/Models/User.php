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
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 *
 * @property \App\User $model
 */

class User extends Section implements Initializable
{
	protected $checkAccess = false;
	protected $title = 'Пользователи';
	protected $icon = 'fa fa-user-o';

	public function initialize()
	{
		$this->addToNavigation(700);
	}

	/**
	 * @return DisplayInterface
	 */
	public function onDisplay()
	{
		return AdminDisplay::datatables()
			->setColumns([
				AdminColumn::link('username', 'Логин'),
				AdminColumn::datetime('created_at', 'Дата создания')
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
			AdminFormElement::text('username', 'Логин')
				->required(),
			AdminFormElement::password('password', 'Новый пароль')
				->allowEmptyValue()
				->mutateValue(function ($value) {
					return Hash::make($value);
				}),
		]);
	}

	/**
	 * @return FormInterface
	 */
	public function onCreate()
	{
		return AdminForm::panel()->addBody([
			AdminFormElement::text('username', 'Логин')
				->required(),
			AdminFormElement::password('password', 'Пароль')
				->required()
				->mutateValue(function ($value) {
					return Hash::make($value);
				}),
		]);
	}
}
