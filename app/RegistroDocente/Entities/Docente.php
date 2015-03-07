<?php
namespace RegistroDocente\Entities;
class Docente extends \Eloquent {
	protected $fillable = ['full_name','Amount','StartMonth','EndMonth','Number'];
}