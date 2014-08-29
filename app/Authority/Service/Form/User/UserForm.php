<?php namespace Authority\Service\Form\User;

use Authority\Service\Validation\ValidableInterface;
use Authority\Repo\User\UserInterface;
use User;

class UserForm {

	/**
	 * Form Data
	 *
	 * @var array
	 */
	protected $data;

	/**
	 * Validator
	 *
	 * @var \Cesario\Service\Form\ValidableInterface 
	 */
	protected $validator;

	/**
	 * Session Repository
	 *
	 * @var \Cesario\Repo\Session\SessionInterface 
	 */
	protected $user;

	public function __construct(ValidableInterface $validator, UserInterface $user)
	{
		$this->validator = $validator;
		$this->user = $user;

	}

    /**
     * Create a new user
     *
     * @param array $input
     * @param User $userModel
     * @return integer
     */
    public function update(array $input , User $userModel)
    {
        if( ! $this->valid($input) )
        {
            return false;
        }

        return $this->user->update($input, $userModel);
    }

	/**
	 * Return any validation errors
	 *
	 * @return array 
	 */
	public function errors()
	{
		return $this->validator->errors();
	}

	/**
	 * Test if form validator passes
	 *
	 * @return boolean 
	 */
	protected function valid(array $input)
	{

		return $this->validator->with($input)->passes();
		
	}


}