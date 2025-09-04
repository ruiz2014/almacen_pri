<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attention
 *
 * @property $id
 * @property $local_id
 * @property $customer_id
 * @property $sunat_code
 * @property $document_code
 * @property $reference _document
 * @property $currency
 * @property $type_payment
 * @property $total
 * @property $seller
 * @property $serie
 * @property $identifier
 * @property $numeration
 * @property $hash
 * @property $resume
 * @property $cdr
 * @property $success
 * @property $message
 * @property $low_motive
 * @property $low
 * @property $guide
 * @property $completed
 * @property $dispatched
 * @property $received
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Attention extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['local_id', 'customer_id', 'sunat_code', 'document_code', 'reference _document', 'currency', 'type_payment', 'total', 'seller', 'serie', 'identifier', 'numeration', 'hash', 'resume', 'cdr', 'success', 'message', 'low_motive', 'low', 'guide', 'completed', 'dispatched', 'received', 'status'];


}
