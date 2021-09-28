<?php

namespace TaskApp;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Imanghafoori\Tags\Traits\hasTempTags;

class Task extends Model
{
    use hasTempTags;

    protected $fillable = ['name', 'description', 'user_id'];

    public static function createTable()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('description', 500)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public static function dropTable()
    {
        Schema::dropIfExists('tasks');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
