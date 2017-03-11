<?php
/**
 * NavbarTaskListDemoListener.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace DevLeaguesBundle\EventListener\Avanzu;


use Avanzu\AdminThemeBundle\Event\TaskListEvent;
use DevLeaguesBundle\Entity\Avanzu\Task;

class NavbarTaskListListener
{

    public function onListTasks(TaskListEvent $event)
    {

        foreach($this->getTasks() as $task) {
            $event->addTask($task);
        }

    }

    protected function getTasks()
    {
        return array(
//         new TaskModel('make stuff', 30, TaskModel::COLOR_GREEN),
        );

    }

}
