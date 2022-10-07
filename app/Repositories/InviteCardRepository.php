<?php

namespace App\Repositories;

use App;
use App\Models\InviteCard;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class InviteCardRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id', 'card_name', 'guest_list', 'address', 'city', 'province', 'country', 'image', 'font_file', 'font_size', 'font_color', 'pos_x', 'pos_y', 'angle','status'
    ];

    /**
     * Return searchable fields.
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return InviteCard::class;
    }

    /**
     * @param  array  $input
     *
     * @return User
     */
    public function store($input)
    {
        try {
            /** @var InviteCard $InviteCard */
            $user = InviteCard::create($input);
            return $user;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @param  array  $input
     * @param  int  $id
     *
     * @return User
     */
    public function update($input, $id)
    {
        /** @var InviteCard $InviteCard */
        $InviteCard = InviteCard::findOrFail($id);
        try {
            $InviteCard->update($input);

            return $InviteCard;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
