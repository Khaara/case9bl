<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Storage
 *
 * @property $id
 * @property $ammount
 * @property $item_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Item $item
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Storage extends Model
{
    
    static $rules = [
		'ammount' => 'required',
		'item_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ammount','item_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function item()
    {
        return $this->hasOne('App\Models\Item', 'id', 'item_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'item_id', 'item_id');
    }
    

}
