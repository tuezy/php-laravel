<?php

namespace Tuezy\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BaseModel extends Model
{
    use HasFactory, Notifiable;
}
