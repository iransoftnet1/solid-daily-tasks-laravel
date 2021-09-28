<?php

namespace TaskApp;

use Imanghafoori\Helpers\Nullable;
use Imanghafoori\Middlewarize\Middlewarable;

class TaskStore
{
    use Middlewarable;

    public static function store($data, $userId): Nullable
    {
         try {
            $task = Task::query()->create($data + ['user_id' => $userId]);
        } catch (\Exception $e) {
            return nullable();
        }

        if (! $task->exists) {
            return nullable();
        }

        return nullable($task);
    }

    public static function countTask($userId)
    {
        return Task::query()->where('user_id', $userId)->count();
    }

    public static function destroy($task)
    {
        $task->delete();
    }
}
