<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class UserCriteria.
 *
 * @package namespace App\Criteria;
 */
class UserCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if($userId = request()->input('user')) {
            $model = $model->where('id',$userId);
        }
        if($email = request()->input('email')) {
            $model = $model->where('email',$email);
        }

        if($username = request()->input('username')) {
            $model = $model->where('username',$username);
        }
        return $model;
    }
}
