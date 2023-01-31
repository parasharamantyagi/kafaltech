<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumerData extends Model
{
    protected $table = 'consumer_data';

    protected $fillable = [
        'consumer_code',
        'demand_no',
        'consumer_name',
        'father_name',
        'cons_ccode',
        'address_one',
        'address_two',
        'address_three',
        'contact_no',
        'geo_lat',
        'geo_long',
        'consumer_photo',
        'site_picone',
        'site_pictwo',
        'conn_circle',
        'cons_lane',
        'connection_type',
        'connection_loc',
        'wb_type',
        'no_taps',
        'ann_asmt',
        'sb_type',
        'no_ss',
        'head_type',
        'meter_size',
        'isactive',
        'activitylog',
    ];
}