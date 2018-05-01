<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'contas';
    protected $fillable = ['name', 'tipo', 'saldo', 'descricao', 'created_at', 'updated_at'];
	
	 public static function getExcerpt($str, $startPos = 0, $maxLength = 50) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength - 6);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= ' [...]';
        } else {
            $excerpt = $str;
        }

        return $excerpt;
    }

}
