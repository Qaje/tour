<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Patrimonialsite extends Model
{
    protected $table = 'patrimonial_sites';


      protected $fillable = [
        'id',
        'codemat',
        'code_photo',
        'name_title',
        'category',
        'scope',
        'subscope',
        'description_patrimonial',
        'patrimonial_photo',
        'description_photo',
        'date_take_photo',
        'photographer',
        'dating',
        'department',
        'province',
        'municipality',
        'direction',
        'long',
        'lat',
        'alt',
        'zone',
        'conservation',
        'natural_geologico',
        'natural_hidrico',
        'natural_eolico',
        'natural_natural_otros',
        'deteriorate_urbano',
        'deteriorate_agricola',
        'deteriorate_saq_van',
        'deteriorate_inf_civ',
        'deteriorate_turismo',
        'deteriorate_antropico_otros',
        'property_pub_com',
        'property_religious',
        'property_collective',
        'property_individual',
        'public_state',
        'joint_responsability',
        'custody_name',
        'turistic',
        'educational_unit',
        'none',
        'housing',
        'religous',
        'commerce',
        'museum',
        'other',
        'turistic_type',
        'turistic_sub_type',
        'api',
        'aepi',
        'hierarchy',
        'capacity',
        'objetics_factor',
        'touristic_perception',
        'ctr_turnamer',
        'ctr_turnamerfoto',
        'ctr_turnbmeb',
        'ctr_turnbmebfoto',
        'ctr_turncmeb',
        'ctr_turncmebfoto',
        'recognized',
        'observation',
        'source',
        'degree_of_reliability',
        'research_entity'
         
      ]; 
      protected $casts = [
          'history_in_charge' => 'array',
          'owner' => 'array',
          'law' => 'array',
          'historychange' => 'array',
      ];
      // protected $casts1 = [
      //     'owner' => 'array',
      // ];
      // protected $casts2 = [
      //     'law' => 'array',
      // ];
      // protected $casts3 = [
      //     'historychange' => 'array',
      // ];



      //public function users()
      public function cities()
    {
      //return $this->belongsToMany('App\User')->withTimestamps();
      return $this->belongsToMany('App\Cities')->withTimestamps();
      //return $this->belongsToMany('App\Cities','role_user','user_id','role_id')->withTimestamps();
    }

          public function provinces()
    {
      //return $this->belongsToMany('App\User')->withTimestamps();
      return $this->belongsToMany('App\Provinces')->withTimestamps();
      //return $this->belongsToMany('App\Cities','role_user','user_id','role_id')->withTimestamps();
    }
              public function municipalities()
    {
      //return $this->belongsToMany('App\User')->withTimestamps();
      return $this->belongsToMany('App\Municipalities')->withTimestamps();
      //return $this->belongsToMany('App\Cities','role_user','user_id','role_id')->withTimestamps();
    }

          public function category()
    {
      //return $this->belongsToMany('App\User')->withTimestamps();
      return $this->belongsToMany('App\Categories')->withTimestamps();
      //return $this->belongsToMany('App\Cities','role_user','user_id','role_id')->withTimestamps();
    }

    public function decity()
    {
      return $this->hasOne('App\Cities','id','name');
    }
    
    public function scopeBusqueda($query,$city,$dato="")
    {
      if($city==0){
        $resultado = $query->where('category','like','%'.$dato.'%')
                           ->orWhere('department','like','%'.$dato.'%')
                           ->orWhere('province','like','%'.$dato.'%');
      }
      else
      {
        $resultado = $query->where("city","=",$city)
                            ->where(function($q) use ($city,$dato){
                              $q->where('category','like','%'.$dato.'%')
                           ->orWhere('department','like','%'.$dato.'%')
                           ->orWhere('province','like','%'.$dato.'%');
                          }); 
      }
      return $resultado;
    }
}
 