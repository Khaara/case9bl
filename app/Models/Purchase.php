<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 *
 * @property $id
 * @property $ammount
 * @property $storages_id
 * @property $item_id
 * @property $manager_id
 * @property $clients_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Item $item
 * @property Storage $storage
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Purchase extends Model
{
    
    static $rules = [
		'ammount' => 'required',
		'storages_id' => 'required',
		'item_id' => 'required',
		'manager_id' => 'required',
		'clients_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ammount','storages_id','item_id','manager_id','clients_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'clients_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function item()
    {
        return $this->hasOne('App\Models\Item', 'id', 'item_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function storage()
    {
        return $this->hasOne('App\Models\Storage', 'id', 'storages_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'manager_id');
    }
    

}
